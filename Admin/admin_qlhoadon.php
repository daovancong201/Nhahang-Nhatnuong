<?php
$connection = new PDO("mysql:host=127.0.0.1;dbname=nhatlaudata;charset=utf8", "root", "");
$query = "SELECT * FROM  hoadon";
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
    <link
      rel="stylesheet"
      href="./icon/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://fnb.dktcdn.net/dev/app/css/main.css?v=a97306b4"
    />
    <title>Quản lý hóa</title>
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
                <a href="qlsanpham_admin.php">
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
                <p class="text-about">Quản lý hóa đơn</p>
              </div>
              <ul class="oder-nav">
                <li class="oder-nav-list">
                  <a style="display: flex" href="">
                    <img
                      src="./img/default-avatar.png"
                      alt=""
                      class="oder-nav-img"
                    />
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
          <div class="overview_10">
            <div class="body-overview_10">
              <div class="ui-layout__section">
                <div class="ui-layout__item pt-0">
                  <div class="ui-card">
                    <div id="filterAndSavedSearch">
                      <div
                        class=""
                        style="
                          justify-content: space-between;
                          border-bottom: 1px solid rgb(223, 228, 232);
                          display: flex;
                        "
                      >
                        <ul
                          class="next-tab__list filter-tab-list"
                          style="overflow: auto hidden; border-bottom: none"
                        >
                          <li class="filter-tab-item">
                            <span
                              class="filter-tab next-tab filter-tab-active show-all-items next-tab--is-active"
                              >Tất cả hóa đơn</span
                            >
                          </li>
                          <li id="combo-paid" class="filter-tab-item">
                            <span
                              class="filter-tab next-tab filter-tab-active show-all-items"
                              >Đã thanh toán</span
                            >
                          </li>
                          <li id="combo-cancelled" class="filter-tab-item">
                            <span
                              class="filter-tab next-tab filter-tab-active show-all-items"
                              >Đã hủy</span
                            >
                          </li>
                          <li id="combo-refunded" class="filter-tab-item">
                            <span
                              class="filter-tab next-tab filter-tab-active show-all-items"
                              >Hoàn tiền toàn bộ</span
                            >
                          </li>
                          <li
                            id="combo-partially_refunded"
                            class="filter-tab-item"
                          >
                            <span
                              class="filter-tab next-tab filter-tab-active show-all-items"
                              >Hoàn tiền một phần</span
                            >
                          </li>
                          <li id="combo-unpaid" class="filter-tab-item">
                            <span
                              class="filter-tab next-tab filter-tab-active show-all-items"
                              >Chờ xác nhận thanh toán</span
                            >
                          </li>
                        </ul>
                        <div
                          class=""
                          style="
                            display: flex;
                            align-items: center;
                            margin-right: 10px;
                          "
                        >
                          <span
                            class="filter-tab"
                            style="color: rgb(0, 136, 255); cursor: pointer"
                            >Tùy chỉnh hiển thị</span
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="empty-search-results"
                      illustration="next-discounts-detailed"
                    >
                    <div class="data">
                    <form id="cart-form" method="post" action="cart.php?id=<? echo $u['id'] ?>">
                  <table class="table-products">
                    <thead class="thead-dark">
                      <tr>
                        <!-- <th>#</th> -->
                        <th>Mã Hóa Đơn</th>
                        <th>Số Lựong</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Tổng Tièn</th>
                        
                    </thead>

                    <tbody>
                      <?php foreach ($user as $u) : ?>
                        <tr>
                          <td><?php echo $u['mahoadon'] ?></td>
                          <td><?php echo $u['quantity'] ?></td>
                          <td><?php echo $u['date'] ?></td>
                          <td><?php echo $u['time'] ?></td>
                          <td><?php echo $u['total'] ?></td>

                        </tr>
                      <?php endforeach ?>

                    </tbody>
                  </table>
                </form>
                    </div>
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
