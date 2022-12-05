<?php

namespace App\Repositories;

use App\ClassModel;
use App\Gym;
use App\Gymnast;
use App\Notification;
use App\Interfaces\NotificationInterface;

class NotificationRepository implements NotificationInterface
{
    protected $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * This function return all notifications in database
     *
     * @param array $data [limit, search, order, column]
     *
     * @return string
     */
    public function listFromAdmin(array $data)
    {
        $limit = $data['limit'] ?? 15;
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $data = $this->notification
            ->select('notifications.*')
            ->orderBy($column, $order)
            ->paginate($limit);
        $data->map(function ($item) {
            $class = ClassModel::find($item->class_id);
            $gym = Gym::find($item->gym_id);
            if (isset($class)) {
                $item->class_name = $class->name;
            } else {
                $item->class_name = 'All Classes';
            }

            if (isset($gym)) {
                $item->gym_name = $gym->name;
            } else {
                $item->gym_name = 'All Classes';
            }
        });
        return $data;
    }

    /**
     * This function creates a new notification in database
     *
     * @param array $data [gym_id, class_id, title, description, status]
     *
     * @return string
     */
    public function create(array $data)
    {
        $data['gym_id'] ?? null;
        $data['class_id'] ?? null;
        try {
            return $this->notification->create($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * This function return all notifications in database from Gym
     *
     * @param int $gymId 
     *
     * @param array $data [limit, search, order, column]
     *
     * @return string
     */
    public function listFromGymAdmin(array $data, $gymId)
    {
        $limit = $data['limit'] ?? 15;
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $data = $this->notification
            ->where(function ($query) use ($gymId) {
            $query->where('gym_id', $gymId)
                  ->orWhere('gym_id', null);
            })
            ->orderBy($column, $order)
            ->paginate($limit);
        $data->map(function ($item) {
            $class = ClassModel::find($item->class_id);
            $gym = Gym::find($item->gym_id);
            if (isset($class)) {
                $item->class_name = $class->name;
            } else {
                $item->class_name = 'All Classes';
            }

            if (isset($gym)) {
                $item->gym_name = $gym->name;
            } else {
                $item->gym_name = 'All Classes';
            }
        });
        return $data;
    }

    /**
     * This function This function updates a notifications in database from Gym
     *
     * @param int $gymId 
     *
     * @param array $data [gym_id, class_id, title, description, status]
     *
     * @return string
     */
    public function updateFromGymAdmin(array $data, int $gymId, int $notificationId)
    {
        $notification = Notification::find($notificationId);
        if (! isset($notification)) {
            return false;
        }
        $newData= [];
        $newData['title'] = $data['title'];
        $newData['description'] = $data['description'];
        $newData['status'] = $data['status'];
        $class_id = $data['class_id'] ?? null;
        if (auth()->user()->hasRole('gym')) {
            if ($data['gym_id'] == $gymId) {
                $newData['gym_id'] = $data['gym_id'];
            } else {
                abort(403, "You do not have permissions to edit other gym");
            }

            if (! is_numeric($class_id)) {
                abort(403, "You do not have permissions to edit a generic class");
            } else {
                $countClass = $this->classExistFromGym($class_id, $gymId);
                if ($countClass > 0) {
                    $newData['class_id'] = $class_id;
                } else {
                    abort(403, "You do not have permissions to edit a class of other gym");
                }
            }
        } else {
            $newData['gym_id'] = $data['gym_id'];
            $newData['class_id'] = $class_id;
        }

        try {
            $notification->update($data);
        } catch (\Throwable $th) {
            throw $th;
        }
        return $notification;
    }

    /**
     * This function updates a notifications in database
     *
     * @param int $gymId 
     *
     * @param array $data [gym_id, class_id, title, description, status]
     *
     * @return string
     */
    public function update(array $data, int $notificationId)
    {
        $notification = Notification::find($notificationId);
        if (! isset($notification)) {
            return false;
        }

        try {
            $notification->update($data);
        } catch (\Throwable $th) {
            throw $th;
        }
        return $notification;
    }

    /**
     * This function delete the notification in database
     *
     * @param int $gymId
     *
     * @return string
     */
    public function delete(int $notificationId)
    {
        $notification = Notification::find($notificationId);
        if (isset($notification)) {
            $notification->delete();
            return true;
        }
        return false;
    }

    /**
     * This function This function delete a notifications in database from Gym
     *
     * @param int $notificationId
     *
     * @param int $gymId
     *
     * @param array $data [gym_id, class_id, title, description, status]
     *
     * @return string
     */
    public function deleteFromGymAdmin(int $gymId, int $notificationId)
    {
        $notification = Notification::find($notificationId);
        if (isset($notification) && $notification->gym_id == $gymId) {
            $notification->delete();
            return true;
        }
        return false;
    }

    /**
     * This function return all notifications in database from Gym
     *
     * @param int $gymId 
     *
     * @param array $data [limit, search, order, column]
     *
     * @return string
     */
    public function listFromGymnast(array $data, $gymId, $gymnastId)
    {
        $limit = $data['limit'] ?? 15;
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $gymnast = Gymnast::find($gymnastId);
        $gymnastClass = $gymnast->classes->pluck('id');
        if (count($gymnastClass) === 0) {
            $data = $this->notification
            ->where('status', true)
            ->where(function ($query) use ($gymId) {
            $query->where('gym_id', $gymId)
                  ->orWhere('gym_id', null);
            })
            ->orderBy($column, $order)
            ->paginate($limit);
            $data->map(function ($item) {
                $class = ClassModel::find($item->class_id);
                $gym = Gym::find($item->gym_id);
                if (isset($class)) {
                    $item->class_name = $class->name;
                } else {
                    $item->class_name = 'All Classes';
                }

                if (isset($gym)) {
                    $item->gym_name = $gym->name;
                } else {
                    $item->gym_name = 'All Classes';
                }
            });
            return $data;
        }
        $data = $this->notification
            ->where('status', true)
            ->where(function ($query) use ($gymnastClass) {
                $query->whereIn('class_id', $gymnastClass)
                      ->orWhere('class_id', null);
                })
            ->where(function ($query) use ($gymId) {
                    $query->where('gym_id', $gymId)
                    ->orWhere('gym_id', null);
                    })
            ->orderBy($column, $order)
            ->paginate($limit);
            $data->map(function ($item) {
                $class = ClassModel::find($item->class_id);
                $gym = Gym::find($item->gym_id);
                if (isset($class)) {
                    $item->class_name = $class->name;
                } else {
                    $item->class_name = 'All Classes';
                }

                if (isset($gym)) {
                    $item->gym_name = $gym->name;
                } else {
                    $item->gym_name = 'All Classes';
                }
            });
        return $data;
    }

    private function classExistFromGym($class_id, $gymId) {
        $sql = ClassModel::withTrashed()->whereHas('skillList', function ($query) use ($gymId) {
            $query->where('gym_id', $gymId);
        })->where('id', $class_id)->select('id', 'name', 'description', 'skill_list_id');
        return count($sql->get());
    }

    private function isAssignedClass($classList, $gymnastId) {
        $sql = DB::table('gymnasts_has_classes')->where(function ($query) use ($classList, $gymnastId) {
            $query->where('class_id', $gymId)
                  ->orWhere('gym_id', null);
            });
        ClassModel::withTrashed()->whereHas('skillList', function ($query) use ($gymId) {
            $query->where('gym_id', $gymId);
        })->where('id', $class_id)->select('id', 'name', 'description', 'skill_list_id');
        return count($sql->get());
    }
}
