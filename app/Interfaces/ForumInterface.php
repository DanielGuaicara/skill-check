<?php

namespace App\Interfaces;

interface ForumInterface
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
    public function forumLogin(array $data);

    /**
     * This function returns all 'categories'
     *
     * @return string
     */
    public function forumLogout();
}
