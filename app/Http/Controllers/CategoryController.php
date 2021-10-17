<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classify;
use Illuminate\Http\Request;

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

        if($categories->save())
            return back()->with('add','Bạn đã xóa thành công'.$categories->name);
        else
            return back()->with('error_add','Bạn đã xóa thất bại'.$categories->name);


    }

    public function edit($id)
    {
        $classify =  Classify::all();
        $categories = Category::find($id);
        return view('admin.categories.edit',['categories'=>$categories,'classify'=>$classify]);
    }

    public function postEdit(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->description = $request->description;



        if($categories->save())
            return back()->with('edit','Bạn đã sửa thành công'.$categories->name);
        else
            return back()->with('error_edit','Bạn đã sửa thất bại'.$categories->name);






    }

    public function delete($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return back()->with('delete','bạn đã xóa thành công'.$categories->name);
    }

}
