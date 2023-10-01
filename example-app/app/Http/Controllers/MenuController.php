<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create()
    {
        return view('admin.menu.add');
    }
    public function list()
    {
        return view('admin.menu.list');
    }
}
