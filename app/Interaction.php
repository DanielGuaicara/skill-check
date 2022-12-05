<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interaction extends Model
{
    use SoftDeletes;

    protected $table = 'interactions';

    protected $fillable = [
        'id',
        'name',
        'code',
        'icon',
        'is_comment',
    ];
}
