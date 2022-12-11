<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function __construct()
    {
        $list_colors = Color::all();
        view()->share('list_colors', $list_colors);
    }

    public function list()
    {
        return view('admin.colors.list');
    }
    public function getAdd()
    {
        return view('admin.colors.add');
    }
    public function postAdd(Request $request)
    {
        $colors = new color();
        $colors->name = $request->name;


        $colors->save();

        return back()->with('add', 'Thêm thành công ' . $colors->name);
    }
    public function getEdit($id)
    {
        $colors = color::find($id);


        return view('admin.colors.edit', ['colors' => $colors]);
    }
    public function postEdit(Request $request, $id)
    {

        $colors = color::find($id);

        $colors->name = $request->name;

        $colors->save();

        return redirect()->back()->with('edit', 'Sửa thành công ' . $colors->name);
    }
    public function delete($id)
    {
        $colors = color::find($id);
        $colors->delete();
        return back()->with('delete', 'Xóa thành công ' . $colors->name);
    }
}
