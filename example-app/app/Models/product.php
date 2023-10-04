<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


 use HasFactory;
protected $table = 'products';
    protected $fillable = ['sp_ma', 'sp_ten','sp_giaGoc','sp_giaBan','sp_hinh','sp_thongTin','sp_taoMoi','sp_capNhat','sp_trangThai']; // Các cột bạn muốn thêm vào SELECT
 }
