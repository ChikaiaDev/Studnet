<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','department',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    

   // public function posts(){
   //     return $this->hasMany('App\Post');
   // }


    public function categories(){
        return $this->hasMany('App\Category');
    }

   // public function likes(){
   //     return $this->hasMany('App\like');
   // }
   //  public function comments(){
   //     return $this->hasMany('App\Comment');
  //  }
}
