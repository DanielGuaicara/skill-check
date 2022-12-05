<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CompletedChallengeResource extends JsonResource
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
            'gymnast_id' => $this->gymnast_id,
            'challenge_id' => $this->challenge_id,
            'media_path' => $this->media_path,
            'media_caption' => $this->media_caption,
            'date_of_completion' => isset($this->date_of_completion)? Carbon::parse( $this->date_of_completion, 'UTC')->setTimezone('UTC') : $this->date_of_completion,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
