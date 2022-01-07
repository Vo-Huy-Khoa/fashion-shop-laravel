<?php

namespace App\Http\Controllers;
use App\Models\Attribute;
use App\Models\Classify;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClassifyController extends Controller
{
    public function list()
    {
        $list_classify = Classify::all();
        return view('admin.classify.list',['list_classify'=> $list_classify]);
    }
    public function add()
    {
        return view('admin.classify.add');
    }
    public function postAdd(Request $request)
    {
        $classify = new Classify;
        $classify->name = $request->name;
        $classify->description = $request-> description;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension();//get format file
            if ($late !="jpg" && $late != "png" && $late != "jpeg") {
                return back()->with('error_img','Sai định dạng hình ');
            }
            $name = $file->getClientOriginalName();//get name image
            $img = Str::random(4)."_".$name;
        
            while (file_exists("uploads/classify/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            
            $file->move("uploads/classify",$img);//add new image
            $classify->image = $img;
            
        }
        else
            $classify->image ="";
    
        $classify -> save();
        return back()->with('add','Thêm thành công '.$classify->name);
    }
    public function edit($id)
    {
        $classify = Classify::find($id);
        return view('admin.classify.edit',['classify'=>$classify]);
    }

    public function postEdit(Request $request,$id)
    {
        $classify = Classify::find($id);
        $classify->name = $request->name;
        $classify->description = $request-> description;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg")
                return back()->with('error_img','Sai định dạng hình ');
            $name = $file->getClientOriginalName();
            $img = Str::random(4)."_".$name;
            while (file_exists("uploads/classify/".$img)) {
                $img = Str::random(4)."_".$name;
            }
            $file->move("uploads/classify",$img);
            unlink("uploads/classify".$classify->image);//delete image old
            $classify->image = $img;
        }
        else
            $classify->image ="";
        $classify -> save();
        return back()->with('edit','Sửa thành công '.$classify->name);
    }
    public function delete($id)
    {
        $classify = Classify::find($id);
        $classify->delete();
        return back()->with('delete','Xóa thành công '.$classify->name);
    }

    public function warehouse($id)
    {
        $list_colors = Attribute::where('name','color')->get();
        $list_sizes = Attribute::where('name','size')->get();

        $classify = Classify::find($id);
        $list_products = $classify->product;

        $list_products_sold = $list_products->where('status','0')->take(100);
        $list_products_notsold = $list_products->where('status','1')->take(100);

        return view('admin.warehouse.list',
        [
            'id' => $id,
            'list_products'=>$list_products,
            'list_colors'=>$list_colors,
            'list_sizes'=>$list_sizes,
            'list_products_sold'=>$list_products_sold,
            'list_products_notsold'=>$list_products_notsold
        ]);
    }

    public function sold($id)
    {
        $classify = Classify::find($id);
        $list_colors = Attribute::where('name','color')->get();
        $list_sizes = Attribute::where('name','size')->get();
        $list_products = $classify->product;
        $list_products_sold = $list_products->where('status','0')->take(100);
        $list_products_notsold = $list_products->where('status','1')->take(100);
        return view('admin.warehouse.sold',
                    [
                        'id' => $id,
                        'list_products_sold' => $list_products_sold,
                        'list_products_notsold' => $list_products_notsold,
                        'list_colors'=>$list_colors,
                        'list_sizes'=>$list_sizes,

                    ]);
    }

    public function notsold($id)
    
    {
        $classify = Classify::find($id);
        $list_colors = Attribute::where('name','color')->get();
        $list_sizes = Attribute::where('name','size')->get();
        $list_products = $classify->product;
        $list_products_sold = $list_products->where('status','0')->take(100);
        $list_products_notsold = $list_products->where('status','1')->take(100);
        return view('admin.warehouse.notsold',
                    [
                        'id' => $id,
                        'list_colors'=>$list_colors,
                        'list_sizes'=>$list_sizes,
                        'list_products_sold' => $list_products_sold,
                        'list_products_notsold' => $list_products_notsold
                    ]);

        
    }
}
