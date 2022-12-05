<?php

namespace App\Interfaces;

interface DashboardInterface
{
    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @param int of the gymId
     *
     * @return string
     */
    public function listEvent(int $memberId, int $gymId);

    /**
     * This function returns all 'timezones'
     *
     * @return string
     */
    public function timezone();

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @param int of the eventId
     *
     * @return string
     */
    public function listSkill(int $memberId, int $eventId);

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function percentage(int $memberId);

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function getNotifications(array $data, int $memberId);
    
    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     * @param int of the gymId
     * 
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function clearNotification(int $memberId, int $notificationId);

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     *
     * @return string
     */
    public function challengesCount(int $gymId, int $gymnastId);
}
