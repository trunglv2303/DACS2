@extends('admin.main')
@section('content')
<form action="{{route('setproduct')}}" method="POST"enctype="multipart/form-data">
    <div class="card-body">
    <h1 style="text-align: center">Thêm sản phẩm</h1>
        <div class="form-group">
            <label for="menu">Mã Sản Phẩm</label>
            <input type="text" name="code_product" class="form-control" style="color: aliceblue;" placeholder="Nhập mã sản phẩm">
        </div>
        <div class="form-group">
            <label for="menu">Tên Sản Phẩm</label>
            <input type="text" name="name_product" style="color: aliceblue;" class="form-control" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="menu">Danh Mục Sản Phẩm</label>
            <select class="form-control" style="color: aliceblue;" name="type_product">
                
                    @foreach ($type_products as $type_product)
                        <option value="{{ $type_product->id }}">{{ $type_product->username }}</option>
                    @endforeach
      
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Giá Gốc</label>
                    <input type="number" name="cost" style="color: aliceblue;" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Giá Bán</label>
                    <input type="number" name="price" style="color: aliceblue;" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="info_product" style="color: aliceblue;" class="form-control"></textarea>
        </div>

      

        <div class="form-group">
            <label for="menu">Ảnh sản phẩm</label>
            <input type="file" class="form-control" name="file_upload">
        </div>

        <div class="form-group">
            <label>Tình trạng sản phẩm</label>
            <select class="form-control" style="color: aliceblue;" name="status_product">
                
                    @foreach ($status_products as $status_product)
                        <option value="{{ $status_product->id }}">{{ $status_product->name_status_product }}</option>
                    @endforeach
      
            </select>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary" >Tạo sản phẩm</button>
    </div>
    @csrf
</form>
@endsection
