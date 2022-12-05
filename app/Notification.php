<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'gym_id',
        'class_id',
        'title',
        'description',
        'status',
    ];
}
