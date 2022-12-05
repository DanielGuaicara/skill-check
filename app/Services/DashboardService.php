<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Interfaces\DashboardInterface;

class DashboardService
{
    protected $service;

    public function __construct(DashboardInterface $service)
    {
        $this->service = $service;
    }
    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function listEvent(int $memberId, int $gymId)
    {
        return $this->service->listEvent($memberId, $gymId);
    }

    /**
     * This function returns all 'timezones'
     *
     * @return string
     */
    public function timezone()
    {
        return $this->service->timezone();
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @param int of the eventId
     *
     * @return string
     */
    public function listSkill(int $memberId, int $eventId)
    {
        return $this->service->listSkill($memberId, $eventId);
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function percentage(int $memberId)
    {
        return $this->service->percentage($memberId);
    }

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function getNotifications(array $data, int $memberId)
    {
        return $this->service->getNotifications($data, $memberId);
    }

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     * @param int of the gymId
     * 
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function clearNotification(int $memberId, int $notificationId = null)
    {
        $data = $this->service->clearNotification($memberId, $notificationId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     *
     * @return string
     */
    public function challengesCount(int $gymId, int $gymnastId)
    {
        return $this->service->challengesCount($gymId, $gymnastId);
    }
}
