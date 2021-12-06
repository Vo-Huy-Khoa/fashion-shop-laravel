<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function ApiProduct()
    {
        $list_product = Product::all();
        return response()->json([
            'data' => $list_product,
        ]);
    }
}
