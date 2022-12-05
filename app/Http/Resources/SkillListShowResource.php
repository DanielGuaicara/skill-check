<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillListShowResource extends JsonResource
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
        $events = $this->skills->map(function ($value) {
            return (object) [
                'id' => $value->event->id,
                'name' => $value->event->name,
            ];
        })->unique(function ($value) {
            return $value->id;
        })->values();

        foreach ($events as $event) {
            $event->skills = $this->skills->filter(function ($value) use ($event) {
                return $value->event->id === $event->id;
            })->map(function ($value) {
                return (object) [
                    'id' => $value->id,
                    'name' => $value->name,
                    'description' => $value->description,
                    'category_id' => $value->category_id,
                    'certificate' => $value->certificate,
                    'event_id' => $value->event_id,
                    'level_id' => $value->level_id,
                    'order' => $value->pivot->order,
                ];
            })->unique(function ($value) {
                return $value->name;
            })->values();
        }

        return [
            'skill_list_id' => $this->id,
            'name' => $this->name,
            'events' => $events,
        ];
    }
}
