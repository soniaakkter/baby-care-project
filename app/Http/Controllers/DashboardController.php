<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use Auth;

class DashboardController extends Controller
{
   public function dashboard()
   {
    $messages = Message::where('from',Auth::user()->id)->orwhere('to',Auth::user()->id)->get();
       return view('dashboard',compact('messages'));
   }
   public function message(Request $request)
   {
    $to = User::where('userType','Admin')->first();
    $message = new Message();
    $message->message = $request->message;
    $message->from = Auth::user()->id;
    $message->to = $to->id;
    $message->type = 0;
    $message->save();
    return back();
   }
   
}
