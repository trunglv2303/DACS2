<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        $products = Product::select('id', 'username')->get(); // Lấy id và tên sản phẩm
        return view('admin.product.add',['products' => $products]);
    }
    public function list()
    {
        return view('admin.product.list');
    }
}
