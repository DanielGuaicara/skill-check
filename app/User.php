<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use HasRoles, SoftDeletes;

    protected $guard_name = 'api';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'timezone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gyms()
    {
        return $this->belongsToMany(Gym::class, 'gyms_has_users', 'user_id', 'gym_id')->select('id', 'name', 'settings', 'is_stripe');
    }

    public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class);
    }
    
    public function gymnasts()
    {
        return $this->hasMany(Gymnast::class, 'gyms_has_users_user_id', 'id');
    }
}
