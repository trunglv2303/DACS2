<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Typeproduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Statusproduct;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class ProductController extends Controller
{
    public function create()
    {
        $status_products = Statusproduct::select('id','name_status')->get();
        $type_products = Typeproduct::select('id', 'name_type')->get(); // Lấy id và tên sản phẩm
        return view('admin.product.add', ['type_products' => $type_products], ['status_products' => $status_products]);
    }
    public function list()
    {
        $products = Product::all(); // Lấy danh sách sản phẩm từ cơ sở dữ liệu
        return view('admin.product.list',['products' => $products]
        );
    }
 
    public function setproduct(Request $request)
    {
        $sp_ma = DB::table('products')->where('sp_ma', $request->code_product)->first();

        if ($sp_ma) {
            Session::flash('error', 'Mã sản phẩm đã tồn tại');
            return redirect()->back();
        }

        // Kiểm tra và xử lý các biến khác
        // if ($request->has('code_product') && $request->has('name_product') && $request->has('cost') && $request->has('price') && $request->has('info_product') && $request->has('status_product') && $request->has('type_product')) {
        $file = $request->file_upload;
        $extion = $file->extension();
        $file_name = time() . '-' . 'product.' . $extion;
        $file->move(public_path('user-asset/img'), $file_name);

        DB::table('products')->insert([
            'sp_ma' => $request->code_product,
            'sp_ten' => $request->name_product,
            'sp_giaGoc' => $request->cost,
            'sp_giaBan' => $request->price,
            'sp_hinh' => $file_name,
            'sp_thongTin' => $request->info_product,
            'sp_trangThai' => $request->status_product,
            'l_ma' => $request->type_product,
        ]);

        // Đăng ký thành công, thêm thông báo thành công vào session
        Session::flash('success', 'Đăng ký sản phẩm thành công.');
        return redirect()->back();
        // } else {
        //     // Một hoặc nhiều biến trong request không tồn tại, xử lý tương ứng
        //     Session::flash('error', 'Vui lòng điền đầy đủ thông tin sản phẩm.');
        //     return redirect()->back();
        // }


    }
    public function store($id)
    {
        $type_products = Typeproduct::select('id', 'username')->get();
        $status_products = Statusproduct::select('id', 'name_status_product')->get();
        $product = Product::where('sp_ma', $id)->get();
        return view('admin.product.edit', [
            'type_products' => $type_products,
            'status_products' => $status_products,
            'products' => $product
        ]);
    }
    public function edit(Request $request, $id)
    {
        $file = $request->file_upload;
        $extion = $file->extension();
        $file_name = time() . '-' . 'product.' . $extion;
        $file->move(public_path('user-asset/img'), $file_name);
        DB::table('products')->where('sp_ma', $id)->update([
            'sp_ten' => $request->input('name_product'),
            'sp_giaGoc' => $request->input('cost'),
            'sp_giaBan' => $request->input('price'),
            'sp_hinh' => $file_name,
            'sp_thongTin' => $request->input('info_product'),
            'sp_trangThai' => $request->input('status_product'),
        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        $delete= DB::table('products')->where('sp_ma',$id)->delete();
        return redirect()->back();
    }
    public function getproductbelow(){
        // $products = Product::select('sp_ma', 'sp_ten', 'sp_giaGoc', 'sp_giaBan', 'sp_hinh', 'sp_thongTin', 'sp_taoMoi', 'sp_capNhat', 'sp_trangThai')->get();
        // return view('Home/Home', ['products' => $products]);
        $products = Product::all();
        return view('Home/Home', ['products' => $products]);
        

    }
    public function click($id)
    {
        $sql= DB::table('products')->where('sp_ma',$id)->get();
        $sql2= DB::table('products')->get();
        return view('Home.Product_Description',[
            'products'=>$sql,
            'productss'=>$sql2
        ]);
    }
    public function seach(Request $request)
    {
        $keyword = $request->input('seach');

        $results = DB::table('products')->where('sp_ten', 'like', '%' . $keyword . '%')->get();
        return view('Home.Seach', [
            'results' => $results,
            'key'=>$keyword
        ]);
    }
}
