<?php
use function MongoDB\Driver\Monitoring\removeSubscriber;
   $server="localhost";
   $db_username="root";
   $db_password="";
   $database="nhatlaudata";
   
   $conn = mysqli_connect($server, $db_username, $db_password,$database);
   if ($conn) {
      echo ("<script>alert('xóa thành Công');</script>");
   header('location:http://localhost:3000/Admin/qlsanpham_admin.php');
   }else{
    echo(" <script>alert('Error!');</script> ");
   }
//
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
   $sql="DELETE FROM product WHERE id='$id'";
   mysqli_query($conn,$sql);
   }
   ?>