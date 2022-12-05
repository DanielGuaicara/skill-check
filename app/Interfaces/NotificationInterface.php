<?php

namespace App\Interfaces;

interface NotificationInterface
{
    /**
     * This function return all notifications in database
     *
     * @param array $data [limit, search, order, column]
     *
     * @return string
     */
    public function listFromAdmin(array $data);

    /**
     * This function creates a new notification in database
     *
     * @param array $data [gym_id, class_id, title, description, status]
     *
     * @return string
     */
    public function create(array $data);

    /**
     * This function return all notifications in database from Gym
     *
     * @param int $gymId 
     *
     * @param array $data [limit, search, order, column]
     *
     * @return string
     */
    public function listFromGymAdmin(array $data, $gymId);

    /**
     * This function This function updates a notifications in database from Gym
     *
     * @param int $notificationId
     *
     * @param int $gymId
     *
     * @param array $data [gym_id, class_id, title, description, status]
     *
     * @return string
     */
    public function updateFromGymAdmin(array $data, int $gymId, int $notificationId);

    /**
     * This function updates a notifications in database
     *
     * @param int $notificationId
     *
     * @param array $data [gym_id, class_id, title, description, status]
     *
     * @return string
     */
    public function update(array $data, int $notificationId);

    /**
     * This function delete the notification in database
     *
     * @param int $notificationId
     *
     * @return string
     */
    public function delete(int $notificationId);

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
    public function deleteFromGymAdmin(int $gymId, int $notificationId);

    /**
     * This function return all notifications in database from Gym
     *
     * @param int $gymId 
     *
     * @param array $data [limit, search, order, column]
     *
     * @return string
     */
    public function listFromGymnast(array $data, $gymId, $gymnastId);
}
