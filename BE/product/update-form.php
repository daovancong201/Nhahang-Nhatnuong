<?php 
     $id =$_GET['id'];
     //chuỗi kết nối đến CSDl
     $connection=new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8","root",""); 
     //câu truy vấn
     $query="SELECT * FROM product WHERE id=$id";
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
    <title>Inset Update</title>
</head>

<body>
    <div style="background: url('/FE/assect/img/bander/backgroud_product.jpg') top center / cover no-repeat; " id="main">
        <div id="box-content">
            <!-- right-header -->
            <div class="contenr-header">
                <div class="view-oder">
                    <div class="oder-text">
                        <p class="text-about">UPDATE PRODUCT</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 15px;" class="dulieu">
                <div class="bd-example">
                    <h2 class="text-center"> Cập Nhập Sản Phẩm</h2>
                    
                    <form class="needs-validation" action="/BE/product/update-save.php" method="POST">
                    <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">ID</label>
                                <input type="text" name="id" class="inp-file form-control" id="validationCustom01" value="<?php echo $user['id'] ?>" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Image</label>
                                <input type="file" name="image" class="inp-file form-control" id="validationCustom01" value="<?php echo $user['image'] ?>">
                            </div>
                        </div>
                        <div class="gr-end form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Loại Sản Phẩm</label>
                                <input type="text" class="form-control" id="validationCustom02" name="product_gr" value="<?php echo $user['product_gr'] ?>"><br>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Tên Sản Phẩm</label>
                                <input type="text" class="inp-name form-control" id="validationCustom" name="name" value="<?php echo $user['name'] ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Giá</label>
                                <input type="number" class="form-control" id="validationCustom03" name="price" value="<?php echo $user['price'] ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Vocher <sup>%</sup></label>
                                <input type="text" class="inp-vc form-control" id="validationCustom04" name="discount" value="<?php echo $user['discount'] ?>">
                            </div>
                        </div>
                        <div class="">
                            <input class="with-sty btn btn-primary" type="submit" name="submit" value="Cập nhật dữ liệu">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>