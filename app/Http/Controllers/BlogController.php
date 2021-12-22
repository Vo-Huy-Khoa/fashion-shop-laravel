<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    public function list()
    {
        $list_blogs = Blog::all();
        return view('admin.blogs.list',['list_blogs'=>$list_blogs]);
    }
    public function getAdd()
    {
        $list_categories = Category::all();
        return view('admin.blogs.add',['list_categories'=>$list_categories]);
    }
    public function postAdd(Request $request)
    {
        $blogs = new Blog();
        $blogs->categories_id = $request->categories_id;
        $blogs->title = $request->title;
        $blogs->brief = $request->brief;
        $blogs->description = $request->description;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
        
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg") {
                return back()->with('error_img','Sai định dạng hình ');
            }
            $name = $file->getClientOriginalName();
            $img = Str::random(4)."_".$name;
        
            while (file_exists("uploads/blogs/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            
            $file->move("uploads/blogs",$img);
            $blogs->image = $img;
        }
        else
            $blogs->image ="";

        if ($blogs->save())
            return back()->with('add','Thêm thành công '.$blogs->title);
        else
            return back()->with('error','Thêm thất bại '.$blogs->title);

    }
    public function getEdit($id)
    {
        $blogs = Blog::find($id);
        $list_categories = Category::all();
        return view('admin.blogs.edit',['blogs'=>$blogs,'list_categories'=>$list_categories]);
    }
    public function postEdit(Request $request, $id)
    {
        $blogs = Blog::find($id);
        $blogs->categories_id = $request->categories_id;
        $blogs->title = $request->title;
        $blogs->brief = $request->brief;
        $blogs->description = $request->description;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg")
                return back()->with('error_img','Sai định dạng hình ');
            $name = $file->getClientOriginalName(); // get name file
            $img = Str::random(4)."_".$name;
            while (file_exists("uploads/blogs/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            //add new file image
            $file->move("uploads/blogs",$img);

            //delete file old image
            unlink("uploads/blogs/".$blogs->image);
            $blogs->image = $img;
        }
        else
            $blogs->image ="";

        if ($blogs->save())
            return redirect()->back()->with('edit','Sửa thành công '.$blogs->title);
        else
            return back()->with('error','Sửa thất bại '.$blogs->title);
    }
    public function delete($id)
    {
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect()->back()->with('delete','Xóa thành công '.$blogs->title);
    }
}
