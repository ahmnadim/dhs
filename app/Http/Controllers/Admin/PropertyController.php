<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\SubscriberPostNotify;
use App\Notifications\UserPropertyApproved;
use App\Post;
use App\Post_image;
use App\Property;
use App\Subscriver;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Post::latest()->get();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'property_title' => 'required',
            'property_description' => 'required',
            'property_area' => 'required',
            'property_bedroom' => 'required',
            'property_bathroom' => 'required',
            'property_garage' => 'required',
            'property_address' => 'required',
            'property_status' => 'required',
            'property_price' => 'required',
            'property_year_built' => 'required',
            'images' => 'required',
        ]);
        
        $post = new Post();         
        
        $post->property_title = $request->property_title;
        $post->property_price = $request->property_price;
        $post->is_approve = $request->is_approve;
        $post->property_year_built = $request->property_year_built;

        if($request->property_publication_status == true){
        $post->property_publication_status = true;

        }else{
            $post->property_publication_status = false;
        }
        $post->user_id = Auth::id();
        $post->property_description = $request->property_description;
        $post->property_area = $request->property_area;
        $post->property_bedroom = $request->property_bedroom;
        $post->property_bathroom = $request->property_bathroom;
        $post->property_garage = $request->property_garage;
        $post->property_address = $request->property_address;
        $post->property_status = $request->property_status;

        if (Auth::user()->role->id == 1) {
            $post->is_approve = true;
        } else {
            $post->is_approve = false;
        }
        

        $post->save();
        $currentId = $post->id;

        if ($request->hasFile('images')) {
            //check the images folder is exist or not
            if (!Storage::disk('public')->exists('propertyImages')) {
                Storage::disk('public')->makeDirectory('propertyImages');
            }
            $image_array = $request->file('images');
            $array_len = count($image_array);
            for ($i=0; $i < $array_len ; $i++) { 

                $currentDate = Carbon::now()->toDateString();
                $imagename = $currentDate.'-'.uniqid().'.'.$image_array[$i]->getClientOriginalExtension();
                $postimage = Image::make($image_array[$i])->resize(500,500)->stream();
                Storage::disk('public')->put('propertyImages/'.$imagename, $postimage);
                $img = new Post_image();
                $img->name = $imagename;
                $img->post_id = $currentId;
                $img->save();
            }
        }
        Toastr::success('Post successfully inserted.','success');
        return redirect()->route('admin.property.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Post::find($id);
        return view('admin.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Post::find($id);
        return view('admin.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'property_title' => 'required',
            'property_description' => 'required',
            'property_area' => 'required',
            'property_bedroom' => 'required',
            'property_bathroom' => 'required',
            'property_garage' => 'required',
            'property_address' => 'required',
            'property_status' => 'required',
            'property_price' => 'required',
            'property_year_built' => 'required',
        ]);


        $post = Post::find($id);         

        $post->property_title = $request->property_title;
        $post->property_price = $request->property_price;
        $post->is_approve = $request->is_approve;
        $post->property_year_built = $request->property_year_built;

        if($request->property_publication_status == true){
        $post->property_publication_status = true;

        } else {
            $post->property_publication_status = false;
        }

        $post->user_id = Auth::id();
        $post->property_description = $request->property_description;
        $post->property_area = $request->property_area;
        $post->property_bedroom = $request->property_bedroom;
        $post->property_bathroom = $request->property_bathroom;
        $post->property_garage = $request->property_garage;
        $post->property_address = $request->property_address;
        $post->property_status = $request->property_status;

        if (Auth::user()->role->id == 1) {
            $post->is_approve = true;
        }else{
            $post->is_approve = false;
        }
        

        $post->save();
        Toastr::success('Post successfully Updated.','success');
        return redirect()->route('admin.property.index');
    }

    //approve property 
    public function approve(Request $request, $id){
        $property = Post::find($id);
        if ($property->is_approve == false) {
            $property->is_approve = true;
            $property->save();
        }
        $email = $property->user->email;
        $users = User::where('role_id','2')->where('email', $email)->get();
        Notification::send($users, new UserPropertyApproved($property));
        
        $subscribers = Subscriver::all();
        foreach($subscribers as $subscriber)
        {
            Notification::route('mail', $subscriber->email)
            ->notify(new SubscriberPostNotify($property));
        }
        Toastr::success('Post Approved Successfully', 'success');
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Post::find($id);
        $property->delete();

        Toastr::success('Post Deleted Successfully...', 'success');
        return redirect()->route('admin.property.index');
    }
}
