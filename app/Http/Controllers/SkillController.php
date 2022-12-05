<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\SkillRequest;
use App\Services\SkillService;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    protected $SkillService;

    public function __construct(SkillService $SkillService)
    {
        $this->SkillService = $SkillService;
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}/skills",
     *   summary="create skill",
     *   operationId="create_skill",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skills"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/nameSkill"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/descriptionSkill"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/categoryIdSkill"
     *   ),
     * @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/levelIdSkill"
     *   ),
     * @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/certificateSkill"
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
    public function create(SkillRequest $request, $gymId, $eventId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $data['event_id'] = $eventId;
        return $this->SkillService->create($data);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}/skills",
     *   summary="List a skills per event of gym",
     *   operationId="list_skills_per_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skills"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/skillsList"
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
    public function list($gymId, $id)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skills = $this->SkillService->list($gymId, $id);
        if (! $skills) {
            abort(404, 'Event not found');
        }
        return $skills;
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}/skills/{skillPathId}",
     *   summary="Show skill",
     *   operationId="show_skill",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skills"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/skillShow"
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
    public function show($gymId, $eventId, $skillId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skill = $this->SkillService->show($skillId);
        if (! $skill) {
            abort(404, 'skill not found');
        }
        return $skill;
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}/skills/{skillPathId}",
     *   summary="update skill",
     *   operationId="update_skill",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skills"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     * @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/nameSkill"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/descriptionSkill"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/categoryIdSkill"
     *   ),
     * @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/levelIdSkill"
     *   ),
     * @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/certificateSkill"
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
    public function update(SkillRequest $request, $gymId, $eventId, $skillId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $data['event_id'] = $eventId;
        return $this->SkillService->update($data, $skillId);
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/{gymPathId}/events/{eventPathId}/skills/{skillPathId}",
     *   summary="Delete skill",
     *   operationId="delete_skill",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skills"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/eventPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillPathId"
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
    public function delete($gymId, $eventId, $skillId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skill = $this->SkillService->delete($skillId);
        if (! $skill) {
            abort(404, 'skill not found');
        }
        return $skill;
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/skills/{skillPathId}/members/{gymnastMemberPathId}",
     *   summary="update skill Progress",
     *   operationId="update_skill",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skills"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     * @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/progressStatus"
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
    public function updateProgress(Request $request, $gymId, $skillId, $memberId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skill = $this->SkillService->updateProgress($request->all(), $memberId, $skillId);
        if (! $skill) {
            abort(404, 'Error');
        }
        return $skill->response();
    }
}
