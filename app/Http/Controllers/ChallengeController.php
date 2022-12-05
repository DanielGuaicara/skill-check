<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\ChallengeRequest;
use App\Services\ChallengeService;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    protected $ChallengeService;

    public function __construct(ChallengeService $ChallengeService)
    {
        $this->ChallengeService = $ChallengeService;
    }
    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/challenges",
     *   summary="Create Challenge",
     *   operationId="create_challenge",
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
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeDescription"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengePoints"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeIsDaily"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeDailyExpirationDate"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ChallengeReponse"
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
    public function create(ChallengeRequest $request, $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $data['gym_id'] = $gymId;
        return $this->ChallengeService->create($data);
    }

    /**
     * @OA\Post(
     *   path="/api/generic/challenges",
     *   summary="Create Generic Challenge",
     *   operationId="create_challenge",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenges"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeDescription"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengePoints"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeIsDaily"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeDailyExpirationDate"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ChallengeReponse"
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
    public function createGenericChallenge(ChallengeRequest $request)
    {
        $data = $request->validated();
        return $this->ChallengeService->createGenericChallenge($data);
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/challenges/{challengePathId}",
     *   summary="Update Challenge",
     *   operationId="update_challenge",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenges"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengePathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeIsDaily"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/challengeDailyExpirationDate"
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
    public function update(ChallengeRequest $request, $gymId, $challengeId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $challenge = $this->ChallengeService->update($data, $challengeId);
        if (! $challenge) {
            abort(404, 'Challenge not found');
        }
        return $challenge->response();
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/challenges",
     *   summary="Challenges of gym",
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
    public function list(Request $request, $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->ChallengeService->list($request->all(), $gymId);
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/{gymPathId}/challenges/",
     *   summary="Challenge Delete",
     *   operationId="delete_challenge",
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
     *      ref="../swagger/definitions.yaml#/components/parameters/challengePathId"
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
    public function delete($gymId, $challengeId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $challenge = $this->ChallengeService->delete($challengeId);
        if (! $challenge) {
            abort(404, 'Challenge not found');
        }
        return $challenge->response();
    }

    /**
     * @OA\Get(
     *   path="/api/challenges/all",
     *   summary="Challenges",
     *   operationId="list_challenges",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenges"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
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
    public function getAll(Request $request)
    {
        return $this->ChallengeService->getAll($request->all());
    }

    /**
     * @OA\Get(
     *   path="/api/gymnast/{gymnastMemberPathId}/challenges/expired",
     *   summary="Challenges",
     *   operationId="list_challenges_expired",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Challenges"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/search"
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
    public function getExpiredChallengesByMember(Request $request, $memberId)
    {
        return $this->ChallengeService->getExpiredChallengesByMember($request->all(), $memberId);
    }
}
