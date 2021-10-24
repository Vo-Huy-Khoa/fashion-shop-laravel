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
        $user_id = Auth::id();
        // $list_oders = Oder::where('user_id',$user_id)->take(50)->paginate(12);
        $list_oders = Oder::all();
        // $list_cart = session()->get('list_cart');
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
        view()->share('list_oders',$list_oders);

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


    public function addCart($product_id)
    {
        // session()->forget('list_cart');
        // session()->flush();
        // dd('list_cart');
        $products = Product::find($product_id);
        $user_id = Auth::id();
        $oders = new Oder();
        
        $list_cart = session()->get('list_cart');

        
        // if (array_key_exists($product_id,$list_cart)) {
            
        // }
        if (isset($list_cart[$product_id])) {
            $list_cart[$product_id] ['quantity'] = $list_cart[$product_id] ['quantity'] ++;
            // $oders->quantity = $list_cart[$product_id] ['quantity']++;
            // $oders->save();
        }else{

            $list_cart[$product_id] =
            [
                'name' => $products->name,
                'image' => $products->image,
                'unit_price' => $products->unit_price,
                'quantity' => 1,

            ];
            $oders->user_id = $user_id;
            $oders->product_id = $product_id;
            $oders->quantity = $list_cart[$product_id] ['quantity'];
            $oders->save();
        }

        session()->put('list_cart',$list_cart);


        return redirect()->route('shop_cart');


    }


        public function AddToCart($id)
{           
        // session()->forget('cart');
        // // session()->flush();
        // dd('list_cart');
            $user_id = Auth::id();
            $oders = new Oder();
            $products = Product::find($id);
            $cart = session()->get('cart');

            if (!$cart) {
                $cart = [ $id => [
                    'name' => $products->name,
                    'image' => $products->image,
                    'unit_price' => $products->unit_price,
                    'quantity' => 1
                     ]
                     ]; 
                     $oders->user_id = $user_id;
                     $oders->product_id =$id;
                     $oders->quantity = $cart[$id] ['quantity'];
                     $oders->total = $products->unit_price * $cart[$id] ['quantity'];
                     $oders->save();

            session()->put('cart', $cart);
            return redirect()->route('shop_cart');
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] ++;
            Oder::where('product_id', $id)->update(array('quantity' => $cart[$id]['quantity'],'total'=> $products->unit_price * $cart[$id] ['quantity'] ));
            
            session()->put('cart', $cart);
            return redirect()->route('shop_cart');
        }

        $cart[$id] =
        [
            'name' => $products->name,
            'image' => $products->image,
            'unit_price' => $products->unit_price,
            'quantity' => 1,

        ];

        $oders->user_id = $user_id;
        $oders->product_id =$id;
        $oders->quantity = $cart[$id] ['quantity'];
        $oders->total = $products->unit_price * $cart[$id] ['quantity'];
        $oders->save();

        session()->put('cart', $cart);
        return redirect()->route('shop_cart');

        

}



}
