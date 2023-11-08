@extends('layout.content')
@section('other')
<link rel="stylesheet" href="{{asset('user-asset/CSS/sanpham.css')}}">
@endsection
@section('content ')


    <div class="linksmall">

        <a href="./index.html"> TRANG CHỦ </a>
        <span>/</span>
        <a href="">TẤT CẢ CÁC SẢN PHẨM</a>

    </div>

    <div class="allanh">
        <img src="../img/allsp.webp" alt="">
    </div>
    <div class="home">
        <div class="home-left">
            <ul>
                <li><a href=""><b>Danh mục</b></a></li>
                <li><a href=""><b>Tất cả sản phẩm</b></a></li>
                @foreach ($type_products as $type_product)
                <li><a href="/collections/product/{{$type_product->id}}"><b>{{$type_product->name_type}}</b></a></li>

                @endforeach
               
               
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




                @foreach ($productnews as $productnew)
                                    <div class="product-item">
                        <div class="product-img">
                            <img src="/user-asset/img/{{ $productnew->sp_hinh }}" alt="">
                            @if ($productnew->sp_sale != 0)
                            <div class="sale">Sale-{{$productnew->sp_sale}}%</div>

                           
                        @else
                        @endif
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
                            <a href=""> <span> <b>{{ $productnew->sp_ten }} </b></span></a>
                            <br>
                            @if ($productnew->sp_sale != 0)
                                <h4 style="text-decoration: line-through; color: red;">
                                    {{ number_format($productnew->sp_giaBan, 0, ',', '.') }}VND</h4>

                                @php
                                    $tienSale = $productnew->sp_giaBan - ($productnew->sp_giaBan * $productnew->sp_sale) / 100;
                                @endphp

                              <h4> {{ number_format($tienSale, 0, ',', '.') }} VND </h4>
                            @else
                           <h4>{{ number_format($productnew->sp_giaBan, 0, ',', '.') }}VND</h4>    
                            @endif

                        </div>

                    </div>
                @endforeach
  
                
              
               
              
               
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
