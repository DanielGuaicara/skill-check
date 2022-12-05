<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedFunctionRequest;
use App\Services\FeedFunctionService;
use Illuminate\Http\Request;

class FeedFunctionController extends Controller
{
    protected $FeedFunctionService;

    public function __construct(FeedFunctionService $FeedFunctionService)
    {
        $this->FeedFunctionService = $FeedFunctionService;
    }

    public function userBirthdayFeedEntry()
    {
        $data = $this->FeedFunctionService->userBirthdayFeedEntry();
        if ($data === true) {
            echo 'Completed';
        } else {
            echo 'Not Completed';
        }
    }

    /**
     * @OA\Put(
     *   path="/api/feed/{feedPathId}/interaction/{codePath}",
     *   summary="Add an interaction to a feed",
     *   operationId="update_feed_with_interaction",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"FeedInteractions"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/feedPathId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/codePath"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberId"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/isComment"
     *   ),
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/comment"
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

    public function addFeedinteraction(FeedFunctionRequest $request, $feedId, $codeInteraction)
    {
        return $this->FeedFunctionService->addFeedinteraction($request->all(), $feedId, $codeInteraction);
    }

    /**
     * @OA\Get(
     *   path="/api/feed/{feedPathId}/interaction",
     *   summary="Get an interaction to a feed",
     *   operationId="list_skills_per_event",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"FeedInteractions"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/feedPathId"
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

    public function getFeedinteraction(Request $request, $feedId)
    {
        return $this->FeedFunctionService->getFeedinteraction($request->all(), $feedId);
    }
}
