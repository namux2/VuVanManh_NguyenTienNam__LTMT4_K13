<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/bosstrap/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
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
                  <a href="">Đăng Nhập</a>
                  <a href="">Đăng Ký</a>
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
        <div class="search-dropdown">
          <div class="input-container">
            <input type="text" class="search-input" placeholder="Tìm Kiếm Sản Phẩm..." oninput="searchProducts()">
            <select class="category-select">
              <option value="all">Tất cả danh mục</option>
              <option value="xe-toyota">Xe Toyota</option>
              <option value="xe-chevrolet">Xe Chevrolet</option>
              <option value="xe-ford">Xe Ford</option>
              <option value="xe-honda">Xe Honda</option>
              <option value="xe-hyundai">Xe Hyundai</option>
              <option value="xe-isuzu">Xe Isuzu</option>
              <option value="xe-lexus">Xe Lexus</option>
              <option value="xe-rolls-royce">Xe Rolls-Royce</option>
              <option value="xe-maybach">Xe MayBach</option>
            </select>

            <a href="" id="searchLink">
              <span class="search-icon" id="searchIcon">
                <i class="bi bi-search" style="color: black;"></i>
              </span>
            </a>

          </div>
          <ul class="search-results-list"></ul>
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
                        <span class="cart-price cart-header cart-column">Giá</span>
                        <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                      </div>

                      <div class="cart-items cart">
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

  <!-- Nội dung trang web -->
  <main role="main">
    <div class="album py-5" style="margin-top:-32px ;">

      <div class="container">
        <div class="new">
          <span>
            Thanh Lọc Sản Phẩm
          </span>
        </div>
        <div id="tsa">
          <div class="row mb-3">
            <div class="col-md-3">
              <label for="filterBrand">Hãng Xe:</label>
              <select id="filterBrand" class="form-select">
                <option value="">Tất cả</option>
                <option value="mercedes">Mercedes-Benz</option>
                <option value="bmw">BMW</option>
                <option value="lexus">Lexus</option>
                <option value="audi">Audi</option>
                <option value="rover">Range Rover</option>
                <option value="royce">Rolls-Royce</option>
                <option value="kia">Kia</option>
                <option value="vinfast">VinFast</option>
                <option value="huyndai">Huyndai</option>
                <option value="mazda">Mazda</option>
                <option value="honda">Honda</option>
                <option value="toyota">Toyota</option>
                <option value="rondo">Rondo</option>
                <option value="mitsubishi">Mitsubishi</option>
                <option value="xpander">Xpander</option>


              </select>
            </div>
            <div class="col-md-3">
              <label for="filterLocation">Địa điểm:</label>
              <select id="filterLocation" class="form-select">
                <option value="">Tất cả</option>
                <option value="hanoi">Hà Nội</option>
                <option value="saigon">Sài Gòn </option>
                <option value="thaibinh">Thái Bình </option>
                <option value="phutho">Phú Thọ</option>
                <option value="thainguyen">Thái Nguyên </option>
                <option value="mocchau">Mộc Châu </option>
                <option value="bacninh">Bắc Ninh</option>
                <option value="hoabinh">Hòa Bình</option>
                <option value="cantho">Cần Thơ</option>
                <option value="hochiminh">Hồ Chí Minh</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="filterYear">Năm:</label>
              <select id="filterYear" class="form-select">
                <option value="">Tất cả</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="filterTransmission">Hộp số:</label>
              <select id="filterTransmission" class="form-select">
                <option value="">Tất Cả</option>
                <option value="sosan">Số Sàn</option>
                <option value="tudong">Tự động</option>
                <option value="bantudong">Bán tự động</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3">
              <label for="filterMileage">Số km:</label>
              <select id="filterMileage" class="form-select">
                <option value="">Tất cả</option>
                <option value="200000">Dưới 200,000 km</option>
                <option value="150000">Dưới 150,000 km</option>
                <option value="100000">Dưới 100,000 km</option>

                <option value="40000">Dưới 40,000 km</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="filterPrice">Giá:</label>
              <select id="filterPrice" class="form-select">
                <option value="">Tất cả</option>
                <option value="0-500000000">Dưới 500 triệu</option>
                <option value="500000000-1000000000">500 triệu - 1 tỷ</option>
                <option value="1000000000-2000000000">1 tỷ - 2 tỷ</option>
                <option value="2000000000-5000000000">2 tỷ - 5 tỷ</option>
                <option value="5000000000">Trên 5 tỷ</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="filterType">Loại xe:</label>
              <select id="filterType" class="form-select">
                <option value="">Tất cả</option>
                <option value="sedan">Sedan</option>
                <option value="hatback">Hatchback</option>
                <option value="suv">Suv</option>
              </select>
            </div>
            <div class="col-md-3" style="margin-top: 24px;">
              <button id="filterButton" class="btn btn-primary">Lọc</button>
            </div>
          </div>
        </div>
        <div class="new" style="padding: 10px 0px 10px 0px;">
          <span>
            Xe Mới Nhất
          </span>
        </div>
        <div id="items" class="row">
          <!-- Các phần tử (col-md-3) sẽ được thêm vào đây -->
          <div class="row">
            <div class="col-md-3" data-brand="mercedes" data-location="hanoi" data-price="1780000000" data-year="2022"
              data-transmission="bantudong" data-mileage="30000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/63e753e9df7a8.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Mercedes-Benz GLC 200 2022
                      </font>
                      <font style="vertical-align: inherit;"><br><span>2017-Tự Động-40.000km</span><br><span>1 tỷ 780
                          triệu
                        </span><br><span>Hà Nội 24/2/2023
                        </span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Mercedes-Benz GLC 200 2022"
                        data-price="1780000000" data-image="asset/img/63e753e9df7a8.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="bmw" data-location="saigon" data-price="888000000" data-year="2016"
              data-transmission="bantudong" data-mileage="30000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;"
                  src="asset/img/MiUlHLsvwLJyXIeMpxPoxJh12B6DgVrGtnW1GdVv.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">BMW 3 Series 320I sx 12/2016<br><span>2016-Bán Tự
                          Động-40.000km<br>888 Triệu<br>Sài Gòn-1 ngày trước</span></font>
                      <font style="vertical-align: inherit;"></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="BMW 3 Series 320I sx 12/2016"
                        data-price="888000000" data-image="asset/img/MiUlHLsvwLJyXIeMpxPoxJh12B6DgVrGtnW1GdVv.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="huyndai" data-location="bacninh" data-price="450000000" data-year="2016"
              data-transmission="tudong" data-mileage="194000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;"
                  src="asset/img/ZXjusycdAXcfeYZNM1koeUyrMdQM0Cwh9ld7DwEV.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Hyundai Sonata 2016 </font>
                      <font style="vertical-align: inherit;"><br><span>2016-Tự Động-34.000km</span><br><span>450
                          Triệu</span><br><span>Bắc Ninh- 1 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Hyundai Sonata 2016 " data-price="450000000"
                        data-image="asset/img/ZXjusycdAXcfeYZNM1koeUyrMdQM0Cwh9ld7DwEV.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="huyndai" data-location="hanoi" data-year="2015" data-transmission="sosan"
              data-mileage="80000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;"
                  src="asset/img/SQJK4mSZShbppdKcSfaUlZGXRSluHacAvi3h8hl2.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Hyundai Starex Hyundai Starex </font>
                      <font style="vertical-align: inherit;"><br><span>2015-Số Sàn-80.000km</span><br><span>510
                          Triệu</span><br><span>Hà Nội- 1 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Hyundai Starex Hyundai Starex "
                        data-price="510000000" data-image="asset/img/SQJK4mSZShbppdKcSfaUlZGXRSluHacAvi3h8hl2.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="kia" data-location="hanoi" data-price="522000000" data-year="2017"
              data-transmission="tudong" data-mileage="63000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/2.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Kia Sedona 2017 </font>
                      <font style="vertical-align: inherit;"><br><span>2017-Tự Động-63.000km</span><br><span>522
                          Triệu</span><br><span>Hà Nội- 3 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Kia Sedona 2017" data-price="522000000"
                        data-image="asset/img/2.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="mec" data-location="hochiminh" data-price="838000000" data-year="2016"
              data-transmission="tudong" data-mileage="60000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/7.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Mercedes C250 Exclusive2016<br><span>2016-Tự
                          Động-60.000km<br>838 Triệu<br>Hồ Chí Minh-17 giờ trước</span></font>
                      <font style="vertical-align: inherit;"></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Mercedes C250 Exclusive2016"
                        data-price="838000000" data-image="asset/img/7.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="mitsubishi" data-location="hoabinh" data-price="420000000"
              data-year="2017" data-transmission="tudong" data-mileage="40000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;"
                  src="asset/img/P0XL00EC0RGYun4LH0KZvOtbZlMKPayWXjjcb7NN.webp" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Mitsubishi Triton GLS 2017</font>
                      <font style="vertical-align: inherit;"><br><span>2017-Tự Động-40.000km</span><br><span>420
                          Triệu</span><br><span>Hòa Bình- 2 ngày trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Mitsubishi Triton GLS 2017"
                        data-price="420000000" data-image="asset/img/P0XL00EC0RGYun4LH0KZvOtbZlMKPayWXjjcb7NN.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="mec" data-location="hanoi" data-price="990000000" data-year="2019"
              data-transmission="tudong" data-mileage="48000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/4.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"> Meccerdes C200 2019 facelift</font>
                      <font style="vertical-align: inherit;"><br><span>2019-Tự
                          Động-48.000km</span><br><span>990Triệu</span><br><span>Hà Nội- 30 phút trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Meccerdes C200 2019 facelift"
                        data-price="990000000" data-image="asset/img/4.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="audi" data-location="cantho" data-price="695000000" data-year="2014"
              data-transmission="tudong" data-mileage="63000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/e1.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">AUDI Q5 2.0TFSI QUATTRO</font>
                      <font style="vertical-align: inherit;"><br><span>2014-Tự Động-63.000km</span><br><span>695
                          Triệu</span><br><span>Cần Thơ- 2 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="AUDI Q5 2.0TFSI QUATTRO"
                        data-price="695000000" data-image="asset/img/e1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="vinfast" data-location="hochiminh" data-price="845000000"
              data-transmission="tudong" data-mileage="30000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/8.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">VinFast LUX SA </font>
                      <font style="vertical-align: inherit;"><br><span>2020-Tự Động-30.000 km</span><br><span>845
                          Triệu</span><br><span>Hồ Chí Minh- 4 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="VinFast LUX SA" data-price="845000000"
                        data-image="asset/img/8.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="huyndai" data-location="hanoi" data-price="500000000"
              data-transmission="tudong" data-mileage="38000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/9.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"> HuynDai Elantra 2.0 Gls sx 2018</font>
                      <font style="vertical-align: inherit;"><br><span>2018-Tự Động-38.000km</span><br><span>500
                          Triệu</span><br><span>Hà Nội- 1 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="HuynDai Elantra 2.0 Gls sx 2018"
                        data-price="500000000" data-image="asset/img/9.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-location="hochiminh" data-price="150000000" data-year="2023"
              data-transmission="tudong" data-mileage="38000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/10.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">MAZDA 6</font>
                      <font style="vertical-align: inherit;"><br><span>2023-Tự Động-Mới</span><br><span>150
                          Triệu</span><br><span>Hồ Chí Minh- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="MAZDA 6" data-price="150000000"
                        data-image="asset/img/10.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="toyota" data-location="hanoi" data-price="835000000" data-year="2021"
              data-transmission="tudong" data-mileage="39000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/11.webp" true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Camry 2.0g-2021 đen</font>
                      <font style="vertical-align: inherit;"><br><span>2011-Tự Động-39.000km</span><br><span>835
                          Triệu</span><br><span>Hà Nội- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Camry 2.0g-2021 đen" data-price="835000000"
                        data-image="asset/img/11.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-location="cantho" data-price="539000000" data-transmission="tudong"
              data-mileage="40000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/12.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Xpander 2020 AT </font>
                      <font style="vertical-align: inherit;"><br><span>2020-Tự Động-40.000km</span><br><span>539
                          Triệu</span><br><span>Cần Thơ- 5 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Xpander 2020 AT" data-price="539000000"
                        data-image="asset/img/12.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="bmw" data-location="hochiminh" data-price="1489000000" data-year="2023"
              data-transmission="tudong" data-mileage="40000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/13.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">BMW 3Series 2023</font>
                      <font style="vertical-align: inherit;"><br><span>2023-Tự Động-Mới</span><br><span>1 Tỷ 489
                          Triệu</span><br><span>Hồ Chí Minh- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="BMW 3Series 2023" data-price="1489000000"
                        data-image="asset/img/13.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="toyota" data-location="hochiminh" data-price="298000000" data-year="2019"
              data-transmission="tudong" data-mileage="33000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/6.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Toyota Wigo G 2019
                      </font>
                      <font style="vertical-align: inherit;"><br><span>2019-Tự Động-33.000km</span><br><span>298 Triệu
                        </span><br><span> Hồ Chí Minh - 2 giờ trước
                        </span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Toyota Wigo G 2019" data-price="298000000"
                        data-image="asset/img/6.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="toyota" data-location="hochiminh" data-price="579000000" data-year="2019"
              data-transmission="tudong" data-mileage="67000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/4.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">TOYOTA COROLLA ALTIS</font>
                      <font style="vertical-align: inherit;"><br><span>2019-Tự Động-67.000km</span><br><span>579
                          Triệu</span><br><span>Hồ Chí Minh- 2 ngày trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="TOYOTA COROLLA ALTIS" data-price="579000000"
                        data-image="asset/img/4.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="mec" data-location="hochiminh" data-price="1499000000" data-year="2021"
              data-transmission="tudong" data-mileage="24000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/3.webp" true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Mercedes C300 AMG 2021</font>
                      <font style="vertical-align: inherit;"><br><span>2021-Tự Động-24.000km</span><br><span>1 Tỷ 499
                          Triệu</span><br><span>Hồ Chí Minh- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Mercedes C300 AMG 2021"
                        data-price="1499000000" data-image="asset/img/3.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="kia" data-location="hanoi" data-price="522000000" data-year="2017"
              data-transmission="tudong" data-mileage="63000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/2.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Kia Sedona 2017 </font>
                      <font style="vertical-align: inherit;"><br><span>2017-Tự Động-63.000km</span><br><span>522
                          Triệu</span><br><span>Hà Nội- 3 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Kia Sedona 2017" data-price="522000000"
                        data-image="asset/img/2.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="infiniti" data-location="hochiminh" data-price="2990000000"
              data-year="2015" data-mileage="70000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/1.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Xe Infiniti QX80 model 2015</font>
                      <font style="vertical-align: inherit;"><br><span>2015-Tự Động-70.000km</span><br><span>2 Tỷ 990
                          Triệu</span><br><span>Hồ Chí Minh- 1 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Xe Infiniti QX80 model 2015"
                        data-price="2990000000" data-image="asset/img/1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="huyndai" data-location="hanoi" data-year="2021" data-mileage="9000"
              data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/m1.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"> HuynDai Elantra 1.6 AT 2021</font>
                      <font style="vertical-align: inherit;"><br><span>2021-Tự Động-9000km</span><br><span>550
                          Triệu</span><br><span>Hà Nội- 1 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title=" HuynDai Elantra 1.6 AT 2021"
                        data-price="550000000" data-image="asset/img/m1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="honda" data-price="895000000" data-year="2021" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/n1.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Honda CRV-L 2021 Trắng<br><span>2021-Tự
                          Động-21.000km<br>895 Triệu<br>Hồ Chí Minh-1 ngày trước</span></font>
                      <font style="vertical-align: inherit;"></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Honda CRV-L 2021 Trắng" data-price="895000000"
                        data-image="asset/img/n1.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="rondo" data-year="2017" data-transmission="sosan" data-mileage="29000"
              data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/v1.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">RONDO MT 2017
                      </font>
                      <font style="vertical-align: inherit;"><br><span>2017-Số Sàn-29.000km</span><br><span>350 Triệu
                        </span><br><span>Hồ Chí Minh - 1 giờ trước
                        </span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="RONDO MT 2017" data-price="350000000"
                        data-image="asset/img/v1.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="lexus" data-location="saigon" data-price="1299000000" data-year="2016"
              data-transmission="sosan" data-mileage="50000">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/x1.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Lexus Nx200T</font>
                      <font style="vertical-align: inherit;"><br><span>2016-Số Sàn-50.000km</span><br><span>1 Tỷ 299
                          Triệu</span><br><span>Sài Gòn- 2 ngàytrước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Lexus Nx200T" data-price="1299000000"
                        data-image="asset/img/x1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--T-->
          <div class="row">
            <div class="col-md-3" data-location="hanoi" data-price="550000000" data-year="2021"
              data-transmission="tudong" data-mileage="9000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/m1.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"> HuynDai Elantra 1.6 AT 2021</font>
                      <font style="vertical-align: inherit;"><br><span>2021-Tự Động-9000km</span><br><span>550
                          Triệu</span><br><span>Hà Nội- 1 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title=" HuynDai Elantra 1.6 AT 2021"
                        data-price="550000000" data-image="asset/img/m1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-location="hochiminh" data-price="895000000" data-year="2021"
              data-transmission="tudong" data-mileage="21000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/n1.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Honda CRV-L 2021 Trắng<br><span>2021-Tự
                          Động-21.000km<br>895 Triệu<br>Hồ Chí Minh-1 ngày trước</span></font>
                      <font style="vertical-align: inherit;"></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Honda CRV-L 2021 Trắng" data-price="895000000"
                        data-image="asset/img/n1.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-location="hochiminh" data-price="350000000" data-year="2017"
              data-transmission="sosan" data-mileage="29000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/v1.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">RONDO MT 2017
                      </font>
                      <font style="vertical-align: inherit;"><br><span>2017-Số Sàn-29.000km</span><br><span>350 Triệu
                        </span><br><span>Hồ Chí Minh - 1 giờ trước
                        </span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="RONDO MT 2017" data-price="350000000"
                        data-image="asset/img/v1.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-price="1299000000" data-year="2016" data-transmission="sosan"
              data-mileage="50000" data-type="suv">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/x1.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Lexus Nx200T</font>
                      <font style="vertical-align: inherit;"><br><span>2016-Số Sàn-50.000km</span><br><span>1 Tỷ 299
                          Triệu</span><br><span>Sài Gòn- 2 ngàytrước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Lexus Nx200T" data-price="1299000000"
                        data-image="asset/img/x1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-price="695000000" data-year="2014" data-transmission="tudong"
              data-mileage="63000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/e1.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">AUDI Q5 2.0TFSI QUATTRO</font>
                      <font style="vertical-align: inherit;"><br><span>2014-Tự Động-63.000km</span><br><span>695
                          Triệu</span><br><span>Cần Thơ- 2 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="AUDI Q5 2.0TFSI QUATTRO"
                        data-price="695000000" data-image="asset/img/e1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-location="hochiminh" data-price="845000000" data-year="2020"
              data-transmission="tudong" data-mileage="30000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/8.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">VinFast LUX SA </font>
                      <font style="vertical-align: inherit;"><br><span>2020-Tự Động-30.000 km</span><br><span>845
                          Triệu</span><br><span>Hồ Chí Minh- 4 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="VinFast LUX SA" data-price="845000000"
                        data-image="asset/img/8.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="huyndai" data-location="hanoi" data-price="500000000" data-year="2018"
              data-transmission="tudong" data-mileage="38000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/9.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"> HuynDai Elantra 2.0 Gls sx 2018</font>
                      <font style="vertical-align: inherit;"><br><span>2018-Tự Động-38.000km</span><br><span>500
                          Triệu</span><br><span>Hà Nội- 1 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="HuynDai Elantra 2.0 Gls sx 2018"
                        data-price="500000000" data-image="asset/img/9.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="mazda" data-location="hochiminh" data-price="150000000"
              data-transmission="tudong" data-mileage="38000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/10.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">MAZDA 6</font>
                      <font style="vertical-align: inherit;"><br><span>2023-Tự Động-Mới</span><br><span>150
                          Triệu</span><br><span>Hồ Chí Minh- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="MAZDA 6" data-price="150000000"
                        data-image="asset/img/10.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="toyota" data-location="hanoi" data-price="835000000" data-year="2021"
              data-transmission="tudong" data-mileage="39000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/11.webp" true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Camry 2.0g-2021 đen</font>
                      <font style="vertical-align: inherit;"><br><span>2011-Tự Động-39.000km</span><br><span>835
                          Triệu</span><br><span>Hà Nội- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Camry 2.0g-2021 đen" data-price="835000000"
                        data-image="asset/img/11.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3" data-brand="xpander" data-price="539000000" data-year="2020"
              data-transmission="tudong" data-mileage="40000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/12.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Xpander 2020 AT </font>
                      <font style="vertical-align: inherit;"><br><span>2020-Tự Động-40.000km</span><br><span>539
                          Triệu</span><br><span>Cần Thơ- 5 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Xpander 2020 AT" data-price="539000000"
                        data-image="asset/img/12.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-location="hochiminh" data-price="1489000000" data-transmission="tudong"
              data-mileage="40000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/13.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">BMW 3Series 2023</font>
                      <font style="vertical-align: inherit;"><br><span>2023-Tự Động-Mới</span><br><span>1 Tỷ 489
                          Triệu</span><br><span>Hồ Chí Minh- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="BMW 3Series 2023" data-price="1489000000"
                        data-image="asset/img/13.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="toyota" data-location="hochiminh" data-price="298000000"
              data-transmission="tudong" data-mileage="33000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/6.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Toyota Wigo G 2019
                      </font>
                      <font style="vertical-align: inherit;"><br><span>2019-Tự Động-33.000km</span><br><span>298 Triệu
                        </span><br><span> Hồ Chí Minh - 2 giờ trước
                        </span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Toyota Wigo G 2019" data-price="298000000"
                        data-image="asset/img/6.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="toyota" data-location="hochiminh" data-price="579000000"
              data-transmission="tudong" data-mileage="67000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/4.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">TOYOTA COROLLA ALTIS</font>
                      <font style="vertical-align: inherit;"><br><span>2019-Tự Động-67.000km</span><br><span>579
                          Triệu</span><br><span>Hồ Chí Minh- 2 ngày trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="TOYOTA COROLLA ALTIS" data-price="579000000"
                        data-image="asset/img/4.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-brand="mec" data-location="hochiminh" data-price="1499000000" data-year="2021"
              data-transmission="tudong" data-mileage="24000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/3.webp" true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Mercedes C300 AMG 2021</font>
                      <font style="vertical-align: inherit;"><br><span>2021-Tự Động-24.000km</span><br><span>1 Tỷ 499
                          Triệu</span><br><span>Hồ Chí Minh- 2 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Mercedes C300 AMG 2021"
                        data-price="1499000000" data-image="asset/img/3.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3" data-location="hanoi" data-price="522000000" data-year="2017"
              data-transmission="tudong" data-mileage="63000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/2.webp"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Kia Sedona 2017 </font>
                      <font style="vertical-align: inherit;"><br><span>2017-Tự Động-63.000km</span><br><span>522
                          Triệu</span><br><span>Hà Nội- 3 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Kia Sedona 2017" data-price="522000000"
                        data-image="asset/img/2.webp">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3" data-brand="infiniti" data-location="hochiminh" data-price="880000000"
              data-year="2015" data-transmission="tudong" data-mileage="70000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/1.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Xe Infiniti QX80 model 2015</font>
                      <font style="vertical-align: inherit;"><br><span>2015-Tự Động-70.000km</span><br><span>880
                          Triệu</span><br><span>Hồ Chí Minh- 1 giờ trước</span></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Xe Infiniti QX80 model 2015"
                        data-price="880000000" data-image="asset/img/1.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-location="hanoi" data-price="1780000000" data-transmission="tudong"
              data-mileage="30000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;" src="asset/img/63e753e9df7a8.jpg"
                  data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Mercedes-Benz GLC 200 2022
                      </font>
                      <font style="vertical-align: inherit;"><br><span>2017-Tự Động-40.000km</span><br><span>1 tỷ 780
                          triệu
                        </span><br><span>Hà Nội 24/2/2023
                        </span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Mercedes-Benz GLC 200 2022"
                        data-price="1780000000" data-image="asset/img/63e753e9df7a8.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3" data-price="888000000" data-year="2016" data-transmission="tudong"
              data-mileage="30000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;"
                  src="asset/img/MiUlHLsvwLJyXIeMpxPoxJh12B6DgVrGtnW1GdVv.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">BMW 3 Series 320I sx 12/2016<br><span>2016-Bán Tự
                          Động-40.000km<br>888 Triệu<br>Sài Gòn-1 ngày trước</span></font>
                      <font style="vertical-align: inherit;"></font>
                    </font>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="BMW 3 Series 320I sx 12/2016"
                        data-price="888000000" data-image="asset/img/MiUlHLsvwLJyXIeMpxPoxJh12B6DgVrGtnW1GdVv.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3" data-year="2016" data-transmission="tudong" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;"
                  src="asset/img/ZXjusycdAXcfeYZNM1koeUyrMdQM0Cwh9ld7DwEV.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Hyundai Sonata 2016 </font>
                      <font style="vertical-align: inherit;"><br><span>2016-Tự Động-194.000km</span><br><span>450
                          Triệu</span><br><span>Bắc Ninh- 1 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Hyundai Sonata 2016 " data-price="450000000"
                        data-image="asset/img/ZXjusycdAXcfeYZNM1koeUyrMdQM0Cwh9ld7DwEV.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3" data-location="hanoi" data-price="510000000" data-year="2015"
              data-transmission="sosan" data-mileage="80000" data-type="sedan">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Hình thu nhỏ [100%x225]"
                  style="height: 225px; width: 100%; display: block;"
                  src="asset/img/SQJK4mSZShbppdKcSfaUlZGXRSluHacAvi3h8hl2.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Hyundai Starex Hyundai Starex </font>
                      <font style="vertical-align: inherit;"><br><span>2015-Số Sàn-80.000km</span><br><span>510
                          Triệu</span><br><span>Hà Nội- 1 ngày trước</span></font>
                    </font>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><a href="chitiet.html"
                              style="text-decoration:none; color: black;">Xem Chi Tiết</a></font>
                        </font>
                      </button>
                      <button class="add-to-cart" data-id="1" data-title="Hyundai Starex Hyundai Starex "
                        data-price="510000000" data-image="asset/img/SQJK4mSZShbppdKcSfaUlZGXRSluHacAvi3h8hl2.jpg">
                        <span class="gg-shopping-bag"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <!--T-->
        </div>
      </div>
    </div>
    </div>
  </main>
  <div class="phantrang">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">7</a></li>
      </ul>
    </nav>
  </div>
  <!--nội dung -->
  </main>
  <!-- Footer -->
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
  <script src="asset/js/cart.js"></script>
  <script src="asset/js/loc.js"></script>
  <script src="asset/js/page.js"></script>
  <script src="asset/css/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>