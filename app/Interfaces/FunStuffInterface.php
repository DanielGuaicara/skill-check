<?php

namespace App\Interfaces;

interface FunStuffInterface
{
    /**
     * This function returns all 'categories'
     *
     * @param int $gymId
     *
     * @param int $gymnastId
     *
     * @return string
     */
    public function getMedia(int $gymId, int $gymnastId);
}
