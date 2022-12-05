<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class InteractionFeedCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $listInteractions = $this->collection;
        $itemsTransformed = $listInteractions
            ->map(function ($value, $item) {
                return collect($value)->sortByDesc('created_at');
            });
        return [
            'all_interactions' => isset($itemsTransformed['all_interactions']) ? $itemsTransformed['all_interactions']->toArray() : null,
            'comments' => isset($itemsTransformed['comments']) ? $itemsTransformed['comments']->toArray() : null,
            'clap' => isset($itemsTransformed['clap']) ? $itemsTransformed['clap']->toArray() : null,
            'highfive' => isset($itemsTransformed['highfive']) ? $itemsTransformed['highfive']->toArray() : null,
        ];
    }
}
