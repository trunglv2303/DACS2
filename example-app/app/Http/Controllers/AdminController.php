<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Statistical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $statis;
    public function __construct(Statistical $statistical)
    {
        $this->statis = $statistical;
    }
    public function index()
    {
        return view('admin.main');
    }
    public function main()
    {
         return view('admin.Statistical.main', [
            'total' => $this->statis->totalMoney(),
            'profit' => $this->statis->profitMoney(),
            'order' => $this->statis->totalOrder(),
            'sqls' => $this->statis->listUser(),
        ]);
    }
    public function listStatisUser($id)
    {
        return view('admin.Statistical.listUser', [
            'listProductUsers' => $this->statis->detailListUser($id),
        ]);
    }
}
