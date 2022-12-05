<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ListFeedCollection extends ResourceCollection
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
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $listGyms = $this->collection;
        $itemsTransformed = $listGyms;
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
