<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassModel extends Model
{
    use SoftDeletes;

    protected $table = 'classes';

    protected $fillable = [
        'id',
        'name',
        'description',
        'skill_list_id',
    ];

    public function skillList()
    {
        return $this->belongsTo(SkillList::class);
    }

    public function gymnasts()
    {
        return $this->belongsToMany(Gymnast::class, 'gymnasts_has_classes', 'class_id', 'gymnast_id');
    }

    public function challenges()
    {
        return $this->hasMany(Challenge::class, 'class_id', 'id');
    }
}
