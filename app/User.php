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
		'email', 'password', 'firstname', 'surname', 'phone_number', 'address', 'city', 'psc', 'ico', 'dic', 'icdph'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
	{
		return $this->belongsToMany('App\Role');
	}

	public function hasRole($role)
	{
		if ($this->roles()->where('name', $role)->first())
		{
			return true;
		}
		return false;
	}
}
