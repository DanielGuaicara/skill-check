<?php

namespace App\Repositories;

use App\Interfaces\LevelInterface;
use App\Level;

class LevelRepository implements LevelInterface
{
    protected $level;

    public function __construct(Level $level)
    {
        $this->level = $level;
    }

    /**
     * This function returns all 'levels'
     *
     * @return string
     */
    public function list()
    {
        return $this->level->all();
    }
}
