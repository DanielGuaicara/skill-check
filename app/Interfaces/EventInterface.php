<?php

namespace App\Interfaces;

interface EventInterface
{
    /**
     * This function creates a new 'event' in database
     *
     * @param object json
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function updates a 'event' in database
     *
     * @param array $data An array [gym_id,name,abbrev]
     *
     * @param int $id
     *
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * This function delete a 'event' in database using softdelete
     *
     * @param int $id of the event for delete
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function delete($gymId, $id);

    /**
     * This function restore a 'event' in database using softdelete
     *
     * @param int $id of the event for restore
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function restore($gymId, $id);

    /**
     * This function returns all 'events'
     *
     * @param array $data [column, order, search]
     *
     * @param int $gymId of gym belongs the event
     *
     * @return string
     */
    public function list(array $data, $gymId);
}
