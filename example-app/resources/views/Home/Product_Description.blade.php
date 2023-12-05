@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{ asset('user-asset/CSS/sanphamdam1.css') }}">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/templateNew/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/templateNew/fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="/templateNew/fonts/linearicons-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/slick/slick.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/MagnificPopup/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="/templateNew/vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="/templateNew/css/util.css">
<link rel="stylesheet" type="text/css" href="/templateNew/css/main.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="linksmall">
    <a href="./index.html"> TRANG CHỦ </a>
    <span>/</span>
    <a href="">TẤT CẢ CÁC SẢN PHẨM</a>
    <span>/</span>
    @foreach ($products as $product)
    <span>{{ $product->sp_ten }}</span>
    @endforeach
</div>

<div class="center">
    <div class="imgcenter">
        @foreach ($products as $product)
        <div class="imgcenter_left">
            <i class="fa-sharp fa-solid fa-chevron-up"></i>
            <img src="/user-asset/img/{{ $product->sp_hinh1 }}" alt="">
            <img src="/user-asset/img/{{ $product->sp_hinh2 }}" alt="">
            <img src="/user-asset/img/{{ $product->sp_hinh3 }}" alt="">
            <i class="fa-sharp fa-solid fa-chevron-down"></i>
        </div>
        <div class="imgcenter_right">
            <img src="/user-asset/img/{{ $product->sp_hinh }}" alt="">
        </div>
        @endforeach
    </div>
    <div class="infocenter">
        @foreach ($products as $product)
        <div class="divinfo">
            <h1>{{ $product->sp_ten }}</h1>
        </div>
        <div class="divinfo-1">
            Thương hiệu: NEM <br>
            Mã SP: {{ $product->sp_ma }}
        </div>

        <div class="menu-items" id="menuItems">
            <span class="close-btn" onclick="toggleMenu()">X</span>
            <img src="/user-asset/CSS/371546126_987847982315080_1887440434013880747_n.png" alt="Menu Image">
        </div>


        <script>
            function toggleMenu() {
                var menuItems = document.getElementById("menuItems");
                var overlay = document.getElementById("overlay");

                menuItems.classList.toggle("show-menu");
            }
        </script>

        <div class="number">

            <form action="/addPay/{{ $product->sp_ma }}" method="POST">
                @csrf
                @php
                $tienSale = $product->sp_giaBan - ($product->sp_giaBan * $product->sp_sale) / 100;
                @endphp
                <div class="divinfo-3">
                    <input type="hidden" name="price" value="{{ $tienSale }}">
                    <b><span style="font-size: 30px" name="price">
                            {{ number_format($tienSale, 0, ',', '.') }}đ
                            @if ($product->sp_sale != 0)
                            <span style="text-decoration: line-through; color: red;">
                                {{ number_format($product->sp_giaBan, 0, ',', '.') }}đ</span>
                            @endif
                        </span></b>
                </div>


                <div class="divinfo-4">
                    <b>Kích Thước</b>
                </div>
                <div class="size">
                    @foreach ($sizes as $size)
                    <label class="custom-radio">
                        <input type="radio" readonly name="size" value="{{ $size->size }}" class="size-button" onclick="selectSize(this)">
                        <span style="font-size: 20px; align-items: center;display: flex;justify-content: center ;pointer-events: none;" class="radio-square"> {{ $size->size }}</span>

                    </label>
                    @endforeach
                </div>
                <div>
                    @include('alert')
                </div>
                <div class="divinfo-5">
                    <b> Màu Sắc </b>
                </div>
                <div class="color" style="background-color: {{ $product->color }};  cursor: pointer;     pointer-events: none;
                            user-select: none;
                            cursor: pointer;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    border: 1px solid #000;">
                </div>


                <div class="selectsize">
                    <a href="#"> <b><span class="line line1" onclick="toggleMenu()">Hướng dẫn chọn size</span></b></a>
                </div>

                <div class="soluong"> <b>Số Lượng <input type="number" name="quantity" class="quantity-input" min="1" max="10" value="1"> </b></div>

                <div class="dathang">
                    @if (Auth::check())
                    <button class="themvaogiohang" type="submit" name="submit">Thêm Vào giỏ hàng</button>
                    <button style="background-color: black;color: white;" class="datmua" type="submit" name="submit">Đặt Mua Hàng</button>
                    @else
                    <div class="dtk"> Bạn đã có tài khoản chưa? <a href="">Đăng Nhập </a> </div>
                    @endif
                </div>
            </form>

        </div>
        <div class="mota">
            {!! $product->sp_thongTin !!}
        </div>
        @endforeach

    </div>

