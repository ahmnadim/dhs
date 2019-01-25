<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Sitetitle;
use App\Subscriver;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	$users = User::all();
        $subscribers  = Subscriver::all();
    	return view('admin.dashboard',compact('posts','users', 'subscribers'));
    }

    public function profile(){
    	return view('admin.profile');
    }

    public function allsubscriber(){
        $sub = Subscriver::all();
        return view('admin.property.subscriber', compact('sub'));
    }

    public function deletesubscriber($id){
        $subscriber = Subscriver::find($id);
        $subscriber->delete();

        Toastr::success('Subscriber Deleted Successfully...', 'success');
        return redirect()->route('admin.property.subscriber');
    }    

    // public function deleteuser($id){
    //     $user = User::find($id);
    //     $user->delete();

    //     Toastr::success('User Deleted Successfully...', 'success');
    //     return redirect()->route('admin.property.subscriber');
    // }

    public function alluserMethod(){
        $users = User::where('role_id',2)->get();
        return view('admin.alluser', compact('users'));
    }

    public function addagent()
    {
        return view('admin.addagent');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'about'=>'required',
            'image'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'mobile'=>'required',
            'skype'=>'required'
        ]);

       $image = $request->file('image');
       $slug = str_slug($request->name);

       if (isset($image)) {

           $currentDate = Carbon::now()->toDateString();
           $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


       if (!Storage::disk('public')->exists('agent')) {

           Storage::disk('public')->makeDirectory('agent');
       }

       $agentImage = Image::make($image)->resize(332,397)->save($imageName);

       Storage::disk('public')->put('agent/'.$imageName, $agentImage);

       }else{
            $imageName = 'default.png';
        }


        $agent = new User();
        $agent->role_id = 3;
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->about = $request->about;
        $agent->image = $imageName;
        $agent->password = Hash::make($request->password);
        $agent->phone = $request->phone;
        $agent->mobile = $request->mobile;
        $agent->skype = $request->skype;
        $agent->save();

        Toastr::success('Agent Successfully Added.');
        return redirect()->route('admin.agents');
    }

    public function agents()
    {
        $agents = User::where('role_id', 3)->get();
        return view('admin.agents', compact('agents'));
    }

    public function editAgent($id)
    {
        return $agent = User::where('role_id', 3)->find($id);
        return view('admin.editagent', compact('agents'));
    }

    public function sitetitle()
    {
        
        return view('admin.sitetitle');
    }

    public function change()
    {
        $title = Sitetitle::all();
        return view('admin.change',compact('title'));
    }

    public function changesitetitle(Request $request)
    {
        $this->validate($request,[
            'sitetitle'=>'required'
        ]);

        $sitetitle = Sitetitle::find(1);
        $sitetitle->sitetitle = $request->sitetitle;
        $sitetitle->save();

        Toastr::success('Site Title Updated.', 'success');
        return redirect()->back();

    }
}
