<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\CreateGymnastUserRequest;
use App\Services\GymnastUserService;
use Illuminate\Http\Request;

class GymnastUserController extends Controller
{
    protected $GymnastUserService;

    public function __construct(GymnastUserService $GymnastUserService)
    {
        $this->GymnastUserService = $GymnastUserService;
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/gymnasts",
     *   summary="Create a gymnast type user",
     *   operationId="create_gymnast_user",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymnastUser"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/url"
     *   ),
     *   @OA\Response(
     *      response=200,
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

    public function create(CreateGymnastUserRequest $request)
    {
        $this->authorize('createGymnast', [Gym::find($request->gym_id), $request->email]);
        $gymnastUser = $this->GymnastUserService->create($request->all());
        return $gymnastUser->response();
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/gymnasts/",
     *   summary="List Gymnast User",
     *   operationId="listGymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymnastUser"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/GymListResponse"
     *   ),
     *   @OA\Response(
     *      response=401,
     *      ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *      response=403,
     *      ref="../swagger/definitions.yaml#/components/responses/Forbidden"
     *   ),
     *   @OA\Response(
     *      response=500,
     *      ref="../swagger/definitions.yaml#/components/responses/InternalServerError"
     *   )
     *  )
     */

    public function list(Request $request, int $gymId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastUserService->list($request->all(), $gymId);
    }

    /**
     * @OA\GET(
     *   path="/api/gyms/{gymPathId}/invitation/{email}",
     *   summary="Resend Invitation for Gymnast user",
     *   operationId="resend_invitation_gymnast_user",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymnastUser"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/emailPath"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/url"
     *   ),
     *   @OA\Response(
     *      response=200,
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
    public function resendAcountInformation(Request $request, int $gymId, string $email)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastUserService->resendAcountInformation($request->all(), $gymId, $email);
    }

    public function changePasswordFromAdmin(Request $request, int $gymId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        $gymnastUser = $this->GymnastUserService->changePasswordFromAdmin($request->all(),$gymId);
        return $gymnastUser->response();
    }
    
}
