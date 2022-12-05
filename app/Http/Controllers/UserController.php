<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUserRequest;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user_service;

    public function __construct(UserService $user_service)
    {
        $this->userService = $user_service;
    }

    /**
     * @OA\Get(
     *     path="/api/users/administrators/{id}",
     *     summary="Show user by Id",
     *     security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Administrator"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/id"
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
    public function showAdminUser($id)
    {
        $user = $this->userService->showAdminUser($id);
        if ($user === null) {
            abort(404, 'User not found');
        }
        return $user;
    }

    /**
     * @OA\Get(
     *   path="/api/users/administrators",
     *   summary="List of all active admin users",
     *   operationId="list_admin",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Administrator"},
     *
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/usersList"
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

    public function listAdmins(Request $request)
    {
        return $this->userService->listAdmins($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/users/administrators",
     *   summary="Create an admin user",
     *   operationId="create_admin",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Administrator"},
     *
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/name"
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

    public function createAdminUser(AdminUserRequest $request)
    {
        $this->authorize('checkIfUserIsInactiveAndTaken', [$request->email, null]);
        $user = $this->userService->createAdminUser($request->all());
        return $user->response();
    }

    /**
     * @OA\Put(
     *   path="/api/users/administrators/{id}",
     *   summary="Update an admin user",
     *   operationId="update_admin",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Administrator"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/UserPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/name"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/passwordUpdate"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/repeatPasswordUpdate"
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

    public function updateAdminUser(AdminUserRequest $request, int $id)
    {
        $this->authorize('checkIfUserIsInactiveAndTaken', [$request->email, User::find($id)]);
        $user = $this->userService->updateAdminUser($request->all(), $id);
        return $user->response();
    }

    /**
     * @OA\Delete(
     *   path="/api/users/administrators/{id}",
     *   summary="Delete an admin user",
     *   operationId="delete_admin",
     *   security={
     *       {
     *           "tokenBased":{}
     *       }
     *   },
     *   tags={"Administrator"},
     *   @OA\Parameter(
     *       ref="../swagger/definitions.yaml#/components/parameters/UserPathId"
     *   ),
     *   @OA\Response(
     *       response=200,
     *       ref="../swagger/definitions.yaml#/components/responses/Success"
     *   ),
     *   @OA\Response(
     *       response=401,
     *       ref="../swagger/definitions.yaml#/components/responses/Unauthorized"
     *   ),
     *   @OA\Response(
     *       response=404,
     *       ref="../swagger/definitions.yaml#/components/responses/UserNotFound"
     *   ),
     *   @OA\Response(
     *       response=403,
     *       ref="../swagger/definitions.yaml#/components/responses/Forbidden"
     *   )
     * )
     */

    public function deleteAdminUser(int $id)
    {
        if ($id === auth()->user()->id) {
            abort(403, 'Forbidden');
        }

        $user = $this->userService->deleteAdminUser($id);

        if ($user === false) {
            abort(404);
        }
        return $user->response();
    }

    /**
     * @OA\Patch(
     *     path="/api/users/administrators/{email}/restore",
     *     summary="restore user by email",
     *     security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Administrator"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/email"
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
    public function restoreAdminUser(string $email)
    {
        $user = $this->userService->restoreAdminUser($email);
        if ($user === null) {
            abort(404, 'User not found');
        }
        return $user;
    }

    /**
     * @OA\Get(
     *     path="/api/users/roles/{email}",
     *     summary="Check role of a user by email",
     *     security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Users"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/emailPath"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/CheckRole"
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

    public function checkRole(string $email)
    {
        $user = $this->userService->checkRole($email);
        if ($user === null) {
            abort(404, 'User not found');
        }
        return $user->response();
    }

    /**
     * @OA\Get(
     *     path="/api/users/administrators/{email}/assign",
     *     summary="Check role of a user by email",
     *     security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Users"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/emailPath"
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

    public function assignAdmin(string $email)
    {
        $user = $this->userService->assignAdmin($email);
        return $user->response();
    }

    public function userEmailExist(string $email)
    {
        return $this->userService->userEmailExist($email);
    }
}
