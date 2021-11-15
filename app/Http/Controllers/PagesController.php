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
        // $list_oders = Oder::all();

        $list_classify = Classify::all();
        // $list_comments = Comment::all();

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
        // view()->share('list_comments',$list_comments);
        view()->share('list_products_shirt',$list_products_shirt);
        view()->share('list_products_hoodie',$list_products_hoodie);
        view()->share('list_products_somi',$list_products_somi);
        view()->share('list_products_shoe',$list_products_shoe);
        view()->share('list_products_au',$list_products_au);
        view()->share('list_products_shop',$list_products_shop);



        // if (Auth::check()) {
        //     view()->share('users',Auth::user());
        // }

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
        return view('pages.shop_details',['products'=>$products,
                                        'list_products_categories'=>$list_products_categories,
                                        'list_comments'=>$list_comments,
                                        'product_image'=>$product_image,
                                        'list_colors'=>$list_colors,
                                        'list_sizes'=>$list_sizes,
                                        'id_attr'=> $id_attr
                                        ]);

        // return redirect()->route();
    }
    public function shop_cart()
    {
        $id = Auth::id();
        $list_oders = Oder::where('user_id',$id)->where('status',1)->get();
        return view('pages.shop_cart',['list_oders'=>$list_oders]);
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_details($id)
    {
        $blogs_details = Blog::find($id);
       
        return view('pages.blog_details',['blogs_details'=>$blogs_details]);
    }

    public function contact()
    {
       return view('pages.contact');
    }
    public function check_out()
    {
        if (Auth::check()) {
            return view('pages.check_out');
        }
        else{
            return view('pages.login');
        }
        
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
        // if($request->password == $request->repassword)
        //      $user->password = Hash::make($request->password) ;


        // if ($request->hasFile('img')) {
        //     $file = $request->file('img');
    
        //     $late = $file->getClientOriginalExtension();
        // if ($late !="jpg" && $late != "png" && $late != "jpeg") {
        //     return back()->with('error_img','Sai định dạng hình ');
        // }
        // $name = $file->getClientOriginalName();
        // $img = Str::random(4)."_".$name;
    
        // while (file_exists("uploads/users/".$img)) {
        //     $img = Str::random(4)."_".$name;
        // }
        
        // $file->move("uploads/users",$img);
        // $user->image = $img;
        
        // }
        // else{
        //     $user->image ="";
        // }
        if ($user ->save()) {
              return back()->with('edit','Bạn đã sửa thành công '.$user->first_name." ".$user->last_name);
          }else{
             return back()->with('error','Bạn đã sửa thất bại '.$user->first_name." ".$user->last_name);
          }
    }


    public function Search(Request $request)
    {
        $value = $request->value;
        $products_search = Product::where('name','like','%' . $value . '%')->take(50)->paginate(12);
    //take trả về số lượng kết quả

        return view('pages.search',['products_search'=>$products_search,'value'=>$value]);
    }

    public function Search_classify($id)
    {
        $classify = Classify::find($id);

        $products_search = $classify->product;
        return view('pages.search',['products_search'=>$products_search,'value'=>$classify->name]);
    }


    public function Search_categories($id)
    {
  
        $products_search = Product::where('category_id',$id)->take(50)->paginate(12);
        $categories = Category::find($id);
    //take trả về số lượng kết quả
    
        return view('pages.search',['products_search'=>$products_search,'value'=>$categories->name]);

    }

    // public function Search_color($id,$value)
    // {
  
    //     $products_search = Product::where('color',$value)->take(50)->paginate(12);
    // //take trả về số lượng kết quả

    //     return view('pages.search',['products_search'=>$products_search]);
    // }

    public function Search_blogs(Request $request)
    {
        $value = $request->value;
        $list_blogs_search = Blog::where('title','like','%'.$value.'%')->take(50)->paginate(12);
        
        return view('pages.blog_search',['list_blogs_search'=>$list_blogs_search]);
    }

    public function Search_categories_blogs($id)
    {
        $list_blogs_search = Blog::where('categories_id',$id)->take(50)->paginate(12);
        
        return view('pages.blog_search',['list_blogs_search'=>$list_blogs_search]);

    }
}
