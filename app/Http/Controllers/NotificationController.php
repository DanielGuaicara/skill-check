<?php

namespace App\Http\Controllers;

use App\Gym;
use Illuminate\Http\Request;
use App\Services\NotificationService;
use App\Http\Requests\CreateNotificationRequest;
use App\Http\Requests\NotificationRequest;

class NotificationController extends Controller
{
    protected $NotificationService;

    public function __construct(NotificationService $NotificationService)
    {
        $this->NotificationService = $NotificationService;
    }

    /**
     *  @OA\Get(
     *   path="/api/notifications",
     *   summary="List Notifications from admin",
     *   operationId="listNotifications",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Notifications"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/order"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/column"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
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
    public function listFromAdmin(Request $request)
    {
        return $this->NotificationService->listFromAdmin($request->all());
    }

    /**
     * @OA\Post(
     *   path="/api/notifications",
     *   summary="Create Notification",
     *   operationId="create_notification",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Notifications"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/title"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/description"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymId"
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
    public function create(CreateNotificationRequest $request)
    {
        return $this->NotificationService->create($request->all());
    }
    
    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/notifications ",
     *   summary="List Notifications of a Gym",
     *   operationId="list_notifications",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Notifications"},
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
    public function listFromGymAdmin(Request $request, int $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->NotificationService->listFromGymAdmin($request->all(), $gymId);
    }

    /**
     * @OA\Put(
     *   path="/api/notifications/{notificationPathId}",
     *   summary="Create Notification",
     *   operationId="create_notification",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Notifications"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/notificationPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/title"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/description"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/status"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/classId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymId"
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
    public function updateFromGymAdmin(NotificationRequest $request, int $gymId, int $notificationId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $this->NotificationService->updateFromGymAdmin($request->all(), $gymId, $notificationId);
        if (! $data) {
            abort(500, "An error has occurred");
        }
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(NotificationRequest $request, int $notificationId)
    {
        $data = $this->NotificationService->update($request->all(), $notificationId);
        if (! $data) {
            abort(500, "An error has occurred");
        }
        return $data;
    }

    /**
     *  @OA\Delete(
     *   path="/api/notifications/{notificationPathId}",
     *   summary="List Notifications of a Gym",
     *   operationId="list_notifications",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Notifications"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/notificationPathId"
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
    public function delete(int $notificationId)
    {
        return $this->NotificationService->delete($notificationId);
    }

    /**
     *  @OA\Delete(
     *   path="/api/gyms/{gymPathId}/notifications/{notificationPathId}",
     *   summary="List Notifications of a Gym",
     *   operationId="list_notifications",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Notifications"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/notificationPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
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
    public function deleteFromGymAdmin(int $gymId, int $notificationId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->NotificationService->deleteFromGymAdmin($gymId, $notificationId);
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/notifications/gymnasts",
     *   summary="List Notifications of a Gymnasts",
     *   operationId="list_notifications",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Notifications"},
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
    public function listFromGymnast(Request $request, int $gymId, int $gymnastId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->NotificationService->listFromGymnast($request->all(), $gymId, $gymnastId);
    }
}
