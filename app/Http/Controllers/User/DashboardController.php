<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Post;
use App\Subscriver;
use App\user;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index(){
	    	$posts = Post::all();
	    	$users = User::all();
	        $subscribers  = Subscriver::all();
	    	return view('user.dashboard',compact('posts','users', 'subscribers'));
	    }
    public function profile(){
    	return view('admin.profile');
    }
}
