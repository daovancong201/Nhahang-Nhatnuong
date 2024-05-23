<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/admin_trangchu.css">
  <link rel="stylesheet" href="./icon/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title >Trang Chủ </title>
</head>

<body>
  <div class="main">
    <div id="box-row">
      <!-- Header - Left -->
      <div id="box-header">
        <div id="header-list">
          <div class="menu-users">
            <img src="./img/avata.jpg" alt="" class="users-img">
            <span class="users-name">Nhất Lẩu</span>
          </div>

          <!-- MENU-Header -->
          <div class="menu-direction">
            <!-- staff-->
            <div class="staff-users">
              <img src="./img/default-avatar.png" alt="" class="staff-img">
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
                  <span class="text-item">
                    Quản lý doanh Thu
                  </span>
                </a>
              </li>
              <li>
                <a href="admin_qlhoadon.php">
                  <i class="fa-solid fa-receipt"></i>
                  <span class="text-item">
                    Quản lý hóa đơn
                  </span>
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
              <p class="text-about">HOME</p>
            </div>
            <ul class="oder-nav">
              <li class="oder-nav-list">
                <a style="display: flex;" href="">
                  <img src="./img/default-avatar.png" alt="" class="oder-nav-img">
                  <p class="oder-nav-text">Quản Lý </p>
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

        <div class="overview_7">
          <div class="overview_5">
            <div class="synthetic">
              <div class="synthetic_title">
                <span class="synthetic_title-1"> Kết quả kinh doanh trong ngày</span>
              </div>
              <div class="synthetic_title_2">
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-solid fa-sack-dollar"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1"> Doanh thu </span>
                    <span> 6.250.000 </span>
                  </div>
                </div>
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-solid fa-box-archive"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1"> Đơn hàng mới </span>
                    <span> 10 </span>
                  </div>
                </div>
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-sharp fa-solid fa-box-open"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1"> Đơn trả hàng </span>
                    <span> 1 </span>
                  </div>
                </div>
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-solid fa-boxes-packing"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1"> Đơn hủy </span>
                    <span> 0 </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="synthetic_2">
              <div class="synthetic_header">
                <div class="synthetic_header_1">
                  <a href=""><span> Doanh thu bán hàng </span></a>
                  <a href=""> <span> Tỷ trọng bán hàng </span></a>
                </div>
                <div class="synthetic_header_2">
                  <div class="synthetic_header-nav1">
                    <ul><span> 7 ngày qua </span>
                      <i class="fa-sharp fa-solid fa-caret-down"></i>
                      <div class="synthetic_header-nav-list">
                        <li> 14 ngày qua </li>
                        <li> 28 ngày qua </li>
                      </div>
                    </ul>
                  </div>
                  <div class="synthetic_header-nav2">
                    <ul><span> Tất cả chi nhánh </span>
                      <i class="fa-sharp fa-solid fa-caret-down"></i>
                      <div class="synthetic_header-nav-list">
                        <li> Chi nhánh 1 </li>
                        <li> Chi nhánh 2 </li>
                        <li> Chi nhánh 3 </li>

                      </div>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            <!-- bieẻu đồ viết ở đây  -->
            <div>
              <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
              const ctx = document.getElementById('myChart');

              new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['6/4', '7/4', '8/4', '9/4', '10/4', '11/4'],
                  datasets: [{
                    label: '# of Votes',
                    data: [56000000, 25600000, 14600000, 20000000, 60700000, 10000000],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
            </script>
            <!-- kết thuc biểu dồ  -->
          </div>
          <div class="synthetic_img">
            <img src="./img/lau1.png" alt="">
            <img src="./img/lau2.jpg" alt="">
            <img src="./img/lau3.jpg" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>