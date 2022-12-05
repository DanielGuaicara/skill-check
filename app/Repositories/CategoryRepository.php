<?php

namespace App\Repositories;

use App\Category;
use App\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * This function returns all 'categories'
     *
     * @return string
     */
    public function list()
    {
        return $this->category->all();
    }
}
