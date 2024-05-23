<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "nhatlaudata");

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['product'])) {
        $session_array_id = array_column($_SESSION['product'], "id");


        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                'id' => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "discount" => $_POST['discount'],
                "quantity" => $_POST['quantity']

            );

            $_SESSION['product'][] = $session_array;
        }
    } else {
        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "discount" => $_POST['discount'],
            "discount" => $_POST['discount'],
            "quantity" => $_POST['quantity']

        );

        $_SESSION['product'][] = $session_array;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/FE/assect/css/cart.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/FE/assect/fonts/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css">
</head>

<body>
    <div style="background: url('/FE/assect/img/bander/backgroud_product.jpg') top center / cover no-repeat; " id="main">
        <div id="box-content">
            <div class="  container-fluid">
                <?php

                $total = 0;

                $output = "";

                $output .= "
                            <table class='table table-bordered table-striped'> 
                                      <tr>
                                            
                                            <th>Tên Sản Phẩm </th>
                                            <th>Giá Bán</th>
                                            <th> Chiết Khấu</th>
                                            <th> Số Lượng </th>
                                            <th> Tổng Tiền </th>
                                            <th> 
                                            <a href='http://localhost:3000/FE/detail.php'>
                                            Them
                                        </a>
                                            </th>
                                        </tr>
                            ";


                if (!empty($_SESSION['product'])) {

                    foreach ($_SESSION['product'] as $key => $value) {

                        $output .= "
           
                                    <tr>
                                               
                                                <td>" . $value['name'] . "</td>
                                                <td>" . number_format($value['price'], 3) . "<sup>đ</sup></td>
                                                <td>" . $value['discount'] . "</td>
                                               
                                                <td>" . $value['quantity'] . "</td>
                                                <td>" . number_format($value['price'] * $value['quantity'], 3) . "<sup>đ</sup></td>
                                                <td>
                                               
                                            </tr>                             
                                    ";

                        $total = $total + $value['quantity'] * $value['price'];
                    }

                    $output .= "
                                     <tr>
                                            <td colspan='4'></td>
                                            <td><b>Tong Tien</b></td>
                                            <td>" . number_format($total, 3) . "<sup>đ</sup></td>

                                     </tr>
    
                                     ";
                }
                echo $output;
                ?>
                <div class='dulieu'>
                    <div class='bd-example'>
                        <h2 class='text-center'> Thanh Toán</h2>
                        <form action="/BE/product/inset.php" method='POST'>
                            <div class='form-row'>
                                <div class="col-md-4 mb-3">Tên Khách Hàng</label>
                                    <input type="text" name="name" class="inp-file form-control" id="validationCustom01" required>
                                </div>
                                <div class="col-md-4 mb-3">Tên SP</label>
                                    <input type="text"  value="<?= $value['name']?>" name="name" class="inp-file form-control" id="validationCustom01" required>
                                </div>

                            </div>
                            <div class="gr-end form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Số Điện Thoại</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="phone" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Địa Chỉ</label>
                                    <input type="text" class="inp-name form-control" id="validationCustom" name="diachi" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Tổng Tiền</label>
                                    <input type="" value="<?= number_format($total, 3) ?>" class="form-control" id="validationCustom03" name="total" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">Date</label>
                                    <input type="date" class="inp-vc form-control" id="validationCustom04" name="date" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">time</label>
                                    <input type="time" class="inp-vc form-control" id="validationCustom04" name="time">
                                </div>
                            </div>
                            <div class="">
                                <input class='btn btn-warning btn-block my-2' type='submit' name='in_hoa_don' value='In Hóa Đơn'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    <!-- right-header -->

    </div>
</body>