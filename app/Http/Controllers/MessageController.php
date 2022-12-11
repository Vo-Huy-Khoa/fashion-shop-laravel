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
        view()->share('list_message', $list_message);
    }
    public function list()
    {
        return view('admin.messages.list');
    }
    public function send(Request $request)
    {


        Mail::send(
            'pages.email',
            [
                $name = $request->name,
                $email = $request->email,
                $content = $request->content
            ],
            function ($message)
            use ($name, $email) {
                $message->from($email, $name);
                $message->subject('PHẢN HỒI TỪ KHÁCH HÀNG');
            }
        );


        return back()->with('message', 'Gửi phản hồi thành công!');
    }
}
