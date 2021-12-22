<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Classify;
use App\Models\Color;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Oder;
use App\Models\Product;
use App\Models\product_image;
use App\Models\Product_Attribute;
use App\Models\Attribute;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use function GuzzleHttp\Promise\all;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $list_categories = Category::all();
        $list_message = Message::all();
        view()->share('list_message',$list_message);
        $list_classify = Classify::all();
        $list_products = Product::take(500)->paginate(12);
        $list_products_shop = Product::take(500)->paginate(9);
        $list_blogs_home = Blog::take(500)->paginate(3);
        $list_blogs = Blog::take(500)->paginate(4);
        $list_products_sale = Product::whereNotNull('sale_price')->take(50)->paginate(12);
        $list_products_shirt = Product::where('category_id',6)->take(50)->paginate(3);
        $list_products_hoodie = Product::where('category_id',3)->take(50)->paginate(3);
        $list_products_somi = Product::where('category_id',9)->take(50)->paginate(3);
        $list_products_shoe = Product::where('category_id',8)->take(50)->paginate(3);
        $list_products_au = Product::where('category_id',7)->take(50)->paginate(3);
        $list_colors = Attribute::where('name','color')->get();
        $list_sizes = Attribute::where('name','size')->get();
        view()->share('list_colors',$list_colors);
        view()->share('list_sizes',$list_sizes);
        view()->share('list_categories',$list_categories);
        view()->share('list_classify',$list_classify);
        view()->share('list_products',$list_products);
        view()->share('list_blogs_home',$list_blogs_home);
        view()->share('list_blogs',$list_blogs);
        view()->share('list_products_sale',$list_products_sale);
        view()->share('list_products_shirt',$list_products_shirt);
        view()->share('list_products_hoodie',$list_products_hoodie);
        view()->share('list_products_somi',$list_products_somi);
        view()->share('list_products_shoe',$list_products_shoe);
        view()->share('list_products_au',$list_products_au);
        view()->share('list_products_shop',$list_products_shop);
    }

    public function home()
    {
        return view('pages.home');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function products_details($id)

    {
        $products = Product::find($id);
        $id_categories = $products->category_id;
        $product_image = product_image::where('product_id',$id)->get();
        $list_colors = Attribute::where('name','color')->get();
        $list_sizes = Attribute::where('name','size')->get();
        $id_attr = Product_Attribute::where('product_id',$id)->pluck('attribute_id')->toArray();
        $list_products_categories = Product::where('category_id',$id_categories)->take(50)->paginate(10);
        $list_comments = Comment::where('product_id',$id)->get();
        return view('pages.product-detail',['products'=>$products,
                                        'list_products_categories'=>$list_products_categories,
                                        'list_comments'=>$list_comments,
                                        'product_image'=>$product_image,
                                        'list_colors'=>$list_colors,
                                        'list_sizes'=>$list_sizes,
                                        'id_attr'=> $id_attr
                                        ]);
    }
    public function show_cart()
    {
        $id = Auth::id();
        $list_oders = Oder::where('user_id',$id)->where('status',1)->get();
        return view('pages.add-to-cart',['list_oders'=>$list_oders]);
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_details($id)
    {
        $blogs_details = Blog::find($id);
       
        return view('pages.blog-detail',['blogs_details'=>$blogs_details]);
    }

    public function contact()
    {
       return view('pages.contact');
    }
    public function check_out()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $id_shipping = Shipping::where('user_id',$id)->pluck('id');
            $shippings = Shipping::find($id_shipping);
            $list_oders = Oder::where('user_id',$id)->where('status',1)->get();
            return view('pages.check_out',['list_oders'=>$list_oders,'shippings'=>$shippings]);
        }
        else
            return view('pages.login');
    }
    public function getProfile_Edit($id)
    {
        return view('pages.profile');

    }
    public function postProfile_Edit(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->city = $request->city;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if($request->password == $request->confirm_password)
             $user->password = Hash::make($request->password) ;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension(); // format file
        if ($late !="jpg" && $late != "png" && $late != "jpeg")
            return back()->with('error_img','Sai định dạng hình ');
        $name = $file->getClientOriginalName();//get name file
        $img = Str::random(4)."_".$name;
        while (file_exists("uploads/users/".$img)) {
            $img = Str::random(4)."_".$name;
        }
        $file->move("uploads/users",$img);//add new file
        $user->image = $img;
        }
        else
            $user->image ="";

        if ($user ->save())
              return back()->with('edit','Bạn đã sửa thành công '.$user->first_name." ".$user->last_name);
        else
             return back()->with('error','Bạn đã sửa thất bại '.$user->first_name." ".$user->last_name);
    }
 
}
