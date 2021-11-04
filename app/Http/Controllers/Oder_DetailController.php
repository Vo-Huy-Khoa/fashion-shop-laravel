<?php

namespace App\Http\Controllers;

use App\Models\Classify;
use App\Models\Message;
use App\Models\Oder;
use App\Models\Oder_Detail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Oder_DetailController extends Controller
{
    //
    public function __construct()
    {
        $list_classify = Classify::all();
        view()->share('list_classify',$list_classify);
        $list_message = Message::all();
        view()->share('list_message',$list_message);
        $list_products = Product::all();
        view()->share('list_products',$list_products);
    }
    public function list()
    {
        $list_oder_details = Oder_Detail::all();


        $user_id = Auth::id();
        $out_cart = Oder_Detail::where('users_id',Auth::id())->get();

        
        return view('admin.oder_details.list',['out_cart'=>$out_cart,
                                        'list_oder_details'=>$list_oder_details]);
    }

    public function delete($id)
    {
        $oder_details = Oder_Detail::find($id);
        
        if($oder_details->delete()) 
            return redirect()->back()->with('delete','Xóa thành công đơn hàng '.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
        else
            return redirect()->back()->with('delete','Xóa thất bại đơn hàng '.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
    }
    

    public function oder_close($id)
    {
        $oder_details = Oder_Detail::find($id);
        $oder_details->status = '0';
        $oder_details->save();
        $list_oders = Oder::where('user_id',$oder_details->users_id)->get();
        foreach ($list_oders as $oders) {
            $oders->status = '0';
            $oders->save();
        }
        return redirect()->back()->with('oder_close','Chốt thành công đơn hàng cho '.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
        // return redirect()->back()->with('oder_close','Chốt đơn thành công!'.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
    }

    public function un_oder_close($id)
    {
        $oder_details = Oder_Detail::find($id);
        $oder_details->status = '1';
        $oder_details->save();
        $list_oders = Oder::where('user_id',$oder_details->users_id)->get();
        foreach ($list_oders as $oders) {
            $oders->status = '1';
            $oders->save();
        }
        return redirect()->back()->with('un_oder_close','Hủy chốt đơn thành công đơn hàng cho '.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
    }

    public function out_cart()
    {
        $user_id = Auth::id();
        $out_cart = Oder_Detail::where('users_id',Auth::id())->get();
        $list_oders = Oder::where('user_id',$user_id)->get();
        $product_id = Oder::where('user_id',$user_id)->pluck('product_id')->toArray();
        $quantity = Oder::where('user_id',$user_id)->pluck('quantity')->toArray();
        $total = Oder::where('user_id',$user_id)->pluck('total')->toArray();

        
        // dd($out_cart);
        return view('pages.out_cart',['out_cart'=>$out_cart,
                                        'product_id'=>$product_id,
                                        'list_oders'=>$list_oders,
                                        'quantity'=>$quantity,
                                        'total'=>$total]);
    }

}
