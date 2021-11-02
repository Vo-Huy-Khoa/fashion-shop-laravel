<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classify;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //

    public function list()
    {
        $list_categories = Category::all();
        return view('admin.categories.list',['list_categories'=> $list_categories]);
    }

    public function add()

    {
        $list_classify = Classify::all();
        return view('admin.categories.add',['list_classify'=>$list_classify]);
    }

    public function postAdd(Request $request)
    {
        $categories = new Category();
        $categories->class_id = $request->class_id;
        $categories->name = $request->name;
        $categories->description = $request->description;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
        
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg") {
                return back()->with('error_img','Sai định dạng hình ');
            }
            $name = $file->getClientOriginalName();
            $img = Str::random(4)."_".$name;
        
            while (file_exists("uploads/categories/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            
            $file->move("uploads/categories",$img);
            $categories->image = $img;
            
        }
        else{
            $categories->image ="";
        }

        if($categories->save())
            return back()->with('add','Bạn đã thêm thành công '.$categories->name);
        else
            return back()->with('error_add','Bạn đã xóa thất bại '.$categories->name);


    }

    public function edit($id)
    {
        $list_classify =  Classify::all();
        $categories = Category::find($id);
        return view('admin.categories.edit',['categories'=>$categories,'list_classify'=>$list_classify]);
    }

    public function postEdit(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->class_id = $request->class_id;
        $categories->name = $request->name;
        $categories->description = $request->description;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
        
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg") {
                return back()->with('error_img','Sai định dạng hình ');
            }
            $name = $file->getClientOriginalName();
            $img = Str::random(4)."_".$name;
        
            while (file_exists("uploads/categories/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            
            $file->move("uploads/categories",$img);
            unlink("uploads/categories/".$categories->image);
            $categories->image = $img;
            
        }
        else{
            $categories->image ="";
        }


        if($categories->save())
            return back()->with('edit','Bạn đã sửa thành công '.$categories->name);
        else
            return back()->with('error_edit','Bạn đã sửa thất bại '.$categories->name);






    }

    public function delete($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return back()->with('delete','bạn đã xóa thành công'.$categories->name);
    }

}
