@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/giohang.css')}}">
@endsection
@section('content')

<body>
    <div class="thanhtren">
        <div class="bentrai">
             <a href="./index.html" class="icon">
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
                        <a href="./sanpham.html" class="ten"><b>SẢN PHẨM</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layermb">
                            <ul>
                                <li>
                                    <a href="">Đầm <div class="fa fa-chevron-right"></div></a>
                                    <a href="">Áo sơ mi <div class="fa fa-chevron-right"> </div></a>
                                    <a href="">Áo phông <div class="fa fa-chevron-right"></div></a>
                                    <a href="">Áo dài <div class="fa fa-chevron-right"></div></a>
                                    <a href="">Áo Khoác <div class="fa fa-chev ron-right"></div></a>
                                    <a href="">Quần <div class="fa fa-chev ron-right"></div></a>
                                    <a href="">Chân váy <div class="fa fa-chev ron-right"></div></a>
                                    <a href="">Set bộ <div class="fa fa-chev ron-right"></div></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="./sanphammoi.html" class="ten"><b>SẢN PHẨM MỚI</b> </a>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="" class="ten"><b>BỘ SƯU TẬP</b>
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
                        <a href="./sale.html" class="ten"><b> SALE</b>
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
                        <a href="./sanpham.html" class="ten"><b> LVT-SHOP</b>
                        </a>
                        
                    </div>
                </li>

                <li>
                    <div class="itemmb">
                        <a href="./giohang.html"><b>GIỎ HÀNG</b></a>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="./dangnhap.html"><b>ĐĂNG NHẬP</b></a>
                    </div>
                </li>
                <li>
                    <div class="itemmb">
                        <a href="./dangnhap.html"><b>ĐĂNG KÍ</b></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>




    <div class="thanhcongcu">
        <div class="logo">
            <a href="./index.html" class="logo1"><img src="../img/lvtshop1.png" alt=""></a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <div class="item">
                        <a href="./sanpham.html" class="ten"><b>SẢN PHẨM</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layer1">
                            <ul>
                                <li>
                                    <a href="">Đầm <div class="fa fa-chevron-right"></div></a>
                                    <a href="">Áo sơ mi <div class="fa fa-chevron-right"> </div></a>
                                    <a href="">Áo phông <div class="fa fa-chevron-right"></div></a>
                                    <a href="">Áo dài <div class="fa fa-chevron-right"></div></a>
                                    <a href="">Áo Khoác <div class="fa fa-chev ron-right"></div></a>
                                    <a href="">Quần <div class="fa fa-chev ron-right"></div></a>
                                    <a href="">Chân váy <div class="fa fa-chev ron-right"></div></a>
                                    <a href="">Set bộ <div class="fa fa-chev ron-right"></div></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="./sanphammoi.html" class="ten"><b>SẢN PHẨM MỚI</b> </a>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="./bosuutap.html" class="ten"><b>BỘ SƯU TẬP</b>
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
                        <a href="./sanpham.html" class="ten"><b>LVT ONLINE</b>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="./sale.html" class="ten"><b> SALE</b>
                            <div class="fa fa-chevron-down"></div>
                        </a>
                        <div class="layer1">
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
            </ul>
        </div>
        <div class="homeicontimkiem">
            <div class="icontimkiem">
                <a href="">
                    <div class="fa fa-search"></div>
                </a>
                <div class="search_box">
                    <input class="search-box_input" type="text" placeholder="Nhập sản phẩm bạn muốn tìm?">
                    <button class="search-box_btn">
                        <div class="fa fa-search"></div>
                    </button>
                </div>
            </div>
            <div class="rectangle"></div>

            <div class="taikhoan">
                <a href="">
                    <div class="fa fa-user-circle-o"> </div>
                </a>
                <a href="">
                    <div class="khachhang"> Khách Hàng</div>
                </a>
                <div class="boxlgin">
                    <div class="dangnhap">
                        <a href="./dangnhap.html"> Đăng Nhập</a>
                    </div>
                    <div class="dangki">
                        <a href="./dangnhap.html"> Đăng kí</a>
                    </div>
                </div>
            </div>
            <div class="rectangle"></div>
            <div class="giohang">
                <a href="./giohang.html">
                    <div class="fa-solid fa-cart-shopping"></div>
                </a>
                <a href="">
                    <div class="shopping"> Giỏ Hàng </div>
                </a>

            </div>
            <label for="nav_inputid" class="navbar"> <i class="fa-solid fa-bars"></i></label>
        </div>
    </div>
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
    <div class="infocat">
        <img src="../img/damhoa.webp" alt="">
        <div class="infosp"><a href="">ĐẦM HOA ĐÍNH NƠ</a>
            <br><span>Phiên bản: Size 2 / Vàng <br> Thương hiệu: LVTSHOP</span>

        </div>
        <div class="gia1">559,000₫</div>
        <input type="number" class="quantity-input" min="1" max="10" value="1">
        <div class="tien">1,118,000₫</div>

    </div>
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