<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OderController extends Controller
{
    //

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
}
