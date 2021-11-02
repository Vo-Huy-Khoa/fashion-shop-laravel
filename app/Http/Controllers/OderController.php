<?php

namespace App\Http\Controllers;
use App\Models\Oder;
use App\Models\Category;
use App\Models\Classify;
use App\Models\Product;
use App\Models\Properties;
use App\Models\Blog;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OderController extends Controller
{
    //

    public function __construct()
    {        $user_id = Auth::id();

        $list_categories = Category::all();
        $list_products = Product::all();
        $list_classify = Classify::all();
        $user_id = Auth::id();
        // $list_oders = Oder::where('user_id',$user_id)->take(50)->paginate(12);
        // $list_oders = Oder::all();
        // $list_cart = session()->get('list_cart');
        $list_blogs = Blog::all();
        $list_products_sale = Product::whereNotNull('sale_price')->take(50)->paginate(12);
        view()->share('users',Auth::user());
        view()->share('list_categories',$list_categories);
        view()->share('list_classify',$list_classify);
        view()->share('list_products',$list_products);
        view()->share('list_blogs',$list_blogs);
        view()->share('list_products_sale',$list_products_sale);
        $list_message = Message::all();
        view()->share('list_message',$list_message);


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
            return redirect()->back()->with('delete','Hủy đơn hàng thành công! ');
        else
            return redirect()->back()->with('delete','Hủy đơn hàng thành công! ');
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
                     $oders->status = '1';
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
        $oders->status = '1';
        $oders->save();

        session()->put('cart', $cart);
        return redirect()->route('shop_cart');

        

}

public function AddToCart_Detail(Request $request,$id)
{
    $products = Product::find($id);
    $oders = new Oder();
    $user_id = Auth::id();

    $oders->user_id = $user_id;
    $oders->product_id =$id;
    $oders->size = $request->size;
    $oders->color = $request->color;
    $oders->quantity = $request->quantity;
    $oders->total = $products->unit_price * $request->quantity;
    $oders->save();
    return redirect()->route('shop_cart');
}





}
