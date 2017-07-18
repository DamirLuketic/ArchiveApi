<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'first_name', 'last_name', 'active', 'email_verify', 'verify_code'
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
     * Connections
     */
    public function role()
    {
    	return $this->belongsTo('App\Role');
    }

    public function albums()
    {
    	return $this->hasMany( 'App\Album');
    }

    public function ratings()
    {
        return $this->belongsToMany('App\Rating');
    }
}
