<?php

namespace App\Http\Controllers;

use App\Services\ChallengeAdminService;
use Illuminate\Http\Request;

class ChallengeAdminController extends Controller
{
    protected $ChallengeAdminService;

    public function __construct(ChallengeAdminService $ChallengeAdminService)
    {
        $this->ChallengeAdminService = $ChallengeAdminService;
    }
    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/challenges/daily",
     *   summary="Challenges",
     *   operationId="list_challenges_expired",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenge Admin"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ChallengeListResponse"
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
    public function getDailyChallengesAdmin(Request $request, $gymId) {
        return $this->ChallengeAdminService->getDailyChallengesAdmin($request->all(), $gymId);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/challenges/regular",
     *   summary="Challenges",
     *   operationId="list_challenges_expired",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenge Admin"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ChallengeListResponse"
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

    public function getRegularChallengesAdmin(Request $request, $gymId) {
        return $this->ChallengeAdminService->getRegularChallengesAdmin($request->all(), $gymId);
    }

    /**
     * @OA\Get(
     *   path="/api/challenges/all/daily",
     *   summary="Challenges",
     *   operationId="list_challenges_expired",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenge Admin"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ChallengeListResponse"
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
    public function getAllDailyChallengesAdmin(Request $request) {
        return $this->ChallengeAdminService->getAllDailyChallengesAdmin($request->all());
    }

    /**
     * @OA\Get(
     *   path="/api/challenges/all/regular",
     *   summary="Challenges",
     *   operationId="list_challenges_expired",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenge Admin"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ChallengeListResponse"
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

    public function getAllRegularChallengesAdmin(Request $request) {
        return $this->ChallengeAdminService->getAllRegularChallengesAdmin($request->all());
    }
}
