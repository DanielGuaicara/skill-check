<?php

namespace App\Services;

use App\User;
use App\Subscription;
use App\Interfaces\UserInterface;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\AuthResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use App\Http\Resources\AuthGymnastResource;

class AuthService
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function login(array $request)
    {
        //$user = User::withTrashed()->where('email', $request['email'])->first();
        $user = User::withTrashed()->whereRaw('lower(email) = ? ', [$request['email']])->first();
        if (isset($user->deleted_at)) {
            $subscription = Subscription::where('user_id', $user->id)
                ->where('plan_id', 1)->count();
            if ($subscription > 0) {
                $isStripe = true;
            } else {
                $isStripe = false;
            }
            return response()->json([
                'error' => 422,
                'message' => 'User Inactive',
                'inactive' => true,
                'is_stripe' => $isStripe], 422);
        }

        if (isset($user)) {
            //stripe validation
                $subscription = Subscription::where('user_id', $user->id)
                    ->where('plan_id', 1)->first();

                if (isset($subscription)) {
                    $subscriptionStatus = $this->subscriptionStatus($subscription);
                } else {
                    $subscriptionStatus = "invited";
                }

                if ($subscriptionStatus !== "active" && $subscriptionStatus !== "invited") {
                    return response()->json([
                        'error' => 422,
                        'message' => 'Subscription '.$subscriptionStatus,
                        'inactive' => false,
                        'is_stripe' => true,
                        'stripe_status' => $subscriptionStatus], 422);
                }
            //end stripe validation
        }
        if (! $this->checkAttempt($request)) {
            abort(422, Lang::get('messages.auth_login_422'));
        }
        
        $user_data_login = $this->user->getToken();
        if(auth()->user()->hasRole('gymnast')) {
            return new AuthGymnastResource($user_data_login);
        }
        return new AuthResource($user_data_login);
    }

    public function checkAttempt($credentials)
    {
        $user = User::withTrashed()->whereRaw('lower(email) = ? ', [$credentials['email']])->first();

        if (! $user) {
            abort(422, Lang::get('messages.auth_login_422'));
        }
        $validPassword = Hash::check($credentials['password'], $user->password);

        if ($user  && $validPassword)
        {
            Auth::login($user);
            return true;
        } else {
            return false;
        }
    }

    private function subscriptionStatus($subscription)
    {
        return subscriptionStatus($subscription);
    }
}
