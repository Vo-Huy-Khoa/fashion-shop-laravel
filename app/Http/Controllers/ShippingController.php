<?php

namespace App\Http\Controllers;

use App\Models\Oder_Detail;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShippingController extends Controller
{
    //
    public function postShipping(Request $request)
    {
        $shippings = new Shipping();
        $user_id = Auth::id();
        $shippings->user_id = $user_id;
        $shippings->first_name = $request->first_name;
        $shippings->last_name = $request->last_name;
        $shippings->email = $request->email;
        $shippings->phone = $request->phone;
        $shippings->city = $request->city;
        $shippings->address = $request->address;
        $shippings->notes = $request->notes;

        $shippings->save();


        $oder_details = new Oder_Detail();
        $oder_details->users_id = $user_id;
        $oder_details->shipping_id = $shippings->id;
        $oder_details->status = '1';

        $oder_details->save();
        return redirect()->route('out_cart');

    }
}
