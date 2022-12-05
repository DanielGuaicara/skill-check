<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Interfaces\ForgotPasswordInterface;

class ForgotPasswordService
{
    protected $forgotPassword;

    public function __construct(ForgotPasswordInterface $forgotPassword)
    {
        $this->service = $forgotPassword;
    }

    public function forgot(array $data)
    {
        return $this->service->forgot($data);
    }

    public function resetPassword(array $data)
    {
        return $this->service->resetPassword($data);
    }

    /**
     * This function returns all 'Feed Entries'
     *
     * @param string $token
     *
     * @return string
     */
    public function verifyToken($token)
    {
        $data = $this->service->verifyToken($token);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }
}
