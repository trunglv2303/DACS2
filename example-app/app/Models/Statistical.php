<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistical extends Model
{
    use HasFactory;
    public function totalMoney()
    {
        $totals = DB::table('orders')->get();
        $money = 0;
        foreach ($totals as $total) {
            if ($total->id_tinhtrangdonhang == "1") {
                $money += $total->tongtien;
            }
        }
        return $money;
    }
    public function profitMoney()
    {
        $totals = DB::table('orders')
            ->join('detail_orders', 'orders.id_donhang', '=', 'detail_orders.id_donhang')
            ->join('products', 'detail_orders.ma_sp', '=', 'products.sp_ma')
            ->select('products.sp_giaBan as giaban', 'products.sp_giaGoc as giaGoc', 'orders.*')
            ->get();
        $money = 0;
        foreach ($totals as $total) {
            if ($total->id_tinhtrangdonhang == "1") {
                $profit = $total->giaGoc - $total->tongtien;
                $money += $profit;
            }
        }
        return $money;
    }
    public function totalOrder()
    {
        $totals = DB::table('orders')->get();
        $order = 0;
        foreach ($totals as $total) {
            if ($total->id_tinhtrangdonhang == "1") {
                $order++;
            }
        }
        return $order;
    }
    public function listUser()
    {
        $sqls = DB::table('users')
            ->select('users.*', 'order_totals.total_amount', 'order_counts.order_count')
            ->leftJoin(DB::raw('(SELECT user_id, SUM(tongtien) as total_amount FROM orders GROUP BY user_id) as order_totals'), function ($join) {
                $join->on('users.id', '=', 'order_totals.user_id');
            })
            ->leftJoin(DB::raw('(SELECT user_id, COUNT(*) as order_count FROM orders GROUP BY user_id) as order_counts'), function ($join) {
                $join->on('users.id', '=', 'order_counts.user_id');
            })
            ->paginate(5);
        return $sqls;
    }
    public function detailListUser($id)
    {
        $sql = DB::table('orders')
            ->join('detail_orders', 'orders.id_donhang', '=', 'detail_orders.id_donhang')
            ->join('products', 'detail_orders.ma_sp', '=', 'products.sp_ma')
            ->select('products.*', 'detail_orders.soluong as soluong', 'detail_orders.gia as gia', 'detail_orders.created_at as create')
            ->where('user_id', $id)
            ->paginate(10);
        return $sql;
    }
}
