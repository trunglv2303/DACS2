@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/giohang.css')}}">
@endsection
@section('content')

<body>
   
    <div class="linksmall">

        <a href="./index.html"> TRANG CHỦ </a>
        <span>/</span>
        <a href="">GIỎ HÀNG CỦA BẠN - LVT SHOP</a>

    </div>
    <div class="item-menu"><b>GIỎ HÀNG</b></div>
    <div class="menu-item">
        <div class="sp"> Sản Phẩm</div>
        <div class="gia">Giá</div>
        <div class="soluong"> Số Lượng</div>
        <div class="tongtien">Tồng Tiền</div>
    </div>
    @foreach ($carts as $cart)
    <div class="infocat">
        <img src="/user-asset/img/{{$cart->sp_hinh}}" alt="">
        <div class="infosp"><a href="">{{$cart->sp_ten}}</a>
            <br><span>Phiên bản: Size {{$cart->size}} / {{$cart->color}}<br> Thương hiệu: LVTSHOP</span>

        </div>
        <div class="gia1"><p>{{ number_format($cart->sp_giaBan, 0, ',', '.') }} VND</p>
        </div>
        <input type="number" class="quantity-input" min="1" max="10" value="{{$cart->quantity}}">
        <div class="tien">{{ number_format($total, 0, ',', '.') }} VND</div>

    </div>
    @endforeach
    
    <div class="home-1">
        <div class="chuthich">
            Chú thích <br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="chithich-1">
            <div class="tongtien">
                Tổng tiền <h1>1,118,000₫</h1>

            </div>
            <br>
            <div class="check1">
                <div class="capnhat"> Cập Nhật </div>
                <div class="thanhtoan"> <a href="../HTML/thanhtoan.html" style=" text-decoration: none;color: rgb(255, 255, 255);">Thanh Toán</a> </div>
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
</body>

</html>