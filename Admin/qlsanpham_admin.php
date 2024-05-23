<?php
$connection = new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8", "root", "");
$query = "SELECT * FROM product";
//thực thi câu  truy vấn 
$stmt = $connection->prepare($query);
$stmt->execute();
//khai báo biến để nhận dữ liệu lấy ra 
$user = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/admin_trangchu.css" />
  <link rel="stylesheet" href="./icon/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <title>Quản lý sản phẩm</title>
</head>

<body>
  <div class="main">
    <div id="box-row">
      <!-- Header - Left -->
      <div id="box-header">
        <div id="header-list">
          <div class="menu-users">
            <img src="./img/avata.jpg" alt="" class="users-img" />
            <span class="users-name">Nhất Lẩu</span>
          </div>

          <!-- MENU-Header -->
          <div class="menu-direction">
            <!-- staff-->
            <div class="staff-users">
              <img src="./img/default-avatar.png" alt="" class="staff-img" />
              <span class="staff-text">Quản Lý </span>
            </div>

            <ul class="nav">
              <li>
                <a href="admin_trangchu.php">
                  <i class="fa-solid fa-house"></i>
                  <span class="text-item">Trang Chủ</span>
                </a>
              </li>

              <li>
                <a href="">
                  <i class="fa-solid fa-newspaper"></i>
                  <span class="text-item">Quản lý sản phẩm </span>
                </a>
              </li>
              <li>
                <a href="admin_qlnhanvien.php">
                  <i class="fa-solid fa-users"></i>
                  <span class="text-item">Quản lý nhân viên </span>
                </a>
              </li>
              <li>
                <a href="admin_qldoanhthu.php">
                  <i class="fa-solid fa-money-bill"></i>
                  <span class="text-item"> Quản lý doanh Thu </span>
                </a>
              </li>
              <li>
                <a href="admin_qlhoadon.php">
                  <i class="fa-solid fa-receipt"></i>
                  <span class="text-item"> Quản lý hóa đơn </span>
                </a>
              </li>
              <li>
                <a href="baocao.php">
                  <i class="fa-solid fa-chart-line"></i>
                  <span class="text-item">
                    Báo Cáo
                  </span>
                </a>
              </li>
              <li>
                <a href="admin_thietlap.php">
                  <i class="fa-solid fa-gears"></i>
                  <span class="text-item">Thiết Lập</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="overview">
        <div class="contenr-header">
          <div class="view-oder">
            <div class="oder-text">
              <i class="fa-solid fa-newspaper"></i>
              <p class="text-about">Quản lý sản phẩm</p>
            </div>
            <ul class="oder-nav">
              <li class="oder-nav-list">
                <a style="display: flex" href="">
                  <img src="./img/default-avatar.png" alt="" class="oder-nav-img" />
                  <p class="oder-nav-text">Quản Lý</p>
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
                  <i class="fa-solid fa-star" style="color: #e13d14"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="overview_7">
          <div class="overview_5-header">
            <div style="margin-top: 30px;" class="header-seach">
              <!-- <div class="title_seach">
                <span>Tìm kiếm sản phẩm </span>
              </div> -->
              <div class="button-saech1">
                <div class="seach1">
                  <input type=" Tìm kiếm " />
                  <button class="seach-btn1">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>
                <form action="/BE/product/add-form.php" method="POST">
                  <input type="submit" name="submit" value=" Add To Cart" class="new-button1">
                </form>
              </div>
            </div>
            <div class="body-seach">
              <div class="information">
                <h2> Bảng Danh Sách Sản Phẩm</h2>
              </div>
              <div class="data">
                <form id="cart-form" method="post" action="cart.php?id=<? echo $u['id'] ?>">
                  <table class="table-products">
                    <thead class="thead-dark">
                      <tr>
                        <!-- <th>#</th> -->
                        <th>id</th>
                        <th>Hinh</th>
                        <th>loại sản phẩm</th>
                        <th>Tên Sản Phẩm </th>
                        <th>Giá Bán</th>
                        <th> Chiết Khấu(%) </th>
                        <th></th>

                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($user as $u) : ?>
                        <tr>
                          <td><?php echo $u['id'] ?></td>
                          <td>
                            <img style="width: 120px;" src="/FE/assect/img/product/<?php echo $u['image']; ?>">
                          </td>
                          <td><?php echo $u['product_gr'] ?></td>
                          <td><?php echo $u['name'] ?></td>
                          <td><?php echo number_format($u['price'], 3); ?><sup>đ</sup></td>
                          <td><?php echo $u['discount'] ?></td>
                          <td>
                            <a href="/BE/product/update-form.php?id=<?php echo $u['id'] ?>">Sửa</a> | <a href="/BE/product/delete-update.php?id=<?php echo $u['id'] ?>">Xóa</a>
                          </td>

                        </tr>
                      <?php endforeach ?>

                    </tbody>
                  </table>
                </form>
              </div>
              <div class="nb_pages">
                <span> Số mục mỗi trang </span>
                <div class="number">
                  <div class="number-page"><button>1</button></div>
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
</body>