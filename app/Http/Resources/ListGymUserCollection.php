<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ListGymUserCollection extends ResourceCollection
{
    public function __construct($resource)
    {
        $this->pagination = [
            'total' => $resource->total(),
            'count' => $resource->count(),
            'perPage' => $resource->perPage(),
            'currentPage' => $resource->currentPage(),
            'totalPages' => $resource->lastPage(),
        ];
        $resource = $resource->getCollection();
        parent::__construct($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */

    public function toArray($request)
    {
        $listGyms = $this->collection;
        if (auth()->user()->hasRole('admin')) {
            $itemsTransformed = $listGyms
                ->map(function ($item) {
                    $gyms = $item->gyms->map(function ($value, $item) {
                        return [
                            'name' => $value->name,
                            'id' => $value->pivot->gym_id,
                        ];
                    });
                    return [
                        'id' => $item->id,
                        'name' => $item->name,
                        'description' => $item->description,
                        'email' => $item->email,
                        'gyms' => $gyms,
                    ];
                });
        } else {
            $itemsTransformed = $listGyms
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'name' => $item->name,
                        'description' => $item->description,
                        'email' => $item->email,
                    ];
                });
        }
        return new \Illuminate\Pagination\LengthAwarePaginator(
            $itemsTransformed,
            $this->pagination['total'],
            $this->pagination['perPage'],
            $this->pagination['currentPage'], [
                'path' => \Request::url(),
                'query' => [
                    'page' => $this->pagination['currentPage'],
                ],
            ]
        );
    }
}
