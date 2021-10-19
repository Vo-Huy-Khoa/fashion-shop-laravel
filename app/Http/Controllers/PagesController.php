<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function profile()
    {
        return view('pages.profile');
    }


    public function profile_edit($id)
    {
        # code...
    }
}
