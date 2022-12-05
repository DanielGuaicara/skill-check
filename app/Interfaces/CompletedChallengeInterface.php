<?php

namespace App\Interfaces;

interface CompletedChallengeInterface
{
    /**
     * This function create a new 'completed_challenge' in database
     *
     * @param array $data An array [gymnast_id, challenge_id, media_path, media_caption]
     *
     * @param file $file
     *
     * @return mixed
     */
    public function create(array $data, $file);

    /**
     * This feature lists all the 'gym' 'challenges' with their completed challenges in the database
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function feedCarousel(int $gymId);

    /**
     * This function list 'challenge Media' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function completedChallengesMediaList(array $data, int $gymId);
}
