<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function __construct()
    {
        return view('admin.layout.main');
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
        ];
        if (Auth::attempt($credentials,$remember)) {
            // Authentication passed...
            return redirect('admin/index');
        }
        else{
           return redirect()->back()->with('error','Đăng nhập thất bại!');

        }
        // dd($request->input());
        
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

       if($request->password == $request->repassword)
            $user->password = Hash::make($request->password) ;


        $save = $user -> save();
        if ($save) {
             return redirect('admin/register')->with('register','Bạn đã đăng ký thành công!');
         }else{
            return back()->with('errorregister','Bạn đã đăng ký thất bại!');
         }

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
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if($request->password == $request->repassword)
             $user->password = Hash::make($request->password) ;
 
 
         $save = $user -> save();
         if ($save) {
              return back()->with('add','Bạn đã thêm người dùng thành công!');
          }else{
             return back()->with('error','Bạn đã thêm người dùng thất bại!');
          }
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
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if($request->password == $request->repassword)
             $user->password = Hash::make($request->password) ;

        if ($user ->save()) {
              return back()->with('edit','Bạn đã sửa thành công!'.$user->name);
          }else{
             return back()->with('error','Bạn đã sửa thất bại!');
          }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('delete','Xóa thành công người dùng '.$user->name);
    }
}