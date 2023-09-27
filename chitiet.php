<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/bosstrap/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/chevron-right.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <title>Đại Lý Xe Bán Ôtô</title>
</head>
<body>
  <div>
    <header>
      <div class="navbar navbar-expand-lg navbar-light" style="background-color: #efebeb;">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <span>CHÀO MỪNG BẠN ĐẾN VỚI ĐẠI LÝ XE ÔTÔ</span>
          </a>
          <div class="collapse navbar-collapse" id="navbarNavHeader">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-people"></i> Khách Hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-gear"></i> Bảo Hành</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-globe"></i> Đại Lí</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-archive"></i> Liên Hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-book"></i> Catalogue</a>
              </li>
            </ul>
            <div class="dk1">
              <li class="dropdown dro1">
                <a class="dropdownt">
                  <i class="bi bi-person-circle"></i><span class="nowrap-text" style="margin-left: 6px">Tài Khoản</span>
                </a>
                <div class="dropdown-content">
                  <a href="dangnhap.html">Đăng Nhập</a>
                  <a href="dangky.html">Đăng Ký</a>
                </div>
              </li>
            </div>
          </div>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light custom-bg-light" style="background-color: rgb(255, 255, 255);">
      <div class="container" style="flex-wrap: nowrap;">
        <div>
        </div>
        <a href="index.html">
          <img src="asset/img/LOGO_dailyxedien (1).png" style="  height: 60px; width: 193px;">
        </a>
        <div class="input-container">
          <input type="text" placeholder="Tìm Kiếm Sản Phẩm...">
          <select>
            <option>Tất cả danh mục</option>
            <option class="level-0" value="xe-dap-dien">Xe Toyota</option>
            <option class="level-0" value="xe-dap-dien">Xe Chevrolet</option>
            <option class="level-0" value="xe-dap-dien">Xe Ford</option>
            <option class="level-0" value="xe-dap-dien">Xe Honda</option>
            <option class="level-0" value="xe-dap-dien">Xe Hyundai</option>
            <option class="level-0" value="xe-dap-dien">Xe Isuzu</option>
            <option class="level-0" value="xe-dap-dien">Xe Lexus</option>
            <option class="level-0" value="xe-dap-dien">Xe Rolls-Royce</option>
            <option class="level-0" value="xe-dap-dien">Xe MayBach</option>
            <!-- Các tùy chọn danh mục khác -->
          </select>
          <span class="search-icon">
            <i class="bi bi-search"></i>
          </span>
        </div>
        <ul class="navbar-nav ms-auto" style="flex-direction: row;align-items: baseline;">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <div class="phone-number">
                <i class="bi bi-telephone-fill"></i> <!-- Biểu tượng điện thoại -->
                <span> Hotline :0933 505 222</span> <!-- Số điện thoại -->
                <i class="bi bi-cart-fill"></i>
                <!--Gio hang-->
                <!-- Nút giỏ hàng -->
                <button id="cart">
                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                  Giỏ Hàng
                </button>
                <!-- Modal giỏ hàng -->
                <div id="myModal" class="modal">
                  <div class="modal-content" style="margin-top: 137px;">
                    <div class="modal-header">
                      <h5 class="modal-title">Giỏ Hàng</h5>
                      <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                      <div class="cart-row">
                        <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                        <span class="cart-price cart-header cart-column" style="margin-left: 197px;">Giá</span>
                        <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                      </div>
                      <div class="cart-items">
                        <!-- Đây là nơi sản phẩm được thêm vào giỏ hàng -->
                      </div>
                      <div class="cart-total">
                        <strong class="cart-total-title">Tổng Cộng:</strong>
                        <span class="cart-total-price"></span> VND
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                      <button type="button" class="btn btn-primary order">Thanh Toán</button>
                    </div>
                  </div>
                </div>
          <li class="dropdown dro">
            <a class="dropdownt">
              <i class="bi bi-person-circle"></i><span class="nowrap-text" style="margin-left: 6px">Tài Khoản</span>
            </a>
            <div class="dropdown-content" style="margin-left: 5px;">
              <a href="dangnhap.html">Đăng Nhập</a>
              <a href="dangky.html">Đăng Ký</a>
            </div>
          </li>
      </div>
      </a>
      </li>
      </ul>
  </div>
  </div>
  </nav>
  </div>
  <!--sile-->
  <div class="menu2">
    <nav class="navbar navbar-expand-lg navbar-light custom-bg-light" style="background-color: #df4c23ce;">
      <div class="container d-flex justify-content-center">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-4 mb-lg-0">
            <li class="nav-item">
            <li class="nav-item dropdown">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="index.html">
                Trang Chủ
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button">
                Khách Hàng
              </a>
              <div class="dropdown-content">
                <a class="dropdown-item" href="#">Thị Trường & Công Nghệ Ô Tô</a>
                <a class="dropdown-item" href="#">Kinh Nghiệm Cho Người Mới Lái Xe</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Tư Vấn Mua Bán Ô Tô</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tư Vấn
              </a>
              <div class="dropdown-content">
                <a class="dropdown-item" href="#">E-Gara-Bệnh Viện Ô TÔ</a>
                <a class="dropdown-item" href="#">Lên nội thất-Độ dàn ngoài</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Âm thanh xe hơi</a>
                <a class="dropdown-item" href="#">Emma Vietnam</a>
                <a class="dropdown-item" href="#">Mâm & Lốp xe</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Hãng Xe
              </a>
              <div class="dropdown-content">
                <a class="dropdown-item" href="#">Toyota</a>
                <a class="dropdown-item" href="#">Chevrolet</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Honda</a>
                <a class="dropdown-item" href="#">Huyndai</a>
                <a class="dropdown-item" href="#">Isuzu</a>
                <a class="dropdown-item" href="#">Lexus</a>
                <a class="dropdown-item" href="#">Rolls-Royce</a>
                <a class="dropdown-item" href="#">Maybach</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Os Mart
              </a>
              <div class="dropdown-content">
                <a class="dropdown-item" href="#">Thông Tin Khuyến Mãi Xe Mới</a>
                <a class="dropdown-item" href="#">Âm Thanh & Ánh Sáng Ô Tô</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Film Cách Nhiệt</a>
                <a class="dropdown-item" href="#">Chợ Mâm Lốp</a>
                <a class="dropdown-item" href="#">Link Kiện & Phụ Tùng</a>
                <a class="dropdown-item" href="#">Dịch Vụ Ô TÔ </a>
                <a class="dropdown-item" href="#">Gara Toàn Quốc</a>
                <a class="dropdown-item" href="#">Rao Vặt</a>
                <a class="dropdown-item" href="#">Thông Tin & Hướng Dẫn OS Mart</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#">
                Xe Cũ
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#">
                Bài Mới
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#">
                Car Audit
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#">
                Thủ Tục Mua Bán
              </a>
            </li>
          </ul>
        </div>
    </nav>
  </div>
  </div>
  </nav>
  <!--NoiDung-->
  <div class="container">
    <ul class="menu">
      <li><a href="index.html">Trang chủ <i class="gg-chevron-right"></i></a></li>
      <li><a href="danhmuc.html">Sản phẩm <i class="gg-chevron-right"></i></a></li>
      <li><a href="#">MayBach <i class="gg-chevron-right"> </i></a></li>
      <li><a href="#">Mercedes-Benz GLC 200 2022</i></a></li>
    </ul>
    <!--Chi tiet san pham-->
    <div class="card-content">
      <div class="container text-center">
        <div class="row">
          <div class="col-7 ">
            <div class="custom-block2">
              <div class="card" style="margin-top: 20PX;">
                <div class="card-content"
                  style="box-shadow: 0px 3px 5px rgba(9, 30, 66, 0.16), 0px 0px 1px rgba(9, 30, 66, 0.31);">
                  <div>
                    <span class="arrow arrow-left">&lt;</span>
                    <img class="responsive-image" src="asset/img/145.jpg" width="370" id="main-img">
                    <span class="arrow arrow-right">&gt;</span>
                    <br>
                    <p>
                      <img class="responsive-image" src="asset/img/145.jpg" width="90">
                      <img class="responsive-image" src="asset/img/123.jpg" width="90">
                      <img class="responsive-image" src="asset/img/234.jpg" width="90">
                      <img class="responsive-image" src="asset/img/456.jpg" width="90">
                    </p>
                  </div>
                  <div class="nds">
                    <i class="bi bi-geo-alt-fill"></i> Hà Nội <i class="bi bi-calendar" style="margin-left: 70px;">
                      29/6/2023</i>
                  </div>
                  <div style="display: flex;">
                    Mercedes-Benz GLC 200 Matic 2022 <br>
                  </div>
                  <div style="display: flex;">
                    1 tỷ 999 triệu
                  </div>
                  <div style="display: flex; ">
                    <span>Mô Tả</span>
                  </div>
                  <div style="    margin-left: -7px;
                  text-align: initial;
                  display: table-footer-group;">
                    !! Mercedes C200 2018 Xe Đẹp Nhất Việt Nam , Nội Thất Đen Mình Thấy Là Bền Nhất Của mer - Xe 1 chủ
                    sử dụng từ mới , Biển số hà nội , Xe chủ đi giữ hơn giữ vợ lên nội thất ghế da chưa 1 nếp nhăn * Xe
                    chạy 30,000km zin ODO zin Sai Cửa Hàng Chịu Phạt 200tr Cho Người Đến Xem , Full lịch sử bảo dưỡng
                    chính hãng trước khi mua về bên em đã check toàn bộ chất lượng ở mercedes haxaco lên khách hàng hoàn
                    toàn yên tâm
                  </div>
                  <div style="display: table; color: orange;">
                    Xem Thêm<i class="bi bi-chevron-down"></i>
                  </div>
                  <div>
                    <span style="font-weight: bold;font-size: 18px;display: table-footer-group;">Chi tiết
                    </span>
                    <table class="table table-striped" style="text-align:left" border="1px solid :black">
                      <tr>
                        <td><img src="asset/img/tag.png" style="background: no-repeat; margin-top: -4px;"> Hãng Xe</td>
                        <td> Mercedes-Benz</td>
                      </tr>
                      <tr>
                        <td><img src="asset/img/wiper.png" style="background: no-repeat; margin-top: -4px;"> Dòng Xe
                        </td>
                        <td>GLC</td>
                      </tr>
                      <tr>
                        <td><img src="asset/img/calendar.png" style="background: no-repeat; margin-top: -4px;"> Năm sản
                          Xuất</td>
                        <td>2022</td>
                      </tr>
                      <tr>
                        <td><img src="asset/img/odo.png" style="background: no-repeat; margin-top: -4px;"> Số KM đã đi
                        </td>
                        <td>30km</td>
                      </tr>
                      <tr>
                        <td><img src="asset/img/fuel.png" style="background: no-repeat; margin-top: -4px;"> Nhiên LIệu
                        </td>
                        <td>Xăng</td>
                      </tr>
                      <tr>
                        <td><img src="asset/img/id.png" style="background: no-repeat; margin-top: -4px;"> Xuất Xứ</td>
                        <td>Trong nước</td>
                      </tr>
                      <tr>
                        <td><img src="asset/img/car_type.png" style="background: no-repeat; margin-top: -4px;"> Kiểu
                          Dáng</td>
                        <td>Sedan</td>
                      </tr>
                      <tr>
                        <td><img src="asset/img/seat.png" style="background: no-repeat; margin-top: -4px;"> Số Chỗ</td>
                        <td>5</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="custom-block2">
              <div class="card" style="margin-top: 20PX;">
                <div class="card-content"
                  style="    box-shadow: 0px 3px 5px rgba(9, 30, 66, 0.16), 0px 0px 1px rgba(9, 30, 66, 0.31);">
                  <div style="text-align:start;">
                    <span style="font-size: 18px; font-weight: bold;display:block">Liên Hệ : <br>Ly thang phong</span>
                    <i class="bi bi-telephone-fill"></i> 092837373 <br>
                    <i class="bi bi-geo-alt-fill"></i> Hà Nội
                  </div>
                  <button style="border-radius: 5px;border: 1px; background: #ffb300;width: 100%;height: 1.2cm;"><a
                      href="tel:0398812222" style="text-decoration: none; font-size: 20px;"><i
                        class="bi bi-telephone"></i> 0398***222</a></button>
                  <button
                    style="border-radius: 5px;border: 1.3px solid red; background: #ffffff;width: 100%;height: 1.2cm;margin-top: 10px;"><a
                      href="tel:0398812222" style="text-decoration: none; font-size: 20px;"><i
                        class="bi bi-calendar2-check"></i> Car Audit</a></button>
                </div>
              </div>
            </div>
          </div>
          <!-- test -->
          <div class="l1x"> Các Xe Khác </div>

          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                style="height: 225px; width: 100%; display: block;"
                src="asset/img/Q5t7xaxMf3Aj2455gludnut4lwYBMZQUSumd50MF.jpg" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text" style="text-align: initial">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Toyota Camry 2.5Q 2013</font>
                    <font style="vertical-align: inherit;"><br><span>2013-Tự Động-40.000km</span><br><span>580
                        Triệu</span><br><span> Hà Nội- 2 ngày trước</span></font>
                  </font>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                style="height: 225px; width: 100%; display: block;"
                src="asset/img/EYpx7EYb97t0yvi1vTrxXNZ8pAaKGptNgRGpmFl9.jpg" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text" style="text-align: initial">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Mercedes-Benz C-Class C200 2018</font>
                    <font style="vertical-align: inherit;"><br><span>2018-Tự Động-30.000km</span><br><span>880
                        Triệu</span><br><span> Hà Nội- 2 ngày trước</span></font>
                  </font>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                style="height: 225px; width: 100%; display: block;"
                src="asset/img/Sdewc9FgsiRoaS6WllkFrobmoWdQvJftjL5MIfZk.jpg" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text" style="text-align: initial">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">MG5 1.5L LUX 2022</font>
                    <font style="vertical-align: inherit;"><br><span>2022-Tự Động-New</span><br><span>588
                        Triệu</span><br><span>Hồ Chí Minh- 2 ngày trước</span></font>
                  </font>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                style="height: 225px; width: 100%; display: block;"
                src="asset/img/0cXDt44FixgPWOlazI6m57yb71idYSu1CKrglzPP.jpg" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text" style="text-align: initial">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">KIA K3 2021</font>
                    <font style="vertical-align: inherit;"><br><span>2021-Tự Động-20.000km</span><br><span>595
                        Triệu</span><br><span> Hà Nội- 2 ngày trước</span></font>
                  </font>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="xt1">
        <a href="danhmuc.html" style="text-decoration:none; color: #eb7854;"> <span
            style="display: flex; justify-content: center;">
            Xem Thêm<img src="asset/img/chevrons-right_20_20 (1).png" style="margin-top:3px; ">
          </span></a>
      </div>
      <div class="l1x"> Các tin khác cùng người bán </div>
    </div>
    <div style="display: block;padding: 20px;text-align: center;color: #B3B6C1;"><img
        src="asset/img/file_empty.png"><br>Chưa có tin đăng</div>
  </div>
  <!-- Footer -->
  <footer class=" text-white text-center text-lg-start" style="background-color: black;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">ĐẠI LÝ XE OTO <img src="asset/img/LOGO_dailyxedien (1).png"
              style="  height: 60px; width: 193px;">
          </h5>
          <p>
            ©2022 by ChoXe.net. All rights reserved. Công Ty Cổ Phần Ô Tô<br> Xuyên Việt; Mã số thuế: 0304013473
          </p>
          <p>
            Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ, phường <br>Tân Phong, Quận 7, TPHCM </p>
          <p1>
            <i class="bi bi-telephone-inbound"></i> 091.144.2883
          </p1>
          <i class="bi bi-mailbox"></i> cskh@choxe.vn
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">ĐƯỜNG DÂY NÓNG</h5>
          <ul class="list-unstyled mb-0">
            <p>
              <i class="bi bi-telephone"></i> 1800 1524
            </p>
            <p>
              <i class="bi bi-telephone">
              </i> 0916 001 524
            </p>
            <p>
              <i class="bi bi-envelope"></i> tmv_cs@toyotavn.com.vn
            </p>
            <p>Hotline Hỗ trợ tài chính: (84-28) 7309 0998</p>
            <p>Hotline Bảo hiểm Toyota: 1900 633 384</p>
          </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Liên Kết</h5>
          <div class="icons">
            <p>
              <i class="bi bi-facebook"></i>
              <i class="bi bi-youtube"></i>
              <i class="bi bi-instagram"></i>
            </p>
          </div>
          <p>Đừng bỏ lỡ những tin tức khuyến mãi của chúng tôi </p>
        </div>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="#" style="text-decoration: none;">Đại lý xe Ôtô</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="asset/js/nextimg.js">
  </script>
  <script src="asset/js/cart.js"></script>
  <script src="asset/css/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>