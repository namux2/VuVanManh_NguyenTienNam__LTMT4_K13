<?php
session_start();
session_unset();
session_destroy();
header('Location: /VuVanManh_NguyenTienNam__LTMT4_K13/dangnhap.php');
exit();
?>
