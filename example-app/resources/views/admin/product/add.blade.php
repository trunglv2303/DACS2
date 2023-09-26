@extends('admin.main')
@section('content')
<form action="" method="POST">
    <div class="card-body">
    <h1>Thêm sản phẩm</h1>
        <div class="form-group">
            <label for="menu">Tên Sản Phẩm</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="menu">Danh Mục</label>
            <select class="form-control" name="parent_id">
                <option value="0">Danh mục cha</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Giá Gốc</label>
                    <input type="number" name="price" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Giá giảm</label>
                    <input type="number" name="price-sale" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="note" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Mô tả chi tiết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="uploads">
        </div>

        <div class="form-group">
            <label>Kích hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo danh mục</button>
    </div>
    @csrf
</form>
@endsection
