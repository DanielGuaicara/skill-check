<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Services\ForgotPasswordService;

class ForgotPasswordController extends Controller
{
    protected $ForgotPasswordService;

    public function __construct(ForgotPasswordService $ForgotPasswordService)
    {
        $this->ForgotPasswordService = $ForgotPasswordService;
    }

    /**
     * @OA\Post(
     *   path="/api/forgot_password",
     *   summary="Forgot Password",
     *   operationId="forgot_password",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Password"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/url"
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

    public function forgot(ForgotPasswordRequest $request)
    {
        return $this->ForgotPasswordService->forgot($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/reset_password",
     *   summary="Reset Password",
     *   operationId="reset_password",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Password"},
     *
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/token"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/password"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/repeatPassword"
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

    public function resetPassword(ResetPasswordRequest $request)
    {
        return $this->ForgotPasswordService->resetPassword($request->all()); 
    }

    /**
     * @OA\Get(
     *   path="/api/verify_token/{tokenPathId}",
     *   summary="Reset Password",
     *   operationId="reset_password",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Password"},
     *
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/tokenPathId"
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

    public function verifyToken($token)
    {
        $validation = $this->ForgotPasswordService->verifyToken($token);
        if (! $validation) {
            abort(401, 'This password reset token is invalid or expired.');
        }
        return $validation;
    }
}
