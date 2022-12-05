<?php

use App\CompletedChallenge;
use App\FeedEntry;
use App\Gymnast;
use App\Interaction;
use App\Subscription;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

function percentage(int $memberId)
{
        $skills = DB::table('gymnasts')
            ->join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('skill_lists', 'classes.skill_list_id', '=', 'skill_lists.id')
            ->join('skill_lists_has_skills', 'skill_lists.id', '=', 'skill_lists_has_skills.skill_list_id')
            ->join('skills', 'skill_lists_has_skills.skill_id', '=', 'skills.id')
            ->leftJoin('gymnasts_has_skills', 'gymnasts.id', '=', 'gymnasts_has_skills.gymnast_id')
            ->where('gymnasts.id', $memberId)
            ->select('skills.*')
            ->distinct()
            ->get();
        $data = [];
        $search = [];
        foreach ($skills as $key => $value) {
            $progress_status = DB::table('gymnasts_has_skills')
                ->where('gymnasts_has_skills.gymnast_id', $memberId)
                ->where('gymnasts_has_skills.skill_id', $value->id)
                ->select('progress_status')
                ->first();
            if (isset($progress_status)) {
                $data[] = $progress_status->progress_status;
            } else {
                $data[] = 0;
            }
            $collection = collect($data)->countBy();
        }
        if(isset($collection)) {
            $multiplied = $collection->map(function ($item) use ($collection) {
                $total = $collection->sum();
                $total = $item * 100 / $total;
                return round($total, 2);
            });
            $search = [
                'just_starting' => $multiplied[0] ?? 0,
                'learning' => $multiplied[1] ?? 0,
                'can_do' => $multiplied[2] ?? 0,
                'can_do_well' => $multiplied[3] ?? 0,
                'mastered' => $multiplied[4] ?? 0,
            ];
        }
        return $search;
}

function group($min, $max, $gymnastId, $feed, $ids, $gymId)
{
    if (isset(auth()->user()->timezone)) {
        $tz = explode(') ', auth()->user()->timezone)[1];
    } else {
        $tz = "America/Chicago";
    }
    $dataFeed = json_decode($feed->data);
    if (isset($dataFeed->media_path)) {
        return null;
    }

    if ($feed->type === 4) {
        $date = Carbon::parse($feed->created_at, 'UTC')->setTimezone($tz)->format('Y-m-d');
        $feeds = FeedEntry::join('gymnasts', 'feed_entries.gymnast_id', '=', 'gymnasts.id')
            ->select(['feed_entries.*', 'gymnasts.gyms_has_users_gym_id'])
            ->where('type', 2)
            ->where('data->is_featured', '=', true)
            ->where('data->media_path', '=', null)
            ->where('gymnast_id', $gymnastId)
            ->where('gymnasts.gyms_has_users_gym_id', $gymId)
            ->whereDate('feed_entries.created_at', $date)
            ->orderBy('feed_entries.created_at', 'DESC')
            ->get();
        if (! isset($feeds)) {
            $list['count'] = 1;
            $list['ids'] = $ids;
            return $list;
        }
        $list['count'] = 0;
        foreach ($feeds as $key => $value) {
            $list['list']['daily_challenges_completed'][] = [
                'feed_id' => $value->id,
                'type' => $value->type,
                'data' => json_decode($value->data),
                'interactions' => dataInteraction(FeedEntry::find($value->id)),
                'created_at' => Carbon::parse($value->created_at, 'UTC')->setTimezone($tz),
            ];
            array_push($ids, $feed->id);
            $list['count'] = $list['count'] += 1;
        }
        $list['daily'] = true;
        $list['ids'] = $ids;
        return $list;
    }
    if ($feed->type === 0) {
        $type = [0];
    } else {
        $type = [2,6];
    }
    $feeds = FeedEntry::join('gymnasts', 'feed_entries.gymnast_id', '=', 'gymnasts.id')
        ->select(['feed_entries.*', 'gymnasts.gyms_has_users_gym_id'])
        ->where('data->media_path', '=', null)
        ->where('gymnast_id', $gymnastId)
        ->where('gymnasts.gyms_has_users_gym_id', $gymId)
        ->whereIn('type', $type)
        ->whereBetween('feed_entries.created_at', [$min, $max])
        ->orderBy('feed_entries.created_at', 'DESC')
        ->get();
    $list = [];
    $list['count'] = 1;
    foreach ($feeds as $value) {
        if ($list['count'] > 5 ) {
            continue;
        }
        $feedEntrySon = FeedEntry::find($value->id);
        if($value->type === 0) {
            $list['list']['progress'][] = [
                'feed_id' => $feedEntrySon->id,
                'type' => $value->type,
                'data' => json_decode($value->data),
                'interactions' => dataInteraction($feedEntrySon),
                'created_at' => Carbon::parse($value->created_at, 'UTC')->setTimezone($tz),
            ];
            if ($feedEntrySon->id !== $feed->id) {
                $list['count'] = $list['count'] += 1;
            }
        } else {
            $list['list']['challenges'][] = [
                'feed_id' => $feedEntrySon->id,
                'type' => $value->type,
                'data' => json_decode($value->data),
                'interactions' => dataInteraction($feedEntrySon),
                'created_at' => Carbon::parse($value->created_at, 'UTC')->setTimezone($tz),
            ];
            if ($feedEntrySon->id !== $feed->id) {
                $list['count'] = $list['count'] += 1;
            }
        }
        array_push($ids, $value->id);
    }
    $list['ids'] = $ids;
    return $list;
}

