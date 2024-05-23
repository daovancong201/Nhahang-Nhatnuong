<?php 
$id=$_POST['id'];
$image=$_POST['image'];
$product_gr=$_POST['product_gr'];
$name=$_POST['name'];
$price=$_POST['price'];
$discount=$_POST['discount'];

 $connection=new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8","root",""); 
 if ($connection) {
    echo ("<script>alert('Sửa thành Công');</script>");
 header('location:http://localhost:3000/Admin/qlsanpham_admin.php');
 }else{
  echo(" <script>alert('Error!');</script> ");
 }

 $sql="UPDATE product set id='$id',image='$image',product_gr='$product_gr' ,name='$name',price='$price' ,discount='$discount' WHERE id='$id'";

 $stmt=$connection->prepare($sql);
$stmt->execute();

?>