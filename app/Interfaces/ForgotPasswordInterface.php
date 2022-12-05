<?php

namespace App\Interfaces;

interface ForgotPasswordInterface
{
    /**
     * This function returns all 'categories'
     *
     * @return string
     */
    public function forgot(array $data);

    /**
     * This function returns all 'categories'
     *
     * @return string
     */
    public function resetPassword(array $data);
    /**
     * This function returns all 'Feed Entries'
     *
     * @param string $token
     *
     * @return string
     */
    public function verifyToken($token);
}
