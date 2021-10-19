<?php

namespace App\Http\Controllers;

use App\Models\Oder_Detail;
use Illuminate\Http\Request;

class Oder_DetailController extends Controller
{
    //
    public function list()
    {
        $list_oder_details = Oder_Detail::all();
        return view('admin.oder_details.list',['list_oder_details'=>$list_oder_details]);
    }

    public function delete($id)
    {
        $oder_details = Oder_Detail::find($id);
        
        if($oder_details->delete()) 
            return redirect()->back()->with('delete','Xóa thành công đơn hàng '.$oder_details->users->name);
        else
            return redirect()->back()->with('delete','Xóa thất bại đơn hàng '.$oder_details->users->name);
    }

}
