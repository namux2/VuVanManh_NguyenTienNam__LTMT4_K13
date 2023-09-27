<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 'admin') {
    // Người dùng chưa đăng nhập hoặc không có quyền admin, chuyển hướng đến trang đăng nhập
    header("Location: /VuVanManh_NguyenTienNam__LTMT4_K13/dangnhap.php");
    exit;
}

?>
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
                            <a href="edit_user.php"><i class="fa fa-eyedropper "></i>Edit user</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>List product<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a  class="active-menu" href="listproduct.php"><i class="fa fa-bicycle "></i>Product</a>
                            </li>
                             <li>
                                <a href="up_product.php"><i class="fa fa-flask "></i>Add Product</a>
                            </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
        <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang Sản Phẩm</h1>
                        <h1 class="page-subhead-line"> </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
    <th>ID</th>
    <th>Hãng Xe</th>
    <th>Tên Xe</th>
    <th>Năm Sản Xuất</th>
    <th>Hộp Số</th>
    <th>Số Km đã chạy</th>
    <th>Giá</th>
    <th>Nơi Bán</th> 
    <th>Ngày Bán</th>
    <th>Ảnh</th>
    <th>Sửa</th> 
    <th>Xóa</th>  
</tr>
</thead>
<tbody>
    <?php
include('control.php');
$getdata = new data();
$products = $getdata->get_all_products();

foreach ($products as $product) {
    ?>
    <tr>
        <td><?php echo $product['ID'] ?></td>
        <td><?php echo $product['HangXe'] ?></td>
        <td><?php echo $product['TenXe'] ?></td>
        <td><?php echo $product['NamSanXuat'] ?></td>
        <td><?php echo $product['HopSo'] ?></td>
        <td><?php echo $product['SoKmDaChay'] ?></td>
        <td><?php echo $product['Gia'] ?></td>
        <td><?php echo $product['NoiBan'] ?></td>
        <td><?php echo $product['NgayBan'] ?></td>
        <td><img src='uploads/<?php echo $product['Anh'] ?>' alt='ảnh lỗi' width='100'></td>
        <td>
            <a href="edit_product.php?id=<?php echo $product['ID'] ?>">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
        </td>
        <td>
            <a href="delete_all.php?del_product=<?php echo $product['ID'] ?>" onclick="return(confirm('Bạn có chắc muốn xóa?'))">
                <span class="glyphicon glyphicon-remove"></span>
            </a>
        </td>
    </tr>
<?php } ?>

</tbody>

    </tbody>
</table>




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
