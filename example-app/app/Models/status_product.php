<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_product extends Model
{
    use HasFactory;
    protected $table = 'status_product';
    protected $fillable = ['id','name_status_product']; // Các cột bạn muốn thêm vào SELECT


}
