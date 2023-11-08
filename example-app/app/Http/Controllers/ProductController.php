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
use Illuminate\Support\Facades\View;

use function Laravel\Prompts\select;

class ProductController extends Controller
{
    public function create()
    {
        $status_products = Statusproduct::select('id','name_status')->get();
        $type_products = Typeproduct::select('id', 'name_type')->get(); 
        return view('admin.product.add', ['type_products' => $type_products], ['status_products' => $status_products]);
    }
    public function list()
    {
        $products = Product::all(); 
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

     
$uploadedFiles = [];

for ($i = 0; $i <4; $i++) {
    $fieldName = "file_upload$i";
    $file = $request->$fieldName;

    if ($file) {
        $ext = $file->extension();
        $fileName = time() .$i. "-product.$ext";
        $file->move(public_path('user-asset/img'), $fileName);
        $uploadedFiles[] = $fileName;
    }
}

DB::table('products')->insert([
    'sp_ma' => $request->code_product,
    'sp_ten' => $request->name_product,
    'sp_giaGoc' => $request->cost,
    'sp_giaBan' => $request->price,
    'sp_sale' => $request->sale,
    'sp_hinh' => $uploadedFiles[0] ?? null,
    'sp_hinh1' => $uploadedFiles[1] ?? null,
    'sp_hinh2' => $uploadedFiles[2] ?? null,
    'sp_hinh3' => $uploadedFiles[3] ?? null,
    'sp_thongTin' => $request->info_product,
    'sp_trangThai' => $request->status_product,
    'l_ma' => $request->type_product,
]);


        Session::flash('success', 'Đăng ký sản phẩm thành công.');
        return redirect()->back();



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
            'sp_sale' => $request->input('salea'),
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
      
        // $products = Product::all();
        // return view('Home/Home', ['products' => $products]);
        

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
    public function search(Request $request)
    {
        $keyword = $request->input('search');

        $results = DB::table('products')->where('sp_ten', 'like', '%' . $keyword . '%')->get();
        return view('Home.Search', [
            'results' => $results,
            'key'=>$keyword
        ]);
    }
    
    public function viewhome()
    {
        $slide=DB::table('sliders')->get();
        $product=DB::table('products')->where('l_ma','!=','6')->get();
        $productaovets=DB::table('products')-> where('l_ma',4)->get();
        $productaothuns=DB::table('products')-> where('l_ma',5)->get();
        $blogs=DB::table('products')-> where('l_ma',6)->get();
        $type_products=DB::table('type_products')->get();

        return view('Home.home',[   
            'sliders'=> $slide,
            'products'=>$product,
            'productaovets'=>$productaovets,
            'productaothuns'=>$productaothuns,
            'blogs'=>$blogs,
        ],compact('type_products'));
       
    }
    public function menuproduct(){
        $type_products=DB::table('type_products')->get();
        return view('Layout.content',[
            'type_products'=> $type_products
        ]);

    }
    public function type_product($id_type){
        $results = DB::table('products')->select()->where('l_ma',$id_type)->get();
        $keys = DB::table('type_products')->select()->where('id',$id_type)->get();
        $type_products=DB::table('type_products')->get();

        return view('Home.Search',compact('results','keys','type_products'));
    }
}
