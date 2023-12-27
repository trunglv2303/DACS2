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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        <div class="logo1">
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
                                    <a href="/collections/product/{{$type_product->url}}">{{$type_product->name_type}}
                                        <div class="fa fa-chev ron-right"></div>
                                    </a>

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
                                    <a href="/collections/productsale/{{$type_product->url}}">{{$type_product->name_type}}
                                        <div class="fa fa-chev ron-right"></div>
                                    </a>

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
                <a href="" class="a">
                    <div class="fa fa-search"></div>
                </a>
                <div class="search_box">
                    <form action="/search/" method="GET">
                        <input class="search-box_input" id="timkiem" type="text" name="search" placeholder="Bạn cần gì?">
                        <button class="search-box_btn">
                            <div class="fa fa-search"></div>
                        </button>
                    </form>
                    <ul class="list-group" id="result">
                        <li>Danh sách sản phẩm muốn tìm</li>
                    </ul>
                </div>

                <script>
                    $(document).ready(function() {
                        $('#timkiem').keyup(function() {
                            $('#result').html('');
                            var search = $('#timkiem').val();
                            if (search !== '') {
                                var expression = new RegExp(search, "i");
                                $.getJSON('/productJS/product.json', function(data) {
                                    if (data && data.data.length > 0) {
                                        $.each(data.data, function(key, value) {
                                            if (value.sp_ten.search(expression) !== -1 || value.sp_thongTin.search(expression) !== -1) {

                                                $('#result').css('display', 'block');
                                                $('#result').append('<a style="text-decoration: none;" href="/product/' + value.sp_ma + '"><li style="cursor:pointer;" class="list-group-item link-class"><img style="width:40px" src="/user-asset/img/' + value.sp_hinh + '">' + value.sp_ten + '<br>' + value.sp_thongTin + '</li></a>');
                                            }

                                        });
                                    } else {
                                        console.log('Không có sản phẩm');
                                        $('#result').append('<li style="cursor:pointer" class="list-group-item link-class">Không có sản phẩm</li>');
                                        $('#result').css('display', 'none');
                                    }
                                })
                            } else {
                                $('#result').css('display', 'none');
                            }
                        });
                    });
                </script>

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
                        <a href="{{route('viewprofile')}}">Tài khoản</a>
                        @if(auth()->user()->Role==1)
                        <a href="{{route('index')}}">Trang Quản Lí</a>
                        @endif
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
                <a href="{{Route('viewcart')}}">
                    <div class="fa-solid fa-cart-shopping"></div>
                </a>

                <span>

                    @if ($user=auth()->user())
                    <b> {{ $productCount = DB::table('carts')->where('user_id',$user)->count()}} </b>


                    @else

                    @endif


                </span>
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
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/bootstrap/js/popper.js"></script>
    <script src="/templateNew/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/daterangepicker/moment.min.js"></script>
    <script src="/templateNew/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/slick/slick.min.js"></script>
    <script src="/templateNew/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="/templateNew/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="/templateNew/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>


</html>

</html>