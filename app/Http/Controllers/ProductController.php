<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Color;
use App\Models\Comment;
use App\Models\Oder;
use App\Models\Product;
use App\Models\Product_Attribute;
use App\Models\product_image;
use App\Models\Properties;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $list_categories = Category::all();
        $list_colors = Attribute::where('name', 'color')->get();
        $list_sizes = Attribute::where('name', 'size')->get();
        view()->share('list_colors', $list_colors);
        view()->share('list_sizes', $list_sizes);
        view()->share('list_categories', $list_categories);
    }
    public function index()
    {
        $product = Product::all();
        return response()->json([
            'code' => 200,
            'data' => $product
        ]);
    }
    public function list()
    {
        $list_products = Product::all();
        return view('admin.products.list', ['list_products' => $list_products]);
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
        $products->unit_price = $request->unit_price;
        $products->sale_price = $request->sale_price;
        $products->quantity = $request->quantity;
        $products->status = 1;
        $products->save();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension(); //get format file
            if ($late != "jpg" && $late != "png" && $late != "jpeg")
                return back()->with('error_img', 'Sai định dạng hình ');
            $name = $file->getClientOriginalName(); //get name file
            $img = Str::random(4) . "_" . $name;
            while (file_exists("uploads/products/" . $img)) {
                $img = Str::random(4) . "_" . $name;
            }
            $file->move("uploads/products", $img); //add new image
            $products->image = $img;
        } else
            $products->image = "";
        $products->save();
        if ($request->attribute_id) {
            foreach ($request->attribute_id as $value) {
                $product_attributes = new Product_Attribute();
                $product_attributes->product_id = $products->id;
                $product_attributes->attribute_id = $value;
                $product_attributes->save();
            }
        }
        if ($request->images) {
            foreach ($request->images as $image) {
                $product_image =  new product_image();
                $product_image->product_id = $products->id;
                if ($image) {
                    $file = $image;
                    $late = $file->getClientOriginalExtension();
                    if ($late != "jpg" && $late != "png" && $late != "jpeg")
                        return back()->with('error_img', 'Sai định dạng hình ');
                    $name = $file->getClientOriginalName();
                    $img = Str::random(4) . "_" . $name;
                    while (file_exists("uploads/products/" . $img)) {
                        $img = Str::random(4) . "_" . $name;
                    }
                    $file->move("uploads/products", $img);
                    $product_image->image = $img;
                } else
                    $product_image->image = "";
                $product_image->save();
            }
        }
        return back()->with('add', 'Thêm thành công ' . $products->name);
    }

    public function edit($id)
    {
        $id_attr = Product_Attribute::where('product_id', $id)->pluck('attribute_id')->toArray();
        $products = Product::find($id);
        $product_image = product_image::where('product_id', $id)->get();
        return view('admin.products.edit', [
            'products' => $products,
            'product_image' => $product_image,
            'id_attr' => $id_attr
        ]);
    }

    public function postEdit(Request $request, $id)
    {
        $products = Product::find($id);
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->unit_price = $request->unit_price;
        $products->sale_price = $request->sale_price;
        $products->quantity = $request->quantity;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension(); //get format file
            if ($late != "jpg" && $late != "png" && $late != "jpeg")
                return back()->with('error_img', 'Sai định dạng hình');
            $name = $file->getClientOriginalName(); //get name file
            $img = Str::random(4) . "_" . $name;
            while (file_exists("uploads/products/" . $img)) {
                $img = Str::random(4) . "_" . $name;
            }
            // add image
            $file->move("uploads/products", $img);
            //delete image old
            unlink("uploads/products/" . $products->image);
            $products->image = $img;
        }
        $products->save();
        if ($request->attribute_id) {
            $product_attributes = Product_Attribute::where('product_id', $id)->delete();
            foreach ($request->attribute_id as $value) {
                $product_attributes = new Product_Attribute();
                $product_attributes->product_id = $products->id;
                $product_attributes->attribute_id = $value;
                $product_attributes->save();
            }
        }
        if ($request->images) {
            $product_image =   product_image::where('product_id', $id)->delete();
            foreach ($request->images as $image) {
                $product_image = new product_image();
                $product_image->product_id = $products->id;
                if ($image) {
                    $file = $image;
                    $late = $file->getClientOriginalExtension();
                    if ($late != "jpg" && $late != "png" && $late != "jpeg")
                        return back()->with('error_img', 'Sai định dạng hình ');
                    $name = $file->getClientOriginalName();
                    $img = Str::random(4) . "_" . $name;
                    while (file_exists("uploads/products/" . $img)) {
                        $img = Str::random(4) . "_" . $name;
                    }
                    $file->move("uploads/products", $img);
                    foreach ($product_image as $image) {
                        unlink("uploads/products/" . $image->image);
                    }
                    $product_image->image = $img;
                } else
                    $product_image->image = "";
                $product_image->save();
            }
        }
        return back()->with('edit', 'Sửa thành công ' . $products->name);
    }
    public function delete($id)
    {
        $product_attributes = Product_Attribute::where('product_id', $id)->delete();
        $product_images = product_image::where('product_id', $id)->delete();
        $products = Product::find($id);
        $products->delete();
        return back()->with('delete', 'Bạn đã xóa thành công sản phẩm ' . $products->name);
    }
    public function delete_comments($id)
    {
        $comments = Comment::find($id);
        $comments->delete();
        return back()->with('delete_comments', 'Bạn đã xóa thành công comment ' . $comments->users->name);
    }
}
