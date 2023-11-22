<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('user-asset/fontawesome-free-6.3.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('user-asset/CSS/header.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    @yield('other')
   
    <title>Fashion Shop</title>
</head>

<body>
    <div class="thanhtren">
        <div class="bentrai">
             <a href="{{route('viewhome')}}" class="icon">
                <div class="fa fa-home"></div> Hệ Thống Cửa Hàng
            </a>
        </div>     
        <div class="benphai">
             <a href="" class="icon">
                <div class="fa fa-phone"></div> 0374023927
            </a>
        </div>
    </div>
    <input type="checkbox" hidden name="" class="nav_input" id="nav_inputid">

    <nav class="nav-bar-mb">
        <label for="nav_inputid" class="exit-user">
            <div class="exit">
                <div class="fa-regular fa-circle-user"> </div>
            </div>
            <div class="exit">
                <div class="fa-solid fa-xmark"> </div>
            </div>

        </label>
        <div class="navcenter">
            <ul>

                <li>
                    <div class="itemmb">
                         
                                <li>
                              
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="{{route('viewproductnew')}}" class="ten"><b>SẢN PHẨM MỚI</b> </a>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="" class="ten"><b>BỘ SƯU TẦM</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layermb">
                            <ul>
                                <li>
                                    <a href="">Màu Hè</a>
                                    <a href="">Summer</a>
                                    <a href="">Chói Chang</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="{{route('viewproductsale')}}" class="ten"><b> SALE</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layermb">
                            <ul>
                                <li>
                                    <a href="">Áo</a>
                                    <a href="">Quần</a>
                                    <a href="">Phụ Kiện</a>
                                    <a href="">Đầm</a>
                                    <a href="">Áo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="{{route('viewproductonline')}}" class="ten"><b> LVT-SHOP</b>
                        </a>

                    </div>
                </li>

                <li>
                    <div class="itemmb">
                        <a href="{{route('viewcart')}}"><b>GIỎ HÀNG</b></a>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="{{route('register')}}"><b>ĐĂNG NHẬP</b></a>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="{{route('register')}}"><b>ĐĂNG KÍ</b></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



 

    <div class="thanhcongcu">
        <div class="logo">
            <a href="{{route('viewhome')}}" class="logo1"><img src="/user-asset/img/lvt.jpg" alt=""></a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <div class="item">
                        <a href="{{route('viewproduct')}}" class="ten"><b>SẢN PHẨM</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layer1">
                            <ul>
                                <li>
                                    @foreach ($type_products as $type_product)
                                    <a href="/collections/product/{{$type_product->url}}">{{$type_product->name_type}} <div class="fa fa-chev ron-right"></div></a>

                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="{{route('viewproductnew')}}" class="ten"><b>SẢN PHẨM MỚI</b> </a>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="{{route('viewcollection')}}" class="ten"><b>BỘ SƯU TẬP</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layer1">
                            <ul>
                                <li>
                                    <a href="">Màu Hè</a>
                                    <a href="">Summer</a>
                                    <a href="">Chói Chang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="item">
                        <a href="{{route('viewproductonline')}}" class="ten"><b>LVT ONLINE</b>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="{{route('viewproductsale')}}" class="ten"><b> SALE</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layer1">
                            <ul>
                                <li>
                                    @foreach ($type_products as $type_product)
                                    <a href="/collections/productsale/{{$type_product->url}}">{{$type_product->name_type}} <div class="fa fa-chev ron-right"></div></a>

                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="homeicontimkiem">
            <div class="icontimkiem">
                <a href="">
                    <div class="fa fa-search"></div>
                </a>
                <div class="search_box">
                <form action="/search/" method="GET">
                    <input class="search-box_input" type="text" name="search" placeholder="Nhập sản phẩm bạn muốn tìm?" >
                    <button class="search-box_btn">
                        <div class="fa fa-search"></div>
                    </button>
                </form>
                </div>
            </div>
            <div class="rectangle"></div>

            <div class="taikhoan">
                <a href="">
                    <div class="fa fa-user-circle-o"> </div>
                </a>
                <a href="">
                    <div class="khachhang"> {{(auth()->check()) ? auth()->user()->name : "Khách Hàng"}}</div>
                </a>
                <div class="boxlgin">
                    <div class="dangnhap">
                        @if (auth()->check())
                            <a href="{{route('viewprofile')}}">Profile</a>
                        @else 
                            <a href="{{route('register')}}">Đăng Nhập</a>
                        @endif
                        </div>
                    <div class="dangki">
                        @if (auth()->check())
                        <a href="{{route('logout')}}"> Logout</a>
                    @else 
                        <a href="{{route('register')}}">Đăng kí</a>
                    @endif
                    
                    
                    
                    </div>
                </div>
            </div>  
            <div class="rectangle"></div>
            <div class="giohang">
                <a href="./giohang.html">
                    <div class="fa-solid fa-cart-shopping"></div>
                </a>
                <a href="{{Route('viewcart')}}">
                    <div class="shopping"> Giỏ Hàng </div>
                </a>

            </div>
            <label for="nav_inputid" class="navbar1"> <i class="fa-solid fa-bars"></i></label>
        </div>
    </div>

    @yield('content')

    <footer class="ft">
        <div class="ft-left">
            <h3>LVTSHOP - THỜI TRANG CÔNG SỞ</h3>
            <p class="copyright">
                Công ty TNHH Dịch vụ và Thương mại Văn Trung. <br>
                Số ĐKKD 0107861391, Sở KHĐT Tp. Đà Nẵng cấp ngày 04/10/2017 <br>
                Địa chỉ: Phòng 1002
                ,số 470 đường Trần Đại Nghĩa, Hòa Quý,<br> Q. Ngũ Hành Sơn,Đà Nẵng <br>
                Chăm sóc khách hàng: 0374023927 <br>
                Mua hàng online: 0374023927 <br>
                Email: trunglv.22itb@vku.udn.vn
            </p>
        </div>
        <div class="ft-center">
            <a href=""> Giới thiệu</a><br>
            <a href=""> Triết lý kinh doanh tại NEM Fashion</a> <br>
            <a href=""> NEM's Blog</a><br>
            <a href="">Hệ thống showroom</a> <br>
            <a href=""> Liên hệ</a>

        </div>
        <div class="ft-right">

            <a href="">Chính sách giao nhận - Vận chuyển</a> <br>
            <a href="">Hướng dẫn thanh toán</a><br>
            <a href=""> Tra cứu đơn hàng</a><br>
            <a href="">Hướng dẫn chọn Size</a><br>
            <a href="">Quy định đổi hàng</a><br>
            <a href=""> Quy định bảo hành và sửa chữa</a><br>
            <a href=""> Khách hàng thân thiết</a><br>

        </div>
        <div class="ft_bank">
            Phương thức thanh toán <br>
            <a href=""><img class="imgbank" src=" {{asset('user-asset/img/bank.webp')}}" alt=""></a> <br>

            <img class="bct" src=" {{asset('user-asset/img/bct.webp')}}" alt="">
        </div>
       
    </footer>
    <script src="/user-asset/JS/setsize.js"></script>
    <script src="/user-asset/JS/sanphammoi.js"></script>
    <script src="/user-asset/JS/jsao.js"></script>
    <script src="/user-asset/JS/jsblog.js"></script>
    <script src="/user-asset/JS/jsvidu.js"></script>
    <script src="/user-asset/JS/javascrip.js"></script>
</body>


</html>

</html>