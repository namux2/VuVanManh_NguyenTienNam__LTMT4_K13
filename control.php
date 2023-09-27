<?php
include('connect.php');

class Data {
    function insert_user($username, $password, $email) {
        global $conn;
        $sql = "INSERT INTO users (username, password, email)
                VALUES ('$username', '$password', '$email')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    
    public function select_email($email) {
        global $conn;
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_assoc($result);
    }
}
?>
