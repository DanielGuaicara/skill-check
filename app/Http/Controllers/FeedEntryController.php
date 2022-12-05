<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Services\FeedEntryService;
use Illuminate\Http\Request;

class FeedEntryController extends Controller
{
    protected $FeedEntryService;

    public function __construct(FeedEntryService $FeedEntryService)
    {
        $this->FeedEntryService = $FeedEntryService;
    }
    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/feed",
     *   summary="List a Feed Entries of the gymnasts",
     *   operationId="list_skills_per_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"FeedEntries"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/offset"
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

    public function feedSkill(Request $request, $gymId)
    {
        $this->authorize('gymUserHasAccess', [Gym::find($gymId)]);
        return $this->FeedEntryService->feedSkill($request->all(), $gymId);
    }
}
