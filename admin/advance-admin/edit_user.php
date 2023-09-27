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
                                        $user_id = $_GET['id'];
                                        $sql = "SELECT * FROM users WHERE id = $user_id";
                                        $result = mysqli_query($conn, $sql);

                                        if (!$result) {
                                            die("Lỗi truy vấn: " . mysqli_error($conn));
                                        }
                                        if (mysqli_num_rows($result) == 1) {
                                            $user = mysqli_fetch_assoc($result);
                                            if (isset($_POST['txtsub'])) {
                                                $new_username = $_POST['txtname'];
                                                $new_password = $_POST['txtnum'];
                                                $new_email = $_POST['txtemail'];
                                                $new_role = $_POST['txtcategory'];
                                                if (!empty($new_username) && !empty($new_password) && !empty($new_email) && !empty($new_role)) {
                                                    $update_sql = "UPDATE users SET username = '$new_username', password = '$new_password', email = '$new_email', role = '$new_role' WHERE id = $user_id";

                                                    if (mysqli_query($conn, $update_sql)) {
                                                        echo "<div class='alert alert-success'>Cập nhật thông tin người dùng thành công!</div>";
                                                    } else {
                                                        echo "<div class='alert alert-danger'>Có lỗi xảy ra khi cập nhật thông tin người dùng: " . mysqli_error($conn) . "</div>";
                                                    }
                                                } else {
                                                    echo "<div class='alert alert-danger'>Vui lòng điền đầy đủ thông tin vào các trường.</div>";
                                                }
                                            }
                                        } else {
                                            echo "<div class='alert alert-danger'>Không tìm thấy ID người dùng.</div>";
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>ID người dùng không được cung cấp.</div>";
                                    }
                                    ?>
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="txtname">Username</label>
                                            <input class="form-control" type="text" id="txtname" name="txtname" value="<?php echo isset($user) ? $user['username'] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="txtnum">Password</label>
                                            <input class="form-control" type="text" id="txtnum" name="txtnum" value="<?php echo isset($user) ? $user['password'] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="txtemail">Email</label>
                                            <input class="form-control" type="text" id="txtemail" name="txtemail" value="<?php echo isset($user) ? $user['email'] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="txtcategory">Role</label>
                                            <select id="txtcategory" name="txtcategory">
                                                <option value="admin" <?php echo isset($user) && $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                                                <option value="user" <?php echo isset($user) && $user['role'] === 'user' ? 'selected' : ''; ?>>User</option>
                                            </select>
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
