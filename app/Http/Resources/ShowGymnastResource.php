<?php

namespace App\Http\Resources;

use App\Gymnast;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ShowGymnastResource extends JsonResource
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
        $listGyms = $this;
        return $listGyms
            ->map(function ($item) {
                $classes = $item->classes->map(function ($value, $item) {
                    return [
                        'id' => $value->id,
                        'name' => $value->name,
                        'description' => $value->description,
                        'skill_list_id' => $value->skill_list_id,
                        'created_at' => $value->created_at,
                        'updated_at' => $value->updated_at,
                        'deleted_at' => $value->deleted_at,
                    ];
                });
                $gymnast = Gymnast::find($item->id);
                $sumCompletedChallenges = $gymnast->completeds->where('completed_challenges.deleted_at', null)->sum('points');
                if(substr($item->image_profile, 0, 23) === "../img/profile_pictures"){
                    $img = config('app.api_url').'/media'.Str::substr($item->image_profile,2);
                } else {
                    $img = $item->image_profile;
                }
                return [
                    'id' => $item->id,
                    'first_name' => $item->first_name,
                    'last_name' => $item->last_name,
                    'birth_date' => $item->birth_date,
                    'life_time_score' => is_null($item->life_time_score) ? 0 : $item->life_time_score,
                    'current_points' => is_null($sumCompletedChallenges) ? 0 : $sumCompletedChallenges,
                    'current_streak_points' => $item->current_streak_points,
                    'ongoing_points' => $item->ongoing_points,
                    'last_streak' => $item->last_streak,
                    'about' => $item->about,
                    'gyms_has_users_gym_id' => $item->gyms_has_users_gym_id,
                    'gyms_has_users_user_id' => $item->gyms_has_users_user_id,
                    'profile_picture' => $img,
                    'classes' => $classes,
                ];
            });
    }
}
