@extends('layout.content'); 
{{-- kết thừa layout --}}

@section('other')
{{-- điên vào     @yield('other')  --}}

<link rel="stylesheet" href="{{asset('user-asset/CSS/dangnhap.css')}}">
    
@endsection

@section('content')
<div class="linksmall">

    <a href="./index.html"> TRANG CHỦ </a>
    <span>/</span>
    <a href=""> ĐĂNG NHẬP- ĐĂNG KÍ</a>

</div>


    
<div class="home">
    <form action="" method="POST">
@csrf
    <div class="login">
        
        <div class="dangnhap0"> <b>ĐĂNG NHẬP</b></div>
        <div class="dangnhap-1">Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được
            những ưu đãi tốt hơn!</div>
        <div class="dangnhap2">
            <label for="hi">Username</label> <br>
            <input type="email" name="email" placeholder="Email" > <br>
            <label for="pass">Mật Khẩu</label> <br>
            <input type="password" name="pass" id="pass"> <br>

        </div>
        <div class="resertpass">
            <a href="">Quên mật khẩu</a>
        </div>
     <input type="submit" value="Đăng Nhập" >
            </div>
        </form>

    <div class="gach"></div>
    <div class="singin">
        <div class="dangki0"><b>ĐĂNG KÍ</b></div>
        <div class="dangki-1">Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</div>
        @if (Session::has('error'))
    <div style="background: red ;clo" class="alert alert-danger">
        {{ Session::get('error') }}
     

    </div>
    
@endif

      <form action="{{route('getinfo')}}" method="POST">
        @csrf
        <div class="dangki2">
            <label for="email">Email</label> <br>
            <input type="email" name="email"><br>
            <label for="ho">Họ và tên</label> <br>
            <input type="text" name="name"> <br>
            <label for="sdt">Số Điện Thoại </label> <br>
            <input type="tel" name="number_phone" > <br>
            <label for="pas">Mật Khẩu</label> <br>
            <input type="password" name="password" > <br>
            <input type="checkbox" name="" id="check1"> <label for="">Đăng ký nhận bản tin</label> <br>
            <input type="checkbox" name="" id="check1"> <label for="">Tôi đồng ý với các điều khoản của LVTSHOP</label>
            <br>
            <br>
       <input type="submit" value="Đăng Kí Tài Khoản">


        </div>
    </form>
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

        <input id="ida" type="text" placeholder="Vui lòng nhập email.... " />
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


    
@endsection
