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

if (isset($_POST['in_hoa_don'])) {
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $diachi = $_POST['diachi'];
   $total = $_POST['total'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   if ($conn->query("INSERT INTO oder_product(`name`, `phone`, `diachi`, `total`, `date`, `time`)
    VALUE (N'$name','$phone','$diachi','$total','$date',N'$time')"))
   echo ("<script>alert('Nhấn Ok để in');</script>");
   echo("<h1>Đã in hóa đơn. <a href='http://localhost:3000/FE/oder.php'> Quay lai </a></h1>");
} else {
   echo ("<script>alert('thất bại');</script>");
   echo("<h1>Lỗi In hóa đơn. <a href='http://localhost:3000/FE/oder.php'> Quay lai </a> </h1>");
}
?>
<?php 
if (isset($_POST['in_hoa_don'])) {
    $quantity= $_POST['quantity'];
    $total= $_POST['total'];
    $date = $_POST['date'];
   $time = $_POST['time'];
    if ($conn->query("INSERT INTO hoadon(`quantity`, `total`,`date`, `time`)
     VALUE ('$quantity','$total','$date','$time')"))
    echo ("");
    echo("");
 } else {
    echo ("<script>alert('thất bại');</script>");
    echo("");
 }
?>