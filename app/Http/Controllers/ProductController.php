<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
public function list()

{
    $list_products = Product::all();
    return view('admin.products.list',['list_products'=>$list_products]);
}

public function add()
{
    $list_categories = Category::all();
    return view('admin.products.add',['list_categories'=> $list_categories]);
}

public function postAdd(Request $request)
{
    $products = new Product();

    $products->category_id = $request->category_id;
    $products->name = $request->name;
    $products->description = $request->description;
    $products->size = $request->size;
    $products->unit_price = $request->unit_price;
    $products->sale_price = $request->sale_price;

    if ($products->save()) {
        return back()->with('add','Thêm thành công '.$products->name);
    }else{
        return back()->with('error_add','Thêm thất bại '.$products->name);
    }
}

public function edit($id)
{
    $list_categories = Category::all();
    $products = Product::find($id);
    return view('admin.products.edit',['products'=>$products,'list_categories'=>$list_categories]);
}

public function postEdit(Request $request, $id)
{
    $products = Product::find($id);
    
    $products->category_id = $request->category_id;
    $products->name = $request->name;
    $products->description = $request->description;
    $products->size = $request->size;
    $products->unit_price = $request->unit_price;
    $products->sale_price = $request->sale_price;


    if ($products->save()) {
        return back()->with('edit','Sửa thành công '.$products->name);
    }else{
        return back()->with('error_edit','Sửa thất bại '.$products->name);
    }

}

public function delete($id)
{
    $products = Product::find($id);
    $products->delete();
    return back()->with('delete','Bạn đã xóa thành công sản phẩm '.$products->name);
}


public function delete_comments($id)
{
    $comments = Comment::find($id);
    $comments->delete();
    return back()->with('delete_comments','Bạn đã xóa thành công comment '.$comments->users->name);
}



    
}
