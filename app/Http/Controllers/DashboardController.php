<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use Auth;

class DashboardController extends Controller
{
   public function dashboard()
   {
       $messages = Message::all();
       return view('dashboard',compact('messages'));
   }
   public function message(Request $request)
   {
    $message = new Message();
    $message->message = $request->message;
    $message->sender = Auth::user()->id;
    $message->save();
    return back();
   }
   
}
