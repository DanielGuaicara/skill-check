<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\CreateGymUserRequest;
use App\Http\Requests\UpdateGymUserRequest;
use App\Services\GymUserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class GymUserController extends Controller
{
    protected $GymUserService;

    public function __construct(GymUserService $GymUserService)
    {
        $this->GymUserService = $GymUserService;
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/users/{gymUserId}",
     *   summary="delete Gym by id As Admin",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymUserId"
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

    public function delete(int $gymUserId)
    {
        $gymUser = $this->GymUserService->delete($gymUserId);
        if (! $gymUser) {
            abort(404, 'User not found');
        }
        return $gymUser->response();
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/{gymPathId}/users/{gymUserId}",
     *   summary="delete Gym by id As gym",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymUserId"
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

    public function deleteAsGym(int $gymId, int $gymUserId)
    {
        $this->authorize('deleteGymUser', [Gym::find($gymId), User::find($gymUserId)]);
        $gym = $this->GymUserService->deleteAsGym($gymId, $gymUserId);
        return $gym->response();
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/users",
     *   summary="Create an Gym user",
     *   operationId="create_gym_user",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/name"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/password"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/repeatPassword"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymIdMultiple"
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
    public function create(CreateGymUserRequest $request)
    {
        if (auth()->user()->hasRole('admin')) {
            $this->authorize('updateOrCreateGymUserAsAdmin', [$request->email, 'create']);
        } else {
            Gate::authorize('createGymUserAsGym', [$request->email, $request->gym_id]);
        }
        $gymUser = $this->GymUserService->create($request->all());
        if ($gymUser === false) {
            abort(401);
        }
        return $gymUser->response();
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/users/{gymUserId}",
     *   summary="Edit an Gym user",
     *   operationId="edit_gym_user",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymUserId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/name"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/password"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/repeatPassword"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymIdMultiple"
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

    public function edit(UpdateGymUserRequest $request, int $id)
    {
        if (auth()->user()->hasRole('gym')) {
            $this->authorize('gymUserHasAccess', [Gym::find($request->gym_id[0])]);
        }
        Gate::authorize('updateOrCreateGymUserAsAdmin', [$request->email, 'update', $id]);
        $gymUser = $this->GymUserService->edit($request->all(), $id);
        return $gymUser->response();
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/users/{gymUserId}",
     *   summary="Get Gym User",
     *   operationId="getGyms",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymUserId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/userShow"
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

    public function get(int $gymUserId)
    {
        return $this->GymUserService->get($gymUserId);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/users/{gymUserId}",
     *   summary="Get Gym User",
     *   operationId="getGyms",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymUserId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/userShow"
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

    public function getAsGym(int $gymId, int $gymUserId)
    {
        $this->authorize('getGymUserHasAccess', [Gym::find($gymId), $gymUserId]);
        return $this->GymUserService->get($gymUserId);
    }
    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/users/",
     *   summary="List GymUsers As Gym",
     *   operationId="listGymUsers",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/column"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/search"
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

    public function listAsGym(Request $request, int $id)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($id)]);
        return $this->GymUserService->listAsGym($request->all(), $id);
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/users/",
     *   summary="List GymUsers As Admin",
     *   operationId="listGymUsers",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"GymUser"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/column"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/search"
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

    public function listAsAdmin(Request $request)
    {
        return $this->GymUserService->listAsAdmin($request->all());
    }
}
