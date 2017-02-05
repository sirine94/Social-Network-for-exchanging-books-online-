<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id','titre','auteur','genre','description','publicateur'];

    public function user(){
 return $this->belongsTo('App\User');
}

}
