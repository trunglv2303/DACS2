![image](https://github.com/trunglv2303/DACS2/assets/142105875/6721a30b-f455-4c52-a97a-9f58342edd2c)![image](https://github.com/trunglv2303/DACS2/assets/142105875/1cfddac7-9b8b-41f8-bd99-2fa4b2f72497)2.Tên đồ án: Xây dựng website bán quần áo
3.Mô tả:
- Mục tiêu của đề tài này là xây dựng một nền tảng trực tuyến hoàn chỉnh cho việc mua sắm
- quần áo, mang lại trải nghiệm mua sắm tốt cho người dùng và quản lý hiệu quả cho nhà kinh doanh.
- Kết quả dự kiến sẽ đạt được:
Xây dựng website có những chức năng:
-Admin:
+Thêm sửa xóa sản phẩm,
+ thay đổi chi tiết tình trạng đơn hàng,
+quản lý người dùng
+quản lý chi tiết đơn hàng của người mua,
+thống kê doanh thu lợi nhuận của ngày, tháng,
+ đăng nhập, 
+phân quyền trang.
-Người dùng:
+Thêm sản phẩm vào giỏ hàng
+ tìm kiếm được sản phẩm
+bình luận sản phẩm, xem chi tiết sản phẩm, 
+đăng nhập , đăng kí tài khoản, 
+xem được danh sách đơn hàng  và thay đổi tình trạng đơn hàng
+thanh toán bằng VNpay
2.3Biểu đồ Use-case
  2.3.1Biểu đồ Use-Case tổng quát
  ![image](https://github.com/trunglv2303/DACS2/assets/142105875/501f8f35-8f4a-4c56-812a-b1f5754c8d9a)
  2.3.2Use case quản lí sản phẩm
  Tác nhân: Admin
Mô tả: use case cho phép xem, thêm, sửa, xóa.
Điều kiện trước: admin đã đăng nhập vào hệ thống.
Kết quả: các thông tin về sản phẩm được cập nhật trong cơ sở dữ liệu.![image](https://github.com/trunglv2303/DACS2/assets/142105875/373dcf10-56c2-41a2-ba86-1b0c377e899e)
2.3.3Use-case quản lí đơn đặt hàng
  ![image](https://github.com/trunglv2303/DACS2/assets/142105875/9a4c2d9a-e932-4e01-9daa-99177b734b4e)
  Tác nhân: Admin
Mô tả use case cho phép duyệt đơn đặt hàng, xem chi tiết đơn đặt hàng báo cáo đơn đặt hàng đang chờ, đã được xử lý trong hệ thống.
Điều kiện trước: admin đã đăng nhập vào hệ thống.
Dòng sự kiện chính: 
Người sử dụng chọn kiểu tác động: duyệt đơn đặt hàng, xem chi tiết đơn đặt 
Hàng, báo cáo đơn đặt hàng đang chờ, đã được xử lý.
Kết quả: các thông tin về đơn đặt hàng được cập nhật trong cơ sở dữ liệu.
2.4Biểu đồ lớp
![image](https://github.com/trunglv2303/DACS2/assets/142105875/271a1a8e-aa33-4ceb-98ef-1a271513fd61)

2.5Activity diagram
2.5.1Activity đăng nhập
![image](https://github.com/trunglv2303/DACS2/assets/142105875/9ccdf7ad-e93b-4a0f-bac0-908c430913c9)
2.5.2Activity đăng kí
![image](https://github.com/trunglv2303/DACS2/assets/142105875/42d1c587-6c99-4f60-af4c-e73bf027221f)
2.5.3Activity sửa sản phẩm
![image](https://github.com/trunglv2303/DACS2/assets/142105875/ce49708c-8098-43f4-a661-2222371f14fd)
2.5.4Activity xem sản phẩm
![image](https://github.com/trunglv2303/DACS2/assets/142105875/bbe774ff-4a28-44e2-9723-afd5db809e22)
2.5.5Activity thêm vào giỏ hàng
![image](https://github.com/trunglv2303/DACS2/assets/142105875/288d5529-8dbb-4825-83aa-99bb40d6c89f)
2.5.6Activity thanh toán
![image](https://github.com/trunglv2303/DACS2/assets/142105875/83e9c972-37fd-4d0a-a41d-28552fa74cc9)
2.5.7Activity cập nhật giỏ hàng
![image](https://github.com/trunglv2303/DACS2/assets/142105875/e89b581e-7c7a-474a-854f-fb1598ead600)
2.5.8Activity xóa sản phẩm giỏ hàng
![image](https://github.com/trunglv2303/DACS2/assets/142105875/90b050da-cf76-4574-9ba9-d25257388c3d)
2.5.9Activity tìm kiếm
![image](https://github.com/trunglv2303/DACS2/assets/142105875/f382e05a-d69d-47ca-b1c5-d699f8ebe65e)
3.1Giao diện người dùng
3.1.1Giao diện trang chủ
![image](https://github.com/trunglv2303/DACS2/assets/142105875/bda6d85b-4279-4f88-b9c6-eb751f6e901c)
- Trang chủ gồm:
+Slide show: cập nhật các hình ảnh thông tin được đăng tải của website.
+Phần sản phẩm mới : liệu kê 8 sản phẩm được cập nhập mới nhất.
+Phần sản phẩm danh mục: liệt kê những sản phẩm của từng danh mục.
+Phần bài viết tin tức mới nhất.
![image](https://github.com/trunglv2303/DACS2/assets/142105875/53909d9b-2c4f-4da0-9bf3-755751d81120)
Trang sản phẩm gồm: các sản phẩm theo danh mục
![image](https://github.com/trunglv2303/DACS2/assets/142105875/cfaebd9d-b581-495e-a57d-40ef39e474c0)
Trang chi tiết gồm: sản phẩm có bảng giá size, màu và các hình ảnh chi tiết của sản phẩm có thể bình luận và mua hoặc thêm vào giỏ hàng.
![image](https://github.com/trunglv2303/DACS2/assets/142105875/713bdfdf-f1b5-4c9b-99c6-34914e9e68b3)
- Trang đăng nhập gồm: form đăng nhập hoặc đăng kí cho những khách hàng chưa có tài khoản.
- ![image](https://github.com/trunglv2303/DACS2/assets/142105875/0fa4360e-c5f2-41ff-b55e-3ce10c51e1b6)
- Trang thông tin tài khoản gồm: hiển thị thông tin người dùng .
- ![image](https://github.com/trunglv2303/DACS2/assets/142105875/47e78f6c-9e16-44b4-8de6-a97f6281285a)
Trang quản lí đơn gồm: hiển thị các sản phẩm đã đặt và tình trạng đơn hàng .
![image](https://github.com/trunglv2303/DACS2/assets/142105875/b20d2c82-febd-4970-a603-77be26e89f52)
Trang quản lí đơn, chi tiết gồm: hiển thị các chi tiết sản phẩm đã đặt và tình trạng đơn hàng .
![image](https://github.com/trunglv2303/DACS2/assets/142105875/e7e49fd6-e246-428a-91ff-e934fcb2c23a)
- Trang giỏ hàng gồm: hiển thị chi tiết sản phẩm đã thêm và giỏ hàng
3.1.10Giao diện admin
  -Thêm sản phẩm
![image](https://github.com/trunglv2303/DACS2/assets/142105875/c856c24f-023f-4b86-9272-efe99f7f843e)
- Trang thêm sản phẩm gồm: các ô trống để admin thêm sản phẩm.

- ![image](https://github.com/trunglv2303/DACS2/assets/142105875/772eeef9-9951-4cdd-9bef-206491ec051e)
- Trang bộ danh sách sản phẩm gồm: các sản phẩm đã thêm của admin.

- ![image](https://github.com/trunglv2303/DACS2/assets/142105875/4e55857b-269d-4de7-a78b-39e544fb5b4b)
Trang bộ sửa sản phẩm gồm: các dữ liệu có sẵn của sản phẩm và admin có thể sửa trên giao diện này.

![image](https://github.com/trunglv2303/DACS2/assets/142105875/baafc40a-0ffa-476c-970a-e8414d046529)
Trang danh sách đơn hàng gồm: các đơn hàng của khách hàng

![image](https://github.com/trunglv2303/DACS2/assets/142105875/9ec7ca83-4d02-4d20-ab07-bf9c66111f9d)
 Trang chi tiết đơn hàng gồm: các đơn hàng chi tiết của khách hàng

 ![image](https://github.com/trunglv2303/DACS2/assets/142105875/ce288800-8b4b-462a-843f-bee28a38bb65)

 ![image](https://github.com/trunglv2303/DACS2/assets/142105875/e0b5e4dd-dc98-4fca-8887-15c482f9d1c9)

 ![image](https://github.com/trunglv2303/DACS2/assets/142105875/c42803e9-e2f7-48e2-95c1-d0715e5335b5)
 Trang doanh thu gồm: Tổng doanh thu lời nhuận, số đơn hàng đã đặt và thống kê theo tháng theo tuần theo năm.








