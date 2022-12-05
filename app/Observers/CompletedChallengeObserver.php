<?php

namespace App\Observers;

use App\Challenge;
use App\Gymnast;
use App\FeedEntry;
use App\CompletedChallenge;
use App\Events\FeedEntryCreated;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CompletedChallengeObserver
{
    /**
     * Handle the completed challenge "created" event.
     *
     * @param  \App\CompletedChallenge  $completedChallenge
     * @return void
     */
    public function created(CompletedChallenge $completedChallenge)
    {
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('gym'))
        {
            return;
        }
        $data = $completedChallenge->attributesToArray();
        event(new FeedEntryCreated(Gymnast::find($data['gymnast_id']), [
            'type' => 'completed_challenges',
            'data' => $data,
        ])); 
        //$timezone = explode(') ', auth()->user()->timezone)[1];
        $completedChallengeCount = CompletedChallenge::join('challenges', 'completed_challenges.challenge_id', '=', 'challenges.id')
            ->select(DB::raw('count(*) as count'))
            ->where('gymnast_id', $data['gymnast_id'])
            ->where('challenges.is_featured', true)
            ->whereDate('date_of_completion', Carbon::now('UTC')->format('Y-m-d'))->get();
            $challenge = Challenge::find($data['challenge_id']);    
        if ($completedChallengeCount[0]->count == 3 && $challenge->is_featured === true) {
            $completedChallenges = CompletedChallenge::where('gymnast_id', $data['gymnast_id'])
                ->whereDate('date_of_completion', Carbon::now('UTC')->format('Y-m-d'))->get();
            $challenges_ids = $completedChallenges->map(function ($item) {
                return [
                    'challenge_id' => $item->id,
                ];
            });
            $data['completed_challenges_id'] = $challenges_ids;
            event(new FeedEntryCreated(Gymnast::find($data['gymnast_id']), [
                'type' => 'completed_all_daily_challenges',
                'data' => $data,
            ]));
        }
        $gymnast = Gymnast::find($data['gymnast_id']);
    }

    /**
     * Handle the completed challenge "updated" event.
     *
     * @param  \App\CompletedChallenge  $completedChallenge
     * @return void
     */
    public function updated(CompletedChallenge $completedChallenge)
    {
        $data = $completedChallenge->attributesToArray();
        $feedEntry = FeedEntry::where('data->completed_challenge', '=', $completedChallenge->id)
            ->where('gymnast_id', $completedChallenge->gymnast_id)->first();
        if ($feedEntry == null) {
            return;
        }
        $oldData = json_decode($feedEntry->data);
        $newData = json_encode([
            'completed_challenge' =>$oldData->completed_challenge,
            'challenge_id' => $oldData->challenge_id,
            'challenge_name' => $oldData->challenge_name,
            'is_featured' => $oldData->is_featured,
            'media_path' => $data['media_path'] ?? null,
            'media_caption' => $data['media_caption'] ?? null,
            'points' => $oldData->points,
            'date_of_completion' => $oldData->date_of_completion,
        ]);
        $feedEntry->update([
            'data' => $newData
        ]);
    }

    /**
     * Handle the completed challenge "deleted" event.
     *
     * @param  \App\CompletedChallenge  $completedChallenge
     * @return void
     */
    public function deleted(CompletedChallenge $completedChallenge)
    {
        //
    }

    /**
     * Handle the completed challenge "restored" event.
     *
     * @param  \App\CompletedChallenge  $completedChallenge
     * @return void
     */
    public function restored(CompletedChallenge $completedChallenge)
    {
        //
    }

    /**
     * Handle the completed challenge "force deleted" event.
     *
     * @param  \App\CompletedChallenge  $completedChallenge
     * @return void
     */
    public function forceDeleted(CompletedChallenge $completedChallenge)
    {
        //
    }
}
