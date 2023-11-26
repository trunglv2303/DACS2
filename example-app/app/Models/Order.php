<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Set the table name for the model
    protected $table = 'orders';

    // Define the fillable attributes for mass assignment
    protected $fillable = ['id_donhang', 'user_id', 'id_status_orders', 'name', 'diachi', 'sodienthoai', 'tongtien'];

    // Define a relationship with the StatusOrders model
  
    public function status_order()
{
    return $this->belongsTo(StatusOrders::class, 'id_status_orders', 'id');
}

}
