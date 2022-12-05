<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Interfaces\StripePaymentInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class StripePaymentService
{
    protected $service;

    public function __construct(StripePaymentInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function createMemberSubscription(array $data)
    {
        return $this->service->createMemberSubscription($data);
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function updateMemberSubscription(array $data)
    {
        return $this->service->updateMemberSubscription($data);
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [name, description, category_id, level_id, certificate]
     *
     * @return mixed
     */
    public function updateCC(array $data)
    {
        if (Hash::check($data['password'], auth()->user()->password)) {
            return $this->service->updateCC($data);
        } else {
            abort(422, Lang::get('messages.auth_login_422_password'));
        }
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function cancelMemberSubscription(array $data)
    {
        if (Hash::check($data['password'], auth()->user()->password)) {
            return $this->service->cancelMemberSubscription($data);
        } else {
            abort(422, Lang::get('messages.auth_login_422_password'));
        }
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function createGymnastSubscription(array $data)
    {
        return $this->service->createGymnastSubscription($data);
    }

    /**
     * This function re-subscribe a gymnast User in database
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function GymnastResubscription(array $data)
    {
        $data = $this->service->GymnastResubscription($data);
        if ($data === true) {
            return new DefaultResource($data); 
        }
        return $data;
    }

    /**
     * This function re-subscribe a gymnast User in database with stripe status [canceled,unpaid]
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function GymnastResubscriptionForStripeStatus(array $data)
    {
        $data = $this->service->GymnastResubscriptionForStripeStatus($data);
        if ($data === true) {
            return new DefaultResource($data); 
        }
        return $data;
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param int $gymId
     *
     * @return mixed
     */
    public function gymIsStripe(int $gymId)
    {
        return $this->service->gymIsStripe($gymId);
    }

    /**
     * This function update a plan in database
     *
     * @param array $data An array [product_id]
     * 
     * @param int $planId
     *
     * @return mixed
     */
    public function updatePlan(array $data, int $planId)
    {
        $data = $this->service->updatePlan($data, $planId);
        if ($data) {
            return new DefaultResource($data); 
        }
        return $data;
    }
}
