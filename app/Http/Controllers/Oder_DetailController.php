<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use App\Models\Oder_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Oder_DetailController extends Controller
{
    //
    public function __construct()
    {
        
    }
    public function list()
    {
        $list_oder_details = Oder_Detail::all();

        return view('admin.oder_details.list',['list_oder_details'=>$list_oder_details]);
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
        return redirect()->back()->with('oder_close','Chốt thành công đơn hàng cho '.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
        // return redirect()->back()->with('oder_close','Chốt đơn thành công!'.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
    }

    public function un_oder_close($id)
    {
        $oder_details = Oder_Detail::find($id);
        $oder_details->status = '1';
        $oder_details->save();
        return redirect()->back()->with('un_oder_close','Hủy chốt đơn thành công đơn hàng cho '.$oder_details->shippings->first_name." ".$oder_details->shippings->last_name);
    }

}
