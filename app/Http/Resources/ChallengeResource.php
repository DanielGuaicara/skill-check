<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChallengeResource extends JsonResource
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
            'gym_id' => $this->gym_id,
            'class_id' => $this->class_id,
            'class' => is_null($this->class_id) ? 'All Classes' : $this->class->name,
            'name' => $this->name,
            'description' => $this->description,
            'points' => $this->points,
            'is_featured' => $this->is_featured,
            'featured_date' => $this->featured_date,
            'date_of_completion' => $this->date_of_completion?? null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
