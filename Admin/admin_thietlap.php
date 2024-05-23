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
    <title>Thiết lập</title>
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
                  <a href="">
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
                <p class="text-about">Thiết lập</p>
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
              <div class="ui-layout__item pt-0">
                <div class="ui-card">
                  <p class="header-setting">Thiết lập thông tin</p>
                  <div class="area-settings-nav" style="width: 63%">
                    <a
                      class="area-settings-nav-link li-active"
                      href="/admin/store/details"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#icon_home"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Thông tin nhà hàng
                          </p>
                          <p class="area-settings-nav__description">
                            Xem và điều chỉnh thông tin nhà hàng của bạn
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/store/owner"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#owner"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Thiết lập tài khoản
                          </p>
                          <p class="area-settings-nav__description">
                            Xem và điều chỉnh thông tin tài khoản của bạn
                          </p>
                        </div>
                      </div></a
                    >
                  </div>
                </div>
              </div>
              <div class="ui-layout__item pt-0">
                <div class="ui-card">
                  <p class="header-setting">Thiết lập chức năng</p>
                  <div class="area-settings-nav">
                    <a
                      class="area-settings-nav-link li-active"
                      href="/admin/store/stock_units"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#unit"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Thiết lập đơn vị
                          </p>
                          <p class="area-settings-nav__description">
                            Xem và thiết lập thông tin đơn vị tính của bạn
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/store/settings"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#setting"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Thiết lập bán hàng
                          </p>
                          <p class="area-settings-nav__description">
                            Xem và thiết lập các chế độ bán hàng trong nhà hàng
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/store/devices"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#device"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Thiết lập thiết bị
                          </p>
                          <p class="area-settings-nav__description">
                            Xem và thiết lập các thiết bị bán hàng và phục vụ.
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/tables"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#table"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">Thiết lập bàn</p>
                          <p class="area-settings-nav__description">
                            Xem và thiết lập quản lý bàn trong nhà hàng
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/kitchen"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#kitchent"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">Thiết lập bếp</p>
                          <p class="area-settings-nav__description">
                            Xem và thiết lập quản lý bếp trong nhà hàng
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/report_setting"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#report"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Thiết lập báo cáo
                          </p>
                          <p class="area-settings-nav__description">
                            Xem và điều chỉnh báo cáo
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/print_setting"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#print"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">Thiết lập in</p>
                          <p class="area-settings-nav__description">
                            Xem và thiết lập máy in, mẫu in của nhà hàng
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/store/payment_method"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#pay"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Phương thức thanh toán
                          </p>
                          <p class="area-settings-nav__description">
                            Xem và thiết lập các phương thức thanh toán của nhà
                            hàng
                          </p>
                        </div>
                      </div></a
                    ><a
                      class="area-settings-nav-link li-active"
                      href="/admin/store/e-invoice"
                      ><div class="area-settings-nav__item">
                        <div class="item-left">
                          <svg class="next-icon list-icon-size">
                            <use xlink:href="#icon_einvoice"></use>
                          </svg>
                        </div>
                        <div class="item-right">
                          <p class="area-settings-nav__title">
                            Hoá đơn điện tử
                          </p>
                          <p class="area-settings-nav__description">
                            Thiết lập sử dụng hoá đơn điện tử cho nhà hàng
                          </p>
                        </div>
                      </div></a
                    >
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
