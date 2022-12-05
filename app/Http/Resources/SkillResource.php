<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
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
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'category' => ! is_null($this->category_id) ? $this->category->name : null,
            'category_id' => $this->category_id,
            'certificate' => $this->certificate,
            'event_id' => $this->event_id,
            'level' => ! is_null($this->level_id) ? $this->level->level : null,
            'level_id' => $this->level_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
