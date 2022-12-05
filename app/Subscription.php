<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';
    protected $primaryKey = ['user_id', 'plan_id'];
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'plan_id',
        'subscription_id',
        'customer_id',
        'status',
        'start_at',
        'end_at',
        'created_at',
        'updated_at',
    ];
}
