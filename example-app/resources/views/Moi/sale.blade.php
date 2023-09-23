@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/sanpham.css')}}">
@endsection
@section('content ')

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
                <a href="./giohang.html">
                    <div class="shopping"> Giỏ Hàng </div>
                </a>

            </div>
            <label for="nav_inputid" class="navbar"> <i class="fa-solid fa-bars"></i></label>
        </div>
    </div>

    <div class="linksmall">

        <a href="./index.html"> TRANG CHỦ </a>
        <span>/</span>
        <a href="">SALE</a>

    </div>

    <div class="allanh">
        <img src="../img/sale.webp" alt="">
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
            <div class="home-right-tools">
                <div class="size">
                    <div class="kickco">Kích cỡ
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="tablesize">
                        <div class="size2">
                            Size 2
                        </div>
                        <div class="size4">
                            Size 4
                        </div>
                        <div class="size6">
                            Size 6
                        </div>
                        <div class="size8">
                            Size 8
                        </div>
                        <div class="size10">
                            Size 10
                        </div>

                    </div>
                </div>
                <div class="color">
                    Màu Sắc
                    <i class="fa-solid fa-chevron-down"></i>
                    <div class="tablecolor">
                        <div class="mautrang"></div>
                        <div class="mauhong"></div>
                        <div class="mauvang"></div>
                        <div class="maudo"></div>
                        <div class="mautim"></div>
                        <div class="mauden"></div>
                    </div>

                </div>
                <div class="price">
                    Giá
                    <i class="fa-solid fa-chevron-down"></i>
                    <div class="tableprice">
                        <ul>
                            <li> <input type="radio" name="groupcheck" id="radio1">Tất Cả</li>
                            <li><input type="radio" name="groupcheck" id="radio1">Nhỏ hơn 500,000₫</li>
                            <li><input type="radio" name="groupcheck" id="radio1">Từ 500,000₫ - 1,000,000₫</li>
                            <li><input type="radio" name="groupcheck" id="radio1"> Từ 1,000,000₫ - 1,500,000₫</li>
                            <li><input type="radio" name="groupcheck" id="radio1"> Từ 1,500,000₫ - 2,000,000₫ </li>
                            <li><input type="radio" name="groupcheck" id="radio1"> Từ 2,000,000₫ - 3,000,000₫ </li>

                            <li><input type="radio" name="groupcheck" id="radio1"> Lớn hơn 3,000,000₫ </li>
                        </ul>

                    </div>
                </div>
                <div class="fortable"> <i class="fa-sharp fa-solid fa-table-cells-large"></i></div>
                <div class="sixtable"> <i style="color: rgb(140, 140, 140);"
                        class="fa-sharp fa-solid fa-table-cells"></i> </div>
            </div>

            <div class="product">
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/damduoica.webp" alt="">
                        <div class="sale">-50%</div>
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM ĐUÔI CÁ D00572</b></span></a>
                        <br>
                        <h4 style="text-decoration: line-through; color: red;">1,799,000₫</h4>
                        <h4>599,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/aovest.webp" alt="">
                        <div class="sale">-50%</div>
                    </div>
                    <div class="product-actions">
                        <a href="#">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ÁO VEST VAI BỒNG AK02622</b></span></a>
                        <br>
                        <h4 style="text-decoration: line-through; color: red;">599,000₫</h4>
                        <h4>299,500₫ </h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/aothietketay.webp" alt="">
                        <div class="sale">-50%</div>
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ÁO THIẾT KẾ TAY RỦ AK02302</b></span></a>
                        <br>
                        <h4 style="text-decoration: line-through; color: red;">799,000₫</h4>
                        <h4>399,500₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/aoverst.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ÁO VEST KHÔNG TAY AK01942</b></span></a>
                        <br>

                        <h4>699,500₫ </h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/damomnhunco.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM ÔM NHÚN CỔ D02152</b></span></a>
                        <br>

                        <h4>399,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/damtayru.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM ÔM TAY RỦ D02122</b></span></a>
                        <br>
                        <h4>499,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/SOMICONHON.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>SƠ MI CỔ NHỌN SM02922 </b></span></a>
                        <br>
                        <h4>899,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/AOTREVAI.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ÁO HOA TRỄ VAI SM02452</b></span></a>
                        <br>
                        <h4>599,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/DamHoaNhiD17522.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ÁO HOA TRỄ VAI SM02452 </b></span></a>
                        <br>
                        <h4>699,000₫ </h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/AOTREVAIPHOIBEO.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="https://www.facebook.com/messages/t/115626408223317"> <span> <b>ÁO TRỄ VAI PHỐI BÈO
                                    SM01882</b></span></a>
                        <br>
                        <h4>799,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/QUANTHIETKE.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>QUẦN THIẾT KẾ Q03332</b></span></a>
                        <br>
                        <h4>799,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/SOTAYBONG.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="https://www.facebook.com/messages/t/115626408223317">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>SƠ MI TRẮNG TAY BỒNG SM00382</b></span></a>
                        <br>
                        <h4>799,000₫</h4>
                    </div>

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
</body>
<script src="{{asset('user-asset/JS/sanphammoi.js')}}"></script>

</html>