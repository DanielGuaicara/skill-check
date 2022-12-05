<?php

namespace App\Observers;

use App\Challenge;
use App\CompletedChallenge;
use App\Gymnast;

class ChallengeObserver
{
    /**
     * Handle the challenge "created" event.
     *
     * @param  \App\Challenge  $challenge
     * @return void
     */
    public function created(Challenge $challenge)
    {
        //
    }

    /**
     * Handle the challenge "updated" event.
     *
     * @param  \App\Challenge  $challenge
     * @return void
     */
    public function updated(Challenge $challenge)
    {
        //
    }

    /**
     * Handle the challenge "deleted" event.
     *
     * @param  \App\Challenge  $challenge
     * @return void
     */
    public function deleted(Challenge $challenge)
    {
        $completedChallenges = CompletedChallenge::where('challenge_id', $challenge->id)->get();
        if (! isset($completedChallenges)) {
            return;
        }

        foreach ($completedChallenges as $key => $value) {
            $member = Gymnast::find($value->gymnast_id);
            $lifeTimeScore = $member->life_time_score - $value->points;
            $ongoingPoints = $member->ongoing_points - $value->points;
            
            if ($lifeTimeScore < 0) {
                $lifeTimeScore = 0;
            }
            
            if ($ongoingPoints < 0) {
                $ongoingPoints = 0;
            }

            try {
                $member->update([
                    'life_time_score' => $lifeTimeScore,
                    'ongoing_points' => $ongoingPoints,
                ]);
            } catch (\Throwable $th) {
                throw $th;
            }
            $currentCompletedChallenges = CompletedChallenge::find($value->id);
            $currentCompletedChallenges->delete();
        }
    }

    /**
     * Handle the challenge "restored" event.
     *
     * @param  \App\Challenge  $challenge
     * @return void
     */
    public function restored(Challenge $challenge)
    {
        //
    }

    /**
     * Handle the challenge "force deleted" event.
     *
     * @param  \App\Challenge  $challenge
     * @return void
     */
    public function forceDeleted(Challenge $challenge)
    {
        //
    }
}
