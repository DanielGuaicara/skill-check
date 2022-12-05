<?php

namespace App\Http\Resources;

use App\Gym;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ChallengeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $collection = $this->collection;
        return $collection
            ->map(function ($item) {
                if ($item->gym_id) {
                    $gym = Gym::find($item->gym_id);
                }
                return [
                    'id' => $item->id,
                    'gym_id' => $item->gym_id,
                    'gym_name' => $gym->name?? null,
                    'class_id' => $item->class_id,
                    'class' => is_null($item->class_id) ? 'All Classes' : $item->class->name,
                    'name' => $item->name,
                    'description' => $item->description,
                    'points' => $item->points,
                    'is_featured' => $item->is_featured,
                    'featured_date' => $item->featured_date,
                    'date_of_completion' => $item->date_of_completion?? null,
                    'created_at' => $item->created_at,
                    'updated_at' => $item->updated_at,
                ];
            });
    }
}
