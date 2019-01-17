<?php

namespace App\Http\Controllers;

use App\Subscriver;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request){

    	$this->validate($request, [
    		'email' => 'required|email'
    	]);

    	$subscriber = new Subscriver();
    	$subscriber->email = $request->email;
    	$subscriber->save();
        Toastr::success('You are subscribed Our Site','success');
        return redirect()->back();
    	
    }
}
