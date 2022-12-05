<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Services\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $DashboardService;

    public function __construct(DashboardService $DashboardService)
    {
        $this->DashboardService = $DashboardService;
    }
    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/gymnasts/members/{gymnastMemberPathId}/events",
     *   summary="List Events of Gymnast",
     *   operationId="listEventsGymnast",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"DashBoard"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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
     *      response=403,
     *      ref="../swagger/definitions.yaml#/components/responses/Forbidden"
     *   ),
     *   @OA\Response(
     *      response=500,
     *      ref="../swagger/definitions.yaml#/components/responses/InternalServerError"
     *   )
     *  )
     */

    public function listEvent(int $gymId, int $memberId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->DashboardService->listEvent($memberId, $gymId);
    }

    /**
     *  @OA\Get(
     *   path="/api/timezones/",
     *   summary="List Timezones",
     *   operationId="listTimezones",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"DashBoard"},
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/timezoneList"
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

    public function timezone()
    {
        return $this->DashboardService->timezone();
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/members/{gymnastMemberPathId}/events/{eventPathId}/skills",
     *   summary="List skills of a Event of a Gymnast",
     *   operationId="listSkills",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"DashBoard"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/SkillListShow"
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

    public function listSkill(int $gymId, int $memberId, int $eventId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->DashboardService->listSkill($memberId, $eventId);
    }

    /**
     *  @OA\Get(
     *   path="/api/gyms/{gymPathId}/members/{gymnastMemberPathId}/skills/percentage",
     *   summary="Percentage of the categories of each skill",
     *   operationId="Percentage",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"DashBoard"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/SkillListShow"
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

    public function percentage(int $gymId, int $memberId)
    {
        $this->authorize('gymnastUserHasAccess', [Gym::find($gymId)]);
        return $this->DashboardService->percentage($memberId);
    }

    /**
     *  @OA\Get(
     *   path="/api/members/{gymnastMemberPathId}/notifications",
     *   summary="Interactions Notifications",
     *   operationId="get_notification",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Interactions Notifications"},
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/InteractionNotificationResponse"
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

    public function getNotifications(Request $request, int $memberId)
    {
        return $this->DashboardService->getNotifications($request->all(), $memberId);
    }

    /**
     * @OA\Put(
     *   path="/api/members/{gymnastMemberPathId}/notifications/{notificationIdPathId}?",
     *   summary="aupdate status Interactions Notifications",
     *   operationId="update_interaction_notification",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Interactions Notifications"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/notificationIdPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberId"
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

    public function clearNotification(int $memberId, int $notificationId = null)
    {
        $notification = $this->DashboardService->clearNotification($memberId, $notificationId);
        if (! $notification) {
            abort(404, 'Notification not found');
        }
        return $notification;
    }

    public function challengesCount(int $gymId, int $gymnastId)
    {
        return $this->DashboardService->challengesCount($gymId, $gymnastId);
    }
}
