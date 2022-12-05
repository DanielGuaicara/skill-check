<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaderboardProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        LeaderboardProfileResource::withoutWrapping();
        return [
            'gymnast' => $this['gymnast'],
            'percentage' => $this['percentage'],
            'meter_value' => $this['meter_value'],
            'latest_activity' => $this['latest_activity']->toArray(),
        ];
    }
}