</div>
<hr style="margin-top: 10px;">
<div class="tab-content p-t-43" style="     margin-right: 20px;">
    <!-- - -->
    <div class="tab-pane fade" id="description" role="tabpanel" aria-expanded="false">
        <div class="how-pos2 p-lr-15-md">
            <p class="stext-102 cl6">
                Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
            </p>
        </div>
    </div>

    <!-- - -->
    <div class="tab-pane fade" id="information" role="tabpanel">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                <ul class="p-lr-28 p-lr-15-sm">
                    <li class="flex-w flex-t p-b-7">
                        <span class="stext-102 cl3 size-205">
                            Weight
                        </span>

                        <span class="stext-102 cl6 size-206">
                            0.79 kg
                        </span>
                    </li>

                    <li class="flex-w flex-t p-b-7">
                        <span class="stext-102 cl3 size-205">
                            Dimensions
                        </span>

                        <span class="stext-102 cl6 size-206">
                            110 x 33 x 100 cm
                        </span>
                    </li>

                    <li class="flex-w flex-t p-b-7">
                        <span class="stext-102 cl3 size-205">
                            Materials
                        </span>

                        <span class="stext-102 cl6 size-206">
                            60% cotton
                        </span>
                    </li>

                    <li class="flex-w flex-t p-b-7">
                        <span class="stext-102 cl3 size-205">
                            Color
                        </span>

                        <span class="stext-102 cl6 size-206">
                            Black, Blue, Grey, Green, Red, White
                        </span>
                    </li>

                    <li class="flex-w flex-t p-b-7">
                        <span class="stext-102 cl3 size-205">
                            Size
                        </span>

                        <span class="stext-102 cl6 size-206">
                            XL, L, M, S
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="tab-pane fade active show" id="reviews" role="tabpanel" aria-expanded="true">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                <div class="p-b-30 m-lr-15-sm">
                    <!-- Review -->
                    @foreach($comment as $cmt)
                    <div id="containerComment" class="flex-w flex-t p-b-68">
                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                            <img src="https://thespiritofsaigon.net/wp-content/uploads/2022/10/avatar-vo-danh-11.jpg" alt="AVATAR">
                        </div>

                        <div class="size-207">
                            <div class="flex-w flex-sb-m p-b-17">
                                <span class="mtext-107 cl2 p-r-20">
                                    {{$cmt->name}}
                                </span>

                                <span class="fs-18 cl11">
                                    @if($cmt->rating == 1)
                                    @for($i = 0; $i < 5; $i++) @if($i < 1) <i class="zmdi zmdi-star"></i>
                                        @else
                                        <i class="zmdi zmdi-star-outline"></i>
                                        @endif
                                        @endfor
                                        @elseif($cmt->rating == 2)
                                        @for($i = 0; $i < 5; $i++) @if($i < 2) <i class="zmdi zmdi-star"></i>
                                            @else
                                            <i class="zmdi zmdi-star-outline"></i>
                                            @endif
                                            @endfor
                                            @elseif($cmt->rating == 3)
                                            @for($i = 0; $i < 5; $i++) @if($i < 3) <i class="zmdi zmdi-star"></i>
                                                @else
                                                <i class="zmdi zmdi-star-outline"></i>
                                                @endif
                                                @endfor
                                                @elseif($cmt->rating == 4)
                                                @for($i = 0; $i < 5; $i++) @if($i < 4) <i class="zmdi zmdi-star"></i>
                                                    @else
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                    @endif
                                                    @endfor
                                                    @else
                                                    @for($i = 0; $i < 5; $i++) <i class="zmdi zmdi-star-outline"></i>
                                                        @endfor
                                                        @endif
                                </span>

                            </div>

                            <p class="stext-102 cl6">
                                {{$cmt->content}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <div id="comment-error"></div>
                    <div class="w-full">
                        <input type="hidden" value="{{$product->sp_ma}}" name="id_product">
                        <div class="flex-w flex-m p-t-50 p-b-23">
                            <span class="stext-102 cl3 m-r-16">
                                Your Rating
                            </span>

                            <span class="wrap-rating fs-18 cl11 pointer">
                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                <input class="dis-none" type="number" id="rating" name="rating">
                            </span>
                        </div>

                        <div class="row p-b-25">
                            <div class="col-12 p-b-5">
                                <label class="stext-102 cl3" for="review">Your review</label>
                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="send" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function generateStarIcons(rating) {
        var stars = '';
        for (var i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<i class="zmdi zmdi-star" style="margin-right: 5px;"></i>';
            } else {
                stars += '<i class="zmdi zmdi-star-outline" style="margin-right: 3px;"></i>';
            }
        }
        return stars;
    }
    $(document).ready(function() {
        $('#send').click(function() {
            event.preventDefault();
            let content = $('#review').val();
            let rating = $('#rating').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/comment",
                type: "POST",
                data: {
                    content: content,
                    rating: rating,
                    id_product: $('input[name="id_product"]').val()
                },
                success: function(res) {
                    if (res.error) {
                        $('#comment-error').html(res.error);
                    } else {
                        $('#rating').val('');
                        $('#review').val('');
                        $('#containerComment').html('<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">' +
                            '<img src="https://thespiritofsaigon.net/wp-content/uploads/2022/10/avatar-vo-danh-11.jpg" alt="AVATAR">' +
                            '</div>' +
                            '<div class="size-207">' +
                            '<div class="flex-w flex-sb-m p-b-17">' +
                            '<span class="mtext-107 cl2 p-r-20">' + res.name + '</span>' +
                            '<span class="fs-18 cl11">' +
                            generateStarIcons(res.rating) +
                            '</span>' +
                            '</div>' +
                            '<p class="stext-102 cl6">' + res.content + '</p>' +
                            '</div>')
                    }
                },
                error: function(err) {
                    console.error(err);
                    $('#comment-error').html('Đã xảy ra lỗi khi gửi bình luận.');
                }
            })
        })
    })
