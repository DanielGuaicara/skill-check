<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Services\LeaderboardService;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    protected $LeaderboardService;

    public function __construct(LeaderboardService $LeaderboardService)
    {
        $this->LeaderboardService = $LeaderboardService;
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/leaderboard",
     *   summary="User list for the leaderboard",
     *   operationId="leaderboard",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"leaderboard"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/GymnastResponse"
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

    public function leaderboardInfo(int $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->LeaderboardService->leaderboardInfo($gymId);
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/leaderboard/gymnasts/{gymnastMemberPathId}",
     *   summary="Gymnast information needed for the leaderboard",
     *   operationId="leaderboard",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"leaderboard"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/SkillListShow"
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
    public function leaderboardProfile(Request $request, int $gymId, int $memberId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->LeaderboardService->leaderboardProfile($request->all(), $gymId, $memberId);
    }

    public function clearLeaderboard(int $gymId)
    {
        return $this->LeaderboardService->clearLeaderboard($gymId);
    }
}
