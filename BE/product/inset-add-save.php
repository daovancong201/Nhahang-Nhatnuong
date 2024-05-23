<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "nhatlaudata";

$conn = mysqli_connect($server, $db_username, $db_password, $database);
if ($conn) {
   echo ("");
} else {
   echo (" <script>alert('Error!');</script> ");
}

if (isset($_POST['submit'])) {
   $image = $_POST['image'];
   $loaisanpham = $_POST['product_gr'];
   $tensanpham = $_POST['name'];
   $gia = $_POST['price'];
   $vocher = $_POST['discount'];
   if ($conn->query("INSERT INTO product(`image`, `product_gr`, `name`, `price`, `discount`) VALUE (N'$image','$loaisanpham','$tensanpham','$gia',N'$vocher')"))
   header('location:http://localhost:3000/Admin/qlsanpham_admin.php');
   echo ("<script>alert('dang thanh cong!!');</script>");

} else {
   echo ("<script>alert('dang khong thanh cong!!');</script>");
}
