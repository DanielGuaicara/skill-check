<?php

namespace App\Repositories;

use App\Event;
use App\Interfaces\EventInterface;
use Exception;

class EventRepository implements EventInterface
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }
    /**
     * This function creates a new 'event' in database
     *
     * @param object json
     *
     * @return mixed
     */
    public function create(array $data)
    {
        try {
            $this->event->create($data);
            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
    }

    /**
     * This function updates a 'event' in database
     *
     * @param array $data An array [gym_id,name,abbrev]
     *
     * @param int $id
     *
     * @return mixed
     */
    public function update(array $data, $id)
    {
        $event = $this->event->find($id);
        if ($event === null) {
            return false;
        }
        try {
            $event->update($data);
            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
    }

    /**
     * This function delete a 'event' in database using softdelete
     *
     * @param int $id of the event for delete
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function delete($gymId, $id)
    {
        $event = $this->event->where('gym_id', $gymId)->where('id', $id)->first();
        if ($event === null) {
            return false;
        }
        $event->delete();
        return true;
    }

    /**
     * This function restore a 'event' in database using softdelete
     *
     * @param int $id of the event for restore
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function restore($gymId, $id)
    {
        $event = $this->event->withTrashed()->where('gym_id', $gymId)->where('id', $id)->first();
        if ($event === null) {
            return false;
        }
        $event->restore();
        return $event;
    }

    /**
     * This function returns all 'events'
     *
     * @param array $data [column, order, search]
     *
     * @param int $gymId of gym belongs the event
     *
     * @return string
     */
    public function list(array $data, $gymId)
    {
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $search = $data['search'] ?? null;
        return $this->event->withTrashed()
            ->where('gym_id', $gymId)
            ->Where(function($query) use ($search) {
                $query->where('name', 'ilike', '%'.$search.'%')
                      ->orwhere('abbrev', 'ilike', '%'.$search.'%');
            })
            ->orderBy($column, $order)->get();
    }
}
