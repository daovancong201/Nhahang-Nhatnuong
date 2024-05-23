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
   $username = $_POST['username'];
   $sex = $_POST['sex'];
   $birthday = $_POST['birthday'];
   $sdt = $_POST['sdt'];
   $quequan = $_POST['quequan'];
   $chucvu = $_POST['chucvu'];
   $password = $_POST['password'];

   if ($conn->query("INSERT INTO nhanvien(`username`, `sex`, `birthday`, `sdt`, `quequan`, `chucvu`, `password`)
    VALUE (N'$username','$sex','$birthday','$sdt','$quequan','$chucvu',N'$password')"))
   header('location:http://localhost:3000/Admin/admin_qlnhanvien.php');
   echo ("<script>alert('dang thanh cong!!');</script>");

} else {
   echo ("<script>alert('dang khong thanh cong!!');</script>");
}