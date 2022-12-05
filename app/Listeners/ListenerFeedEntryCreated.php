<?php

namespace App\Listeners;

use App\Challenge;
use App\Events\FeedEntryCreated;
use App\FeedEntry;

class ListenerFeedEntryCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  FeedEntryCreated  $event
     *
     * @return void
     */
    public function handle(FeedEntryCreated $event)
    {
        if(isset(auth()->user()->timezone)) {
            $timezone = explode(') ', auth()->user()->timezone);
            $tzone = $timezone[1];
        } else {
            $tzone = 'America/Chicago';
        }
        $timeZone = \Carbon\Carbon::now('UTC');
        if(isset($event->feedEntriesAttributes['type'])) {
            $type = $event->feedEntriesAttributes['type'];
        } else {
            $type = null;
        }
        switch ($type) {
            case 'birthday':
                $data = json_encode(
                    [
                        'name' => $event->member['first_name'],
                        'last_name' => $event->member['last_name'],
                    ]);
                $type = config('constants.feedEntryTypeBirthday');
                break;
            case 'completed_challenges':
                $allData = $event->feedEntriesAttributes['data'];
                $challenge = Challenge::find($allData['challenge_id']);
                $data = json_encode(
                    [
                        'completed_challenge' => $allData['id'],
                        'challenge_id' => $allData['challenge_id'],
                        'challenge_name' => $challenge->name,
                        'is_featured' => $challenge->is_featured,
                        'media_path' => null, 'media_caption' => null,
                        'points' => $allData['points'],
                        'date_of_completion' => $allData['date_of_completion'],
                    ]);
                $type = config('constants.feedEntryTypeCompletedChallenge');
                break;
            case 'completed_all_daily_challenges':
                $allData = $event->feedEntriesAttributes['data'];
                $data = json_encode(
                    [
                        'name' => $event->member['first_name'],
                        'last_name' => $event->member['last_name'],
                        'message' => "has completed all today's daily challenges",
                        'completed_challenges_ids' => $allData['completed_challenges_id'],
                    ]);
                $type = config('constants.feedEntryTypeCompletedAllDailyChallenges');
                break;
            default:
                $data = json_encode(
                    [
                        'progress_status' => $event->feedEntriesAttributes['progress'],
                        'name' => $event->feedEntriesAttributes['model']['name'],
                        'skill_id' => $event->feedEntriesAttributes['model']['id'],
                    ]);
                $type = config('constants.feedEntryTypeProgress');
                break;
        }
        if (isset($event->feedEntriesAttributes['progress'])) {
            if (intval($event->feedEntriesAttributes['progress']) !== 0) {
                FeedEntry::create([
                    'gymnast_id' => $event->member->id, 'data' => $data, 'type' => $type, 'created_at' => $timeZone,
                ]);
            }
        } else {
            FeedEntry::create([
                'gymnast_id' => $event->member->id, 'data' => $data, 'type' => $type, 'created_at' => $timeZone,
            ]);
        }
    }
}
