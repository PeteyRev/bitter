<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
            //Get the likes of the user
    public function likes()
    {
        return $this->hasMany('App\likes');
    }
    
            //Get the posts of the user
    public function posts()
    {
        return $this->hasMany('App\posts');
    }
}
