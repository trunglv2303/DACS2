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
use App\Models\Product;

class UserController extends Controller
{

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function addPayCart(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $orderId =   DB::table('orders')->insertGetId([
                'user_id' => $user->id,
                'diachi' => $request->input('address'),
                'sodienthoai' => $request->input('tel'),
                'tongtien' => $request->input('tongtien'),
                'id_tinhtrangdonhang' => 1
            ]);
            $carts = DB::table('carts')
                ->join('products', 'products.sp_ma', '=', 'carts.product_ma')
                ->join('colors', 'colors.id', '=', 'products.color_id')
                ->select('carts.*', 'products.sp_ten as sp_ten', 'products.sp_sale as sp_sale', 'products.sp_giaBan as sp_giaBan', 'products.sp_hinh as sp_hinh', 'colors.color as color')
                ->where('user_id', $user->id)->get();

            foreach ($carts as $cart) {

                DB::table('detail_orders')->insert([
                    'id_donhang' =>  $orderId,
                    'ma_sp' => $cart->product_ma,
                    'soluong' => $cart->quantity,
                    'gia' => $cart->price
                ]);
            }

            DB::table('carts')->delete();
        } else {
        }
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



        $type_products = DB::table('type_products')->get();


        return view('Login_register.register', compact('type_products'));
    }
    public function login(Request $request)
    {
        $email['info'] = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect(route("viewhome"));
        } else {
            Session::flash('errorlogin', 'Tài khoản không đúng!');

            return redirect()->back();
        }
    }
    //Thuộc tính dùng để lưu trữ một đối tượng của lớp SliderService
    protected $slider;
    protected $product;

    //SliderService được truyền vào constructor
    public function __construct(SlideController $sliders, ProductService $products)
    {
        //$slider được truyền vào constructor thông qua tham số $sliders được gán cho thuộc tính slider của lớp $this
        $this->slider = $sliders;
        $this->product = $products;
    }
    public function viewproduct()
    {
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();
        $colors = DB::table('colors')->get();
        $products = DB::table('products')->select()->paginate(10); {
            $type_products = DB::table('type_products')->where('id', '!=', '6')->get();
            $products = DB::table('products')->select()->where('l_ma', '!=', '6')->paginate(9);
            return view('Home.product', compact('type_products', 'products', 'colors'));
        }
    }
    public function viewpay()
    {
        $user = Auth::user();
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();
        if ($user) {
            $productIds = session('productIds');
            $carts = DB::table('carts')
                ->join('products', 'products.sp_ma', '=', 'carts.product_ma')
                ->join('colors', 'colors.id', '=', 'products.color_id')
                ->select('carts.*', 'products.sp_ten as sp_ten', 'products.sp_sale as sp_sale', 'products.sp_giaBan as sp_giaBan', 'products.sp_hinh as sp_hinh', 'colors.color as color')
                ->where('user_id', $user->id)->get();
            // dd($carts);
            // $carts=DB::table('carts')
            // ->join('products','products.sp_ma','=','carts.product_ma')
            // ->join('colors','colors.id','=','products.color_id')
            // ->select('carts.*','products.sp_ten as sp_ten','products.sp_giaBan as sp_giaBan','products.sp_hinh as sp_hinh','colors.color as color')
            // ->where('user_id',$user->id)->get();
            $total = 0;
            foreach ($carts as $cart) {
                $total = $total + $cart->price * $cart->quantity;
            }
            return view('Home.pay', compact('type_products', 'carts', 'total'));

            // $products = Product::whereIn('sp_ma', $productIds)->get();
            // dd( $products);


        } else {
            return view('Home.pay', compact('type_products'));
        }
    }
    public function addPay(Request $request, $id)
    {

        $user = Auth::user();
        $size = $request->input('size');
        $check = DB::table('carts')
            ->where('user_id', $user->id)
            ->where('product_ma', $id)
            ->where('size', $size)
            ->first();
        if ($check) {
            $newCheck = $check->quantity + $request->input('quantity');
            DB::table('carts')
                ->where('user_id', $user->id)
                ->where('product_ma', $id)
                ->update(['quantity' => $newCheck]);
        } else {
            DB::table('carts')->insert([
                'user_id' => $user->id,
                'product_ma' => $id,
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'size' => $size,
            ]);
        }

        return redirect()->back();
    }

    public function viewproduct_desciption()
    {
    }

    public function viewproductsale()
    {
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();
        $colors = DB::table('colors')->get();
        $product_sales = DB::table('products')
            ->where('sp_sale', '>', 1)
            ->where('l_ma', '!=', 6)
            ->paginate(9);

        return view('Home.Productsale', compact('type_products', 'product_sales', 'colors'));
    }
    public function productsale($url)
    {
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();
        // $product_sales=Product:: where('sp_sale','>','1')->get();

        $product_sales = Product::whereHas('type_Product', function ($query) use ($url) {
            $query->where('url', $url)->where('sp_sale', '>', '1');
        })->get();


        return view('Home.Productsale', compact('type_products', 'product_sales'));
    }
    public function
    viewcart()

    {
        $user = Auth::user();
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();
        if ($user) {
            $carts = DB::table('carts')
                ->join('products', 'products.sp_ma', '=', 'carts.product_ma')
                ->join('colors', 'colors.id', '=', 'products.color_id')
                ->select('carts.*', 'products.sp_ten as sp_ten', 'products.sp_sale as sp_sale', 'products.sp_giaBan as sp_giaBan', 'products.sp_hinh as sp_hinh', 'colors.color as color')->where('user_id', $user->id)->get();
            $total = 0;
            foreach ($carts as $cart) {
                $total = $total + $cart->price * $cart->quantity;
            }
            return view('Home.cart', compact('type_products', 'carts', 'total'));
        } else {
            return redirect(route("register"));
        }
    }
    public function viewcollection()
    {
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();

        return view('Home.collection', compact('type_products'));
    }
    public function viewprofile()
    {
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();

        return view('Home.profile', compact('type_products'));
    }
    public function viewproductnew(Request $request)
    {
        $productnews = DB::table('products')
            ->where('l_ma', '!=', '6');
        if ($request->input('price')) {
            $productnews->orderBy('sp_giaBan', $request->input('price'));
        }
        $productnews = $productnews->paginate(9);
        $colors = DB::table('colors')->get();
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();

        return view(
            'Home.Productnew',
            compact('type_products', 'productnews', 'colors')
        );
    }

    public function viewproductnewSearch($id, Request $request)
    {
        $type_products = DB::table('type_products')->where('id', '!=', '6')->get();
        $productnews = DB::table('products')
            ->join('colors', 'colors.id', '=', 'products.color_id')
            ->where('products.color_id', $id)
            ->select('products.*', 'colors.color as nameColor');
        if ($request->input('price')) {
            $productnews->orderBy('sp_giaBan', $request->input('price'));
        }
        $productnews = $productnews->paginate(9);

        $colors = DB::table('colors')->get();

        return view(
            'Home.ProductNewSearch',
            compact('productnews', 'type_products', 'colors')
        );
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
    public function comment(Request $request)
    {
        $user = auth::user();
        $rating = $request->input('rating');
        $content = $request->input('content');
        $userName = $user->name;
        $idUser = $user->id;
        $idProduct = $request->input('id_product');
        try {
            $comment = DB::table('comments')->insert([
                'user_id' => $idUser,
                'product_id' => $idProduct,
                'content' => $content,
                'rating' => $rating,
            ]);
            if ($comment) {
                return response()->json([
                    'name' => $userName,
                    'product_id' => $idProduct,
                    'content' => $content,
                    'rating' => $rating,
                ]);
            } else {
                return response()->json(['error' => ['Lỗi !!']]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => [$e->getMessage()]]);
        }
    }
}
