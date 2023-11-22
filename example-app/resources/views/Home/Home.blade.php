@extends('layout.content')

@section('other')
    <link rel="stylesheet" href="{{ asset('user-asset/CSS/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/CSS/slider1.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/CSS/sliderblog.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/CSS/Home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('user-asset/JS/javascrip.js') }}" defer></script>
    <script src="{{ asset('user-asset/JS/jsao.js') }}" defer></script>
    <script src="{{ asset('user-asset/JS/jsblog.js') }}" defer></script>
@endsection



@section('content')
    <div class="main">
        <div id="carouselExampleFade" class="carousel slide carousel-fade main" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slide)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="/user-asset/img/{{ $slide->t_Image }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <div class="bosuutap">
        @foreach ($banners->take(2) as $banners)
        <div class="bstleft">
            <a href="" class="">
                <img class="image" src="/user-asset/img/{{$banners->t_Image}}" alt="">
                <div class="phiaduoi">
                    <div class="layer1"><b>NEW COLLECTION</b></div>
                    <div class="layer2"><b>SHOP NOW</b></div>
                </div>
            </a>
        </div>
        
        @endforeach



    </div>
    <div class="sanpham">SẢN PHẨM MỚI</div>
    <div class="kod">
        @foreach ($products->take(6) as $product)
            <div style="background-image: url('/user-asset/img/{{ $product->sp_hinh }}');" class="ptc">
                <div class="bin"><a href="/product/{{ $product->sp_ma }}">
                        {{ $product->sp_ten }}<br>
                        <p>{{ number_format($product->sp_giaBan, 0, ',', '.') }} VND</p>
                    </a></div>
            </div>
        @endforeach

    </div>

    <div class="sanpham">ÁO SƠ MI</div>

    <div class="trungdz">
        <div class="wrapper">
            <i id="left" class="fa-sharp fa-solid fa-chevron-left"></i>
            <div class="caroule">
                @foreach ($productaovets as $productaovet)
                    <div class="imgslider">
                        <div class="item1">

                            <a href="/product/{{ $productaovet->sp_ma }}">
                                <img
                                    src="/user-asset/img/{{ $productaovet->sp_hinh }}" alt="img"></a>
                            <div class="mangche">
                                <a href="">
                                    <div class="tuvan">Tư Vấn</div>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <a href="/product/{{ $productaovet->sp_ma }}"> <span>
                                    <b>{{ $productaovet->sp_ten }}</b></span></a>
                            <br>
                            <h4> {{ number_format($productaovet->sp_giaBan, 0, ',', '.') }} VND</h4>
                        </div>
                    </div>
                @endforeach




                <i id="right" class="fa-sharp fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </div>
    <div class="sanpham">ÁO THUN CAO CẤP</div>

    <div class="trungdz1">
        <div class="wrapper1">
            <i id="left1" class="fa-sharp fa-solid fa-chevron-left"></i>
            <div class="caroule1">
                @foreach ($productaothuns as $productaothun)
                    <div class="imgslider1">
                        <div class="item12">
                            <a href="/product/{{ $productaothun->sp_ma }}"><img class="imge"
                                    src="/user-asset/img/{{ $productaothun->sp_hinh }}" alt="img1"></a>
                            <div class="mangche">
                                <a href="">
                                    <div class="tuvan">Tư Vấn</div>
                                </a>
                            </div>

                        </div>
                        <div class="info1">
                            <a href="/product/{{ $productaothun->sp_ma }}"> <span>
                                    <b>{{ $productaothun->sp_ten }}</b></span></a>
                            <br>
                            <h4> {{ number_format($productaovet->sp_giaBan, 0, ',', '.') }} VND</h4>
                        </div>
                    </div>
                @endforeach


                <i id="right1" class="fa-sharp fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </div>
    <div class="k199">
        <img src="../img/199l.jpg" alt="">
    </div>
    <div class="blog">
        <h1>LVT-BLOG</h1><br>
        <h3>ĐÓN ĐẦU PHONG CÁCH XU HƯỚNG</h3>
    </div>

    <div class="trungdzblog">
        <div class="wrapperblog">
            <i id="leftblog" class="fa-sharp fa-solid fa-chevron-left"></i>
            <div class="carouleblog">

@foreach ($blogs as $blog)
    

                
                <div class="imgsliderblog">
                    <div class="item1blog">
                        <a href=""><img class="imge" src="/user-asset/img/{{ $blog->sp_hinh }}" alt="img"></a>


                    </div>
                    <div class="infoblog">
                        <span> <b>MINIMAL CHIC</b></span>


                    </div>
                </div>
                
               
               
               
                @endforeach
                <i id="rightblog" class="fa-sharp fa-solid fa-chevron-right"></i>
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
            <input style="height: 40px;width: 50px ; background-color: rgb(0, 0, 0);color: aliceblue; margin-left:-2px ;"
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
