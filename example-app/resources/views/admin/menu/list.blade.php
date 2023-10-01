@extends('admin.main')
@section('content')
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Kích Hoạt</th>
                <th>Ngày Cập Nhật</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i> Sửa
                    </a>    
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
