<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\EventRequest;
use App\Services\EventService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $EventService;

    public function __construct(EventService $EventService)
    {
        $this->EventService = $EventService;
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/events",
     *   summary="Create a event of gym",
     *   operationId="create_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Events"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(ref="../swagger/definitions.yaml#/components/schemas/EventModel")
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
    public function create(EventRequest $request, $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $data['gym_id'] = $gymId;
        $event = $this->EventService->create($data);
        return $event->response();
    }

    /**
     * @OA\Patch(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}",
     *   summary="Update a event of gym",
     *   operationId="update_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Events"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     *   @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(ref="../swagger/definitions.yaml#/components/schemas/EventModel")
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
    public function update(EventRequest $request, $gymId, $id)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $data['gym_id'] = $gymId;
        $event = $this->EventService->update($data, $id);
        if (! $event) {
            abort(404, 'Event not found');
        }
        return $event->response();
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}",
     *   summary="Delete a event of gym",
     *   operationId="delete_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Events"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
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
    public function delete($gymId, $id)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $event = $this->EventService->delete($gymId, $id);
        if (! $event) {
            abort(404, 'Event not found');
        }
        return $event->response();
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}",
     *   summary="Restore a event of gym",
     *   operationId="restore_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Events"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/EventShow"
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
    public function restore($gymId, $id)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $event = $this->EventService->restore($gymId, $id);
        if (! $event) {
            abort(404, 'Event not found');
        }
        return $event;
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/events",
     *   summary="List a event of gym",
     *   operationId="list_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Events"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/eventsList"
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
        return $this->EventService->list($request->all(), $gymId);
    }
}
