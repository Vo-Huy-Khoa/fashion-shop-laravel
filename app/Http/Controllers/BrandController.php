<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    //
    public function list()
    {
        $list_brands= Brand::all();
        return view('admin.brands.list',['list_brands'=>$list_brands]);
    }
    public function getAdd()
    {
        return view('admin.brands.add');
    }
    public function postAdd(Request $request)
    {
        $brands = new Brand();
        $brands->name = $request->name;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
        
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg") {
                return back()->with('error_img','Sai định dạng hình ');
            }
            $name = $file->getClientOriginalName();
            $img = Str::random(4)."_".$name;
        
            while (file_exists("uploads/brands/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            
            $file->move("uploads/brands",$img);
            $brands->image = $img;
            
        }
        else{
            $brands->image ="";
        }

        $brands -> save();

        return back()->with('add','Thêm thành công '.$brands->name);
        
    }
    public function getEdit($id)
    {
        $brands = Brand::find($id);


        return view('admin.brands.edit',['brands'=>$brands]);
    }
    public function postEdit(Request $request,$id)
    {
        
        $brands = Brand::find($id);

        $brands->name = $request->name;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
        
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg") {
                return back()->with('error_img','Sai định dạng hình ');
            }
            $name = $file->getClientOriginalName();
            $img = Str::random(4)."_".$name;
        
            while (file_exists("uploads/brands/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            
            $file->move("uploads/brands",$img);
            $brands->image = $img;
            
        }
        else{
            $brands->image ="";
        }

        $brands -> save();

        return redirect()->back()->with('edit','Sửa thành công '.$brands->name);
    }
    public function delete($id)
    {
        $brands = Brand::find($id);
        $brands->delete();
        return back()->with('delete','Xóa thành công '.$brands->name);
    }


}
