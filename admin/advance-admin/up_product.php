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
                            <a   href="edit_user.php"><i class="fa fa-eyedropper "></i>Edit user</a>
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
                                <a  class="active-menu" href="up_product.php"><i class="fa fa-flask "></i>Add Product</a>
                            </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
        <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Product</h1>
                        <h1 class="page-subhead-line"> </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover">
           <div class="panel panel-info">
                        <div class="panel-heading">
                        ADD PRODUCT FROM
                        </div>
                                <div class="panel-body">
                                <?php
require_once('../../connect.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $HangXe = $_POST["txtHangXe"];
    $TenXe = $_POST["txtTenXe"];
    $NamSanXuat = $_POST["txtNamSanXuat"];
    $HopSo = $_POST["txtHopSo"];
    $SoKmDaChay = $_POST["txtSoKmDaChay"];
    $Gia = $_POST["txtGia"];
    $NoiBan = $_POST["txtNoiBan"];
    $NgayBan = $_POST["txtNgayBan"];
    $targetDirectory = "uploads/"; 
    $targetFile = $targetDirectory . basename($_FILES["fileAnhBia"]["name"]); 
    if (move_uploaded_file($_FILES["fileAnhBia"]["tmp_name"], $targetFile)) {
        $AnhBia = basename($_FILES["fileAnhBia"]["name"]);
        $sql = "INSERT INTO sanpham (HangXe, TenXe, NamSanXuat, HopSo, SoKmDaChay, Gia, NoiBan, NgayBan, Anh)
                VALUES ('$HangXe', '$TenXe', '$NamSanXuat', '$HopSo', '$SoKmDaChay', '$Gia', '$NoiBan', '$NgayBan', '$AnhBia')";
        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success'>Thêm thông tin sản phẩm thành công!</div>";
        } else {
            echo "Lỗi khi thêm sản phẩm: " . mysqli_error($conn);
        }
    } else {
        echo "Lỗi khi tải lên ảnh bìa";
    }
}


?>

<form role="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="txtHangXe">Hãng Xe</label>
        <input class="form-control" type="text" id="txtHangXe" name="txtHangXe">
    </div>
    <div class="form-group">
        <label for="txtTenXe">Tên Xe</label>
        <input class="form-control" type="text" id="txtTenXe" name="txtTenXe">
    </div>
    <div class="form-group">
        <label for="txtNamSanXuat">Năm Sản Xuất</label>
        <input class="form-control" type="text" id="txtNamSanXuat" name="txtNamSanXuat">
    </div>
    <div class="form-group">
        <label for="txtHopSo">Hộp Số</label>
        <input class="form-control" type="text" id="txtHopSo" name="txtHopSo">
    </div>
    <div class="form-group">
        <label for="txtSoKmDaChay">Số Km Đã Chạy</label>
        <input class="form-control" type="text" id="txtSoKmDaChay" name="txtSoKmDaChay">
    </div>
    <div class="form-group">
        <label for="txtGia">Giá</label>
        <input class="form-control" type="text" id="txtGia" name="txtGia">
    </div>
    <div class="form-group">
        <label for="txtNoiBan">Nơi Bán</label>
        <input class="form-control" type="text" id="txtNoiBan" name="txtNoiBan">
    </div>
    <div class="form-group">
        <label for="txtNgayBan">Ngày Bán</label>
        <input class="form-control" type="date" id="txtNgayBan" name="txtNgayBan">
    </div>
    <div class="form-group">
        <label for="fileAnhBia">Ảnh Bìa</label>
        <input type="file" id="fileAnhBia" name="fileAnhBia">
    </div>

    <button type="submit" class="btn btn-info" name="txtsub">Xác Nhận</button>
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
