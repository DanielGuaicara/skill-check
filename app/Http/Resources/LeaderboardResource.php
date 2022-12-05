<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaderboardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'birth_date' => $this->birth_date,
            'life_time_score' => is_null($this->life_time_score) ? 0 : $this->life_time_score,
            'current_streak_points' => is_null($this->current_streak_points) ? 0 : $this->current_streak_points,
            'last_streak' => $this->last_streak,
            'about' => $this->about,
            'gyms_has_users_gym_id' => $this->gyms_has_users_gym_id,
            'gyms_has_users_user_id' => $this->gyms_has_users_user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_at' => $this->deleted_at,
            'image_profile' => $this->image_profile,
            'ongoing_points' => $this->ongoing_points,
        ];
    }
}
