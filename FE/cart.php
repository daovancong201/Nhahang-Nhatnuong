<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/FE/assect/css/cart.css">
</head>

<body>
    <?php
    // session_start();
    //chuỗi kết nối đến CSDl
    $connection = new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8", "root", "");

    // if (isset($_POST['add_to_cart'])) {
    //     if (isset($_SESSION['cart'])){

    //     }else{
    //         $sessiion_array = array(
    //             'image' => $_POST['image'],
    //             "name"  => $_POST['name'],
    //             "price" => $_POST['price'],
    //             "quantity" =>$_POST['quantity']
    //         );
    //         $_SESSION['cart'][] = $sessiion_array;
    //     }
    // }

    ?>
    <div id="mani">
        <div id="box-content">
            <!-- right-header -->
            <div class="contenr-header">
                <div class="view-oder">
                    <div class="oder-text">
                        <i class="fa-solid fa-newspaper"></i>
                        <p class="text-about">PAY THE BILL</p>
                    </div>
                    <ul class="oder-nav">
                        <li class="oder-nav-list">
                            <a style="display: flex;" href="">
                                <img src="/FE/assect/img/users/default-avatar.png" alt="" class="oder-nav-img">
                                <p class="oder-nav-text">Nhân Viên</p>
                            </a>
                        </li>
                        <li class="oder-nav-list">
                            <a href="">
                                <i class="circle-icon fa-solid fa-circle-question"></i>
                                Góp ý
                            </a>
                        </li>
                        <li class="oder-nav-list">
                            <a href="#">
                                <i class="fa-solid fa-bell"></i>
                            </a>
                        </li>
                        <li class="oder-nav-list">
                            <a href="#">
                                <i class="fa-solid fa-star" style="color: #e13d14;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="oder-pay">
                <div id="box-oder">
                    <div class="menu-oder">
                        <div class="menu-oder-text">
                            <h2 class="text-about">ODER BILL</2>
                        </div>
                        <div class="database">

                            <?php
                            //câu truy vấn
                            $query = "SELECT * FROM product";
                            //thực thi câu  truy vấn 
                            $stmt = $connection->prepare($query);
                            $stmt->execute();
                            //khai báo biến để nhận dữ liệu lấy ra 
                            $user = $stmt->fetchAll();
                            //Test thử dữ  liệu có lấy được k 
                            // var_dump($user);
                            ?>
                            <form id="cart-form" method="post" action="cart.php?id=<? echo $u['id'] ?>">
                                <table class="table-products">
                                    <thead class="thead-dark">
                                        <tr>
                                            <!-- <th>#</th> -->
                                            <th>Hinh</th>
                                            <th>Tên Sản Phẩm </th>
                                            <th>Giá Bán</th>
                                            <th> Chiết Khấu(%) </th>
                                            <th> Số Lượng </th>
                                            <th> </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($user as $u) : ?>
                                            <tr>
                                                <!-- <td><?php echo $u['id'] ?></td> -->
                                                <td>
                                                    <img style="width: 120px;" src="/FE/assect/img/product/<?php echo $u['image'] ?>">

                                                </td>
                                                <td><?php echo $u['name'] ?></td>
                                                <td><?php echo $u['price'] ?></td>
                                                <td><?php echo $u['discount'] ?></td>

                                                <input type="hidden" name="name" value="<? echo $u['name'] ?>" />


                                                <input type="hidden" name="name" value="<? echo $u['price'] ?>" />

                                                <td><input class="input-style" type="number" value="1" min="0" name="quantity"></td>
                                                <td>
                                                    <input class="button-oder" type="submit" name="add_to_cart" value="cart" />
                                                </td>

                                            </tr>
                                        <?php endforeach ?>

                                    </tbody>
                                </table>
                            </form>
                        </div>

                    </div>
                </div>

                <div id="box-pay">
                    <div class="pay-content">
                        <div class="pay">
                            <div class="menu-oder-text">
                                <h2 class="text-about">PAY BILL</2>
                            </div>
                        </div>

                        <div class="cart">
                            <form action="">
                                <table class="table">
                                    <!-- <?php
                                            var_dump($_SESSION['cart']);
                                            ?> -->
                                    <!-- <thead class="table-cart">
                                        <tr>
                                            <th>Image</th>
                                            <th>Sản Phẩm</th>
                                            <th>Giá</th>
                                            <th>Số Lượng</th>
                                            <th>###</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img style="width: 100px;" src="/FE/assect/img/product/lau-rieu-cua-bap-bo.jpeg"></td>
                                            <td>Lẩu riêu cua 1</td>
                                            <td>
                                                <p><span>199.000</span><sup>đ</sup></p>
                                            </td>
                                            <td><input class="input-style" type="number" value="1" min="0" name="quantity[1]"></td>
                                            <td class="delete">
                                                <button class="button-oder">
                                                    Xóa
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img style="width: 100px;" src="/FE/assect/img/product/lau-rieu-cua-bap-bo.jpeg"></td>
                                            <td>Lẩu riêu cua 2</td>
                                            <td>
                                                <p><span>199.000</span><sup>đ</sup></p>
                                            </td>
                                            <td><input class="input-style" type="number" value="1" min="0" name="quantity[2]"></td>
                                            <td class="delete">
                                                <button class="button-oder">
                                                    Xóa
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="price-total">

                                            <td><b>Tổng Tiền</b></td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <p><span>199.000</span><sup>đ</sup></p>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td class="delete">
                                                <!-- <button class="button-oder">
                                                    Xóa
                                                </button> -->
                                    </td>
                                    </tr>
                                    </tbody> -->
                                </table>

                                <div class="update-click">
                                    <input type="submit" name="update-click" value="Update" />
                                </div>
                                <hr>
                                <div class="oder-click">
                                    <input type="submit" name="oder-click" value="Mua Hàng" />
                                </div>
                                <!-- <div class="price-total">
                                    <p>Tổng Tiền:<span>199.000</span><sup>đ</sup></p>
                                </div> -->
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- <script src="/FE/assect/js/cart.js"> -->

    </script>
</body>

</html>