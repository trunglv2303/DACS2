<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Statistical;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
            'orderData' => $this->statis->getOrderData(),

        ]);
    }
    public function listStatisUser($id)
    {
        return view('admin.Statistical.listUser', [
            'listProductUsers' => $this->statis->detailListUser($id),
        ]);
    }
    public function role()
    {
        return view('admin.Statistical.role', [
            'sqls' => $this->statis->listUser(),
        ]);
    }
}
