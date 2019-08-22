<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class MessageController extends Controller

{
    public function submit(Request $request){
    //return $request->input('name');
    $this->validate($request, [
    'name'=>'required',
    'email'=>'required'
    
    ]);
    $message = new Message;
    
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');

    $message->save();
    return redirect('/');
    
    
}

}