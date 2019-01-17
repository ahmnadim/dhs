<?php

namespace App\Http\Controllers;

use App\Post;
use App\Property;
use App\Sitetitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = Sitetitle::find(1);
        $properties = Post::where('is_approve', true)->where('property_publication_status', true)->latest()->paginate(6);
        return view('welcome',compact('properties','title'));
    }


    public function showPropertyDetails($id){
       
        $property = Post::find($id);
        $title = Sitetitle::find(1);
        return view('single-property',compact('property','title'));
    }

    // public function showUserLogin(){
    //     return view('userLogin');
    // }
    public function contactus(){
        $title = Sitetitle::find(1);
        return view('contact_us', compact('title'));
    }

    public function aboutus(){
        $title = Sitetitle::find(1);
        return view('aboutus', compact('title'));
    }

    public function propertyBySearch(Request $request){
        //return $request;
        $title = Sitetitle::find(1);
        // $this->validate($request, [
        //     'key' => 'required',
        //     'status' => 'required',
        //     'location' => 'required',
        //     'bedroom' => 'required',
        //     'bathroom' => 'required',
        //     'sqf' => 'required',
        // ]); 

        $key = $request->key;
        $type = $request->status;
        $location = $request->location;
        $bedroom = $request->bedroom;
        $bathroom = $request->bathroom;
        $sqf = $request->sqf;
        // return $type;
        // exit();
        $property = Post::where('property_status', 'LIKE', "%$type%")
                        ->where('property_title', 'like', '%' . $key . '%')
                        ->where('property_bedroom', 'like', '%' . $bedroom . '%')
                        ->where('property_bathroom', 'like', '%' . $bathroom . '%')
                        ->where('property_address', 'like', '%' . $location . '%')
                        ->where('property_area', 'like', '%' . $sqf . '%')
                        ->orderBy('id')->paginate(6);
        return view('propertybysearch', compact('property', 'title'));
    }
}
