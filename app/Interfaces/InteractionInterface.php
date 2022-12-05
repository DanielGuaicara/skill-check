<?php

namespace App\Interfaces;

interface InteractionInterface
{
    /**
     * This function creates a new class in database
     *
     * @param array $data An array
     *
     * @param file $file
     *
     * @return mixed
     */
    public function create(array $data, $file);

    /**
     * This function returns all 'interactions'
     *
     * @param array $data
     *
     * @return string
     */
    public function list(array $data);

    /**
     * This function delete a 'interaction' in database using softdelete
     *
     * @param int $id of the interaction for delete
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * This function restore a 'interaction' in database using softdelete
     *
     * @param int $id of the interaction for restore
     *
     * @return mixed
     */
    public function restore($id);

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
    public function update(array $data, $file, $code);
}
