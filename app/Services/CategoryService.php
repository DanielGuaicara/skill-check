<?php

namespace App\Services;

use App\Http\Resources\CategoryResource;
use App\Interfaces\CategoryInterface;

class CategoryService
{
    protected $service;

    public function __construct(CategoryInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function returns all 'categories'
     *
     * @return string
     */
    public function list()
    {
        return CategoryResource::collection($this->service->list());
    }
}
