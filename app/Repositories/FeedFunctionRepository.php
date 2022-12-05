<?php

namespace App\Repositories;

use App\User;
use App\Gymnast;
use App\FeedEntry;
use App\Interaction;
use App\Events\FeedEntryCreated;
use App\InteractionLog;
use App\Interfaces\FeedFunctionInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FeedFunctionRepository implements FeedFunctionInterface
{
    /**
     * This function save a feed entry of users who have a birthday
     *
     * @return string
     */
    public function userBirthdayFeedEntry()
    {
        $gymnast = Gymnast::all();
        foreach ($gymnast as $key => $value) {
            $dateUser = new Carbon($value->birth_date);
            $dateUser = $dateUser->format('m-d');
            $user = User::find($value->gyms_has_users_user_id);
            $timezone = explode(') ', $user->timezone)[1];
            if ($dateUser !== Carbon::now('UTC')->format('m-d')) {
                continue;
            }
            $feedEntry = FeedEntry::where('gymnast_id', $value->id)
                ->where('type', 1)
                ->whereDate('created_at', '=', Carbon::now('UTC')->format('Y-m-d'))
                ->count();
            if ($feedEntry === 0) {
                event(new FeedEntryCreated(Gymnast::find($value->id), ['type' => 'birthday']));
            }
        }
        return true;
    }
    /**
     * This function add interaction data to feed
     *
     * @param array $data An array [search]
     *
     * @param int $feedId
     *
     * @param int $codeInteraction
     *
     * @return string
     */
    public function addFeedinteraction(array $data, int $feedId, string $codeInteraction)
    {
        $feed = FeedEntry::find($feedId);
        $comment = $data['comment'] ?? null;
        $gymnast = Gymnast::find($data['member_id']);
        $interaction = Interaction::where('code', $codeInteraction)->first();
        if (isset($gymnast->user->timezone)) {
            $tz = explode(') ', $gymnast->user->timezone)[1];
        } else {
            $tz = "America/Chicago";
        }
        $data = [
            '0' => [
                'interaction_code' => $codeInteraction,
                'member_id' => $data['member_id'],
                'member_name' => $gymnast->first_name,
                'member_img_profile' => $gymnast->image_profile,
                'is_comment' => $data['is_comment'],
                'comment' => $comment,
                'created_at' => Carbon::now($tz)->format('Y-m-d H:i:s'),
            ],
        ];
        $interactions = json_decode($feed->interactions);
        try {
            DB::beginTransaction();
            if (! isset($interactions)) {
                $data = collect($data);
                $jsonData = json_encode($data);
                $feed->update([
                    'interactions' => $jsonData,
                ]);
                if ($feed->type !== 0) {
                    InteractionLog::updateOrCreate(
                        ['feed_id' => $feedId, 'interaction_id' => $interaction->id, 'gymnast_id' => $gymnast->id],
                        [
                            'feed_id' => $feedId,
                            'gymnast_id' => $gymnast->id,
                            'interaction_id' => $interaction->id,
                            'notified' => false,
                        ]
                    );
                } else {
                    if (isset($feed->data)) {
                        foreach (json_decode($feed->data) as $key => $val) {
                            if ($key === 'progress_status' && intval($val) !== 0) {
                                InteractionLog::updateOrCreate(
                                    ['feed_id' => $feedId, 'interaction_id' => $interaction->id, 'gymnast_id' => $gymnast->id],
                                    [
                                        'feed_id' => $feedId,
                                        'gymnast_id' => $gymnast->id,
                                        'interaction_id' => $interaction->id,
                                        'notified' => false,
                                    ]
                                );
                            }
                        }
                    }
                }
                DB::commit();
                return $this->dataInteraction($feed);
            }
            $newArray = $this->interactionValidate($interactions, $data, $codeInteraction);
            $jsonData = json_encode($newArray);
            $feed->update([
                'interactions' => $jsonData,
            ]);
            if ($feed->type !== 0) {
                InteractionLog::updateOrCreate(
                    ['feed_id' => $feedId, 'interaction_id' => $interaction->id, 'gymnast_id' => $gymnast->id],
                    [
                        'feed_id' => $feedId,
                        'gymnast_id' => $gymnast->id,
                        'interaction_id' => $interaction->id,
                        'notified' => false,
                    ]
                );
            } else {
                if (isset($feed->data)) {
                    foreach (json_decode($feed->data) as $key => $val) {
                        if ($key === 'progress_status' && intval($val) !== 0) {
                            InteractionLog::updateOrCreate(
                                ['feed_id' => $feedId, 'interaction_id' => $interaction->id, 'gymnast_id' => $gymnast->id],
                                [
                                    'feed_id' => $feedId,
                                    'gymnast_id' => $gymnast->id,
                                    'interaction_id' => $interaction->id,
                                    'notified' => false,
                                ]
                            );
                        }
                    }
                }
            }
            DB::commit();
            return $this->dataInteraction($feed);
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }

    /**
     * This function add interaction data to feed
     *
     * @param array $data An array [search]
     *
     * @param int $feedId
     *
     * @return string
     */
    public function getFeedinteraction(array $data, int $feedId)
    {
        $feed = FeedEntry::find($feedId);
        $emptyArray = [];
        if (! isset($feed->interactions)) {
            return $emptyArray;
        }
        return $this->dataInteraction($feed);
    }

    private function interactionValidate($interactions, $data, $codeInteraction)
    {
        $newArray = [];
        $flag = false;
        foreach ($interactions as $key => $value) {
            if ($data[0]['member_id'] === $value->member_id && $value->interaction_code !== 'comment' && $codeInteraction !== 'comment') {
                $newArray[$key] = [
                    'interaction_code' => $codeInteraction,
                    'member_id' => $data[0]['member_id'],
                    'is_comment' => $data[0]['is_comment'],
                    'comment' => $data[0]['comment'],
                    'created_at' => $data[0]['created_at'],
                ];
                $flag = true;
            } else {
                $gymnast = Gymnast::find($value->member_id);
                if (! isset($gymnast)) {
                    continue;
                }
                $newArray[$key] = [
                    'interaction_code' => $value->interaction_code,
                    'member_id' => $value->member_id, 
                    'is_comment' => $value->is_comment,
                    'comment' => $value->comment,
                    'member_img_profile' => $gymnast->member_img_profile,
                    'created_at' => $value->created_at,
                ];
            }
        }
        if (! $flag) {
            array_push($newArray, $data[0]);
        }

        return $newArray;
    }

    private function dataInteraction(FeedEntry $feed)
    {
        $data = json_decode($feed->interactions);
        $result = [];
        foreach ($data as $key => $value) {
            $result['all_interactions'][$key] = $value;
            $interaction = Interaction::where('code', $value->interaction_code)->first();
            $gymnast = Gymnast::find($value->member_id);
            switch ($interaction->code) {
                case 'comment':
                    $result['comments'][] = [
                        'member_id' => $value->member_id,
                        'member_name' => $gymnast->first_name,
                        'member_img_profile' => $gymnast->image_profile,
                        'comment' => $value->comment,
                        'created_at' => $value->created_at,
                    ];
                    break;
                case 'clap':
                    $result[$interaction->code][] = [
                        'member_id' => $value->member_id,
                        'member_name' => $gymnast->first_name,
                        'created_at' => $value->created_at,
                    ];
                    break;
                default:
                    $result[$interaction->code][] = [
                        'member_id' => $value->member_id,
                        'member_name' => $gymnast->first_name,
                        'created_at' => $value->created_at,
                    ];
                    break;
            }
        }
        return $result;
    }
}
