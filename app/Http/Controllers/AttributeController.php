<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product_Attribute;

use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function list()
    {
        $list_colors = Attribute::where('name', 'color')->get();
        $list_sizes = Attribute::where('name', 'size')->get();
        return view('admin.attributes.list', ['list_colors' => $list_colors, 'list_sizes' => $list_sizes]);
    }
    public function getAdd()
    {
        return view('admin.attributes.add');
    }

    public function postAdd(Request $request)
    {
        $attributes = new Attribute();
        $attributes->name = $request->name;
        $attributes->value = $request->value;
        $attributes->save();
        return back()->with('add', 'Thêm thành công ' . $request->value);
    }
    public function getEdit()
    {
        # code...
    }

    public function postEdit()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }
}
