<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.main');
    }
    public function setproduct(Request $request){
        DB::table('product')->insert([
            'sp_ma' => $request->name,
            'sp_ten' => $request->name,
            'sp_giaGoc' => $request->price,
            'sp_hinh' => $request->name,
            'sp_thongTin' => $request->name,
            'sp_giaBan' =>$request->pricesale,
            'sp_trangThai' =>$request->parent_id,
            'l_ma' =>$request->parent_id,
        ]);
    }
}
