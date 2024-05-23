<?php
$connection = new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8", "root", "");
$query = "SELECT * FROM  oder_product nhanvien";
//thực thi câu  truy vấn 
$stmt = $connection->prepare($query);
$stmt->execute();
//khai báo biến để nhận dữ liệu lấy ra 
$user = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Khách hàng </title>
    <link rel="stylesheet" href="./assect/css/khachhang.css">
    <link rel="stylesheet" href="./assect/fonts/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <div id="mani">
        <div id="box-row">
            <!-- Header - Left -->
            <div id="box-header">
                <div id="header-list">
                    <div class="menu-users">
                        <img src="./assect/img/users/avata.jpg" alt="" class="users-img">
                        <span class="users-name">Nhất Lẩu</span>
                    </div>

                    <!-- MENU-Header -->
                    <div class="menu-direction">
                        <!-- staff-->
                        <div class="staff-users">
                            <img src="./assect/img/users/default-avatar.png" alt="" class="staff-img">
                            <span class="staff-text">Nhân Viên</span>
                        </div>

                        <ul class="nav">
                            <li>
                                <a href="index.php">
                                    <i class="fa-solid fa-house"></i>
                                    <span class="text-item">Trang Chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="oder.php">
                                    <i class="fa-solid fa-newspaper"></i>
                                    <span class="text-item">Oder</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
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
                <div class="contenr-header">
                    <div class="view-oder">
                        <div class="oder-text">
                            <i class="fa-solid fa-newspaper"></i>
                            <p class="text-about">KHÁCH HÀNG</p>
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
                <div class="content_overview_7_1">
                <div class="header-seach">
                    <div class="title_seach">
                        <span>Tìm kiếm tên khách hàng </span>
                    </div>
                    <div class="button-saech1">
                        <div class="seach1">
                            <input type=" Tìm kiếm ">
                            <button class="seach-btn1">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                        <button class="new-button1">
                            <i class="fa-solid fa-plus"></i>
                            Thêm mới </button>
                    </div>
                </div>
                <div class="body-seach">
                    <!-- <div class="information">
                        <ul>
                            <li>
                                <input type="checkbox">
                            </li>
                            <li>
                                <span>#</span>
                            </li>
                            <li>
                                <span>Tên nhóm khách lẻ </span>
                            </li>
                            <li>
                                <span>Mã đăng ký </span>
                            </li>
                            <li>
                                <span>VAT</span>
                            </li>
                            <li>
                                <span>Ghi chú </span>
                            </li>
                            <li>
                                <span>Thao tác </span>
                            </li>
                        </ul>
                    </div> -->
                    <div class="data">
                    <form id="cart-form" method="post" action="cart.php?id=<? echo $u['id'] ?>">
                  <table class="table-products">
                    <thead class="thead-dark">
                      <tr>
                        <!-- <th>#</th> -->
                        <th>id</th>
                        <th>Họ Và Tên</th>
                        <th>Số Điện Thoại</th>
                        <th>Quê Quán</th>
                        <th>Giờ thanh toán</th>
                        <th>Tiền đã thanh toán</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($user as $u) : ?>
                        <tr>
                          <td><?php echo $u['id'] ?></td>
                          <td><?php echo $u['name'] ?></td>
                          <td><?php echo $u['phone'] ?></td>
                          <td><?php echo $u['diachi'] ?></td>
                          <td><?php echo $u['date'] ?></td>
                          <td><?php echo $u['total'] ?></td>

                        </tr>
                      <?php endforeach ?>

                    </tbody>
                  </table>
                </form>
                    </div>
                    <div class="nb_pages">
                        <span> Số mục mỗi trang </span>
                        <div class="number">
                            <div class="number-page"> <button>1</button>
                            </div>
                            <ul>
                                <li><button>2</button></li>
                                <li><button>3</button></li>
                                <li><button>4</button></li>
                                <li><button>5</button></li>
                            </ul>
                        </div>
                        <span class="number-show">0 trên 0</span>
                        <div class="icon">
                            <i class="fa-solid fa-angles-left"></i>
                            <i class="fa-solid fa-angle-left"></i>
                            <i class="fa-solid fa-angle-right"></i>
                            <i class="fa-solid fa-angles-right"></i>

                        </div>
                    </div>
                </div>
            </div>
            </div>
                
            </div>
            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("#myID", {});
        </script>

</body>

</html>