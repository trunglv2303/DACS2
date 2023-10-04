<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Type_product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\status_product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
        $status_products = status_product::select('id', 'name_status_product')->get();

        $type_products = Type_product::select('id', 'username')->get(); // Lấy id và tên sản phẩm
        return view('admin.product.add', ['type_products' => $type_products], ['status_products' => $status_products]);
    }
    public function list()
    {
        return view('admin.product.list');
    }
    public function setproduct(Request $request)
    {

        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $extion = $request->file_upload->extension();
            $file_name = time() . '-' . 'product' . $extion;
            $file->move(public_path('user-asset/img'), $file_name);
        
        
        DB::table('product')->insert([

            'sp_ma' => $request->code_product,
            'sp_ten' => $request->name_product,
            'sp_giaGoc' => $request->cost,
            'sp_giaBan' => $request->price,
            'sp_hinh' =>   $file_name,
            'sp_thongTin' => $request->info_product,
            'sp_trangThai' => $request->status_product,
            'l_ma' => $request->type_product,
        ]);}
    }
}
