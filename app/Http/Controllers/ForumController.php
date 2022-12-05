<?php

namespace App\Http\Controllers;

use App\Services\ForumService;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    protected $ForumService;

    public function __construct(ForumService $ForumService)
    {
        $this->ForumService = $ForumService;
    }

    /**
     * @OA\Post(
     *   path="/api/auth/login/sso",
     *   summary="Forum Login",
     *   operationId="forum_login",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Forum"},
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
     *      ref="../swagger/definitions.yaml#/components/parameters/imgProfile"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/sso"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/sig"
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
    public function forumLogin(Request $request) {
        return $this->ForumService->forumLogin($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/auth/logout/sso",
     *   summary="Forum Logout",
     *   operationId="forum_logout",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Forum"},
     *
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
    public function forumLogout() {
        $data = $this->ForumService->forumLogout();
        if (! $data) {
            abort(404, 'User no Found');
        }
        return $data;
    }
}
