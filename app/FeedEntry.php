<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedEntry extends Model
{
    public $timestamps = false;
    protected $table = 'feed_entries';
    protected $fillable = [
        'gymnast_id',
        'type',
        'data',
        'interactions',
        'created_at',
    ];

    public function gymnasts()
    {
        return $this->hasMany(Gymnast::class);
    }
}
