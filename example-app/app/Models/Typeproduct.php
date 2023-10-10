<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeproduct extends Model
{
    use HasFactory;
    protected $table = 'type_products';
    protected $fillable = ['id', 'username']; // Các cột bạn muốn thêm vào SELECT

}
