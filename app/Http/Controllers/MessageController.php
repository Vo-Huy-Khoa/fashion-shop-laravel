<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $list_message = Message::all();
        view()->share('list_message',$list_message);
    }
    public function list()
    {
        return view('admin.messages.list');
    }
    public function send(Request $request)
    {
        $message =  new Message();
        $message->users_id = Auth::id();
        $message->content = $request->content;
        // $name = $request->name;
        // $email = $request->email;
        // $content = $request->content;
        // Mail::send('', compact('name,email,content'), function ($message) use($name,$email) {
        //     $message->from($email, $name);
        //     $message->to('huykhoa630@gmail.com', 'Admin');
        //     $message->subject('CONTACT');
 
        // });

        $message->save();
        return back()->with('message','Gửi phản hồi thành công!');
    }
}
