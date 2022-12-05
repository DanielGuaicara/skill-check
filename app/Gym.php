<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gym extends Model
{
    use SoftDeletes;

    protected $table = 'gyms';

    protected $fillable = [
        'name',
        'description',
        'settings',
        'is_stripe',
        'leaderboard_cleanup_date',
    ];

    /**
     * Get the gym's settings.
     *
     * @return string
     */
    public function getSettingsAttribute($value)
    {
        return json_decode($value);
    }

    /**
     * Set the gym's settings.
     *
     * @param  string  $value
     *
     * @return void
     */
    public function setSettingsAttribute($value)
    {
        $this->attributes['settings'] = json_encode($value);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'gyms_has_users', 'gym_id', 'user_id');
    }

    public function hasUser($user)
    {
        return $user->gyms()->where('gyms_has_users.user_id', $user->id)->where('gyms_has_users.gym_id', $this->id)->exists();
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'gym_id');
    }

    public function skills()
    {
        return $this->hasManyThrough(Skill::class, Event::class);
    }
}
