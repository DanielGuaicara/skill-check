<?php

namespace App\Interfaces;

interface StripePaymentInterface
{
    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function createMemberSubscription(array $data);

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function updateMemberSubscription(array $data);

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function updateCC(array $data);

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, customer_id]
     *
     * @return mixed
     */
    public function cancelMemberSubscription(array $subscription);

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function createGymnastSubscription(array $subscription);
    
    /**
     * This function re-subscribe a gymnast User in database
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function GymnastResubscription(array $data);

    /**
     * This function re-subscribe a gymnast User in database with stripe status [canceled,unpaid]
     *
     * @param array $data An array [token, email]
     *
     * @return mixed
     */
    public function GymnastResubscriptionForStripeStatus(array $data);

    /**
     * This function creates a new 'skill' in database
     *
     * @param int $gymId
     *
     * @return mixed
     */
    public function gymIsStripe(int $gymId);

    /**
     * This function update a plan in database
     *
     * @param array $data An array [product_id]
     * 
     * @param int $planId
     *
     * @return mixed
     */
    public function updatePlan(array $data, int $planId);
}
