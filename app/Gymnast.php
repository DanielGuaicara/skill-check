<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gymnast extends Model
{
    use SoftDeletes;

    protected $table = 'gymnasts';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'birth_date',
        'life_time_score',
        'current_streak_points',
        'ongoing_points',
        'last_streak',
        'about',
        'gyms_has_users_gym_id',
        'gyms_has_users_user_id',
        'image_profile',
    ];

    public function classes()
    {
        return $this->belongsToMany(ClassModel::class, 'gymnasts_has_classes', 'gymnast_id', 'class_id');
    }

    public function skills()
    {
        return $this->belongsToMany(skill::class, 'gymnasts_has_skills', 'gymnast_id', 'skill_id')->withTimestamps();
    }

    public function feedEntry()
    {
        return $this->belongsTo(FeedEntry::class);
    }

    public function completeds()
    {
        return $this->hasMany(CompletedChallenge::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'gyms_has_users_user_id', 'id');
    }
}
