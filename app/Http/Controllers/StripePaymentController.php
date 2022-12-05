<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Services\StripePaymentService;
use Illuminate\Http\Request;
use App\Http\Requests\ResubscriptionRequest;
use App\Http\Requests\StripeRequest;

class StripePaymentController extends Controller
{
    protected $stripePaymentService;

    public function __construct(StripePaymentService $stripePaymentService)
    {
        $this->StripePaymentService = $stripePaymentService;
    }

    /**
     * @OA\Post(
     *   path="/api/create/member/subscription",
     *   summary="Create an Member Subscription",
     *   operationId="create_member:subscription",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Stripe"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/token"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */

    public function createMemberSubscription(Request $request)
    {
        return $this->StripePaymentService->createMemberSubscription($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/update/gymnast/subscription",
     *   summary="Update an Member Subscription",
     *   operationId="update_member:subscription",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Stripe"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/token"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/subscription_id"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */

    public function updateMemberSubscription(Request $request)
    {
        return $this->StripePaymentService->updateMemberSubscription($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/update/credit-card",
     *   summary="Update Credit Card",
     *   operationId="update_credit_card",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Stripe"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/token"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/customer_id"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/password"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */

    public function updateCC(StripeRequest $request)
    {
        return $this->StripePaymentService->updateCC($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/cancel/gymnast/subscription",
     *   summary="Cancel Subscriptions",
     *   operationId="cancel_subscriptions",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Stripe"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/customer_id"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/password"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */

    public function cancelMemberSubscription(StripeRequest $request)
    {
        return $this->StripePaymentService->cancelMemberSubscription($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/create/gymnast/subscription",
     *   summary="Create Gymnast Subscriptions",
     *   operationId="create_gymnast_subscriptions",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Stripe"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/tokenOptional"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */

    public function createGymnastSubscription(RegisterUserRequest $request)
    {
        return $this->StripePaymentService->createGymnastSubscription($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/gymnast/resubscription",
     *   summary="Re subscribe",
     *   operationId="re_subscribe",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Stripe"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/token"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */

    public function GymnastResubscription(ResubscriptionRequest $request)
    {
        $data = $this->StripePaymentService->GymnastResubscription($request->all());
        if (! $data) {
            abort(500, 'Error'); 
        }
        return $data;
    }

     /**
     * @OA\Post(
     *   path="/api/gymnast/resubscription/stripe-status",
     *   summary="Re subscribe",
     *   operationId="re_subscribe_for_stripe_status",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Stripe"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/token"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */

    public function GymnastResubscriptionForStripeStatus(ResubscriptionRequest $request)
    {
        $data = $this->StripePaymentService->GymnastResubscriptionForStripeStatus($request->all());
        if (! $data) {
            abort(500, 'Error'); 
        }
        return $data;
    }

    public function gymIsStripe(int $gymId)
    {
        return $this->StripePaymentService->gymIsStripe($gymId);
    }

    public function updatePlan(Request $request, int $planId)
    {
        return $this->StripePaymentService->updatePlan($request->all(), $planId);
    }
}
