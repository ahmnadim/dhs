<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_image extends Model
{
     public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
