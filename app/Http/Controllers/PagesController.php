<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $list_categories = Category::all();
        $list_products = Product::all();

        view()->share('users',Auth::user());

        if (Auth::check()) {
            view()->share('users',Auth::user());
        }

    }

    public function home()
    {
        return view('pages.home');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function shop_details()
    {
        return view('pages.shop_details');
    }
    public function shop_cart()
    {
        return view('pages.shop_cart');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_details()
    {
        return view('pages.blog_details');
    }

    public function contact()
    {
       return view('pages.contact');
    }
    public function check_out()
    {
        return view('pages.check_out');
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
}
