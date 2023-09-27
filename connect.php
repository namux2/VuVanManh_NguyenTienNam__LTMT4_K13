<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "weboto";
global $conn;

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect($servername, $username, $password, $db);

// Kiểm tra kết nối
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
?>