</script>
<hr style="margin-top: 10px;">
<div class="sanpham">
    <b>SẢN PHẨM TƯƠNG TỰ</b>
</div>
<div class="sanphamtuongtu">
    @foreach ($productss->take(3) as $productt)
    <div class="imgslider">
        <div class="item1">
            <a href=""><img class="imge" src="/user-asset/img/{{ $productt->sp_hinh }}" alt="img"></a>
            <div class="mangche">
                <a href="">
                    <div class="tuvan">Tư Vấn</div>
                </a>
            </div>
        </div>
        <div class="info">
            <a href="/product/{{ $productt->sp_ma }}"> <span> <b>{{ $productt->sp_ten }} </b></span></a> <br>
            <h4>{{ $productt->sp_giaGoc }}₫</h4>
        </div>
    </div>
    @endforeach
</div>
<div class="dangkibangtien">
    <div class="MAP">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.7333963918236!2d108.24978007500275!3d15.97529308469066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1686645400615!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="chu">
        <div class="dangkibangtin"> Đăng Kí Bảng Tin </div>
        <div class="danmotagkibangtinmail">
            Đăng kí bảng tin để nhận mẫu thiết kế mới nhất
        </div>
        <input type="text" placeholder="Vui lòng nhập email.... " />
        <input style="height: 40px;width: 50px ; background-color: rgb(0, 0, 0);color: aliceblue; margin-left:-2px ;" type="submit" value="Gửi"> <br>
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
@endsection