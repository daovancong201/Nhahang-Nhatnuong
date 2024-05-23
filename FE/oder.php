<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODER</title>
    <link rel="stylesheet" href="/FE/assect/css/styles.css">
    <link rel="stylesheet" href="/FE/assect/fonts/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css">
</head>

<body>
    <?php
    //chuỗi kết nối đến CSDl
    $connection = new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8", "root", "");

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
    <div id="mani">
        <div id="box-row">
            <!-- Header - Left -->
            <div id="box-header">
                <div id="header-list">
                    <div class="menu-users">
                        <img src="/FE/assect/img/users/avata.jpg" alt="" class="users-img">
                        <span class="users-name">Nhất Lẩu</span>
                    </div>

                    <!-- MENU-Header -->
                    <div class="menu-direction">
                        <!-- staff-->
                        <div class="staff-users">
                            <img src="/FE/assect/img/users/default-avatar.png" alt="" class="staff-img">
                            <span class="staff-text">Nhân Viên</span>
                        </div>

                        <ul class="nav">
                            <li>
                                <a href="/FE/index.php">
                                    <i class="fa-solid fa-house"></i>
                                    <span class="text-item">Trang Chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-newspaper"></i>
                                    <span class="text-item">Oder</span>
                                </a>
                            </li>
                            <li>
                                <a href="khachhang.php">
                                    <i class="fa-solid fa-users"></i>
                                    <span class="text-item">Khách Hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span class="text-item">
                                        Tổng Doanh Thu
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <span class="text-item">
                                        Báo Cáo
                                    </span>


                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-gears"></i>
                                    <span class="text-item">Thiết Lập</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Content-right -->

            <div id="box-content">
                <!-- right-header -->
                <div class="contenr-header">
                    <div class="view-oder">
                        <div class="oder-text">
                            <i class="fa-solid fa-newspaper"></i>
                            <p class="text-about">ODER</p>
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

                <!-- right-content -->
                <div class="contenr-product">
                    <div class="mani-content">
                        <div class="container-bulin">
                            <div class="product">
                                <h2 class="about-conten"> Đặt Bàn </h2>
                                <div class="product-content">
                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 4</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>
                                    </a>

                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 3</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>
                                    </a>

                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 2</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>
                                    </a>

                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 1</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>
                                    </a>


                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 5</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>

                                    </a>


                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 6</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>
                                    </a>


                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 7</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>

                                    </a>


                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 8</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>

                                    </a>


                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 12</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>

                                    </a>


                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 11</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>

                                    </a>


                                    <a href="detail.phpdetail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 10</p>
                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">
                                        </div>
                                    </a>


                                    <a href="detail.php">
                                        <div class="imgae-oder">
                                            <p class="text-oder">Bàn Số 9</p>

                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">

                                        </div>

                                    </a>

                                    <!-- <div class="imgae-oder">
                                        <p class="text-oder">Bàn Số 13</p>
                                        <a href="">
                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">
                                        </a>
                                    </div>
                                    <div class="imgae-oder">
                                        <p class="text-oder">Bàn Số 14</p>
                                        <a href="">
                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">
                                        </a>
                                    </div>
                                    <div class="imgae-oder">
                                        <p class="text-oder">Bàn Số 15</p>
                                        <a href="">
                                            <img class="img-jpg" src="/FE/assect/img/product/ban.jpg">
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>