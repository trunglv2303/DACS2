<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sizeController extends Controller
{
    public function create()
    {
        return view('admin.size.add');
    }
    public function list()
    {
        $sizes = DB::table('sizes')->get();
        return view('admin.size.list', compact('sizes'));
    }
    public function store($id)

    {
        $sizes = DB::table('sizes')->where('id', $id)->get();
        return view('admin.size.edit', [
            'sizes' => $sizes,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $name = $request->input('name');
        $update = DB::table('sizes')->where('id', $id)->update([
            'id' => $request->input('id'),
            'size' => $name,
        ]);
        if ($update) {
            return redirect()->back()->with('success', 'đã cập nhật thành công');
        } else {
            return redirect()->back()->with('error', 'Thất Bại');
        }
    }
    public function add(Request $request)
    {
        $name = $request->input('name');
        $add = DB::table('sizes')->insert([
            'id' => $request->input('id'),
            'size' => $name,
        ]);
        if ($add) {
            return redirect()->back()->with('success', 'đã thêm thành công');
        } else {
            return redirect()->back()->with('error', 'Thất Bại');
        }
    }
    public function delete($id)
    {
        $delete = DB::table('sizes')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'đã Xóa thành công');
        } else {
            return redirect()->back()->with('error', 'Thất Bại');
        }
    }
}
