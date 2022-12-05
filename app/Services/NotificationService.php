<?php

namespace App\Services;

use App\Interfaces\NotificationInterface;
use App\Http\Resources\BooleanResource;
use App\Http\Resources\NotificationResource;

class NotificationService
{
    protected $service;

    public function __construct(NotificationInterface $service)
    {
        $this->service = $service;
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
        return $this->service->listFromAdmin($data);
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
        $data = $this->service->create($data);
        if ($data) {
            return new NotificationResource($data);
        }
        return $data;
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
        return $this->service->listFromGymAdmin($data, $gymId);
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
        return $this->service->updateFromGymAdmin($data, $gymId, $notificationId);
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
        return $this->service->update($data, $notificationId);
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
        $data = $this->service->delete($notificationId);
        return new BooleanResource($data);
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
        $data = $this->service->deleteFromGymAdmin($gymId, $notificationId);
        return new BooleanResource($data);
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
        return $this->service->listFromGymnast($data, $gymId, $gymnastId);
    }
}
