

@extends('admin.main')
@section('content')
    <div class="container">

                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh Sản Phẩm</th>
                    <th>Giá Gốc</th>
                    <th>Giá Bán</th>
                    <th>Mô Tả Sản Phẩm</th>

                <tr>
                    <th>{{ $product->sp_ma }}</th>
                    <th>{{ $product->sp_ten }}</th>
                    <th > <img style="width:100px;height:100px;border-radius:0%"  src="/user-asset/img/{{ $product->sp_hinh}}" alt=""> </th>
                    <th>{{ $product->sp_giaGoc }}</th>
                    <th>{{ $product->sp_giaBan }}</th>
                    <th > <img style="width:100px;height:100px;border-radius:0%"  src="/user-asset/img/{{ $product->sp_hinh}}" alt=""> </th>
                    <th>{{ $product->sp_thongTin }}</th>
                    <th>{{ $product->sp_ma }}</th>
                    <th>{{ $product->type_Product->username}}</th>
                    <th>{{ $product->status_product->name_status_product}}</th>
                    <th><a class="btn btn-primary btn-sm" href="/product/edit/{{$product->sp_ma}}">
                            <i class="fas fa-edit"></i> Sửa
                        </a>
