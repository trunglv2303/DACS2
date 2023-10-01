@extends('admin.main')
@section('content')
<form action="{{route('setproduct')}}" method="POST">
    <div class="card-body">
    <h1>cập nhật Danh Mục</h1>
        <div class="form-group">
            <label for="menu">Mã Danh Mục</label>
            <input type="text" name="sp_product" class="form-control" placeholder="Nhập mã Danh Mục">
        </div>
        <div class="form-group">
            <label for="menu">Tên Danh Mục</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên Danh Mục">
        </div>
        <div class="form-group">
            <label for="menu">Danh Mục</label>
            <select class="form-control" name="parent_id">
                
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->username }}</option>
                    @endforeach
      
            </select>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh Danh Mục</label>
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
        <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
    </div>
    @csrf
</form>
@endsection
