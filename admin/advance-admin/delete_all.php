<?php
session_start();
include('control.php');

if (isset($_GET['del_user'])) {
    $id = $_GET['del_user'];

    $getdata = new data();
    $result = $getdata->delete_user($id);

    if ($result) {
        echo "<script>alert('Xóa người dùng thành công.'); window.location='listusers.php';</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra khi xóa người dùng.'); window.location='listusers.php';</script>";
    }
} 

if (isset($_GET['del_product'])) {
    $id = $_GET['del_product'];

    $getdata = new data();
    $result = $getdata->delete_product($id);

    if ($result) {
        echo "<script>alert('Xóa sản phẩm thành công.'); window.location='listproduct.php';</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra khi xóa sản phẩm.'); window.location='listproduct.php';</script>";
    }
}
?>
