<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\AddGymnastUserRequest;
use App\Http\Requests\CreateGymnastRequest;
use App\Http\Requests\CreateGymnastForAdminRequest;
use App\Http\Requests\UpdateGymnastRequest;
use App\Services\GymnastService;
use Illuminate\Http\Request;

class GymnastController extends Controller
{
    protected $GymnastService;

    public function __construct(GymnastService $GymnastService)
    {
        $this->GymnastService = $GymnastService;
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/gymnasts",
     *   summary="Create a Gymnast Member and update the gymnast-type User credentials",
     *   operationId="create_gymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/firstName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/lastName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/birthDate"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/password"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/repeatPassword"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Response(
     *      response=201,
     *      ref="../swagger/definitions.yaml#/components/responses/GymnastResponse"
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

    public function add(AddGymnastUserRequest $request, int $gymId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        $gymnastUser = $this->GymnastService->add($request->all(), $gymId);
        return $gymnastUser->response();
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/gymnasts/members",
     *   summary="Create an Gymnast Member",
     *   operationId="create_gymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/firstName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/lastName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/birthDate"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/password"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/customer_id"
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

    public function create(CreateGymnastRequest $request, int $gymId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        $gymnastUser = $this->GymnastService->create($request->all(), $gymId);
        return $gymnastUser->response();
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}",
     *   summary="update an Gymnast Member",
     *   operationId="update_gymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/firstName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/lastName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/about"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/timezone"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classIdMultiple"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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

    public function update(UpdateGymnastRequest $request, int $gymId, int $gymnastId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        $gymnastUser = $this->GymnastService->update($request->all(), $gymnastId);
        return $gymnastUser->response();
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}",
     *   summary="List Gymnast",
     *   operationId="listGymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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

    public function list(int $gymId, int $memberId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastService->list($memberId);
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/members/{gymnastMemberPathId}/picture",
     *   summary="Update Profile Image",
     *   operationId="update_gymnast",
     *   @OA\RequestBody(
     *      @OA\MediaType(
     *             mediaType="multipart/form-data",
     *              @OA\Schema(
     *                 @OA\Property(
     *                     property="file",
     *                     type="file",
     *                 ),
     *              )
     *         )
     *   ),
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId",
     *      in="path",
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId",
     *      in="path",
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/Imageresponse"
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

    public function profilePicture(Request $request, int $gymId, int $gymnastId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        $image = $request->file('file')->getRealPath();
        return $this->GymnastService->profilePicture($image, $gymnastId);
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}/challenges",
     *   summary="List Challenges Featured of Gymnast",
     *   operationId="listChallengeOfGymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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
     *      response=403,
     *      ref="../swagger/definitions.yaml#/components/responses/Forbidden"
     *   ),
     *   @OA\Response(
     *      response=500,
     *      ref="../swagger/definitions.yaml#/components/responses/InternalServerError"
     *   )
     *  )
     */
    public function challenges(int $gymId, int $memberId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastService->challenges($memberId);
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}/challenges_regular",
     *   summary="List Challenges Regular of Gymnast",
     *   operationId="listChallengeRegularOfGymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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
     *      response=403,
     *      ref="../swagger/definitions.yaml#/components/responses/Forbidden"
     *   ),
     *   @OA\Response(
     *      response=500,
     *      ref="../swagger/definitions.yaml#/components/responses/InternalServerError"
     *   )
     *  )
     */
    public function challengesRegular(Request $request, int $gymId, int $memberId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastService->challengesRegular($memberId, $request->all());
    }

    /**
     *  @OA\Put(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}/challenges/{challengePathId}/pending",
     *   summary="Update Challenge at Pending of Gymnast",
     *   operationId="updateChallengeOfGymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
     *   ),
     *   @OA\Parameter(
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
     *      response=403,
     *      ref="../swagger/definitions.yaml#/components/responses/Forbidden"
     *   ),
     *   @OA\Response(
     *      response=500,
     *      ref="../swagger/definitions.yaml#/components/responses/InternalServerError"
     *   )
     *  )
     */
    public function updatedChallengePending($gymId, int $memberId, int $challengeId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        $challenge = $this->GymnastService->updatedChallengePending($memberId, $challengeId);
        if (! $challenge) {
            abort(404, 'Challenge not found');
        }
        return $challenge;
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/members",
     *   summary="List Members of a Gym",
     *   operationId="listMember",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/column"
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

    public function getMemberByGym(Request $request, int $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastService->getMemberByGym($request->all(), $gymId);
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/members/paginated",
     *   summary="List Members of a Gym Paginated",
     *   operationId="listMember",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast"},
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

    public function getMemberByGymPaginated(Request $request, int $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastService->getMemberByGymPaginated($request->all(), $gymId);
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/admin/gymnasts/members/{gymnastMemberPathId}",
     *   summary="update an Gymnast Member",
     *   operationId="update_gymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast Admin"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/firstName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/lastName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/about"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/timezone"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classIdMultiple"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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

    public function updateGymnastAdminSide(UpdateGymnastRequest $request, int $gymId, int $gymnastId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        $gymnastUser = $this->GymnastService->updateGymnastAdminSide($request->all(), $gymnastId);
        return $gymnastUser->response();
    }

    /**
     *  @OA\Delete(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}",
     *   summary="Delete Gymnast",
     *   operationId="deleteGymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast Admin"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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

    public function deleteGymnast(int $gymId, int $memberId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->GymnastService->deleteGymnast($memberId);
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/gymnasts/admin/members",
     *   summary="Create an Gymnast Member For Admin Side",
     *   operationId="create_gymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gymnast Admin"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/firstName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/lastName"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/birthDate"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastUserId"
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

    public function createGymnastForAdmin(CreateGymnastForAdminRequest $request, int $gymId)
    {
        $gymnastUser = $this->GymnastService->createGymnastForAdmin($request->all(), $gymId);
        return $gymnastUser->response();
    }
}
