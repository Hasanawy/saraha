<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Message;

class MessageController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMessages()
    {	
    	$user = Auth::user();
    	
    	$messages = Message::where("user_id", "=", $user->id)->orderBy('created_at' , 'desc')->get();
        
        $count = count($messages);
    	
    	return view('messages' , ['messages' => $messages , 'user' => $user , 'count' => $count ]);
    }
    public function getDeleteMessage($id)
    {
        $message_id = $id;
        $message = Message::find($message_id)->first();
        if(Auth::user() != $message->user)
        {
            return redirect()->back();
        }
        $message->delete();
        return redirect()->route('messages')->with(['message' => 'Sucessfuly Deleted']);
    }
}
