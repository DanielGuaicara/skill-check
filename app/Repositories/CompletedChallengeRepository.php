<?php

namespace App\Repositories;

use App\Challenge;
use App\CompletedChallenge;
use App\Interfaces\CompletedChallengeInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompletedChallengeRepository implements CompletedChallengeInterface
{
    protected $completedChallenge;

    public function __construct(CompletedChallenge $completedChallenge)
    {
        $this->completedChallenge = $completedChallenge;
    }

    /**
     * This function create a new 'completed_challenge' in database
     *
     * @param array $data An array [gymnast_id, challenge_id, media_path, media_caption]
     *
     * @param file $file
     *
     * @return mixed
     */
    public function create(array $data, $file)
    {
        $challenge = Challenge::find($data['challenge_id']);
        $timezone = explode(') ', auth()->user()->timezone)[1];
        $completedChallenge = CompletedChallenge::join('challenges', 'completed_challenges.challenge_id', '=', 'challenges.id')
            ->select(DB::raw('count(*) as count'))
            ->where('gymnast_id', $data['gymnast_id'])
            ->where('challenges.is_featured', true)
            ->whereDate('date_of_completion', Carbon::now('UTC')->format('Y-m-d'))->get();
        /*if ($completedChallenge[0]->count >= 3 && $challenge->is_featured == true && auth()->user()->hasRole('gymnast')) {
            return false;
        }*/
        if(! isset($data['points'])) {
            $data['points'] = $challenge->points;
        }
        try {
            DB::beginTransaction();
            $data['date_of_completion'] = Carbon::now('UTC');
            $data['created_at'] = Carbon::now($timezone)->format('Y-m-d');
            $completedChallenge = $this->completedChallenge->create($data);
            if ($file) {
                $this->uploadFile($completedChallenge, $file);
            }
            DB::commit();
            $completedChallenge->date_of_completion = Carbon::parse($completedChallenge->date_of_completion)->setTimezone('UTC');
            return $completedChallenge;
        } catch (Exception $exc) {
            DB::rollback();
            throw $exc;
        }
        return false;
    }

    private function uploadFile(CompletedChallenge $completedChallenge, $file)
    {
        $fileUpload = null;
        if (str_contains($file['type'], 'video')) {
            $fileUpload = Cloudinary()->uploadVideo($file['content'], [
                'folder' => 'challenges/challenge_' . $completedChallenge->id,
                'public_id' => 'challenge',
            ]);
        } else {
            $fileUpload = Cloudinary()->upload($file['content'], [
                'folder' => 'challenges/challenge_' . $completedChallenge->id,
                'public_id' => 'challenge',
            ]);
        }
        if ($fileUpload) {
            $completedChallenge->media_path = $fileUpload->getPath();
            $completedChallenge->update();
        }
    }

    /**
     * This feature lists all the 'gym' 'challenges' with their completed challenges in the database
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */

    public function feedCarousel($gymId)
    {
        $timezone = explode(') ', auth()->user()->timezone)[1];
        $dateNow = Carbon::now($timezone)->format('Y-m-d');
        $challenges = $this->completedChallenge->join('challenges', 'completed_challenges.challenge_id', '=', 'challenges.id')
            ->select('challenges.* as challenges')
            ->whereDate('challenges.featured_date', '=', $dateNow)
            ->whereRaw('(challenges.is_featured = true AND completed_challenges.media_path IS NOT NULL 
                AND (select count (*) from completed_challenges where 
                completed_challenges.date_of_completion = ?) >= 3)', $dateNow)
            ->distinct()
            ->get();
        $dataChallenges = [];
        foreach ($challenges as $key => $value) {
            $dataGymnast = $this->completedChallenge->join('gymnasts', 'completed_challenges.gymnast_id', '=', 'gymnasts.id')
                ->select('completed_challenges.gymnast_id', 'gymnasts.first_name', 'completed_challenges.media_path')
                ->where('challenge_id', $value->id)
                ->where('media_path', '!=', null)
                ->whereDate('date_of_completion', '=', $dateNow)
                ->get();
            $dataChallenges[$key] = [
                'id' => $value->id,'name' => $value->name,
                'description' => $value->description,'is_feature' => $value->is_feature,
                'points' => $value->points,'gym_id' => $value->gym_id,
                'class_id' => $value->class_id,'featured_date' => $value->featured_date,
                'deleted_at' => $value->deleted_at,
                'created_at' => $value->created_at,'updated_at' => $value->updated_at,
                'completed_by' => $dataGymnast,
            ];
        }
        return $dataChallenges;
    }

    /**
     * This function list 'challenge Media' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function completedChallengesMediaList(array $data, int $gymId)
    {
        $limit = $data['limit'] ?? 10; 
        $list = CompletedChallenge::withTrashed()
            ->join('challenges', 'completed_challenges.challenge_id', '=', 'challenges.id')
            ->join('gymnasts', 'completed_challenges.gymnast_id', '=', 'gymnasts.id')
            ->select('challenges.id as chalenge_id', 'completed_challenges.media_path', 'completed_challenges.media_caption', 'completed_challenges.created_at', 'challenges.gym_id', 
            'challenges.name as challenge_name', 'gymnasts.first_name as member_name', 'gymnasts.image_profile as member_img_profile', 'gymnasts.id as member_id')
            ->where(function ($query) use ($gymId){
                $query->where('challenges.gym_id', $gymId)
                      ->orWhere('challenges.gym_id', null);
            })
            ->where('completed_challenges.media_path', '!=', null)
            ->orderBy('completed_challenges.created_at', 'desc')->paginate($limit);
        $list->map(function ($item) {
            if(substr($item->member_img_profile, 0, 23) === "../img/profile_pictures"){
                $item->member_img_profile = config('app.api_url').'/media'.Str::substr($item->image_profile,2);
            } elseif($item->member_img_profile == null) {
                $item->member_img_profile = config('app.api_url').'/media/img/profile.png';
            }
        });
        return $list;
    }
}
