<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Requests\SkillListRequest;
use App\Services\SkillListService;
use Illuminate\Http\Request;

class SkillListController extends Controller
{
    protected $SkillListService;

    public function __construct(SkillListService $SkillListService)
    {
        $this->SkillListService = $SkillListService;
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/skill_lists",
     *   summary="Create Skill List",
     *   operationId="create_skill_list",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/nameSkillList"
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
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */
    public function create(SkillListRequest $request, $gymId)
    {
        $data = $request->validated();
        $data['gym_id'] = $gymId;
        return $this->SkillListService->create($data);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/skill_lists?deleted=true",
     *   summary="Skill List by Gym",
     *   operationId="skill_list",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
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
     *      ref="../swagger/definitions.yaml#/components/parameters/deletedSkillList"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/SkillListList"
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
        return $this->SkillListService->list($request->all(), $gymId);
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/skill_lists/{skillListPathId}",
     *   summary="Show skill list",
     *   operationId="show_skill_list",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListPathId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/skillListShow"
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
    public function show($gymId, $skillListId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skillList = $this->SkillListService->show($skillListId);
        if (! $skillList) {
            abort(404, 'Skill List not found');
        }
        return $skillList;
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/{gymPathId}/skill_lists/{skillListPathId}",
     *   summary="Delete skill list",
     *   operationId="delete_skill_list",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListPathId"
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
    public function delete($gymId, $skillListId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skillList = $this->SkillListService->delete($skillListId);
        if (! $skillList) {
            abort(404, 'Skill List not found');
        }
        return $skillList;
    }

    /**
     * @OA\Patch(
     *   path="/api/gyms/{gymPathId}/skill_lists/{skillListPathId}",
     *   summary="Restore Skill List",
     *   operationId="restore_skill_list",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListPathId"
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
     *      response=422,
     *      ref="../swagger/definitions.yaml#/components/responses/UnprocessableEntity"
     *   )
     *  )
     */
    public function restore($gymId, $skillListId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skillList = $this->SkillListService->restore($skillListId);
        if (! $skillList) {
            abort(404, 'Skill List not found');
        }
        return $skillList;
    }

    /**
     * @OA\Post(
     *   path="/api/gyms/{gymPathId}/skill_lists/assign/skills",
     *   summary="Skill List Assign Skill",
     *   operationId="create_skill_list",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillId"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/SkillListMyListResponse"
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

    public function assign(Request $request, int $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->SkillListService->assign($request->all(), $gymId);
    }

    /**
     * @OA\Delete(
     *   path="/api/gyms/{gymPathId}/skill_lists/{skillListPathId}/skills/{skillPathId}",
     *   summary="Delete skill of skillList",
     *   operationId="delete_skill",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListPathId"
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
    public function deleteSkill($gymId, int $skillList, int $skill)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $skill = $this->SkillListService->deleteSkill($skillList, $skill);
        if (! $skill) {
            abort(404, 'Skill List not found');
        }
        return $skill;
    }

    /**
     * @OA\Put(
     *   path="/api/gyms/{gymPathId}/skill_lists/{skillListPathId}",
     *   summary="Update Skill List",
     *   operationId="update_skill_list",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Skill List"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/nameSkillList"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/skillListOrder"
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
    public function update(SkillListRequest $request, $gymId, $skillListId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        $data = $request->validated();
        $data['gym_id'] = $gymId;
        $skillList = $this->SkillListService->update($data, $skillListId);
        if (! $skillList) {
            abort(404, 'Skill List not found');
        }
        return $skillList;
    }
}
