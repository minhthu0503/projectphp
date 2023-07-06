<?php
$id = $_GET['id'];
$sql_detail = "SELECT * FROM products WHERE id = $id";
$query_detail = mysqli_query($conn, $sql_detail);
$row_detail = mysqli_fetch_assoc($query_detail);

$click = $row_detail['click'];

if (isset($_GET['id'])) {
    $click += 1;
    $sql = "UPDATE `products` SET 
     `id` = '$id',
     `click` = '$click'
     WHERE `id` = '$id'";
    $query = mysqli_query($conn, $sql);
}
?>
<div class="products">
    <div class="row">
        <div class="col l-12 m-12 c-12">
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <img src="./assets/img/<?php echo $row_detail['image'] ?>" alt="" class="products__img">
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="products__contents">
                        <h1 class="products__heading">
                            <?php echo $row_detail['name'] ?>
                        </h1>
                        <span class="products__code">
                            Mã sách: <?php echo $row_detail['id'] ?>
                        </span>
                        <p class="products__price">
                            <?php echo number_format($row_detail['price']) ?>₫
                        </p>
                        <form action="index.php?page_layout=cart&id=<?php echo $row_detail['id']?>" method="post">
                            <div class="products__quantity">
                                <input type="hidden" name="action" value="add">
                                <label class="products__quantity-label" for="">Số lượng:</label>
                                <input class="products__quantity-input" value="1" type="number" placeholder="0" name="quantity" id="">
                                <input type="hidden" name="id" value="<?php echo $row_detail['id'] ?>">
                            </div>
                            <div class="products__btn">
                                <button class="btn btn--primary">MUA NGAY</button>
                            </div>  
                        </form>
                        <div class="products__endow">
                            <h3 class="products__endow-heading">
                                Ưu đãi dành riêng cho khách hàng đặt trước Online:
                            </h3>
                            <span class="products__endow-text">
                                <ion-icon name="checkmark-outline"></ion-icon> Có thể nhận hàng
                                tại shop.
                            </span>
                            <span class="products__endow-text">
                                <ion-icon name="checkmark-outline"></ion-icon> Giao hàng toàn
                                quốc. Thời gian giao hàng từ 3 - 7 ngày
                            </span>
                            <span class="products__endow-text">
                                <ion-icon name="checkmark-outline"></ion-icon> Bọc plastic miễn
                                phí cho Light Novel đặt mua trước ngày phát hành dự kiến.
                            </span>
                            <span class="products__endow-text">
                                <ion-icon name="checkmark-outline"></ion-icon> Tặng bao bảo vệ
                                cho mọi sản phẩm.
                            </span>
                            <span class="products__endow-text">
                                <ion-icon name="checkmark-outline"></ion-icon> Đổi trả trong 30
                                ngày.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col l-12 m-12 c-12">
                    <div class="describe">
                        <h2 class="describe__heading">
                            MÔ TẢ CHI TIẾT
                        </h2>
                        <div class="describe__content">
                            <p class="describe__content-text">
                                <?php echo $row_detail['content'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col l-12 m-12 c-12">
                   <!-- COMMENT -->
                   <?php 
                   include 'comment.php';
                   ?>
                </div>
                
                <div class="col l-12 m-12 c-12">
                    <div class="slick">
                    <!-- Similar products -->
                    <?php
                    include 'similarproducts.php';
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>