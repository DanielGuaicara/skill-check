<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillListMyListResource extends JsonResource
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
        $skillList = $this->skills->map(function ($value) {
            return [
                'skill_id' => $value->pivot->skill_id,
                'name' => $value->name,
                'order' => $value->pivot->order,
            ];
        })->sortBy('order');

        return [
            'skill_list_id' => $this->id,
            'name' => $this->name,
            'my_list' => $skillList,
        ];
    }
}
