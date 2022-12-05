<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challenge extends Model
{
    use SoftDeletes;

    protected $table = 'challenges';

    protected $fillable = [
        'id',
        'gym_id',
        'class_id',
        'name',
        'description',
        'points',
        'is_featured',
        'featured_date',
    ];

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id', 'id');
    }

    public function completeds()
    {
        return $this->hasMany(CompletedChallenge::class);
    }
}
