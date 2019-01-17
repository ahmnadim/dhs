<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function pimages(){
    	return $this->hasMany('App\Post_image');
    }
}
