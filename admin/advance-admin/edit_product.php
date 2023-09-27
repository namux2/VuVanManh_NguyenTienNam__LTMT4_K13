<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                            <br />
                            <small>
                                <a href="dangxuat.php" style="color: white">logout</a>
                                </small>
                            </div>
                        </div>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>List register <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <li>
                                <a  href="listusers.php"><i class="fa fa-key "></i>Users</a>
                            </li>
                            <li>
                            <a  class="active-menu" href="edit_user.php"><i class="fa fa-eyedropper "></i>Edit user</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>List product<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="listproduct.php"><i class="fa fa-bicycle "></i>Product</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Add Product</a>
                            </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
        <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit User</h1>
                        <h1 class="page-subhead-line"> </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover">
           <div class="panel panel-info">
                        <div class="panel-heading">
                        EDIT USER FORM
                        </div>
                                <div class="panel-body">
    <?php
    // Kết nối đến cơ sở dữ liệu
    include('../../connect.php'); 

    if (isset($_GET['id'])) {
        $productID = $_GET['id'];
        
        // Truy vấn SQL để lấy thông tin sản phẩm dựa trên ID
        $select_sql = "SELECT * FROM sanpham WHERE ID = $productID";
        $result = mysqli_query($conn, $select_sql);
        
        if ($result && mysqli_num_rows($result) == 1) {
            $product = mysqli_fetch_assoc($result); // Lấy thông tin sản phẩm cũ
            
            if (isset($_POST['txtsub'])) {
                // Lấy dữ liệu từ biểu mẫu sửa
                $hangXe = $_POST['txtHangXe'];
                $tenXe = $_POST['txtTenXe'];
                $namSanXuat = $_POST['txtNamSanXuat'];
                $hopSo = $_POST['txtHopSo'];
                $soKmDaChay = $_POST['txtSoKmDaChay'];
                $gia = $_POST['txtGia'];
                $noiBan = $_POST['txtNoiBan'];
                $ngayBan = $_POST['txtNgayBan'];

                // Kiểm tra xem tệp ảnh mới đã được tải lên hay chưa
                if ($_FILES['fileAnhBia']['error'] === UPLOAD_ERR_OK) {
                    $file_name = $_FILES['fileAnhBia']['name'];
                    $file_tmp = $_FILES['fileAnhBia']['tmp_name'];

                    // Lưu tên tệp ảnh mới vào trường 'Anh' của sản phẩm
                    $update_image_sql = "UPDATE sanpham SET Anh = '$file_name' WHERE ID = $productID";
                    mysqli_query($conn, $update_image_sql);

                    // Đường dẫn thư mục lưu trữ tệp ảnh trên máy chủ
                    $upload_dir = 'uploads/'; // Thay đổi đường dẫn này cho phù hợp với cấu hình của bạn

                    // Lưu tệp ảnh mới vào thư mục trên máy chủ
                    move_uploaded_file($file_tmp, $upload_dir . $file_name);
                }

                // Truy vấn SQL UPDATE để cập nhật thông tin sản phẩm
                $update_sql = "UPDATE sanpham SET 
                    HangXe = '$hangXe',
                    TenXe = '$tenXe',
                    NamSanXuat = '$namSanXuat',
                    HopSo = '$hopSo',
                    SoKmDaChay = '$soKmDaChay',
                    Gia = '$gia',
                    NoiBan = '$noiBan',
                    NgayBan = '$ngayBan'
                    WHERE ID = $productID";

                if (mysqli_query($conn, $update_sql)) {
                    echo "<div class='alert alert-success'>Cập nhật thông tin sản phẩm thành công!</div>";
                } else {
                    echo "<div class='alert alert-danger'>Có lỗi xảy ra khi cập nhật thông tin sản phẩm: " . mysqli_error($conn) . "</div>";
                }
            }
        }
    }
    ?>
    <form role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="txtHangXe">Hãng Xe</label>
            <input class="form-control" type="text" id="txtHangXe" name="txtHangXe" value="<?php echo isset($product) ? $product['HangXe'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="txtTenXe">Tên Xe</label>
            <input class="form-control" type="text" id="txtTenXe" name="txtTenXe" value="<?php echo isset($product) ? $product['TenXe'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="txtNamSanXuat">Năm Sản Xuất</label>
            <input class="form-control" type="text" id="txtNamSanXuat" name="txtNamSanXuat" value="<?php echo isset($product) ? $product['NamSanXuat'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="txtHopSo">Hộp Số</label>
            <input class="form-control" type="text" id="txtHopSo" name="txtHopSo" value="<?php echo isset($product) ? $product['HopSo'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="txtSoKmDaChay">Số Km Đã Chạy</label>
            <input class="form-control" type="text" id="txtSoKmDaChay" name="txtSoKmDaChay" value="<?php echo isset($product) ? $product['SoKmDaChay'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="txtGia">Giá</label>
            <input class="form-control" type="text" id="txtGia" name="txtGia" value="<?php echo isset($product) ? $product['Gia'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="txtNoiBan">Nơi Bán</label>
            <input class="form-control" type="text" id="txtNoiBan" name="txtNoiBan" value="<?php echo isset($product) ? $product['NoiBan'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="txtNgayBan">Ngày Bán</label>
            <input class="form-control" type="date" id="txtNgayBan" name="txtNgayBan" value="<?php echo isset($product) ? $product['NgayBan'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="fileAnhBia">Ảnh Bìa</label>
            <input type="file" id="fileAnhBia" name="fileAnhBia">
        </div>

        <div class="form-group">
    <?php
    if (isset($product['Anh'])) {
        $current_image = $product['Anh'];
        echo "<img src='uploads/$current_image' style='max-width: 100px; max-height: 100px;'>";
    } 
    ?>
</div>

        <button type="submit" class="btn btn-info" name="txtsub">Cập Nhập Thông Tin</button>
    </form>
    </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>