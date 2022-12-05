<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompletedChallenge extends Model
{
    use SoftDeletes;
    protected $table = 'completed_challenges';

    protected $fillable = [
        'gymnast_id',
        'challenge_id',
        'media_path',
        'media_caption',
        'date_of_completion',
        'points',
    ];

    public function challange()
    {
        return $this->belongsTo(Challenge::class);
    }

    public function getDateOfCompletionAttribute($value)
    {
        if (isset(auth()->user()->timezone)) {
            $timezone = explode(') ', auth()->user()->timezone)[1];
        } else {
            $timezone = 'America/Chicago';
        }
        return (new Carbon($value, $timezone))->toIso8601String();
    }

    public function setCreatedAtAttribute($value)
    {
        if (isset(auth()->user()->timezone)) {
            $timezone = explode(') ', auth()->user()->timezone)[1];
        } else {
            $timezone = 'America/Chicago';
        }
        $this->attributes['created_at'] = Carbon::now($timezone);
    }

    public function gymnast()
    {
        return $this->belongsTo(Gymnast::class);
    }
}
