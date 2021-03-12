<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;

class AdminMessageController extends Controller
{
    public function message_show()
   {
    $messages = Message::where('recipent','=',null)->get();
    return view('admin.message.message',compact('messages'));
   }
   public function message_reply(Request $request)
   {
       dd($request->all());
    $message = new Message();
    $message->message = $request->message;
    $message->sender = Auth::user()->id;
    $message->recipent = $request->recipent;
    $message->save();
    return back();
   }
}
