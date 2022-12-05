<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\CompletedChallengeRequest;
use App\Services\CompletedChallengeService;
use Illuminate\Http\Request;

class CompletedChallengeController extends Controller
{
    protected $CompletedChallengeService;

    public function __construct(CompletedChallengeService $CompletedChallengeService)
    {
        $this->CompletedChallengeService = $CompletedChallengeService;
    }

    /**
     *  @OA\Post(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}/challenges",
     *   summary="Create Completed Challenge",
     *   operationId="CreateCompletedChallenge",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Completed Challenge"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/mediaPath"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/mediaCaption"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/file"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/CompletedChallengeResponse"
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
    public function create(CompletedChallengeRequest $request, $gymId, int $memberId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $file = $request->file('file') ? ['content' => $request->file('file')->getRealPath(), 'type' => $request->file('file')->getMimeType()] : null;
        $data['gymnast_id'] = $memberId;
        return $this->CompletedChallengeService->create($data, $file);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/gymnasts/challenges/carousel",
     *   summary="Challenges for Carousel",
     *   operationId="list_challenges_with_callhenges_completed",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Completed Challenge"},
     *  @OA\Parameter(
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

    public function feedCarousel(int $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->CompletedChallengeService->feedCarousel($gymId);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/gymnasts/challenges-media",
     *   summary="Challenges Media List",
     *   operationId="list_challenges",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenges"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ChallengeMediaResponse"
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
    public function completedChallengesMediaList(Request $request, int $gymId)
    {
        return $this->CompletedChallengeService->completedChallengesMediaList($request->all(), $gymId);
    }
}
