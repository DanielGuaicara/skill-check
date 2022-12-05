<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunMedia extends Model
{
    protected $table = 'fun_media';

    protected $fillable = [
        'id',
        'file',
        'points',
        'created_at',
        'updated_at',
    ];
}
