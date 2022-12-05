<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InteractionLog extends Model
{
    protected $table = 'interaction_logs';
    
    protected $fillable = [
        'id', 'interaction_id', 'gymnast_id', 'feed_id', 'notified', 'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:UTC',
    ];
}
