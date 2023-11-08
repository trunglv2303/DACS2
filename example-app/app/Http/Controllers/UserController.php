<?php

namespace App\Http\Controllers;

use App\Http\Service\ProductService;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Models\Slider;
use App\Http\Service\SliderService;

class UserController extends Controller
{
  
    public function show($id)
    {
        return User::findOrFail($id);
    }



    public function getinfo(Request $request)
    {

        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $existingUser = DB::table('users')->where('email', $request->email)->first();
        $number_phone = $request->number_phone;
        if (strlen($number_phone) < 6) {
            Session::flash('error', 'Vui lòng nhập đúng số điện thoại');
            return redirect(route("register")); // Chuyển hướng người dùng đến trang đăng ký
        }
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
        return redirect(route("register"));
        // Sau khi thêm thành công, bạn có thể thực hiện các hành động khác, ví dụ: đăng nhập người dùng, chuyển hướng, vv.
    }
    public function register()
    {



        $type_products=DB::table('type_products')->get();


        return view('Login_register.register',compact('type_products'));
    }
    public function login(Request $request)
    {
        $email['info'] = $request->email;
        $name['name'] = $request->name;
        $password = $request->password;
        echo     $email['info'] = $request->email;
        echo        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            echo 'Đăng nhập thành công';
            return redirect(route("viewhome"));
        }
    }
    //Thuộc tính dùng để lưu trữ một đối tượng của lớp SliderService
    protected $slider;
    protected $product;

    //SliderService được truyền vào constructor
    public function __construct(SlideController $sliders, ProductService $products){
        //$slider được truyền vào constructor thông qua tham số $sliders được gán cho thuộc tính slider của lớp $this
        $this->slider = $sliders;
        $this->product= $products;
    }
    public function viewproduct()
    { $type_products=DB::table('type_products')->where('id','!=','6')->get();
        $products = DB::table('products')->select()->get();


        return view('Home.product',compact('type_products','products'));
    }
    public function viewpay()
    {$type_products=DB::table('type_products')->where('id','!=','6')->get();

        return view('Home.pay',compact('type_products'));
      
    }
    public function viewproductnew()
    {$productnews = DB::table('products')
        ->orderBy('sp_taoMoi', 'desc')->where('l_ma','!=','6')
        ->get();
        $type_products=DB::table('type_products')->where('id','!=','6')->get();

        return view('Home.Productnew',compact('type_products','productnews'));
    
    }
    public function viewproduct_desciption()
    {$type_products=DB::table('type_products')->where('id','!=','6')->get();

        return view('Home.Product_Description',compact('type_products'));
    }
 
    public function viewproductsale()
    {$type_products=DB::table('type_products')->where('id','!=','6')->get();
        $product_sales=DB::table('products')-> where('sp_sale','>','1')->get();

        return view('Home.Productsale',compact('type_products','product_sales'));
    }
    public function viewcart()
    {$type_products=DB::table('type_products')->where('id','!=','6')->get();

        return view('Home.Cart',compact('type_products'));
    }
    public function viewcollection()
    {$type_products=DB::table('type_products')->where('id','!=','6')->get();

        return view('Home.collection',compact('type_products'));
    }
    public function viewprofile()
    {$type_products=DB::table('type_products')->where('id','!=','6')->get();

        return view('Home.profile',compact('type_products'));
    }
    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect(route("register"));
}

}
