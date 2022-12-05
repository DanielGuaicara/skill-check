<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GetMediaFunStuffResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $array = $this->resource;
        foreach ($array as $key => $value) {
            $response[] = [
                'img' => config('app.api_url').'/media/img/fun-stuff/gym'.$value['gym_id'].'/'.$value['file_name'],
            ];
        }
        return $response;
    }
}
