<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use SoftDeletes;

    protected $table = 'levels';

    protected $fillable = [
        'level',
        'description',
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
