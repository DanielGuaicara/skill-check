<?php

namespace App\Repositories;

use App\Gym;
use App\Interfaces\StripePaymentInterface;
use App\Notifications\RegisterUser;
use App\Subscription;
use App\User;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class StripePaymentRepository implements StripePaymentInterface
{
    /**
     * This function creates a new 'subscription' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function createMemberSubscription(array $data)
    {
        $subscription = Subscription::join('plans', 'subscriptions.plan_id', '=', 'plans.id')
            ->join('users', 'subscriptions.user_id', '=', 'users.id')
            ->select('subscriptions.*', 'plans.product_id as plan_id', 'users.email as user_email')
            ->where('user_id', auth()->user()->id)
            ->where('plan_id', 1)->first();
            if ($subscription === null) {
                try {
                    $plan = DB::table('plans')->where('id', 1)->first();
                    $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
                    $customers = $stripe->customers->all(["email" => auth()->user()->email]);
                    if (count($customers->data) == 0) {
                        $customer = $stripe->customers->create([
                            "source" => $data['token'],
                            'email' => auth()->user()->email
                        ]);
                        $subscriptions = $stripe->subscriptions->create([
                            'customer' => $customer->id,
                            'items' => [['plan' => $plan->product_id, 'quantity' => 1]]
                        ]);
                        $timezone = explode(') ', auth()->user()->timezone)[1];
                        $start = new Carbon($subscriptions->current_period_start, $timezone);
                        $end = new Carbon($subscriptions->current_period_end, $timezone);
                    }
                } catch (\Stripe\Exception\ApiErrorException $e) {
                    throw $e;
                }
            } else {
                abort(500, 'This user already has a subscription');
            }
            try {
                $endSub = Subscription::create(
                    [
                        'user_id' => auth()->user()->id,
                        'plan_id' => 1,
                        'subscription_id' => $subscriptions->id,
                        'customer_id' => $customer->id,
                        'status' => true,
                        'quantity' => 1,
                        'start_at' => $start,
                        'end_at' => $end,
                    ]
                );
                if ($endSub) {
                return true;
                }
          } catch (\Stripe\Exception\ApiErrorException $e) {
                throw $e;
          }
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */

    public function updateMemberSubscription(array $data)
    {
        $plan = DB::table('plans')->where('id', 1)->first();
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            
        $subscription = Subscription::join('plans', 'subscriptions.plan_id', '=', 'plans.id')
            ->select('subscriptions.*', 'plans.product_id as plan_id')
            ->where('user_id', auth()->user()->id)
            ->where('plan_id', 1)->first();
        try {
            if ($subscription !== null) {
                $quantity = $subscription->quantity + 1;
                $new = $stripe->subscriptions->update(
                    $subscription->subscription_id,
                    ['quantity' => $quantity,
                    'proration_behavior' => 'always_invoice']
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
                return true;
            } else {
                return true;
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
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function updateCC(array $data)
    {
        try {
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            $customer = $stripe->customers->retrieve($data['customer_id']);
            $customer->source = $data['token'];
            $customer->save();
            return response()->json([
                'message' => 'Your card was successfully updated.',
                'status' => true,
            ]);
          } catch (\Stripe\Exception\ApiErrorException $e) {
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            $errormsg=$e->getMessage();
            $DateTime = date("Y-m-d h:i:sa");
            $Separator = "\xA----------------------------------------Error--------------------------------------\xA";
            $Context=array(
                    'action'    => 'update_cc_stripe',
                    'customer' => $data['customer_id'],
                    'user_email' => auth()->user()->email,
            );
            if($e){
                fwrite($StripeErrors ,print_r($Separator,true));
                fwrite($StripeErrors ,print_r($DateTime."\xA",true));
                fwrite($StripeErrors ,print_r($Context,true));
                fwrite($StripeErrors ,print_r($errormsg,true));
                fwrite($StripeErrors ,print_r($Separator,true));
            }
            fclose($StripeErrors);
            return response()->json([
                'message' => $e->getMessage(),
                'status' => false,
            ]);
        }
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function cancelMemberSubscription(array $data)
    {
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
        $customer = $stripe->customers->retrieve($data['customer_id']);
        $subscriptions = $stripe->subscriptions->all(['customer' => $customer->id]);
        try {
            foreach ($subscriptions as $item) {
                $stripe->subscriptions->retrieve($item['id'])->cancel();
            }
            Subscription::where('user_id', auth()->user()->id)
                ->where('plan_id', 1)
                ->where('customer_id', $data['customer_id'])
                ->update([
                    'status' => false,
                ]);
            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            $errormsg=$e->getMessage();
            $DateTime = date("Y-m-d h:i:sa");
            $Separator = "\xA----------------------------------------Error--------------------------------------\xA";
            $Context=array(
                    'action'    => 'cancel_subscription_stripe',
                    'customer' => $data['customer_id'],
                    'user_email' => auth()->user()->email,
            );
            if($e){
                fwrite($StripeErrors ,print_r($Separator,true));
                fwrite($StripeErrors ,print_r($DateTime."\xA",true));
                fwrite($StripeErrors ,print_r($Context,true));
                fwrite($StripeErrors ,print_r($errormsg,true));
                fwrite($StripeErrors ,print_r($Separator,true));
            }
            fclose($StripeErrors);
            return response()->json([
                'message' => $e->getMessage(),
                'status' => false,
            ]);
        }
        
        return true;
    }

    /**
     * This function creates a new 'gymnast Subscription' in database
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function createGymnastSubscription(array $data)
    {
        if (! isset($data['token'])) {
            if ($data['gym_id'] == 1 || $data['gym_id'] == 4) {
                return response()->json([
                    'message' => 'Action not allowed.'
                ], 422);
            }
            $gym_id = $data['gym_id'];
            $password = Str::random(12);
            $data['name'] = 'GymnastDefault';
            $data['password'] = bcrypt($password);
            $data['email'] = Str::lower($data['email']);
            try {
                DB::beginTransaction();
                $gymnastUser = User::create($data);
                $this->addRolUserGymnast($gymnastUser, $gym_id);
                DB::commit();
            } catch (\Exception $exc) {
                DB::rollback();
                throw $exc;
                return response()->json([
                    'message' => 'Error.'
                ], 500);
            }
            $gym = Gym::find($data['gym_id']);
            $data['gym_name'] = $gym->name;
            $data['password'] = $password;
            $user = User::find($gymnastUser->id);
            $user->notify(new RegisterUser($data));
            return response()->json([
                'message' => 'Check your Email.'
            ], 200);
        }
        try {
            $plan = DB::table('plans')->where('id', 1)->first();
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            $customers = $stripe->customers->all(["email" => $data['email']]);
            if (count($customers->data) == 0) {
                $customer = $stripe->customers->create([
                    "source" => $data['token'],
                    'email' => $data['email']
                ]);
                $subscriptions = $stripe->subscriptions->create([
                    'customer' => $customer->id,
                    'items' => [['plan' => $plan->product_id, 'quantity' => 1]]
                ]);
                $timezone = 'America/Chicago';
                $start = new Carbon($subscriptions->current_period_start, $timezone);
                $end = new Carbon($subscriptions->current_period_end, $timezone);
                $customerId = $customer->id;
            }
            else {
                $subscriptionData = $stripe->subscriptions->all(["customer" => $customers->data[0]->id]);
                if ($subscriptionData->data == []) {
                    $subscriptions = $stripe->subscriptions->create([
                        'customer' => $customers->data[0]->id,
                        'items' => [['plan' => $plan->product_id, 'quantity' => 1]]
                    ]);
                    $timezone = 'America/Chicago';
                    $start = new Carbon($subscriptions->current_period_start, $timezone);
                    $end = new Carbon($subscriptions->current_period_end, $timezone);
                    $customerId = $customers->data[0]->id;
                } else {
                    return false;
                }
            }
        } catch (\Stripe\Exception\ApiErrorException $e) {
            throw $e;
            return false;
        }
        //$gymnastUser = User::withTrashed()->where('email', $data['email'])->with('roles')->first();
        $gym_id = $data['gym_id'];
        $password = Str::random(12);
        $data['name'] = 'GymnastDefault';
        $data['password'] = bcrypt($password);
        try {
            DB::beginTransaction();
            $gymnastUser = User::create($data);
            $this->addRolUserGymnast($gymnastUser, $gym_id);
            $endSub = Subscription::create(
                [
                    'user_id' => $gymnastUser->id,
                    'plan_id' => 1,
                    'subscription_id' => $subscriptions->id,
                    'customer_id' => $customerId,
                    'stripe_email' => $data['email'],
                    'status' => true,
                    'quantity' => 1,
                    'start_at' => $start,
                    'end_at' => $end,
                ]
            );
            DB::commit();
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
            return false;
        }
        $gym = Gym::find($data['gym_id']);
        $data['gym_name'] = $gym->name;
        $data['password'] = $password;
        $user = User::find($gymnastUser->id);
        $user->notify(new RegisterUser($data));
        return response()->json([
            'message' => 'Check your Email.'
        ]);
    }

    private function addRolUserGymnast($gymnastUser, $gym_id)
    {
        $gymnastUser->syncRoles('gymnast');
        $gym = Gym::find($gym_id);
        $gym->users()->detach($gymnastUser->id);
        $gym->users()->attach($gymnastUser->id);
    }

    /**
     * This function re-subscribe a gymnast User in database
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function GymnastResubscription(array $data)
    {
        $user = User::withTrashed()->where('email', $data['email'])->first();
        $quantity = $user->gymnasts->count();
        if ($user->deleted_at !== null) {
            $subscription = Subscription::where('user_id', $user->id)
                ->where('plan_id', 1)->get();
        } else {
            abort(500, 'Error, User is not inactive');
        }

        if ($subscription == null) {
            return false;
        }
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

        try {
            foreach ($subscription as $value) {
                $customer = $stripe->customers->retrieve($value->customer_id);
                $subscriptions = $stripe->subscriptions->all(['customer' => $customer->id]);
                foreach ($subscriptions as $item) {
                    $stripe->subscriptions->retrieve($item['id'])->cancel();
                }
            }
    
            $plan = DB::table('plans')->where('id', 1)->first();
            $cc = $this->cc_update_validation(['token' => $data['token'],
                'customer_id' => $customer->id,
                'email' => $data['email']
            ]);
            if ($cc['status'] === false) {
                abort(500, 'Error processing your card. Please try again later!');
            }
            $subscriptions = $stripe->subscriptions->create([
                'customer' => $customer->id,
                'items' => [['plan' => $plan->product_id, 'quantity' => $quantity]]
            ]);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            //throw $th;
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            $errormsg=$e->getMessage();
            $DateTime = date("Y-m-d h:i:sa");
            $Separator = "\xA----------------------------------------Error--------------------------------------\xA";
            $Context=array(
                    'action'    => 'stripe_resubscription_stripe',
                    'subscription' => '$subscription',
                    'user' => $subscription->user_id,
            );
            if($e){
                fwrite($StripeErrors ,print_r($Separator,true));
                fwrite($StripeErrors ,print_r($DateTime."\xA",true));
                fwrite($StripeErrors ,print_r($Context,true));
                fwrite($StripeErrors ,print_r($errormsg,true));
                fwrite($StripeErrors ,print_r($Separator,true));
            }
            fclose($StripeErrors);
            return $errormsg;
            return false;
        }
        
        $timezone = explode(') ', $user->timezone)[1];
        $start = new Carbon($subscriptions->current_period_start, $timezone);
        $end = new Carbon($subscriptions->current_period_end, $timezone);

        try {
            $user->restore();
            Subscription::where('user_id', $user->id)
                ->where('plan_id', 1)
                ->delete();
            Subscription::create([
                'user_id' => $user->id,
                'plan_id' => 1,
                'subscription_id' => $subscriptions->id,
                'customer_id' => $customer->id,
                'stripe_email' => $data['email'],
                'status' => true,
                'quantity' => $subscriptions->quantity,
                'start_at' => $start,
                'end_at' => $end,
            ]);
            return true;
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
        
        return true;
    }

    /**
     * This function re-subscribe a gymnast User in database with stripe status [canceled,unpaid]
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function GymnastResubscriptionForStripeStatus(array $data)
    {
        $user = User::withTrashed()->whereRaw('lower(email) = ?', [Str::lower($data['email'])])->first();
        $quantity = $user->gymnasts->count();
        $subscription = Subscription::where('user_id', $user->id)
            ->where('plan_id', 1)->get();

        if ($subscription == null) {
            abort(500, 'User does not have a subscription, contact the administration.');
        }
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
        try {
            foreach ($subscription as $value) {
                $customer = $stripe->customers->retrieve($value->customer_id);
                $subscriptions = $stripe->subscriptions->all(['customer' => $customer->id]);
                foreach ($subscriptions as $item) {
                    $stripe->subscriptions->retrieve($item['id'])->cancel();
                }
            }
    
            $plan = DB::table('plans')->where('id', 1)->first();
            $cc = $this->cc_update_validation(['token' => $data['token'],
                'customer_id' => $customer->id,
                'email' => $data['email']
            ]);
            if ($cc['status'] === false) {
                abort(500, 'Error processing your card. Please try again later!');
            }
            $subscriptions = $stripe->subscriptions->create([
                'customer' => $customer->id,
                'items' => [['plan' => $plan->product_id, 'quantity' => $quantity]]
            ]);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            $this->printStripeError($e, ['email' => $data['email']]);
            return abort(500, "ApiErrorException");
        }
        $timezone = explode(') ', $user->timezone)[1];
        $start = new Carbon($subscriptions->current_period_start, $timezone);
        $end = new Carbon($subscriptions->current_period_end, $timezone);

        try {
            $user->restore();
            Subscription::where('user_id', $user->id)
                ->where('plan_id', 1)
                ->delete();
            Subscription::create([
                'user_id' => $user->id,
                'plan_id' => 1,
                'subscription_id' => $subscriptions->id,
                'customer_id' => $customer->id,
                'stripe_email' => $data['email'],
                'status' => true,
                'quantity' => $subscriptions->quantity,
                'start_at' => $start,
                'end_at' => $end,
            ]);
            return true;
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
        return true;
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param int $gymId
     *
     * @return mixed
     */
    public function gymIsStripe(int $gymId)
    {
        $gym = Gym::find($gymId);
        if ($gym->is_stripe) {
            return response()->json([
                'status' => true
            ]);
        }
        return response()->json([
            'status' => false
        ]);
    }

    /**
     * This function update a plan in database
     *
     * @param array $data An array [product_id]
     * 
     * @param int $planId
     *
     * @return mixed
     */
    public function updatePlan(array $data, int $planId)
    {
        $plan = DB::table('plans')->where('id', $planId)->first();
        if (isset($plan)) {
            try {
                DB::table('plans')->update([
                    "product_id" => $data['product_id'],
                ]);
                return true;
            } catch (\Throwable $th) {
                throw $th;
                return false;
            }
        }
    }

    private function cc_update_validation(array $data)
    {
        try {
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            $customer = $stripe->customers->retrieve($data['customer_id']);
            $customer->source = $data['token'];
            $customer->save();
            return [
                'message' => 'Your card was successfully updated.',
                'status' => true,
            ];
          } catch (\Stripe\Exception\ApiErrorException $e) {
            $errormsg=$e->getMessage();
            if ($e->getError()->type === "card_error")
            {
                if ($e->getError()->code === 'blocked') {
                    $this->printStripeError($e, ['email' => $data['email']]);
                    $errormsg= "Blocked for suspected fraud.";
                    abort(500, $errormsg);
                } elseif ($e->getError()->code === 'expired_card') {
                    $this->printStripeError($e, ['email' => $data['email']]);
                    $errormsg= "expired card.";
                    abort(500, $errormsg);
                } elseif ($e->getError()->code === 'card_declined') {
                    $this->printStripeError($e, ['email' => $data['email']]);
                    $errormsg= "Your card was declined. Code: ".$e->getError()->decline_code;
                    abort(500, $errormsg);
                }
            }
            $StripeErrors = fopen("StripeErrorLog.txt",'a');
            $DateTime = date("Y-m-d h:i:sa");
            $Separator = "\xA----------------------------------------Error--------------------------------------\xA";
            $Context=array(
                    'action'    => 'update_cc_resubscription_for_status_stripe',
                    'subscription' => '$subscription',
                    'email' => $data['email'],
                    'message' => $errormsg,
            );
            if($e){
                fwrite($StripeErrors ,print_r($Separator,true));
                fwrite($StripeErrors ,print_r($DateTime."\xA",true));
                fwrite($StripeErrors ,print_r($Context,true));
                fwrite($StripeErrors ,print_r($errormsg,true));
                fwrite($StripeErrors ,print_r($Separator,true));
            }
            fclose($StripeErrors);
            return [
                'message' => $errormsg,
                'status' => false,
            ];
        }
    }

    private function printStripeError($e, $dataUser)
    {
        $StripeErrors = fopen("StripeErrorLog.txt",'a');
            $errormsg=$e->getMessage();
            $DateTime = date("Y-m-d h:i:sa");
            $Separator = "\xA----------------------------------------Error--------------------------------------\xA";
            $Context=array(
                    'action'    => 'stripe_resubscription_stripe_status',
                    'subscription' => '$subscription',
                    'user' => $dataUser['email'],
            );
            if($e){
                fwrite($StripeErrors ,print_r($Separator,true));
                fwrite($StripeErrors ,print_r($DateTime."\xA",true));
                fwrite($StripeErrors ,print_r($Context,true));
                fwrite($StripeErrors ,print_r($errormsg,true));
                fwrite($StripeErrors ,print_r($Separator,true));
            }
            fclose($StripeErrors);
    }
}
