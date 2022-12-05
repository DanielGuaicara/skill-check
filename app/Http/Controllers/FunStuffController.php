<?php

namespace App\Http\Controllers;

use App\Services\FunStuffService;
use Illuminate\Http\Request;

class FunStuffController extends Controller
{
    protected $FunStuffService;

    public function __construct(FunStuffService $FunStuffService)
    {
        $this->FunStuffService = $FunStuffService;
    }

    /**
     * @OA\Get(
     *   path="/api/gyms/{gymPathId}/fun-stuff/gymnast/{gymnastMemberPathId}",
     *   summary="Images list for FunStuff",
     *   operationId="fun_stuff",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"FunStuff"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymPathId"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/gymnastMemberPathId"
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
    public function getMedia(int $gymId, int $gymnastId) {
        return $this->FunStuffService->getMedia($gymId, $gymnastId);
    }
}
