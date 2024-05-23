<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/khachhang.css" />
    <link
      rel="stylesheet"
      href="./icon/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
  </head>
  <body>
    <div id="mani">
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
                <img src="./img/avata.jpg" alt="" class="staff-img" />
                <span class="staff-text">Quản lý</span>
              </div>

              <ul class="nav">
                <li>
                  <a href="">
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

        <!-- Content-right -->
        <div id="box-content">
          <div class="content">
            <div class="content_overview_10">
              <!-- thanh tong quan  -->
              <div class="overview_header">
                <span>Tổng quan</span>
              </div>
              <ul class="overview_header-list">
                <li class="overview_header_user">
                  <i class="fa-solid fa-dollar-sign"></i>
                  <span>Vay vốn kinh doanh </span>
                </li>
                <li class="overview_header_user">
                  <i class="fa-solid fa-circle-question"></i>
                  <span> Hỗ trợ </span>
                </li>
                <li class="overview_header_user">
                  <i class="fa-solid fa-dollar-sign"></i>
                  <span> Góp ý </span>
                </li>
                <li class="overview_header_user">
                  <img
                    class="overview_header_avatar"
                    src="./img/avata.jpg"
                    alt=""
                  />
                  <h3>Tên nhân viên</h3>
                  <i
                    class="overview_header_icon fa-sharp fa-solid fa-caret-down"
                  ></i>
                </li>
                <li class="overview_header_user">
                  <i class="fa-solid fa-bell"></i>
                </li>
              </ul>
            </div>
            <!-- viết thanh tiếp theo  -->
          </div>
          <div class="content_report">
            <div class="content_report-title">
              <span>BÁO CÁO TỔNG QUAN</span>
            </div>
            <div class="content_report-time">
              <div class="content_report-day">
                <i class="fa-solid fa-calendar-days"></i>
                <input id="myID" placeholder="Ngày tính " />
              </div>
              <div class="content_report-day">
                <i class="fa-solid fa-calendar-days"></i>
                <input id="myID" placeholder="Đến ngày " />
              </div>
            </div>
          </div>
          <div class="synthetic_mama">
            <div class="synthetic">
              <div class="synthetic_title">
                <span class="synthetic_title-1">
                  Kết quả kinh doanh trong ngày</span
                >
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
              <div class="synthetic_title_3">
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-solid fa-user"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1">
                      Tổng khách mới
                    </span>
                    <span> 6.250.000 </span>
                  </div>
                </div>
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-regular fa-dollar-sign"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1">
                      Lợi nhuận khách mới
                    </span>
                    <span> 10 </span>
                  </div>
                </div>
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-sharp fa-solid fa-comment-dollar"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1"> Tổng thu </span>
                    <span> 1 </span>
                  </div>
                </div>
                <div class="synthetic_informatinon">
                  <div class="synthetic_informatinon-icon">
                    <i class="fa-sharp fa-solid fa-hand-holding-dollar"></i>
                  </div>
                  <div class="synthetic_informatinon-parameter">
                    <span class="informatinon-parameter-1"> Tổng chi </span>
                    <span> 0 </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="chart">
            <div>
              <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
              const ctx = document.getElementById("myChart");

              new Chart(ctx, {
                type: "bar",
                data: {
                  labels: ["6/4", "7/4", "8/4", "9/4", "10/4", "11/4"],
                  datasets: [
                    {
                      label: "# of Votes",
                      data: [
                        56000000, 25600000, 14600000, 20000000, 60700000,
                        10000000,
                      ],
                      borderWidth: 1,
                    },
                  ],
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true,
                    },
                  },
                },
              });
            </script>
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
