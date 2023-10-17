@extends('admin.main')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <h1 style="text-align: center">Thêm slide</h1>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            @foreach($slide as $slide)
            <div class="form-group">
                <label for="menu">Tên Slider</label>
                <input type="text" name="name_product" value="{{$slide->t_name}}" style="color: aliceblue;" class="form-control"
                    placeholder="Nhập tên sản phẩm" required>
            </div>

            <div class="form-group" style="color: black" name="info_product" >
                <label style="color: white">Mô tả</label> <br>
                <textarea id="editor" name="info_product">
                    <p>{{$slide->t_decription}}</p>
                </textarea> 
            </div>
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>



            <div class="form-group">
                <label for="menu">Ảnh Slide</label>
                <input type="file" class="form-control" name="file_upload">
                <img src="/user-asset/img/{{$slide->t_Image}}">
            </div>
        </div>
        @endforeach
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        </div>
        @csrf
    </form>
@endsection
