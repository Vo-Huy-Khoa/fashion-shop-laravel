<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use App\Models\Category;
use App\Models\Classify;
use App\Models\Product;
use App\Models\Properties;
use App\Models\Blog;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OderController extends Controller
{
    //

    public function __construct()
    {
        $list_categories = Category::all();
        $list_products = Product::all();
        $list_classify = Classify::all();
        $list_blogs = Blog::all();
        $list_properties = Properties::all();
        $list_products_sale = Product::whereNotNull('sale_price')->take(50)->paginate(12);
        view()->share('users',Auth::user());
        view()->share('list_categories',$list_categories);
        view()->share('list_classify',$list_classify);
        view()->share('list_products',$list_products);
        view()->share('list_blogs',$list_blogs);
        view()->share('list_products_sale',$list_products_sale);
        view()->share('list_properties',$list_properties);
    }
    public function list()
    {
        $list_oders = Oder::all();
        return view('admin.oders.list',['list_oders'=>$list_oders]);
    }

    // public function edit($id)
    // {
    //     $oders = Oder::find($id);
    //     $list_products = Product::all();
    //     return view('admin.oders.edit',['oders'=>$oders,'list_products'=>$list_products]);
    // }

    // public function postEdit(Request $request, $id)
    // {
    //     $oders = Oder::find($id);

    //     $oders->product_id = $request->product_id;
    //     $oders->quantity = $request->quantity;

    //     if ($oders->save()) {
    //         return back()->with('edit','Sửa thành công '.$oders->name);
    //     }else{
    //         return back()->with('error_edit','Sửa thất bại '.$oders->name);

    //     }
    // }


    public function delete($id)
    {
        $oders = Oder::find($id);
        
        if($oders->delete()) 
            return redirect()->back()->with('delete','Xóa thành công đơn hàng '.$oders->users->name);
        else
            return redirect()->back()->with('delete','Xóa thất bại đơn hàng '.$oders->users->name);
    }


    public function oders($id)
    {
        // session()->forget('cart');
        // dd('end');
        $products = Product::find($id);
        $cart = session()->get('cart');
        // $cart[$id] =
        // [
        //     'name' => $products->name,
        //     'image' => $products->image,
        //     'unit_price' => $products->unit_price,
        //     'quantity' => 0,
        // ];
        if (isset($cart[$id])) {
            $cart[$id] ['quantity'] = $cart[$id]['quantity'] +1 ;
        }else{

            $cart[$id] =
            [
                'name' => $products->name,
                'image' => $products->image,
                'unit_price' => $products->unit_price,
                'quantity' => 1,
            ];
        }

        session()->put('cart',$cart);

        return view('pages.shop_cart',compact('cart'));

    }

}
