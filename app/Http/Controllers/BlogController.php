<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function list()
    {
        # code...
        $list_blogs = Blog::all();
        return view('admin.blogs.list',['list_blogs'=>$list_blogs]);
    }
    public function getAdd()
    {
        return view('admin.blogs.add');
    }
    public function postAdd(Request $request)
    {
        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->description = $request->description;
        

        if ($blogs->save()) {
            return back()->with('add','Thêm thành công '.$blogs->title);
        }
        else{
            return back()->with('error','Thêm thất bại '.$blogs->title);
            
        }
    }
    public function getEdit($id)
    {
        $blogs = Blog::find($id);
        return view('admin.blogs.edit',['blogs'=>$blogs]);
    }
    public function postEdit(Request $request, $id)
    {
        $blogs = Blog::find($id);

        $blogs->title = $request->title;
        $blogs->description = $request->description;

        if ($blogs->save()) {
            return back()->with('edit',"Sửa thành công ".$blogs->title);
        }
        else{
            return back()->with('error',"Sửa thất bại ".$blogs->title);
        }
        


    }
    public function delete($id)
    {
        $blogs = Blog::find($id);
        $blogs->delete();
        return back()->with('delete','Xóa thành công '.$blogs->title);

    }
}
