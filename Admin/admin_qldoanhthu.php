<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/admin_trangchu.css">
  <link rel="stylesheet" href="./icon/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://fnb.dktcdn.net/dev/app/css/main.css?v=a97306b4" />
  <title>Quản Lý Doanh Thu</title>
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
              <p class="text-about">Quản lý doanh thu</p>
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
            <div class="text-blod ui_overview_report border-r-3">
              <div class="item_overview">
                <div data-tip="" data-for="cal" class="fl_line" currentitem="false">
                  <div class="icon_item_report">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M23.5 7.5L22 6L20.5 7.5L19 6L17.5 7.5L16 6L14.5 7.5L13 6L11.5 7.5L10 6V20H7V23C7 24.66 8.34 26 10 26H22C23.66 26 25 24.66 25 23V6L23.5 7.5ZM23 23C23 23.55 22.55 24 22 24C21.45 24 21 23.55 21 23V20H12V9H23V23Z" fill="#A3A8AF"></path>
                      <path d="M19 11H13V13H19V11Z" fill="#A3A8AF"></path>
                      <path d="M22 11H20V13H22V11Z" fill="#A3A8AF"></path>
                      <path d="M19 14H13V16H19V14Z" fill="#A3A8AF"></path>
                      <path d="M22 14H20V16H22V14Z" fill="#A3A8AF"></path>
                      <rect opacity="0.18" width="32" height="32" rx="3" fill="#A3A8AF"></rect>
                    </svg>
                  </div>
                  <div class="wraper_item_report">
                    <div class="text-a">Tổng số hóa đơn</div>
                    <div><span class="fs-20">0 </span></div>
                  </div>
                  <div class="__react_component_tooltip place-top type-dark" id="cal" data-id="tooltip"></div>
                </div>
              </div>
              <div class="item_overview">
                <div data-tip="" data-for="cal" class="fl_line" currentitem="false">
                  <div class="icon_item_report">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.18" width="32" height="32" rx="3" fill="#A3A8AF"></rect>
                      <path d="M10 23C10 24.1 10.9 25 12 25H20C21.1 25 22 24.1 22 23V11H10V23ZM12.46 15.88L13.87 14.47L16 16.59L18.12 14.47L19.53 15.88L17.41 18L19.53 20.12L18.12 21.53L16 19.41L13.88 21.53L12.47 20.12L14.59 18L12.46 15.88ZM19.5 8L18.5 7H13.5L12.5 8H9V10H23V8H19.5Z" fill="#A3A8AF"></path>
                    </svg>
                  </div>
                  <div class="wraper_item_report">
                    <div class="text-a">Số hóa đơn hủy</div>
                    <div><span class="fs-20">0 </span></div>
                  </div>
                  <div class="__react_component_tooltip place-top type-dark" id="cal" data-id="tooltip"></div>
                </div>
              </div>
              <div class="item_overview">
                <div data-tip="" data-for="cal" class="fl_line" currentitem="false">
                  <div class="icon_item_report">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.18" width="32" height="32" rx="3" fill="#A3A8AF"></rect>
                      <path d="M22.06 26.99H23.72C24.56 26.99 25.25 26.35 25.35 25.53L27 9.05H22V5H20.03V9.05H15.06L15.36 11.39C17.07 11.86 18.67 12.71 19.63 13.65C21.07 15.07 22.06 16.54 22.06 18.94V26.99ZM5 25.99V25H20.03V25.99C20.03 26.54 19.58 26.99 19.02 26.99H6.01C5.45 26.99 5 26.54 5 25.99ZM20.03 18.99C20.03 10.99 5 10.99 5 18.99H20.03ZM5.02 21H20.02V23H5.02V21Z" fill="#A3A8AF"></path>
                    </svg>
                  </div>
                  <div class="wraper_item_report">
                    <div class="text-a">Số lượng mặt hàng</div>
                    <div><span class="fs-20">0 </span></div>
                  </div>
                  <div class="__react_component_tooltip place-top type-dark" id="cal" data-id="tooltip"></div>
                </div>
              </div>
              <div class="item_overview">
                <div data-tip="" data-for="cal" class="fl_line" currentitem="false">
                  <div class="icon_item_report">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.18" width="32" height="32" rx="3" fill="#A3A8AF"></rect>
                      <path d="M6 21H26V23H6V21ZM17.84 11.79C17.94 11.55 18 11.28 18 11C18 9.9 17.1 9 16 9C14.9 9 14 9.9 14 11C14 11.28 14.06 11.55 14.16 11.79C10.25 12.6 7.27 15.93 7 20H25C24.73 15.93 21.75 12.6 17.84 11.79Z" fill="#A3A8AF"></path>
                    </svg>
                  </div>
                  <div class="wraper_item_report">
                    <div class="text-a">TB mặt hàng/ HĐ</div>
                    <div><span class="fs-20">-- </span></div>
                  </div>
                  <div class="__react_component_tooltip place-top type-dark" id="cal" data-id="tooltip"></div>
                </div>
              </div>
              <div class="item_overview">
                <div data-tip="" data-for="cal" class="fl_line" currentitem="false">
                  <div class="icon_item_report">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.18" width="32" height="32" rx="3" fill="#A3A8AF"></rect>
                      <path d="M16 6C10.48 6 6 10.48 6 16C6 21.52 10.48 26 16 26C21.52 26 26 21.52 26 16C26 10.48 21.52 6 16 6ZM17.41 22.09V24H14.74V22.07C13.03 21.71 11.58 20.61 11.47 18.67H13.43C13.53 19.72 14.25 20.54 16.08 20.54C18.04 20.54 18.48 19.56 18.48 18.95C18.48 18.12 18.04 17.34 15.81 16.81C13.33 16.21 11.63 15.19 11.63 13.14C11.63 11.42 13.02 10.3 14.74 9.93V8H17.41V9.95C19.27 10.4 20.2 11.81 20.26 13.34H18.3C18.25 12.23 17.66 11.47 16.08 11.47C14.58 11.47 13.68 12.15 13.68 13.11C13.68 13.95 14.33 14.5 16.35 15.02C18.37 15.54 20.53 16.41 20.53 18.93C20.52 20.76 19.15 21.76 17.41 22.09Z" fill="#A3A8AF"></path>
                    </svg>
                  </div>
                  <div class="wraper_item_report">
                    <div class="text-a">TB doanh thu/ HĐ</div>
                    <div><span class="fs-20">-- ₫</span></div>
                  </div>
                  <div class="__react_component_tooltip place-top type-dark" id="cal" data-id="tooltip"></div>
                </div>
              </div>
            </div>
            <div class="chart">
              <div class="title-chart">
                <span>Doanh thu theo ngày <i class="fa-solid fa-chevron-down"></i></span>
              </div>
              <div>
                <canvas id="myChart"></canvas>
              </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <script>
                const ctx = document.getElementById("myChart");

                new Chart(ctx, {
                  type: "bar",
                  data: {
                    labels: [
                      "6/4",
                      "7/4",
                      "8/4",
                      "9/4",
                      "10/4",
                      "11/4",
                      "12/4",
                      "13/4",
                    ],
                    datasets: [{
                      label: "# of Votes",
                      data: [
                        56000000, 25600000, 14600000, 20000000, 60700000,
                        10000000, 25600000, 25600000,
                      ],
                      borderWidth: 1,
                    }, ],
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
            <table id="price-rule-table" class="price-rule-table-report table-hover price-rule-table__cr-d bulk-action-context expanded">
              <thead>
                <tr>
                  <th class="column-fix"><span>Thứ</span></th>
                  <th><span>Ngày</span></th>
                  <th class="tr"><span>Tiền hàng</span></th>
                  <th class="tr"><span>Tiền hủy</span></th>
                  <th class="tr"><span>Tiền hoàn</span></th>
                  <th data-tip="Giảm giá = Tổng khuyến mại + Tổng chiết khấu + Tổng giảm giá mặt hàng + Tổng quy đổi điểm" data-for="cal2" class="tr" currentitem="false"></th>
                  <th class="tr"><span>Thuế</span></th>
                  <th class="tr"><span>Phí dịch vụ</span></th>
                  <th class="tr"><span>Tiền tip</span></th>
                  <th data-tip="Doanh thu = Tiền hàng - Tiền hủy - Tiền hoàn - Giảm giá + Phí dịch vụ + Phí giao hàng" data-for="cal2" class="tr" currentitem="false">
                    <span>Doanh thu</span>
                  </th>
                  <th data-tip="Doanh thu gồm thuế = Doanh thu + Thuế" data-for="cal2" class="tr" currentitem="false">
                    <span>Doanh thu gồm thuế</span>
                  </th>
                  <th data-tip="Tổng tiền = Doanh thu gồm thuế - Tiền trả DTGH + Tiền tip" data-for="cal22" class="tr" currentitem="false">
                    <span>Tổng tiền</span>
                    <div class="__react_component_tooltip place-left type-dark" id="cal22" data-id="tooltip"></div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="td-report-empty">
                  <td class="report-empty-wrap" colspan="100%">
                    <div class="empty-content">
                      <div style="display: block">
                        <svg class="next-icon next-icon--size-16 checkmark">
                          <use xlink:href="#dataEmpty"></use>
                        </svg>
                        <p>Chưa ghi nhận báo cáo</p>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
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