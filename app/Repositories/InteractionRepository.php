<?php

namespace App\Repositories;

use App\Interaction;
use App\Interfaces\InteractionInterface;
use Exception;
use Illuminate\Support\Facades\DB;

class InteractionRepository implements InteractionInterface
{
    protected $interaction;

    public function __construct(Interaction $interaction)
    {
        $this->interaction = $interaction;
    }

    /**
     * This function creates a new class in database
     *
     * @param array $data An array
     *
     * @param file $file
     *
     * @return mixed
     */
    public function create(array $data, $file)
    {
        try {
            DB::beginTransaction();
            $interaction = $this->interaction->create($data);
            if ($file) {
                $this->uploadFile($interaction, $file);
            }
            DB::commit();
            return true;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
        return false;
    }

    /**
     * This function returns all 'interactions'
     *
     * @param array $data
     *
     * @return string
     */
    public function list(array $data)
    {
        $sql = $this->interaction;
        $limit = $data['limit'] ?? 20;
        return $sql->orderBy('id')->paginate($limit);
    }

    /**
     * This function delete a 'interaction' in database using softdelete
     *
     * @param int $id of the interaction for delete
     *
     * @return mixed
     */
    public function delete($id)
    {
        $interaction = $this->interaction->where('id', $id)->first();
        if ($interaction === null) {
            return false;
        }
        $interaction->delete();
        return true;
    }

    /**
     * This function restore a 'interaction' in database using softdelete
     *
     * @param int $id of the interaction for restore
     *
     * @return mixed
     */
    public function restore($id)
    {
        $interaction = $this->interaction->withTrashed()->where('id', $id)->first();
        if ($interaction === null) {
            return false;
        }
        $interaction->restore();
        return $interaction;
    }

    /**
     * This function restore a 'interaction' in database using softdelete
     *
     * @param array $data An array
     *
     * @param file $file
     *
     * @param string $code of the interaction for update
     *
     * @return mixed
     */
    public function update(array $data, $file, $code)
    {
        try {
            $interaction = $this->interaction->where('code', $code)->first();
            if ($interaction === null) {
                return null;
            }
            if ($file) {
                $this->uploadFile($interaction, $file);
            }
            $interaction->update($data);
            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    private function uploadFile(Interaction $interaction, $file)
    {
        $fileUpload = null;
        $fileUpload = Cloudinary()->upload($file['content'], [
            'folder' => 'interactions/interaction_' . $interaction->id,
            'public_id' => 'int_'.$interaction->id, 'invalidate' => true,
        ]);
        if ($fileUpload) {
            $interaction->icon = $fileUpload->getPath();
            $interaction->update();
        }
    }
}
