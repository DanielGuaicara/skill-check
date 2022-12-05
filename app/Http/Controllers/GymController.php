<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\GymRequest;
use App\Services\GymService;
use Illuminate\Http\Request;

class GymController extends Controller
{
    protected $GymService;

    public function __construct(GymService $GymService)
    {
        $this->GymService = $GymService;
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/search",
     *   summary="List Gyms By Coincidence",
     *   operationId="getGyms",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gyms"},
     *
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *  @OA\Parameter(
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

    public function getGym(Request $request)
    {
        return $this->GymService->getGym($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/gyms",
     *   summary="Create a gym",
     *   operationId="create_gym",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gyms"},
     *   @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(ref="../swagger/definitions.yaml#/components/schemas/CreateGymRequest")
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

    public function create(GymRequest $request)
    {
        $gym = $this->GymService->create($request->all());
        return $gym->response();
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/",
     *   summary="List Gyms",
     *   operationId="list_gyms",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gyms"},
     *
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

    public function list(Request $request)
    {
        return $this->GymService->list($request->all());
    }

    /**
     * @OA\Put(
     *   path="/api/gyms",
     *   summary="Update a gym",
     *   operationId="update_gym",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gyms"},
     *   @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(ref="../swagger/definitions.yaml#/components/schemas/UpdateGymRequest")
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

    public function update(GymRequest $request)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($request->id)]);
        $gym = $this->GymService->update($request->all());
        if ($gym === false) {
            abort(404, 'Gym not found');
        }
        return $gym->response();
    }

    /**
     * @OA\Delete(
     *     path="/api/gyms/{id}",
     *     summary="delete Gym by id",
     *     security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gyms"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/idPath"
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

    public function delete(int $id)
    {
        $gym = $this->GymService->delete($id);

        if (! $gym) {
            abort(404, 'Gym not found');
        }
        return $gym->response();
    }

    /**
     * @OA\Get(
     *     path="/api/gyms/{id}",
     *     summary="Show gym by Id",
     *     security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gyms"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/idPath"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/GymShow"
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

    public function show(int $id)
    {
        $gym = $this->GymService->show($id);
        if ($gym === null) {
            abort(404, 'Gym not found');
        }
        return $gym;
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/all",
     *   summary="List Gyms without authentication",
     *   operationId="get_gyms_without_authentication",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Gyms"},
     *
     *  @OA\Response(
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

    public function getGymForList()
    {
        return $this->GymService->getGymForList();
    }
}
