<?php

namespace App\Http\Resources;

use App\User;
use DB;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class AuthGymnastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $user = User::join('subscriptions', 'users.id', '=', 'subscriptions.user_id')
            ->select('users.*', 'subscriptions.customer_id', 'subscriptions.subscription_id')
            ->where('users.id', auth()->user()->id)->first();
        $listGyms = collect(auth()->user()->gyms);
        $gyms = $listGyms->map(function ($item) {
            $gymnastsCollection = DB::table('gymnasts')
                ->where('gyms_has_users_user_id', auth()->user()->id)
                ->where('gyms_has_users_gym_id', $item->id)
                ->get();
            $gymnasts = $gymnastsCollection->map(function ($item) {
                if(substr($item->image_profile, 0, 23) === "../img/profile_pictures"){
                    $img = config('app.api_url').'/media'.Str::substr($item->image_profile,2);
                } else {
                    $img = config('cloudinary.cloudinary_secure_delivery_url').'/image/upload/members/member_'.$item->id.'/profile.jpg';
                }
                return [
                    'id' => $item->id,
                    'first_name' => $item->first_name,
                    'last_name' => $item->last_name,
                    'birth_date' => $item->birth_date,
                    'life_time_score' => $item->life_time_score,
                    'current_streak_points' => $item->current_streak_points,
                    'last_streak' => $item->last_streak,
                    'about' => $item->about,
                    'gyms_has_users_gym_id' => $item->gyms_has_users_gym_id,
                    'gyms_has_users_user_id' => $item->gyms_has_users_user_id,
                    'profile_picture' => $img,
                ];
            });
            return [
                'id' => $item->id,
                'name' => $item->name,
                'settings' => $item->settings,
                'gymnasts' => $gymnasts,
                'is_stripe' => $item->is_stripe,
            ];
        });
        if (isset($user->subscription_id)) {
            $subscription = DB::table('subscriptions')
                ->where('subscription_id', $user->subscription_id)
                ->first();
            $stripeStatus = subscriptionStatus($subscription);
        } else {
            $stripeStatus = "invited";
        }
        return [
            'token' => $this->accessToken,
            'user_role' => auth()->user()->roles->first()->name,
            'id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'timezone' => auth()->user()->timezone,
            'stripe_customer_id' => $user->customer_id??null,
            'stripe_subscription_id' => $user->subscription_id??null,
            'stripe_status' => $stripeStatus,
            'gyms' => $gyms,
        ];
    }
}
