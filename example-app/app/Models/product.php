<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Specifies the table name for the model
    protected $fillable = [
        'sp_ma',
        'sp_ten',
        'sp_giaGoc',
        'sp_giaBan',
        'sp_hinh',
        'sp_thongTin',
        'sp_taoMoi',
        'sp_capNhat',
        'sp_trangThai',
        'sp_sale'
    ]; // Specifies the columns that can be mass-assigned

    public function status_product()
    {
        return $this->hasOne(Statusproduct::class, 'id', 'sp_trangThai');
    }

    public function color_product()
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }

    public function type_Product()
    {
        return $this->hasOne(Typeproduct::class, 'id', 'l_ma');
    }
}
