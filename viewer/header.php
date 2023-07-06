<?php
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : '';
if (isset($_SESSION['cart'])) {
    $count = count($cart);
} else {
    $count = 0;
}  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGASHOP</title>
    <link rel="icon" href="./assets/img/icon_manga.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/products.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">

                <!-- nav_pc -->
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--separate">Vào cửa hàng trên ứng dụng
                            <div class="header__qr">
                                <img src="./assets/img/qrcode.jpg" alt="" class="header__qr-img">
                                <div class="header__qr-app">
                                    <a href="" class="header__qr-link">
                                        <img style="  width: 70px;" src="./assets/img/ggplay.png" alt="" class="header__qr-download-img">
                                    </a>
                                    <a href="" class="header__qr-link">
                                        <img src="./assets/img/appstore.png" alt="" class="header__qr-download-img">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a class="header__navbar-icon-link" href="">
                                <ion-icon class="header__navbar-icon" name="logo-facebook"></ion-icon>
                            </a>
                            <a class="header__navbar-icon-link" href="">
                                <ion-icon class="header__navbar-icon" name="logo-instagram"></ion-icon>
                            </a>


                        </li>
                    </ul>

                    <div class="header__navbar-marquee">
                        <marquee id="mq1" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                            <span class="header__navbar-marquee-content">Manga Shop - Kho truyện khổng lồ - Nơi bán
                                truyện uy tín hàng đầu Việt Nam - Liên hệ: 0999888999</span>
                        </marquee>
                    </div>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <a class="header__navbar-item-link" href="">
                                Thông báo <ion-icon class="header__navbar-icon" name="notifications-outline"></ion-icon>
                            </a>
                            <!-- <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">My pham chinh hang</span>
                                                <span class="header__notify-describe">Mo ta my pham chinh hang</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">My pham chinh hang</span>
                                                <span class="header__notify-describe">Mo ta my pham chinh hang</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">My pham chinh hangMy pham chinh hangMy
                                                    pham chinh hangMy pham chinh hang</span>
                                                <span class="header__notify-describe"> Mo ta my pham chinh hangMo ta my
                                                    pham chinh hangMo ta my pham chinh hangMo ta my pham chinh
                                                    hang</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">My pham chinh hang</span>
                                                <span class="header__notify-describe">Mo ta my pham chinh hang</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="header__notify-footer">
                                    <a href="#" class="header__notify-footer-btn">
                                        Xem tất cả
                                    </a>
                                </div>

                            </div> -->
                        </li>
                        <li class="header__navbar-item">
                            <a class="header__navbar-item-link" href="">
                                Trợ giúp <ion-icon class="header__navbar-icon" name="help-circle-outline"></ion-icon>
                            </a>
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item-strong header__navbar-item--separate">Dang ky
                        </li>
                        <li class="header__navbar-item header__navbar-item-strong">Dang nhap</li> -->
                    </ul>

                </nav>
                <div class="header-with-search">
                    <!-- nav_mobile -->


                    <input hidden type="checkbox" name="" id="nav__mobile-input">

                    <div class="nav-menu-search">
                        <label for="nav__mobile-input" class="nav__mobile-btn">
                            <img src="./assets/img/menu_icon.png" alt="" class="nav__mobile-img">
                        </label>

                        <label for="mobile__search" class="nav__mobile-search">
                            <img src="./assets/img/search__icon.png" alt="" class="nav__mobile-search-img">
                        </label>
                    </div>


                    <label for="nav__mobile-input" class="nav__overlay"></label>

                    <label for="nav__mobile-input" class="nav__mobile">
                        <img src="./assets/img/close_icon.png" alt="" class="nav__mobile-close">
                        <ul class="nav__mobile-list">
                            <li class="nav__mobile-item">
                                <a href="#" class="nav__mobile-link">Trang chủ</a>
                            </li>
                        </ul>
                        <ul class="nav__mobile-list">
                            <li class="nav__mobile-item">
                                <a href="#" class="nav__mobile-link">Trang chủ</a>
                            </li>
                        </ul>
                        <ul class="nav__mobile-list">
                            <li class="nav__mobile-item">
                                <a href="#" class="nav__mobile-link">Trang chủ</a>
                            </li>
                        </ul>
                        <ul class="nav__mobile-list">
                            <li class="nav__mobile-item">
                                <a href="#" class="nav__mobile-link">Trang chủ</a>
                            </li>
                        </ul>
                        <ul class="nav__mobile-list">
                            <li class="nav__mobile-item">
                                <a href="#" class="nav__mobile-link">Trang chủ</a>
                            </li>
                        </ul>
                    </label>

                    <!-- end nav__mobile -->
                    <div class="header__logo">
                        <a href="index.php" class="header__logo-link">
                            <img src="./assets/img/manga-logo.png" alt="" class="header__logo-img">
                        </a>
                    </div>
                    <!-- CHECK INPUT SEARCH -->
                    <input type="checkbox" name="" hidden id="mobile__search">
                    <!-- SEARCH -->
                    <form class="header__search" action="../index.php?page_layout=search" method="POST">
                        <div class="header__search-input-wrap">
                            <input placeholder="Tìm kiếm..." type="text" name="keys" class="header__search-input">
                        </div>
                        <button type="submit" name="search" value="search" class="header__search-btn">
                            <ion-icon name="search"></ion-icon>
                        </button>
                    </form>

                    <div class="header__card">
                        <div class="header__card-wrap">
                            <a href="index.php?page_layout=cart_view" class="header__card-link">
                                <span class="header__card-notice">
                                   <?php echo $count; ?>
                                </span>
                                <ion-icon class="header__card-icon" name="cart"></ion-icon>
                            </a>
                            <!-- no-card -->
                            <?php if(!isset($_SESSION['cart'])){ ?>
                            <div class="header__card-list header__card-list-no-card">
                                <img class="header__card-list-no-card-img"  src="./assets/img/cart-empty.png" alt="">
                                <span class="header__card-list-no-card-msg">Chưa có sản phẩm</span>
                            </div>
                            <?php } else {?>
                            <div class="header__card-list">
                                <h4 class="header__card-heading">
                                    Sản phẩm đã thêm
                                </h4>
                                <ul class="header__card-list-item">
                                    <?php foreach($cart as $value){ ?>
                                    <li class="header__card-item">
                                        <img src="./assets/img/<?php echo $value['image'] ?>" alt="" class="header__card-img">
                                        <div class="header__card-item-info">
                                            <div class="header__card-item-head">
                                                <h5 class="header__card-item-name"><?php echo $value['name'] ?></h5>
                                                <div class="header__card-item-price-wrap">
                                                    <span class="header__card-item-price"><?php echo number_format($value['price']); ?>đ</span>
                                                    <span class="header__card-item-x">x</span>
                                                    <span class="header__card-item-quantity"><?php echo $value['quantity'] ?></span>
                                                </div>

                                            </div>
                     
                                        </div>
                                    </li>
                                    <?php }?>
                                </ul>
                                <div class="header__card-btn">
                                    <a href="index.php?page_layout=cart_view" class="btn btn--primary">Xem giỏ hàng</a>
                                </div>

                            </div>
                            <?php }?>
                        </div>


                    </div>
                </div>
            </div>
        </header>