function dataInteraction(FeedEntry $feed)
{
    if (isset(auth()->user()->timezone)) {
        $tz = explode(') ', auth()->user()->timezone)[1];
    } else {
        $tz = "America/Chicago";
    }
    $data = json_decode($feed->interactions);
    $result = [];
    if (! isset($data)) {
        return null;
    }
    foreach ($data as $value) {
        if (isset($value->interaction_code)) {
            $interaction = Interaction::where('code', $value->interaction_code)->first();
        } else {
            $interaction = false;
        }
        if (! $interaction) {
            continue;
        }
        $gymnast = Gymnast::find($value->member_id);
        if (! isset($gymnast)) {
            continue;
        }
        switch ($interaction->code) {
            case 'comment':
                //$gymnast = Gymnast::find($value->member_id);
                $result['comments'][] = [
                    'member_id' => $value->member_id,
                    'member_name' => $gymnast->first_name,
                    'member_img_profile' => $gymnast->image_profile,
                    'comment' => $value->comment,
                    'created_at' => Carbon::parse($value->created_at, 'UTC')->setTimezone($tz),
                    'image_profile' => $gymnast->image_profile,
                ];
                break;
            case 'clap':
                $result[$interaction->code][] = [
                    'member_id' => $value->member_id,
                    'member_name' => $gymnast->first_name,
                    'created_at' => Carbon::parse($value->created_at, 'UTC')->setTimezone($tz),
                ];
                break;
            default:
                $result[$interaction->code][] = [
                    'member_id' => $value->member_id,
                    'member_name' => $gymnast->first_name,
                    'created_at' => Carbon::parse($value->created_at, 'UTC')->setTimezone($tz),
                ];
                break;
        }
    }
    return $result;
}

function allDailyChallenge($member, $date)
{
    $feed = FeedEntry::where('gymnast_id', $member)
        ->where('type', 4)->whereDate('created_at', $date)->first();
    if ($feed === null) {
        return false;
    }
    return true;
}

function challengesListForGroup($feed){
    foreach ($feed as $key => $value) {
        if ($feed->created_at) {
            //dd($feed);
        }
        //dd($a);
        $completedChallenges = CompletedChallenge::find($value->challenge_id);
        $feedEntry = FeedEntry::where('gymnast_id', $completedChallenges->gymnast_id)
            ->where('data->completed_challenge', $completedChallenges->id)->first();
        $challenges[] = [
            'feed_id' => $feedEntry->id,
            'type' => $feedEntry->type,
            'data' => json_decode($feedEntry->data),
            'interactions' => dataInteraction(FeedEntry::find($feedEntry->id)),
            'created_at' => $feedEntry->created_at,
        ];
    }
    return $challenges;
}

