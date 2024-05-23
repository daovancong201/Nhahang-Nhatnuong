<?php 
     $id =$_GET['id'];
     //chuỗi kết nối đến CSDl
     $connection=new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8","root",""); 
     //câu truy vấn
     $query="SELECT * FROM nhanvien WHERE id=$id";
     //thực thi câu  truy vấn 
     $stmt=$connection->prepare($query);
     $stmt->execute();
     //khai báo biến để nhận dữ liệu lấy ra 
     $user=$stmt->fetch();
     //Test thử dữ  liệu có lấy được k 
    // var_dump($user);
      
       ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/BE/product/css/form.css">
    <title>Thêm Nhân Viên</title>
</head>

<body>
    <div style="background: url('/FE/assect/img/bander/backgroud_product.jpg') top center / cover no-repeat; " id="main">
        <div id="box-content">
            <!-- right-header -->
            <div class="contenr-header">
                <div class="view-oder">
                    <div class="oder-text">
                        <p class="text-about">ADD WAITER</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 12px;" class="dulieu">
                <div class="bd-example">
                    <h2 class="text-center"> Thêm Nhân Viên</h2>
                    <form class="needs-validation" action="/BE/nhanvien/updata-nhanvien-save.php" method="POST">
                    <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">ID</label>
                                <input type="text" name="id" class="inp-file form-control" id="validationCustom01" value="<?php echo $user['id'] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="validationCustom01">User Name</label>
                                <input type="text" name="username" class="form-control" id="validationCustom01" value="<?php echo $user['username'] ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Giới Tính</label>
                                <input type="text" class="form-control" id="validationCustom" name="sex" value="<?php echo $user['sex'] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Ngày Sinh</label>
                                <input type="date" name="birthday" class="form-control" id="validationCustom01" value="<?php echo $user['birthday'] ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Số Điện Thoại</label>
                                <input type="number" name="sdt" class="form-control" id="validationCustom01" value="<?php echo $user['sdt'] ?>">
                            </div>
                        </div>


                        <div class="gr-end form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Quê Quán</label>
                                <input type="text" class="form-control" id="validationCustom02" name="quequan" value="<?php echo $user['quequan'] ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Chức Vụ</label>
                                <input type="text" class="inp-name form-control" id="validationCustom" name="chucvu" value="<?php echo $user['chucvu'] ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Password</label>
                                <input style="padding: 6px 13px !important;" type="text" class=" inp-file form-control" id="validationCustom03" name="password" value="<?php echo $user['password'] ?>">
                            </div>
                           
                        </div>
                        <div class="">
                            <input class="with-sty btn btn-primary" type="submit" name="submit" value="Lưu Thông Tin">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>