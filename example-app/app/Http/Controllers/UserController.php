<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;  
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(){


    }
    public function show($id)
    {
        return User::findOrFail($id);
    }
   


    public function getinfo(Request $request){
        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $existingUser = DB::table('users')->where('email', $request->email)->first();
    
        if ($existingUser) {
            // Nếu email đã tồn tại, bạn có thể xử lý lỗi ở đây
            // Ví dụ: Throw một ValidationException hoặc trả về thông báo lỗi
            Session::flash('error', 'Email đã tồn tại trong hệ thống');
            return redirect(route("register")); // Chuyển hướng người dùng đến trang đăng ký
        }
        // Nếu email không tồn tại, bạn có thể thêm người dùng mới
        DB::table('users')->insert([
            'email' => $request->email,
            'name' => $request->name,
            'number_phone' => $request->number_phone,
            'password' => bcrypt($request->password),
        ]);
    
        // Sau khi thêm thành công, bạn có thể thực hiện các hành động khác, ví dụ: đăng nhập người dùng, chuyển hướng, vv.
    }
    public function register(){
        return view('Login_register.register');
    }

}
