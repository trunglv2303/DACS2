@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/sanphamdam1.css')}}">

@endsection
@section('content ')


    <div class="linksmall">

        <a href="./index.html"> TRANG CHỦ </a>
        <span>/</span>
        <a href="">TẤT CẢ CÁC SẢN PHẨM</a>
        <span>/</span>
        <span>QUẦN ỐNG ĐỨNG Q17012</span>
    </div>
    <div class="center">
        <div class="imgcenter">
            @foreach($products as $product)
            <div class="imgcenter_left">
                <i class="fa-sharp fa-solid fa-chevron-up"></i>
                <img src="../img/dam1_b.webp" alt="">
                <img src="../img/dam1_c.webp" alt="">
                <img src="../img/dam1_a.webp" alt="">
                <i class="fa-sharp fa-solid fa-chevron-down"></i>
            </div>
            <div class="imgcenter_right">
                <img src="/user-asset/img/{{$product->sp_hinh}}" alt="">
            </div>
            @endforeach
        </div>
        <div class="infocenter">
        @foreach($products as $product)
            <div class="divinfo">
                <h1>{{$product->sp_ten}} </h1>
            </div>
            <div class="divinfo-1">Thương hiệu: NEM <br>
                Mã SP: {{$product->sp_ma}}</div>


            <div class="divinfo-3">
                <b> {{$product->sp_giaGoc}}₫</b>
            </div>

            <div class="divinfo-4">
                <b>Kích Thước </b>
            </div>

            <div class="size">
                <button style="width: 500px; border:1px solid #000000;    " class="size-button"
                    onclick="selectSize(this)">S</button>
                <button style="width: 500px; border:1px solid #000000;" class="size-button"
                    onclick="selectSize(this)">M</button>
                <button style="width: 500px; border:1px solid #000000;" class="size-button active"
                    onclick="selectSize(this)">L</button>

            </div>
            <div class="divinfo-5">
                <b> Màu Sắc </b>
            </div>


            <div class="color">

            </div>
            <div class="selectsize">
                <a href=""><b> Hướng Dẫn Chọn Size</b></a>

            </div>
            <div class="number">
                <b>Số Lượng <input type="number" class="quantity-input" min="1" max="10" value="1"> </b>
            </div>
            <div class="dathang">
                <div class="themvaogiohang"> <a href="giohang.html"> <b>Thêm Vào Giỏ Hàng</b></a> </div>

                <div class="datmua"><a href="thanhtoan.html"><b>Đặt Hàng</b> </a> </div>

            </div>
            <div class="mota">
                <b>{{$product->sp_thongTin}}</b>
            </div>
            @endforeach
        </div>
    </div>
    <hr style="margin-top: 10px;">
    <div class="sanpham">
        <b>SẢN PHẨM TƯƠNG TỰ</b>
    </div>
    <div class="sanphamtuongtu">
        @foreach($productss as $productt)
        <div class="imgslider">
            <div class="item1">
                <a href=""><img class="imge" src="/user-asset/img/{{$productt->sp_hinh}}"
                        alt="img"></a>
                <div class="mangche">
                    <a href="">
                        <div class="tuvan">Tư Vấn</div>
                    </a>
                </div>
            </div>
            <div class="info">
                <a href="/product/{{$productt->sp_ma}}"> <span> <b>{{$productt->sp_ten}} </b></span></a>
                <br>
                <h4>{{$productt->sp_giaGoc}}₫</h4>
            </div>
        </div>
        @endforeach
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


</html>