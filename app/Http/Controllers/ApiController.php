<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    //

    public function ApiProduct()
    {
        $list_product = Product::all();
        return Response::json(array(
            'status' => true,
            'data' => $list_product),
            200
        );
    }
}
