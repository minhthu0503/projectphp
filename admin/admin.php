<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/products.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="app">
        <div class="grid">
            <div class="row no-gutters">
                <div class="col l-12 c-12 m-12">
                    <div class="row no-gutters">
                        <div class="col l-2 c-3 m-3">
                            <div class="header_menu header">
                                <h1 class="header_menu-heading">
                                    MENU
                                </h1>
                            </div>
                            <ul class="header_menu-list">
                                <li class="header_menu-item">
                                    <a href="admin.php?page_layout=select_user" class="header_menu-link btn btn--primary">Quản lý người
                                        dùng</a>
                                    <ul class="header_sub_menu">
                                        <a href="admin.php?page_layout=create_user" class="header_menu-link btn btn--primary">Thêm người
                                            dùng</a>
                                    </ul>
                                </li>
                                <li class="header_menu-item">
                                    <a href="admin.php?page_layout=select_product" class="header_menu-link btn btn--primary">Quản lý sản phẩm</a>
                                    <ul class="header_sub_menu">
                                        <a href="admin.php?page_layout=create_product" class="header_menu-link btn btn--primary">Thêm sản phẩm </a>
                                    </ul>
                                </li>
                                <li class="header_menu-item">
                                    <a href="admin.php?page_layout=select_categorys" class="header_menu-link btn btn--primary">Quản lý loại
                                        truyện</a>
                                    <ul class="header_sub_menu">
                                        <a href="admin.php?page_layout=create_categorys" class="header_menu-link btn btn--primary">Thêm loại</a>
                                    </ul>
                                </li>
                                <li class="header_menu-item">
                                    <a href="admin.php?page_layout=select_comment" class="header_menu-link btn btn--primary">Quản lý bình luận</a>
                                    <ul class="header_sub_menu">
                                        <a href="admin.php?page_layout=create_comment" class="header_menu-link btn btn--primary">Thêm bình luận</a>
                                    </ul>
                                </li>
                                <li class="header_menu-item">
                                    <a href="admin.php?page_layout=select_news" class="header_menu-link btn btn--primary">Quản lý bài viết</a>
                                    <ul class="header_sub_menu">
                                        <a href="admin.php?page_layout=create_news" class="header_menu-link btn btn--primary">Thêm bài viết</a>
                                    </ul>
                                </li>
                                <li class="header_menu-item">
                                    <a href="admin.php?page_layout=oders" class="header_menu-link btn btn--primary">Quản lý hóa đơn</a>
                                </li>
                                <li class="header_menu-item">
                                    <a href="admin.php?page_layout=statistical_product" class="header_menu-link btn btn--primary">Thống kê sản phẩm</a>
                                    <ul class="header_sub_menu">
                                        <a href="admin.php?page_layout=chart" class="header_menu-link btn btn--primary">Thống kê</a>
                                    </ul>
                                </li>
                                <li class="header_menu-item">
                                    <a href="../index.php" class="header_menu-link btn btn--primary">Quay về Trang Chủ</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col l-10 c-9 m-9">
                            <div class="header_admin header">
                                <h1 class="header_admin-heading">
                                    TRANG QUẢN TRỊ ADMIN
                                </h1>
                            </div>

                            <?php
                            include '../connect.php';

                            if (isset($_GET['page_layout'])) {
                                switch ($_GET['page_layout']) {
                                    case 'select_user':
                                        require_once 'users/select.php';
                                        break;
                                    case 'create_user':
                                        require_once 'users/create.php';
                                        break;
                                    case 'update_user':
                                        require_once 'users/update.php';
                                        break;
                                    case 'delete_user':
                                        require_once 'users/delete.php';
                                        break;
                                    case 'select_product':
                                        require_once 'products/select.php';
                                        break;
                                    case 'create_product':
                                        require_once 'products/create.php';
                                        break;
                                    case 'update_product':
                                        require_once 'products/update.php';
                                        break;
                                    case 'delete_product':
                                        require_once 'products/delete.php';
                                        break;
                                    case 'select_comment':
                                        require_once 'comment/select.php';
                                        break;
                                    case 'create_comment':
                                        require_once 'comment/create.php';
                                        break;
                                    case 'update_comment':
                                        require_once 'comment/update.php';
                                        break;
                                    case 'delete_comment':
                                        require_once 'comment/delete.php';
                                        break;
                                    case 'select_categorys':
                                        require_once 'categorys/select.php';
                                        break;
                                    case 'create_categorys':
                                        require_once 'categorys/create.php';
                                        break;
                                    case 'update_categorys':
                                        require_once 'categorys/update.php';
                                        break;
                                    case 'delete_categorys':
                                        require_once 'categorys/delete.php';
                                        break;
                                    case 'oders':
                                        require_once 'oders/oders.php';
                                        break;
                                    case 'oders_detail':
                                        require_once 'oders/oders_detail.php';
                                        break;
                                    case 'chart':
                                        require_once 'statistical/chart.php';
                                        break;
                                    case 'statistical_product':
                                        require_once 'statistical/statistical_product.php';
                                        break;
                                    case 'select_news':
                                        require_once 'news/select.php';
                                        break;
                                    case 'create_news':
                                        require_once 'news/create.php';
                                        break;
                                    case 'update_news':
                                        require_once 'news/update.php';
                                        break;
                                     case 'delete_news':
                                        require_once 'news/delete.php';
                                        break;
                                    default:
                                        require_once 'users/select.php';
                                }
                            } else {
                                require_once 'users/select.php';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="../assets/js/alert.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $(document).ready(function() {
        thongke();
        var char = new Morris.Line({

            element: 'chart',

            xkey: 'date',

            ykeys: ['date','order', 'sales', 'quantity'],

            labels: ['date','Đơn hàng', 'Doanh thu', 'Số lượng bán ra']
        });

        function thongke() {
            var text = '365 ngày qua';
            $('#text-date').text(text);

            $.ajax({
                url: "statistical/statistical.php",
                method: "POST",
                dataType: "JSON",

                success: function(data) {
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        }

    });
</script>

</html>