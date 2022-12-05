<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckRoleResource extends JsonResource
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
        $role = $this->roles->first()->name;
        if ($role === 'admin') {
            return [
                'role' => $role,
            ];
        }
        return [
            'role' => $role,
            'gyms' => $this->gyms()->get(),
        ];
    }
}
