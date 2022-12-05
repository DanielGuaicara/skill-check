<?php

namespace App\Http\Controllers;

use App\Http\Requests\InteractionRequest;
use App\Http\Requests\UpdateInteractionRequest;
use App\Services\InteractionService;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    protected $InteracionService;

    public function __construct(InteractionService $InteractionService)
    {
        $this->InteractionService = $InteractionService;
    }

    /**
     * @OA\Post(
     *   path="/api/interactions",
     *   summary="Create an Interaction",
     *   operationId="create_interaction",
     *   @OA\RequestBody(
     *      @OA\MediaType(
     *             mediaType="multipart/form-data",
     *              @OA\Schema(
     *                 @OA\Property(
     *                     property="icon",
     *                     type="file",
     *                 ),
     *              )
     *         )
     *   ),
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Interactions"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/name"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/code"
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

    public function create(InteractionRequest $request)
    {
        $file = $request->file('icon') ? ['content' => $request->file('icon')->getRealPath(), 'type' => $request->file('icon')->getMimeType()] : null;
        $interactions = $this->InteractionService->create($request->all(), $file);
        return $interactions->response();
    }

    /**
     * @OA\Get(
     *   path="/api/interactions",
     *   summary="List interactions",
     *   operationId="list_interactions",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Interactions"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/limit"
     *   ),
     *   @OA\Response(
     *      response=200,
     *      ref="../swagger/definitions.yaml#/components/responses/interactionList"
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
    public function list(Request $request)
    {
        return $this->InteractionService->list($request->all());
    }

    /**
     * @OA\Delete(
     *   path="/api/interactions/{id}",
     *   summary="Delete a interaction",
     *   operationId="delete_interaction",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Interactions"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/idPath"
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
    public function delete($id)
    {
        $interaction = $this->InteractionService->delete($id);
        if (! $interaction) {
            abort(404, 'Interaction not found');
        }
        return $interaction->response();
    }

    /**
     * @OA\Patch(
     *   path="/api/interactions/{id}/restore",
     *   summary="Restore a interaction",
     *   operationId="restore_interaction",
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Interactions"},
     *  @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/idPath"
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
    public function restore($id)
    {
        $interaction = $this->InteractionService->restore($id);
        if (! $interaction) {
            abort(404, 'Event not found');
        }
        return $interaction;
    }
     /**
     * @OA\Post(
     *   path="/api/interactions/{codePath}",
     *   summary="Update an Interaction",
     *   operationId="update_interaction",
     *   @OA\RequestBody(
     *      @OA\MediaType(
     *             mediaType="multipart/form-data",
     *              @OA\Schema(
     *                 @OA\Property(
     *                     property="icon",
     *                     type="file",
     *                 ),
     *              )
     *         )
     *   ),
     *   security={
     *      {
     *          "tokenBased":{}
     *      }
     *   },
     *   tags={"Interactions"},
     *
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/codePath"
     *   ),
     *   @OA\Parameter(
     *      ref="../swagger/definitions.yaml#/components/parameters/nameInteraction"
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
    public function update(UpdateInteractionRequest $request, $code)
    {
        $file = $request->file('icon') ? ['content' => $request->file('icon')->getRealPath(), 'type' => $request->file('icon')->getMimeType()] : null;
        $interaction = $this->InteractionService->update($request->all(), $file, $code);
        if (! $interaction) {
            abort(404, 'Interaction not found');
        }
        return $interaction;
    }
}
