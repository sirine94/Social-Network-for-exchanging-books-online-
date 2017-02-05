<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=['id','id_1','id_2','nom','prenom','nom_2','prenom_2','message'];
}
