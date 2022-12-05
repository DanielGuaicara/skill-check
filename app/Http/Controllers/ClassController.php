<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\ClassRequest;
use App\Services\ClassService;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    protected $ClassService;

    public function __construct(ClassService $classService)
    {
        $this->ClassService = $classService;
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/classes",
     *   summary="Create an Class",
     *   operationId="create_class",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Classes"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/name"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/description"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListId"
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

    public function create(ClassRequest $request, $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $class = $this->ClassService->create($request->all());
        return $class->response();
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/{gymPathId}/classes/{classPathId}",
     *   summary="Delete a class",
     *   operationId="delete_class",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Classes"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classPathId"
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
    public function delete($gymId, $classId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $class = $this->ClassService->delete($classId);
        if (! $class) {
            abort(404, 'Class not found');
        }
        return $class->response();
    }
    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/classes/{classPathId}",
     *   summary="Update an Class",
     *   operationId="update_class",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Classes"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/className"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/description"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListId"
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

    public function update(ClassRequest $request, $gymId, $classId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $class = $this->ClassService->update($request->all(), $classId);
        if (! $class) {
            abort(404, 'Class not found');
        }
        return $class->response();
    }

    /**
     * @OA\Patch(
     *   path="/api/gyms/{gymPathId}/classes/{classPathId}",
     *   summary="Restore a class",
     *   operationId="restore_class",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Classes"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classPathId"
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
    public function restore($gymId, $classId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $class = $this->ClassService->restore($classId);
        if (! $class) {
            abort(404, 'Class not found');
        }
        return $class;
    }
    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/classes",
     *   summary="Class List",
     *   operationId="list_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Classes"},
     *  @OA\Parameter(
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
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/deleted"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ClassResponse"
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
        return $this->ClassService->list($request->all(), $gymId);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/classes/{classPathId}",
     *   summary="Show Class",
     *   operationId="show_class",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Classes"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/ClassResponse"
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
    public function show($gymId, $classId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $class = $this->ClassService->show($classId);
        if (! $class) {
            abort(404, 'class not found');
        }
        return $class;
    }
}
