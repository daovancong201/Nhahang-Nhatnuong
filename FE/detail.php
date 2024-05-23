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
    <div id="mani">
        <div id="box-content">
            <!-- right-header -->
            <div class="contenr-header">
                <div class="view-oder">
                    <div class="oder-text">
                        <p class="text-about">PAY THE BILL</p>
                    </div>
                </div>
            </div>

            <div class="product-conter container-fluid">
                <div class="col-md-12">
                    <div class="row">

                        <div class="cart-bill col-md-6">
                            <h2 class="text-center" style="font-weight: 400;">ODER BILL</h2>
                            <div class="input-group">
                                <div class="form-outline">
                                    <input style="width: 350px;" name="search" value="Search" type="search" id="form1" class="form-control search-input" />
                                </div>
                                <button style="height: 38px; margin-left: -3px;" type="button" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php


                                    $query = "SELECT * FROM product";
                                    $result = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <div style="margin-bottom: 22px; border-bottom: 1px solid;border-left: 1px solid;border-right: 1px solid" class="col-md-4">
                                            <form method="POST" action="detail.php?id=<?= $row['id'] ?>">
                                                <img src="/FE/assect/img/product/<?= $row['image'] ?>" style='width: 200px;height: 150px;'>
                                                <h5 class="text-center"><?= $row['name']; ?></h5>
                                                <h5 class="text-center"><?= number_format($row['price'], 3) ?><sup>đ</sup></h5>
                                                <h5 style="color: red;" class="text-center"><?= $row['discount']; ?></h5>
                                                <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                                <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                                <input type="hidden" name="discount" value="<?= $row['discount'] ?>">
                                                <input type="number" name="quantity" value="1" class="form-control text-center">
                                                <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value=" Add To Cart">

                                            </form>
                                        </div>
                                                


                                    <?php }



                                    ?>

                                </div>
                            </div>

                        </div>

                        <div class="pay-bill col-md-6">
                            <h2 class="text-center" style="font-weight: 400;">PAY BILL</h2>
                            <?php

                            $total = 0;

                            $output = "";

                            $output .= "
                            <table class='table table-bordered table-striped'> 
                                      <tr>
                                            <th>id</th>
                                            <th>Tên Sản Phẩm </th>
                                            <th>Giá Bán</th>
                                            <th> Chiết Khấu</th>
                                            <th> Số Lượng </th>
                                            <th> Tổng Tiền </th>
                                            <th>  </th>
                                        </tr>
                            ";


                            if (!empty($_SESSION['product'])) {

                                foreach ($_SESSION['product'] as $key => $value) {
                                    

                                    $output .= "
                                    
                                    <tr>
                                                <td>" . $value['id'] . "</td>
                                                <td>" . $value['name'] . "</td>
                                                <td>" . number_format($value['price'],3). "<sup>đ</sup></td>
                                                <td>" . $value['discount'] . "</td>
                                                <td>" . $value['quantity'] . "</td>
                                                <td>" . number_format($value['price'] * $value['quantity'], 3) . "<sup>đ</sup></td>
                                                <td>
                                                <a href='detail.php?action=remove&id=" . $value['id'] . "'>
                                                <button class='btn btn-danger btn-block'> Xóa </button> 
                                                </a>
                                                </td>
                                            </tr>

                                    ";

                                    $total = $total + $value['quantity'] * $value['price'];
                                }

                                $output .= "
                                     <tr>
                                            <td colspan='4'></td>
                                            <td><b>Tổng Tiền</b></td>
                                            <td>" . number_format($total, 3) . "<sup>đ</sup></td>
                                            <td>
                                                <a href='detail.php?action=clearall'>
                                                    <button class='btn btn-danger btn-block'> Clear </button> 
                                                </a>
                                            </td>
    
    
    
                                     </tr>
    
                                     ";
                            }
                            echo $output;
                            ?>


                        </div>
                    </div>
                    <form action='oder_detail.php' method='POST'>
                        <input class='btn btn-warning btn-block my-2' type='submit' name='thanh_toan' value='Thanh Toán'>
                    </form>
                </div>

            </div>
            <?php
            if (isset($_GET['action'])) {

                if ($_GET['action'] == "clearall") {
                    unset($_SESSION['product']);
                }

                if ($_GET['action'] == "remove") {
                    foreach ($_SESSION['product'] as $key => $value) {
                        if ($value['id'] == $_GET['id']) {
                            unset($_SESSION['product'][$key]);
                        }
                    }
                }
            }
            ?>

        </div>
    </div>

</body>

</html>