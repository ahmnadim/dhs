<?php

namespace App\Http\Controllers;

use App\Post;
use App\Sitetitle;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function properties(){
        $title = Sitetitle::find(1);
        $properties = Post::where('is_approve', true)->where('property_publication_status', true)->latest()->paginate(6);
        return view('properties', compact('properties', 'title'));
    }
    public function agents(){
        $property = Post::get()->all();
        $title = Sitetitle::find(1);
        return view('agents',compact('agents','title'));
    }
}

