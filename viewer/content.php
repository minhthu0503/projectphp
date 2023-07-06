<div class="app__container">
    <div class="grid wide">
    <?php include 'view_add/menu.php'; ?>
        <div class="row row__reverse">
            <div class="col l-4 m-0 c-0">
                <div class="user">
                    <!-- LOGIN -->
                    <?php
                    if (isset($_SESSION['username'])) {
                        include 'view_user/user.php';
                    } else {
                        include 'view_user/login.php';
                    }
                    ?>
                    <!-- LOGOUT -->
                </div>
                <nav class="category">
                    <!-- CATEGORY -->
                    <?php
                    include 'view_add/category.php';
                    ?>
                </nav>
            </div>

            <div class="col l-8 m-12 c-12">
                <!-- PRODUCTS -->
                <?php
                if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                        case 'products':
                            include 'view_add/slider.php';
                            require_once 'view_product/products.php';
                            break;
                        case 'detail_product':
                            require_once 'view_product/detail_product.php';
                            break;
                        case 'create':
                            require_once 'view_user/create.php';
                            break;
                        case 'detail_user':
                            require_once 'view_user/detail_user.php';
                            break;
                        case 'forgotpassword':
                            require_once 'view_user/forgotpassword.php';
                            break;
                        case 'products_main':
                            require_once 'view_product/list_products.php';
                            break;
                        case 'search':
                            require_once 'view_add/search.php';
                            break;
                        case 'cart_view':
                            require_once 'view_cart/cart_view.php';
                            break;
                        case 'cart':
                            require_once 'view_cart/cart.php';
                            break;
                        case 'checkout':
                            require_once 'view_cart/checkout.php';
                            break;
                        case 'receipt':
                            require_once 'view_cart/receipt.php';
                            break;
                        case 'intro':
                            require_once 'view_add/introduce.php';
                            break;
                        case 'contact':
                            require_once 'view_add/contact.php';
                            break;
                        case 'news':
                            require_once 'view_news/news.php';
                            break;
                         case 'news_detail':
                            require_once 'view_news/news_detail.php';
                            break;
                        default:
                            include 'view_add/slider.php';
                            require_once 'view_product/products.php';
                    }
                } else {
                    include 'view_add/slider.php';
                    require_once 'view_product/products.php';
                }
                ?>
            </div>

        </div>
    </div>