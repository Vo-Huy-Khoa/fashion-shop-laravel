<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        
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
}
