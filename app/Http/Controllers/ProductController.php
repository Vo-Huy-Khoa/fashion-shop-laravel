<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Color;
use App\Models\Comment;
use App\Models\Oder;
use App\Models\Product;
use App\Models\Properties;
use App\Models\Size;
use Illuminate\Http\Request;
class ProductController extends Controller
{

    public function __construct()
    {
        $list_categories = Category::all();
        $list_colors = Color::all();
        $list_sizes = Size::all();
        $list_brands = Brand::all();
        view()->share('list_colors',$list_colors);
        view()->share('list_sizes',$list_sizes);
        view()->share('list_brands',$list_brands);
        view()->share('list_categories',$list_categories);
    }
    //
public function list()

{
    $list_products = Product::all();
    return view('admin.products.list',['list_products'=>$list_products]);
}

public function add()
{

    return view('admin.products.add');
}

public function postAdd(Request $request)
{
    $products = new Product();

    $products->category_id = $request->category_id;
    $products->name = $request->name;
    $products->description = $request->description;
    $products->size = $request->size;
    $products->color = $request->color;
    $products->brand = $request->brand;
    $products->unit_price = $request->unit_price;
    $products->sale_price = $request->sale_price;
    $products->status = 1;

    if ($request->hasFile('img')) {
        $file = $request->file('img');
    
        $late = $file->getClientOriginalExtension();
        if ($late !="jpg" && $late != "png" && $late != "jpeg") {
            return back()->with('error_img','Sai định dạng hình ');
        }
        $name = $file->getClientOriginalName();
        $img = Str::random(4)."_".$name;
    
        while (file_exists("uploads/products/".$img)) {
            $img = Str::random(4)."_".$name;
        }
        
        $file->move("uploads/products",$img);
        $products->image = $img;
        
    }
    else{
        $products->image ="";
    }

    if ($products->save()) {
        return back()->with('add','Thêm thành công '.$products->name);
    }else{
        return back()->with('error_add','Thêm thất bại '.$products->name);
    }
}

public function edit($id)
{
    $products = Product::find($id);
    return view('admin.products.edit',['products'=>$products]);
}

public function postEdit(Request $request, $id)
{
    $products = Product::find($id);
    
    $products->category_id = $request->category_id;
    $products->name = $request->name;
    $products->description = $request->description;
    $products->size = $request->size;
    $products->color = $request->color;
    $products->brand = $request->brand;
    $products->unit_price = $request->unit_price;
    $products->sale_price = $request->sale_price;
    
if ($request->hasFile('img')) {
    $file = $request->file('img');

    $late = $file->getClientOriginalExtension();
    if ($late !="jpg" && $late != "png" && $late != "jpeg") {
        return back()->with('error_img','Sai định dạng hình ');
    }
    $name = $file->getClientOriginalName();
    $img = Str::random(4)."_".$name;

    while (file_exists("uploads/products/".$img)) {
        $img = Str::random(4)."_".$name;
    }
    
    $file->move("uploads/products",$img);
    $products->image = $img;
    
}
else{
    $products->image ="";
}

    if ($products->save()) {
        return back()->with('edit','Sửa thành công '.$products->name);
    }else{
        return back()->with('error_edit','Sửa thất bại '.$products->name);
    }

}

public function delete($id)
{
    $products = Product::find($id);
    // $oders = Oder::find($products->id);
    $products->delete();
    // $oders->delete();
    return back()->with('delete','Bạn đã xóa thành công sản phẩm '.$products->name);
}


public function delete_comments($id)
{
    $comments = Comment::find($id);
    $comments->delete();
    return back()->with('delete_comments','Bạn đã xóa thành công comment '.$comments->users->name);
}



    
}
