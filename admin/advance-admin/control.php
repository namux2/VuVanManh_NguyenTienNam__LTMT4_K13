<?php
include('../../connect.php');
class data
{
    private $conn; // Thêm biến $conn để thực hiện kết nối đến cơ sở dữ liệu

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }
    function se_all($table)
    {
        $sql = "SELECT * FROM $table";
        $run = mysqli_query($this->conn, $sql);
        return $run;
    }
    function delete_user($id) {
        $id = mysqli_real_escape_string($this->conn, $id);
        $sql = "DELETE FROM users WHERE id = '$id'";
        $run = mysqli_query($this->conn, $sql);
        return $run;
    }
    function update_user($id, $new_username, $new_password, $new_email, $new_role)
    {
        $id = mysqli_real_escape_string($this->conn, $id);
        $new_username = mysqli_real_escape_string($this->conn, $new_username);
        $new_password = mysqli_real_escape_string($this->conn, $new_password);
        $new_email = mysqli_real_escape_string($this->conn, $new_email);
        $new_role = mysqli_real_escape_string($this->conn, $new_role);
        $sql = "UPDATE users SET username = '$new_username', password = '$new_password', email = '$new_email', role = '$new_role' WHERE id = '$id'";
        $run = mysqli_query($this->conn, $sql);
        return $run;
    }
    function get_user_by_id($id)
    {
        $id = mysqli_real_escape_string($this->conn, $id);
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
    function delete_product($id) {
        $id = mysqli_real_escape_string($this->conn, $id);
        $sql = "DELETE FROM sanpham WHERE id = '$id'";
        $run = mysqli_query($this->conn, $sql);
        return $run;
    }
    public function get_all_products() {
        $sql = "SELECT * FROM sanpham";
        $result = mysqli_query($this->conn, $sql);
        $products = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }
}



