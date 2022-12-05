<?php

namespace App\Http\Controllers;

use App\Services\LevelService;

class LevelController extends Controller
{
    protected $LevelService;

    public function __construct(LevelService $LevelService)
    {
        $this->LevelService = $LevelService;
    }

    /**
     * @OA\Get(
     *   path="/api/levels",
     *   summary="List Levels",
     *   operationId="list_events",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"levels"},
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/levelsList"
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
    public function list()
    {
        return $this->LevelService->list();
    }
}
