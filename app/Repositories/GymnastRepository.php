<?php

namespace App\Repositories;

use App\Gym;
use App\User;
use App\Gymnast;
use App\Challenge;
use App\FeedEntry;
use Carbon\Carbon;
use App\ClassModel;
use App\CompletedChallenge;
use Illuminate\Support\Facades\DB;
use App\Interfaces\GymnastInterface;
use App\Subscription;

class GymnastRepository implements GymnastInterface
{
    protected $gym;

    public function __construct(Gym $gym, User $user)
    {
        $this->gym = $gym;
        $this->user = $user;
    }

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday]
     *
     * @return mixed
     */
    public function add(array $data, int $gymId)
    {
        $data['gyms_has_users_gym_id'] = $gymId;
        $data['gyms_has_users_user_id'] = auth()->user()->id;
        $user = User::find(auth()->user()->id);
        $forUpdate = [];
        $forUpdate['password'] = bcrypt($data['password']);
        $class = ClassModel::find($data['class_id']);
        try {
            DB::beginTransaction();
            $user->update($forUpdate);
            $gymnast = Gymnast::create($data);
            $class->gymnasts()->attach($gymnast->id);
            $path = public_path('media/img/profile.png');
            $imageProfile = Cloudinary()->upload($path,
                ['folder' => 'members/member_' . $gymnast->id, 'public_id' => 'profile', 'invalidate' => true]);
            $gymnast->update([
                'image_profile' => $imageProfile->getSecurePath(),
            ]);
            DB::commit();
            return $gymnast;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday, password]
     *
     * @return mixed
     */
    public function create(array $data, int $gymId)
    {   
        $plan = DB::table('plans')->where('id', 1)->first();
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            
        $subscription = Subscription::join('plans', 'subscriptions.plan_id', '=', 'plans.id')
            ->select('subscriptions.*', 'plans.product_id as plan_id')
            ->where('user_id', auth()->user()->id)
            ->where('plan_id', 1)->first();
        try {
            if ($subscription !== null && isset($data['customer_id'])) {
                $quantity = $subscription->quantity + 1;
                $new = $stripe->subscriptions->update(
                    $subscription->subscription_id,
                    ['quantity' => $quantity,
                    'proration_behavior' => 'none']
                );
                $stripe->customers->retrieve(
                    $data['customer_id']
                );
                $timezone = explode(') ', auth()->user()->timezone)[1];
                $start = new Carbon($new->current_period_start, $timezone);
                $end = new Carbon($new->current_period_end, $timezone);
                $subs = Subscription::where('user_id', auth()->user()->id)
                    ->where('plan_id', 1)
                    ->where('subscription_id', $new->id)
                    ->update([
                        'quantity' => $new->quantity,
                        'start_at' => $start->format('Y-m-d'),
                        'end_at' => $end->format('Y-m-d'),
                    ]);
            }
        } catch(\Stripe\Exception\CardException $e) {
            // Since it's a decline, \Stripe\Exception\CardException will be caught
            echo 'Status is:' . $e->getHttpStatus() . '\n';
            echo 'Type is:' . $e->getError()->type . '\n';
            echo 'Code is:' . $e->getError()->code . '\n';
            // param is '' in this case
            echo 'Param is:' . $e->getError()->param . '\n';
            echo 'Message is:' . $e->getError()->message . '\n';
        } catch (\Stripe\Exception\RateLimitException $e) {
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            abort($e->getMessage());
            return $e->getMessage();
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            abort(402 ,$e->getMessage());
            return $e->getMessage();
        } catch (\Stripe\Exception\AuthenticationException $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            return $e->getMessage();
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            // Network communication with Stripe failed
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            return $e->getMessage();
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            return $e->getMessage();
        } catch (\Exception $exc) {
            // Something else happened, completely unrelated to Stripe
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            return $exc->getMessage();
        }
        $data['gyms_has_users_gym_id'] = $gymId;
        $data['gyms_has_users_user_id'] = auth()->user()->id;
        $class = ClassModel::find($data['class_id']);
        try {
            DB::beginTransaction();
            $gymnast = Gymnast::create($data);
            $class->gymnasts()->attach($gymnast->id);
            $path = public_path('media/img/profile.png');
            $imageProfile = Cloudinary()->upload($path,
                ['folder' => 'members/member_' . $gymnast->id, 'public_id' => 'profile', 'invalidate' => true]);
            $gymnast->update([
                'image_profile' => $imageProfile->getSecurePath(),
            ]);
            DB::commit();
            return $gymnast;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }

    /**
     * This function update a Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, about, timezone]
     *
     * @param int $classId
     *
     * @return mixed
     */
    public function update(array $data, int $gymnastId)
    {
        try {
            DB::beginTransaction();
            if (isset($data['about'])) {
                $updateGymnastData = [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'about' => $data['about'],
                ];
            } else {
                $updateGymnastData = [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                ];
            }
            $gymnast = Gymnast::find($gymnastId);
            $gymnast->update($updateGymnastData);
            if (isset($data['timezone'])) {
                $user = User::find($gymnast->gyms_has_users_user_id);
                $user->update([
                    'timezone' => $data['timezone'],
                ]);
            }
            $gymnast->classes()->sync($data['class_id']);
            DB::commit();
            return true;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function list(int $memberId)
    {
        return Gymnast::where('id', $memberId)->with('classes')->get();
    }

    /**
     * This function update a Gymnast 'user' in database
     *
     * @param array $data An array [file]
     *
     * @param int $memberId
     *
     * @return mixed
     */
    public function profilePicture(string $data, int $memberId)
    {
        try {
            DB::beginTransaction();
            $gymnast = Gymnast::find($memberId);
            $imageProfile = Cloudinary()->upload($data, ['folder' => 'members/member_' . $gymnast->id, 'public_id' => 'profile']);
            $gymnast->update([
                'image_profile' => $imageProfile->getSecurePath(),
            ]);
            DB::commit();
            return $gymnast->image_profile;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }
    /*
     * This function returns all featured 'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function challenges(int $memberId)
    {
        $gymnast = Gymnast::find($memberId);
        $timezone = explode(') ', auth()->user()->timezone)[1];
        $completedChallenge = CompletedChallenge::join('challenges', 'completed_challenges.challenge_id', '=', 'challenges.id')
            ->select(DB::raw('count(*) as count'))
            ->where('gymnast_id', $memberId)
            ->where('challenges.is_featured', true)
            ->whereDate('date_of_completion', Carbon::now($timezone)->format('Y-m-d'))->get();
        /*if ($completedChallenge[0]->count >= 3) {
            return [];
        }*/
        $challenges = Gymnast::join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('challenges', 'classes.id', '=', 'challenges.class_id')
            ->select('challenges.*')
            ->where('gymnasts.id', $memberId)
            ->whereNull('challenges.deleted_at')
            ->where(function ($query) use ($gymnast, $memberId, $timezone){
                $query->where('challenges.gym_id', $gymnast->gyms_has_users_gym_id)
                      ->orWhereRaw('challenges.gym_id IS NULL
                      AND challenges.is_featured = true 
                      AND ( challenges.featured_date IS NOT NULL AND challenges.featured_date = ? )
                      AND (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id
                      AND completed_challenges.date_of_completion IS NOT NULL
                      AND completed_challenges.deleted_at IS NULL) = 0', [ Carbon::now($timezone)->format('Y-m-d'), $memberId]);
            })
            ->whereRaw('challenges.is_featured = true 
                AND ( challenges.featured_date IS NOT NULL AND challenges.featured_date = ? )
                AND (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                AND completed_challenges.challenge_id = challenges.id
                AND completed_challenges.date_of_completion IS NOT NULL
                AND completed_challenges.deleted_at IS NULL) = 0', [Carbon::now($timezone)->format('Y-m-d'), $memberId])
            ->get();
            $challengesWithoutClass = Challenge::where(function ($query) use ($gymnast, $memberId, $timezone){
                $query->WhereRaw('(challenges.class_id IS NULL
                    AND (gym_id = ? OR gym_id IS NULL )
                    AND challenges.is_featured = true
                    AND ( challenges.featured_date IS NOT NULL AND challenges.featured_date = ? )
                    AND (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                    AND completed_challenges.challenge_id = challenges.id
                    AND completed_challenges.date_of_completion IS NOT NULL
                    AND completed_challenges.deleted_at IS NULL) = 0)', [$gymnast->gyms_has_users_gym_id, Carbon::now($timezone)->format('Y-m-d'), $memberId]);
            })
            ->select('challenges.*')
            ->get();
            $merged = $challenges->merge($challengesWithoutClass);
            return $merged->map(function ($item) {
                return new Challenge($item->toArray());
            });
    }

    /*
     * This function returns all regular 'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function challengesRegular(int $memberId, array $data)
    {
        $gymnast = Gymnast::find($memberId);
        $gym = Gym::find($gymnast->gyms_has_users_gym_id);
        $limit = isset($data['limit']) ? $limit = $data['limit'] : $limit = 20;
        $timezone = explode(') ', auth()->user()->timezone)[1];
        $challenges_id = Gymnast::join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('challenges', 'classes.id', '=', 'challenges.class_id')
            ->select('challenges.id')
            ->where('gymnasts.id', $memberId)
            ->whereNull('challenges.deleted_at')
            ->where(function ($query) use ($gymnast, $memberId, $timezone, $gym){
                $query->where('challenges.gym_id', $gymnast->gyms_has_users_gym_id)
                      ->orWhereRaw('(challenges.gym_id IS NULL
                      AND challenges.is_featured = false
                      OR ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND challenges.featured_date > ?)
                      OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id 
                      AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                      AND completed_challenges.date_of_completion IS NOT NULL 
                      AND completed_challenges.deleted_at IS NULL) > 0)', [Carbon::now($timezone)->format('Y-m-d'), $gym->leaderboard_cleanup_date, $memberId]);
            })
            ->whereRaw('(challenges.is_featured = false 
                OR ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND challenges.featured_date > ?) 
                OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                AND completed_challenges.challenge_id = challenges.id 
                AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                AND completed_challenges.date_of_completion IS NOT NULL
                AND completed_challenges.deleted_at IS NULL) > 0)', [Carbon::now($timezone)->format('Y-m-d'), $gym->leaderboard_cleanup_date, $memberId])
            ->get();
        $challengesWithoutClass = Challenge::whereNull('challenges.deleted_at')
                ->where(function ($query) use ($gymnast, $memberId, $timezone, $gym){
                $query->WhereRaw('(challenges.class_id IS NULL
                    AND (gym_id = ? OR gym_id IS NULL )
                    AND (challenges.is_featured = false 
                        OR ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND challenges.featured_date > ? ))
                    OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id 
                      AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL
                      AND challenges.featured_date > ?
                      AND completed_challenges.date_of_completion IS NOT NULL
                      AND completed_challenges.deleted_at IS NULL) > 0
                    )', [$gymnast->gyms_has_users_gym_id, Carbon::now('UTC')->format('Y-m-d'), $gym->leaderboard_cleanup_date, $memberId, $gym->leaderboard_cleanup_date]);
            })
            ->select('id')
            ->get();
        $merged = $challenges_id->merge($challengesWithoutClass);
        $challenges = Challenge::whereIn('id', $merged)->orderBy('id', 'asc')->get();
        foreach ($challenges as $key => $value) {
            $completedChallenge = CompletedChallenge::where('challenge_id', $value->id)
                ->where('gymnast_id', $memberId)->first();
            if ($completedChallenge === null) {
                $challenges[$key]['date_of_completion'] = null;
                continue;
            }
            $date = Carbon::parse($completedChallenge->date_of_completion)->format('Y-m-d H:i:s');
            $challenges[$key]['date_of_completion'] = Carbon::parse($date)->setTimezone('UTC');
        }
        $options = ['path' => \Request::url()];
        return paginate($challenges->sortBy('is_featured'), $limit, null, $options);
    }
    /*
     * This function update  'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @param int of the challengeId of challenge for search
     *
     * @return boolean
     */
    public function updatedChallengePending(int $memberId, int $challengesId)
    {
        $challenge = Challenge::find($challengesId);
        if($challenge === null) {
            return false;
        }
        try {
            DB::beginTransaction();
            foreach ($challenge->completeds()->where('gymnast_id', $memberId)->get() as $value) {
                $a = '"challenge_id":'.$value->id;
                $feedEntry = FeedEntry::where('gymnast_id', $memberId)
                        ->where(function($query) use ($value){
                            $query->where(function($querys) use ($value) {
                                $querys->where('type', 2)
                                    ->where('data->completed_challenge', $value->id);
                            });
                        })
                        ->orWhere(function($query) use ($value, $memberId, $a){
                            $query->where('type', 4)
                                ->where('gymnast_id', $memberId)
                                ->where('data->completed_challenges_ids', 'ilike' , '%'.$a.'%');
                        })
                        ->get();
                $this->deleteFeedGroup($feedEntry, $value->id);
            }
            $challenge->completeds()->where('gymnast_id', $memberId)->delete();
            $member = Gymnast::find($memberId);
            $totalPoints = $member->life_time_score - $challenge->points;
            $totalOngoingPoints = $member->ongoing_points - $challenge->points;
            if ($totalPoints < 0) {
                $totalPoints = 0;
            }
            
            if ($totalOngoingPoints < 0) {
                $totalOngoingPoints = 0;
            }
            $member->update([
                'life_time_score' => $totalPoints,
                'ongoing_points' => $totalOngoingPoints,
            ]);
            DB::commit();
            return true;
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
        }
        
    }

    private function deleteFeedGroup($feedEntry, $id)
    {
        $ids = [];
        foreach ($feedEntry as $key => $value) {
            $data = json_decode($value->data);
            
            if (isset($data->completed_challenge)) {
                if ($data->completed_challenge === $id) {
                    $currentFeed = FeedEntry::find($value->id);
                    $currentFeed->delete();
                    continue;
                } else {
                    continue;
                }
            } else {
                $currentFeed = FeedEntry::find($value->id);
                $currentFeed->delete();
            }
            
        }
    }

    /*
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [search, order, column] 
     *
     * @param int of the gymId of gymnast for search
     *
     * @return string
     */
    public function getMemberByGym(array $data, int $gymId){
        $search = $data['search']?? '';
        $column = $data['column']?? 'id';
        $order = $data['order']?? 'asc';
        $limit = $data['limit']?? 0;
        

         if (! isset($search)) {
             return DB::table('gymnasts')
             ->join('users', 'gymnasts.gyms_has_users_user_id', '=', 'users.id')
             ->select('gymnasts.*', 'users.email as email')
             ->where('gymnasts.gyms_has_users_gym_id', $gymId)
             ->orderBy($column, $order)->paginate($limit);
         }
         if ($limit < 1) {
            return DB::table('gymnasts') 
                 ->join('users', 'gymnasts.gyms_has_users_user_id', '=', 'users.id')
                 ->select('gymnasts.*', 'users.email as email')
                 ->where('gymnasts.gyms_has_users_gym_id', $gymId)
                 ->Where(function($query) use ($search) {
                     $query->where('first_name', 'ilike', '%'.$search.'%')
                           ->orwhere('last_name', 'ilike', '%'.$search.'%')
                           ->orwhere('email', 'ilike', '%'.$search.'%');
                 }) 
                 ->orderBy($column, $order)->get();
            
         } else {
             return DB::table('gymnasts') 
                 ->join('users', 'gymnasts.gyms_has_users_user_id', '=', 'users.id')
                 ->select('gymnasts.*', 'users.email as email')
                 ->where('gymnasts.gyms_has_users_gym_id', $gymId)
                 ->Where(function($query) use ($search) {
                     $query->where('first_name', 'ilike', '%'.$search.'%')
                           ->orwhere('last_name', 'ilike', '%'.$search.'%')
                           ->orwhere('email', 'ilike', '%'.$search.'%');
                 }) 
                 ->orderBy($column, $order)->paginate($limit);
         }
    }


    /*
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the gymId of gymnast for search
     *
     * @return string
     */
    public function getMemberByGymPaginated(array $data, int $gymId){
        $limit = $data['limit']??10;
        return Gymnast::where('gyms_has_users_gym_id', $gymId)->orderBy('id')->paginate($limit);
    }

    public function updateGymnastAdminSide(array $data, int $gymnastId)
    {
        try {
            DB::beginTransaction();
            $updateGymnastData = [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'about' => $data['about'],
                'birth_date' => $data['birth_date'],
                'life_time_score' => $data['life_time_score'],
                'current_streak_points' => $data['current_streak_points'],
            ];
            $gymnast = Gymnast::find($gymnastId);
            $gymnast->update($updateGymnastData);
            if (isset($data['timezone']) && isset($data['email'])) {
                $user = User::find($gymnast->gyms_has_users_user_id);
                $user->update([
                    'email' => $data['email'],
                    'timezone' => $data['timezone'],
                ]);
            }
            $gymnast->classes()->sync($data['class_id']);
            DB::commit();
            return true;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }

    /**
     * This function delete a 'Gymnast' that the database
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */

    public function deleteGymnast(int $memberId)
    {
        $gymnast = Gymnast::find($memberId);
        if (isset($gymnast)) {
            return $gymnast->forceDelete();
        }
        return false;
    }

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday]
     *
     * @return mixed
     */
    public function createGymnastForAdmin(array $data, int $gymId)
    {
        $data['gyms_has_users_gym_id'] = $gymId;
        $data['gyms_has_users_user_id'] = $data['user_id'];
        $class = ClassModel::find($data['class_id']);
        try {
            DB::beginTransaction();
            $gymnast = Gymnast::create($data);
            $class->gymnasts()->attach($gymnast->id);
            $path = public_path('media/img/profile.png');
            $imageProfile = Cloudinary()->upload($path,
                ['folder' => 'members/member_' . $gymnast->id, 'public_id' => 'profile', 'invalidate' => true]);
            $gymnast->update([
                'image_profile' => $imageProfile->getSecurePath(),
            ]);
            DB::commit();
            return $gymnast;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }
}
