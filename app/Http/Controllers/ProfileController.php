<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
class ProfileController extends Controller
{
    //
    
    public function getProfile(Request $request)
    {
        $user = User::where("name", "=", $request->name)->first();
    	
    	return view('profile' , [ 'user' => $user]);
    }
    public function sendMessage(Request $request){


    	$this->validate($request , [
            'body'         => 'required|min:2|max:400',
            'name'		   => 'required',   
       	]);

    	$message_body = $request->body;

        $user = User::where("name", "=", $request->name)->first();
        
    	$message = new Message();
    	$message->body = $message_body;
    	$message->user_id = $user->id;
    	$message->save();
    	$msg = "Your Message Has Been Sucessfuly Send !";

    	return redirect()->route('profile' , $request->name)->with(['msg' => $msg ]);

    }
}
