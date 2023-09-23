@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/bosuutap.css')}}">
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
        <a href="">BỘ SƯU TẬP</a>

    </div>
    <div class="allanh">
        <img src="../img/bosuutam.png" alt="">
    </div>
    <div class="home">
        <div class="home-left">
            <div class="product">
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/somi.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>SƠ MI HOA SM02112</b></span></a>
                        <br>
                        <h4>699,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/damhoa.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="#">
                            <div class="product-link"></div>
                        </a>
                        <a href="#">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM HOA TAY RỦ D03382 </b></span></a>
                        <br>
                        <h4>1,599,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/damhoatit.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM HỌA TIẾT KHÔNG TAY D02202</b></span></a>
                        <br>
                        <h4>1,599,000₫</h4>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/damd.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM HỌA TIẾT D01122</b></span></a>
                        <br>
                        <h4>1,199,000₫</h4>
                    </div>
                </div>

            </div>
            <div class="info">
                <div class="info1">𝐍𝐀𝐓𝐔𝐑𝐄 𝐈𝐒 𝐂𝐀𝐋𝐋𝐈𝐍𝐆 // 𝐌𝐢𝐧𝐢 𝐂𝐨𝐥𝐥𝐞𝐜𝐭𝐢𝐨𝐧 '𝟐𝟑</div>
                <div class="info2">
                    Tháng 5 gần qua đi cũng là lúc báo hiệu cho ngày Hè cùng các item mang âm hưởng mùa nghỉ dưỡng đang
                    dần quay trở lại. Lắng nghe thanh âm của thiên nhiên ấy, NEM cho ra mắt bộ sưu tập Nature Is Calling
                    với các thiết kế đầy trẻ trung và phóng khoáng. <br>
                    <br>
                    Điểm nổi bật nhất của bộ sưu tập Nature Is Calling là công nghệ đổ màu loang tie-dye tạo hiệu ứng
                    "những bông hoa nở'' đầy bắt mắt trên thước vải mềm mại. Sự sáng tạo độc đáo của bảng phổ màu sắc đa
                    dạng từ nhạt đến đậm, các thiết kế trong bộ sưu tập càng khiến bức tranh mùa Hè của bạn trở nên nở
                    rộ và mới lạ hơn. <br>
                    <br>
                    Trân trọng từng khoảnh khắc và mùa Hè bất tận đang đến, hãy cùng NEM chuẩn bị những bộ trang phục
                    đẹp nhất để chờ đón các chuyến đi đầy thú vị, bạn nhé!
                </div>
            </div>
            <a href="">
                <div class="info3">Xem Thêm
            </a>
        </div>
    </div>
    <div class="home-right">
        <img src="../img/anhdam.webp" alt="">
        <img src="../img/anhdam1.webp" alt="">

    </div>
    </div>
    <div class="gach">
        <hr>
    </div>
    <div class="allanh">
        <img src="../img/299k.webp" alt="">
    </div>
    <div class="home">
        <div class="home-left">
            <div class="product">
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/aophongtrangts60102.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ÁO PHÔNG TRẮNG IN HỌA TIẾT TS60102</b></span></a>
                        <br>
                        <h4>699,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/dam4.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="#">
                            <div class="product-link"></div>
                        </a>
                        <a href="#">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b> ÁO TAY RỦ D03382 </b></span></a>
                        <br>
                        <h4>1,599,000₫</h4>
                    </div>

                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/damduoica.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM ĐUÔI CÁ D02202</b></span></a>
                        <br>
                        <h4>1,599,000₫</h4>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-img">
                        <img src="../img/dam6.webp" alt="">
                    </div>
                    <div class="product-actions">
                        <a href="clmm.vn">
                            <div class="product-link"></div>
                        </a>
                        <a href="">
                            <div class="button">Tư Vấn</div>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href=""> <span> <b>ĐẦM HỒNG D01122</b></span></a>
                        <br>
                        <h4>1,199,000₫</h4>
                    </div>
                </div>

            </div>
            <div class="info">
                <div class="info1">𝐂𝐎𝐋𝐎𝐑 𝐘𝐎𝐔𝐑 𝐋𝐈𝐅𝐄</div>
                <div class="info2">
                    Phái đẹp hiện đại đang ngày càng khẳng định vị trí của mình trong mọi lĩnh vực. Họ năng động và biết
                    cách tận hưởng cuộc sống từ việc lựa chọn xu hướng phong cách đến các yếu tố màu sắc trong trang
                    phục mà mình sở hữu. Hiểu được tâm lý đó, NEM cho ra mắt bộ sưu tập “Colour Your Life” với bảng màu
                    sắc tưới mới để bạn thỏa sức mix&match trong mùa hè này. <br>
                    <br>

                    Xuyên suốt bộ sưu tập là các thiết kế áo phông được pha phối màu sắc hài hòa từ những gam màu trẻ
                    trung như vàng cam, hay ngọt ngào như hồng puchsia, xanh lá dịu mát, tạo cảm giác tươi mới và tràn
                    đầy sức sống. Với tinh thần chủ đạo: đơn giản trong kiểu dáng, cá tính trong màu sắc nhưng vẫn đảm
                    bảo sự thoải mái và nữ tính cho người mặc.
                </div>
            </div>
            <a href="">
                <div class="info3">Xem Thêm
            </a>
        </div>
    </div>
    <div class="home-right">
        <img src="../img/aohong1.webp" alt="">
        <img src="../img/aohong2.webp" alt="">

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