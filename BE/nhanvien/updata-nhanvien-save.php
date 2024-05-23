<?php 
$id=$_POST['id'];
$username=$_POST['username'];
$sex=$_POST['sex'];
$birthday=$_POST['birthday'];
$sdt=$_POST['sdt'];
$quequan=$_POST['quequan'];
$chucvu=$_POST['chucvu'];
$password=$_POST['password'];

 $connection=new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8","root",""); 
 if ($connection) {
    echo ("<script>alert('Sửa thành Công');</script>");
 header('location:http://localhost:3000/Admin/admin_qlnhanvien.php');
 }else{
  echo(" <script>alert('Error!');</script> ");
 }

 $sql="UPDATE nhanvien set id='$id' ,username='$username' ,sex='$sex' ,birthday='$birthday' ,sdt='$sdt' ,quequan='$quequan' ,chucvu='$chucvu' ,password='$password' WHERE id='$id'";

 $stmt=$connection->prepare($sql);
$stmt->execute();

?>