<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillList extends Model
{
    use SoftDeletes;

    protected $table = 'skill_lists';

    protected $fillable = [
        'gym_id',
        'name',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_lists_has_skills', 'skill_list_id', 'skill_id')
            ->withPivot('order', 'skill_id', 'skill_list_id');
    }

    public function classes()
    {
        return $this->hasOne(ClassModel::class, 'skill_list_id');
    }
}
