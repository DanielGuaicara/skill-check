<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
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
        if (auth()->user()->hasRole('gym')) {
            $listGyms = collect(auth()->user()->gyms);
            $gyms = $listGyms->map(function ($item) {
                return [
                    'name' => $item->name,
                    'id' => $item->pivot->gym_id,
                    'settings' => $item->settings->theme,
                    'is_stripe' => $item->is_stripe,
                ];
            });
            return [
                'token' => $this->accessToken,
                'user_role' => auth()->user()->roles->first()->name,
                'id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'timezone' => auth()->user()->timezone,
                'gyms' => $gyms,
            ];
        }

        return [
            'token' => $this->accessToken,
            'user_role' => auth()->user()->roles->first()->name,
            'id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'timezone' => auth()->user()->timezone,
        ];
    }
}