/*function noDailyChallengesCompleted($id, $gymnastId) {
    $feed = FeedEntry::find($id);
    if ($feed->type !== 2) {
        return false;
    }
    $ids = [];
    $data = json_decode($feed->data);

    $challengesDailyCompleted = FeedEntry::where('type', 4)->where('gymnast_id', $gymnastId)->get();
    if ($challengesDailyCompleted === null) {
        return false;
    }
    foreach ($challengesDailyCompleted as $key => $value){
        $completedChallengesData = json_decode($value->data);
        if ($completedChallengesData->completed_challenges_ids === null) {
            continue;
        }
        foreach ($completedChallengesData->completed_challenges_ids as $value) {
            array_push($ids, $value->challenge_id);
        }
    }
    return in_array($data->completed_challenge, $ids);
}*/

function isDaily($data, $type) {
    if ($type !== 2) {
        return false;
    }
    $data = json_decode($data);
    if ($data->is_featured) {
        return true;
    }
    return false;
}

function paginate($items, $perPage = 10, $page = null, $options = [])
{
    $page = Paginator::resolveCurrentPage() ?? 1;
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}

function descriptionTextNotification($data, $memberId, $type, $interactionId)
{
    $data = json_decode($data);
    $gymnast = Gymnast::find($memberId);
    $gymnastName = $gymnast->first_name ??"";
    switch ($interactionId) {
        case 1:
            $action = "clapped";
            break;
        case 2:
            $action = "high fived";
            break;
        default:
            $action = "commented";
            break;
    }
    switch ($type) {
        case 0:
            if ($data->progress_status === 0) {
                $description = $action.' Just Started '.$data->name;
            }
            if ($data->progress_status === 1) {
                $description = $action.' is learning a '.$data->name;
            }
            if ($data->progress_status === 2) {
                $description = $action.' can do '.$data->name;
            }
            if ($data->progress_status === 3) {
                $description = $action.' can do now '.$data->name;
            }
            if ($data->progress_status === 4) {
                $description = $action.' has mastered '.$data->name;
            }
            break;
        case 1:
            $description = $action.' Happy Birthday '.$gymnastName;
            break;
        case 2:
            $challengeName = $data->challenge_name ??"";
            $description = $action.' has completed '.$challengeName;
            break;
        case 3:
            $description = $action." has earned another 1000 points";
            break;
        case 4:
            $description = $action." has completed all today's daily challenges";
            break;
        default:
            $description = $action.' has extended her streak another 10 days for a total of 1000 days in a row!';
            break;
    }
    return $description;
}

function subscriptionStatus($subscription)
{
    if (isset($subscription->subscription_id)) {
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
        try {
            $subscription_item = $stripe->subscriptions->retrieve($subscription->subscription_id,
            []);
            return $subscription_item->status;
          } catch(\Stripe\Exception\ApiErrorException $e) {
              
                  $StripeErrors = fopen("StripeErrorLog.txt",'a');
                  $errormsg=$e->getMessage();
                  $DateTime = date("Y-m-d h:i:sa");
                  $Separator = "\xA----------------------------------------Error--------------------------------------\xA";
                  $Context=array(
                          'action'    => 'stripe_subscription_active',
                          'subscription' => '$subscription',
                          'user' => $subscription->user_id,
                  );
                  if($e){
                      fwrite($StripeErrors ,print_r($Separator,true));
                      fwrite($StripeErrors ,print_r($DateTime."\xA",true));
                      fwrite($StripeErrors ,print_r($Context,true));
                      fwrite($StripeErrors ,print_r($errormsg,true));
                      fwrite($StripeErrors ,print_r($Separator,true));
                  }
                  fclose($StripeErrors);
                return $errormsg;
            }
    } else {
        return "invited";
    }
}
