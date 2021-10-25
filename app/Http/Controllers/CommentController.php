<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //

    public function postComments(Request $request,$id)
    {
        $comments = new Comment();
        $comments->user_id = Auth::id();
        $comments->product_id = $id;
        $comments->comment = $request->comment;
        $comments->save();

        
        $list_comments = Comment::where('product_id',$id)->get();
        return redirect()->back()->with('comment','Bình luận thành công !');
    }
}
