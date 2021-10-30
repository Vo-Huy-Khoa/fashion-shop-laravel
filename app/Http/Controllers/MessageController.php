<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $message->save();
        return back()->with('message','Gửi phản hồi thành công!');
    }
}
