@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/thanhtoan.css')}}">
<link rel="stylesheet" href="{{asset('user-asset/CSS/bosuutap.css')}}">
@endsection
@section('content ')
    <div class="menu2">

        <div class="menu2-left">
            <div class="info">
                <a href="../HTML/giohang.html">Giỏ hàng <b>></b></a>
                <span>Thông tin vận chuyển <b>></b></span>
                <span>Phương thức thanh toán</span>
            </div>
            <div class="thongtinthanhtoan">Thông tin thanh toán</div>
            @if(Auth::check())
                <p> Xin chào, {{ Auth::user()->name }} </p>
            @else
                <div class="dtk"> Bạn đã có tài khoản chưa? <a href="">Đăng Nhập </a> </div>
            @endif
            <input type="text" name="" id="" placeholder="Họ và tên">
            <input type="email" name="" id="" placeholder="Email">

            <input type="text" name="" id="" placeholder="Địa chỉ">

            <select name="flatform">
                <option value="Tỉnh/Thành Phố">Tỉnh/Thành Phố
                <option value="An Giang">An Giang
                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                <option value="Bắc Giang">Bắc Giang
                <option value="Bắc Kạn">Bắc Kạn
                <option value="Bạc Liêu">Bạc Liêu
                <option value="Bắc Ninh">Bắc Ninh
                <option value="Bến Tre">Bến Tre
                <option value="Bình Định">Bình Định
                <option value="Bình Dương">Bình Dương
                <option value="Bình Phước">Bình Phước
                <option value="Bình Thuận">Bình Thuận
                <option value="Bình Thuận">Bình Thuận
                <option value="Cà Mau">Cà Mau
                <option value="Cao Bằng">Cao Bằng
                <option value="Đắk Lắk">Đắk Lắk
                <option value="Đắk Nông">Đắk Nông
                <option value="Điện Biên">Điện Biên
                <option value="Đồng Nai">Đồng Nai
                <option value="Đồng Tháp">Đồng Tháp
                <option value="Đồng Tháp">Đồng Tháp
                <option value="Gia Lai">Gia Lai
                <option value="Hà Giang">Hà Giang
                <option value="Hà Nam">Hà Nam
                <option value="Hà Tĩnh">Hà Tĩnh
                <option value="Hải Dương">Hải Dương
                <option value="Hậu Giang">Hậu Giang
                <option value="Hòa Bình">Hòa Bình
                <option value="Hưng Yên">Hưng Yên
                <option value="Khánh Hòa">Khánh Hòa
                <option value="Kiên Giang">Kiên Giang
                <option value="Kon Tum">Kon Tum
                <option value="Lai Châu">Lai Châu
                <option value="Lâm Đồng">Lâm Đồng
                <option value="Lạng Sơn">Lạng Sơn
                <option value="Lào Cai">Lào Cai
                <option value="Long An">Long An
                <option value="Nam Định">Nam Định
                <option value="Nghệ An">Nghệ An
                <option value="Ninh Bình">Ninh Bình
                <option value="Ninh Thuận">Ninh Thuận
                <option value="Phú Thọ">Phú Thọ
                <option value="Quảng Bình">Quảng Bình
                <option value="Quảng Bình">Quảng Bình
                <option value="Quảng Ngãi">Quảng Ngãi
                <option value="Quảng Ninh">Quảng Ninh
                <option value="Quảng Trị">Quảng Trị
                <option value="Sóc Trăng">Sóc Trăng
                <option value="Sơn La">Sơn La
                <option value="Tây Ninh">Tây Ninh
                <option value="Thái Bình">Thái Bình
                <option value="Thái Nguyên">Thái Nguyên
                <option value="Thanh Hóa">Thanh Hóa
                <option value="Thừa Thiên Huế">Thừa Thiên Huế
                <option value="Tiền Giang">Tiền Giang
                <option value="Trà Vinh">Trà Vinh
                <option value="Tuyên Quang">Tuyên Quang
                <option value="Vĩnh Long">Vĩnh Long
                <option value="Vĩnh Phúc">Vĩnh Phúc
                <option value="Yên Bái">Yên Bái
                <option value="Phú Yên">Phú Yên
                <option value="Tp.Cần Thơ">Tp.Cần Thơ
                <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                <option value="Tp.Hải Phòng">Tp.Hải Phòng
                <option value="Tp.Hà Nội">Tp.Hà Nội
                <option value="TP  HCM">TP HCM
            </select>
            <select name="" id="">
                <option value="">Quận/Huyện</option>
            </select>
            <select name="" id="">
                <option value="">Xã</option>
            </select>
            <input type="text" name="" id="" placeholder="Chi tiết địa chỉ">
            <div class="gioihang">
              <a href="giohang.html" style=" text-decoration: none;"><div class="gioihang1">Giỏ Hàng</div></a>  
                <button></button>
               <button onclick="dathang()" ><div class="phuongthucthanhtoan" style="cursor: pointer;">Đặt Hàng</div></button> 
            </div>

        </div>
        <div class="menu2-right">
            @foreach($carts as $cart)
            <div class="sp">
                <img src="/user-asset/img/{{$cart->sp_hinh}}" alt="">
                <div class="namedam">{{$cart->sp_ten}} <br>
                    <h5>{{$cart->size}} / {{$cart->color}} / {{$cart->quantity}}</h5>
                </div>
                <div class="tien">{{$cart->sp_giaBan}}</div>
            </div>
            @endforeach
            <hr>
            <div class="tamtinh">
                <div class="tamtinh1">Tạm Tính </div>
                <div class="tientinh">{{$total}},000 VND</div>
            </div>
            <hr>
            <div class="tongtien">
                <div class="tongtien1">Tổng Tiền</div>
                <div class="tientong">VND {{$total}},000₫</div>
            </div>
        </div>
    </div>

</body>

</html>