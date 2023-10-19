@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/sanpham.css')}}">
@endsection
@section('content ')


    <div class="linksmall">

        <a href="./index.html"> TRANG CHỦ </a>
        <span>/</span>
        <a href="">TẤT CẢ CÁC SẢN PHẨM</a>
        <span>/</span>
        <a href=""><b>#</b>{{$key}}</a>

    </div>

    <div class="home">
        <div class="home-left">
            <ul>
                <li><a href=""><b>Danh mục</b></a></li>
                <li><a href=""><b>Tất cả sản phẩm</b></a></li>
                <li><a href=""><b>Đầm</b></a></li>
                <li><a href="">Đầm suông</a></li>
                <li><a href="">Đầm dáng A</a></li>
                <li><a href="">Đầm ôm</a></li>
                <li><a href=""><b>Áo sơ mi</b></a></li>
                <li><a href="">Dài tay</a></li>
                <li><a href="">Ngắn tay</a></li>
                <li><a href="">Tay lỡ</a></li>
                <li><a href="">Áo kiểu</a></li>
                <li><a href=""><b>Áo Dài</b></a></li>
                <li><a href=""><b>Quần</b></a></li>
                <li><a href="">Quần dài</a></li>
                <li><a href="">Quần Jeans</a></li>
                <li><a href="">Quần short</a></li>
                <li><a href=""><b>Set bộ</b></a></li>
                <li><a href=""><b>Chấn váy</b></a></li>
                <li><a href="">Chân váy xếp li</a></li>
                <li><a href="">Chân váy bút chì</a></li>
                <li><a href="">Chân váy chữ A</a></li>
            </ul>
        </div>
        <div class="home-right">
            <div class="home-right-heading">
                <h3>TẤT CẢ SẢN PHẨM</h3>
            </div>
            <div class="product">
            @if($results->isEmpty())
                    <h1>Không có sản phẩm</h1>
            @else
            @foreach($results as $result)
                <div class="product-item">
                    
                    <div class="product-img">
                        <img src="/user-asset/img/1697564393-slide.webp" alt="">
                        <div class="sale">-50%</div>
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>{{$result->sp_ma}} </b></span></a>
                        <br>
                        <h4 style="text-decoration: line-through; color: red;">{{$result->sp_giaGoc}}₫</h4>
                        <h4>{{$result->sp_giaBan}}₫</h4>
                    </div>

                </div>
                @endforeach
                @endif
                </div>
        </div>
            <div class="list">
                <a href="">
                    <div class="list1"> 1</div>
                </a>
                <a href="">
                    <div class="list2">2</div>
                </a>
                <a href="">
                    <div class="list3">3</div>
                </a>
                <a href="">
                    <div class="list4">...</div>
                </a>
                <a href="">
                    <div class="list8">195</div>
                </a>
                <a href="">
                    <div class="list9"><i class="fa-solid fa-chevron-right"></i></div>
                </a>



            </div>
        </div>

    </div>
    <div class="dangkibangtien">
        <div class="MAP">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.7333963918236!2d108.24978007500275!3d15.97529308469066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1686645400615!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="chu">
            <div class="dangkibangtin"> Đăng Kí Bảng Tin </div>
            <div class="dangkibangtinmail">
                Đăng kí bảng tin để nhận mẫu thiết kế mới nhất
            </div>

            <input type="text" placeholder="Vui lòng nhập email.... " />
            <input
                style="height: 40px;width: 50px ; background-color: rgb(0, 0, 0);color: aliceblue; margin-left:-2px ;"
                type="submit" value="Gửi"> <br>
            <div class="icon">
                <a href="" class="facebook">
                    <div class="fa-brands fa-facebook"></div>
                </a>
                <a href="" class="instagram">
                    <div class="fa-brands fa-instagram"></div>
                </a>
                <a href="" class="youtube">
                    <div class="fa-brands fa-youtube"></div>
                </a>
            </div>

    

        </div>
    </div>
    </div>
