<?php

namespace App\Http\Controllers;

use App\Models\Classify;
use App\Models\Message;
use App\Models\Oder;
use App\Models\Oder_Detail;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $list_classify = Classify::all();
        $list_oders = Oder::all();
        view()->share('list_classify',$list_classify);
        view()->share('list_oders',$list_oders);
        $list_message = Message::all();
        view()->share('list_message',$list_message);
        $users = Auth::user();
        view()->share('users',$users);
        $list_message = Message::all();
        view()->share('list_message',$list_message);
    }


    public function home()
    {
        $list_users = User::all();
        $list_oder_details = Oder_Detail::all();
        $list_products = Product::all();
        return view('admin.layout.main',['list_users'=>$list_users,
                                        'list_oder_details'=>$list_oder_details,
                                        'list_products'=>$list_products]);
    }
    public function getAdmin_Login()
    {
        return view('admin.login');
    }
    public function postAdmin_Login(Request $request)
    {
        $remember =isset($request->remember) ;
                // $validator = Validator::make($request->all(),[
        //     'name' => 'required|max:25',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6'
        // ]);

        // if ($validator->fails()){
        //      return response()->json([
        //          'success' => false,
        //          'errors' => $validator->errors()->toArray()
        //      ]);
        // }
        //    return response()->json([
        //         'success' => true
        //       ]);
        
        // if (Auth::attempt(['email' =>$request->email, 'password' => Hash::make($request->password)],$remember)) {
        //    return back()->with('login','Đăng nhập thành công!');
        // }
        // else{
        //    return back()->with('error','Đăng nhập thất bại!');

        // }

        $credentials = [
            'email'=> $request->email,
            'password' => $request->password ,
            'type' => '1'
        ];
        if (Auth::attempt($credentials,$remember)) {
            // Authentication passed...
            return redirect('admin/home');
        }
        else{
           return redirect()->back()->with('error','Đăng nhập thất bại!');
        }
        // dd($request->input());
        
    }
    public function Admin_logout()
    {
        Auth::logout();
        return redirect('admin/login')->with('logout','Bạn đã đăng xuất thành công! ');
    }

    public function getAdmin_Register()
    {
        return view('admin.register');
    }
    public function postAdmin_Register(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|max:25',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6'
        // ]);

        // if ($validator->fails()){
        //      return response()->json([
        //          'success' => false,
        //          'errors' => $validator->errors()->toArray()
        //      ]);
        // }
        //    return response()->json([
        //         'success' => true
        //       ]);
        

       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->type = 1;
       if($request->password == $request->repassword)
            $user->password = Hash::make($request->password) ;
        $save = $user -> save();
        if ($save) 
            return redirect('admin/login')->with('register','Bạn đã đăng ký thành công!');
        else
            return back()->with('errorregister','Bạn đã đăng ký thất bại!');
         

    }

    public function list()
    {
        $listuser  = User::all();
        return view('admin.users.list',['listuser'=> $listuser]);
    }
    public function add()
    {
        return view('admin.users.add');
    }
    public function postAdd(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->address = $request->address;
        // $user->type = $request->type;
        if($request->password == $request->confirm_password)
             $user->password = Hash::make($request->password);
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension();
            if ($late !="jpg" && $late != "png" && $late != "jpeg") {
                return back()->with('error_img','Sai định dạng hình ');
        }
        $name = $file->getClientOriginalName();
        $img = Str::random(4)."_".$name;
        while (file_exists("uploads/users/".$img)) {
            $img = Str::random(4)."_".$name;
        }
        $file->move("uploads/users",$img);
        $user->image = $img;
        }
        else
            $user->image ="";
        
         $save = $user -> save();
         if ($save)
              return back()->with('add','Bạn đã thêm thành công '.$user->first_name." ".$user->last_name);
         else
             return back()->with('error','Bạn đã thêm người dùng thất bại '.$user->first_name." ".$user->last_name);
          
    }


    public function edit($id)
    {   
        $user = User::find($id);
        return view('admin.users.edit',['user'=>$user]);
    }

    public function postEdit(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->address = $request->address;
        if($request->password == $request->confirm_password)
             $user->password = Hash::make($request->password) ;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $late = $file->getClientOriginalExtension();
        if ($late !="jpg" && $late != "png" && $late != "jpeg") {
            return back()->with('error_img','Sai định dạng hình ');
        }
        $name = $file->getClientOriginalName();
        $img = Str::random(4)."_".$name;
        while (file_exists("uploads/users/".$img)) {
            $img = Str::random(4)."_".$name;
        }
        //add image
        $file->move("uploads/users",$img);
        //delete image
        unlink("uploads/uers/".$user->image);
        $user->image = $img;
        }
        else
            $user->image ="";
        
        if ($user ->save())
              return back()->with('edit','Bạn đã sửa thành công '.$user->first_name." ".$user->last_name);
        else
             return back()->with('error','Bạn đã sửa thất bại '.$user->first_name." ".$user->last_name);
          
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('delete','Xóa thành công người dùng '.$user->first_name." ".$user->last_name);
    }
    public function getUsers_login()
    {
        return view('pages.login');
    }

    public function postUsers_login(Request $request)
    {
        $remember =isset($request->remember) ;
        $credentials = [
            'email'=> $request->email,
            'password' => $request->password ,
            'type' => '2'
        ];
        if (Auth::attempt($credentials,$remember)) {
            // Authentication passed...
            return redirect('.');
        }
        else{
           return redirect()->back()->with('error','Đăng nhập thất bại!');

        }
    }

    public function users_logout()
    {
        session()->forget('cart');
        Auth::logout();
        return redirect('.')->with('logout','Bạn đã đăng xuất thành công! ');
    }
    public function getUsers_Register()
    {
        return view('pages.register');
    }
    public function postUsers_Register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->type = "2";
        if($request->password == $request->repassword)
             $user->password = Hash::make($request->password) ;
 
        // if ($request->hasFile('img')) {
        //     $file = $request->file('img');
    
        //     $late = $file->getClientOriginalExtension();
        //     if ($late !="jpg" && $late != "png" && $late != "jpeg") {
        //         return back()->with('error_img','Sai định dạng hình ');
        // }
        // $name = $file->getClientOriginalName();
        // $img = Str::random(4)."_".$name;
    
        // while (file_exists("uploads/users/".$img)) {
        //     $img = Str::random(4)."_".$name;
        // }
        
        // $file->move("uploads/users",$img);
        // $user->image = $img;
        
        // }
        // else{
        //     $user->image ="";
        // }
         $save = $user -> save();
         if ($save) {
              return redirect('user/login')->with('register','Bạn đã tạo thành công tài khoản '.$user->first_name." ".$user->last_name);
          }else{
             return back()->with('error','Bạn đã tạo thất bại tài khoản'.$user->first_name." ".$user->last_name);
          }
    }

    public function getAdmin_Profile()
    {
        return view('admin.users.profile');
    }

    public function postAdmin_Profile(Request $request)
    {
        # code...
    }



}