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
      'prenom' , 'nom', 'email', 'password','fonction','etablissement','birthday','residence'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function book(){
 return $this->hasMany('App\Book');
}
 public function relation()
 {
   return $this->hasMany('App\Relation');
 }
}
