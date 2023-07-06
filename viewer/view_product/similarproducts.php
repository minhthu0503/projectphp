<?php
$id_category = $row_detail['category'];
$sql = "SELECT * FROM products";
$query = mysqli_query($conn, $sql);
?>
<h1 class="product-heading">Sản phẩm Tương tự</h1>
<div class="slick__slider row">
    <?php while ($row = mysqli_fetch_assoc($query)) {
        if ($row['category'] == $id_category) {
    ?>
            <div class="slick__item col l-3">
                <div class="slick__item-content" title="<?php echo $row['name'] ?>">
                    <a href="index.php?page_layout=detail_product&id=<?php echo $row['id'] ?>">
                        <img class="slick__item-img" class="" src="./assets/img/<?php echo $row['image'] ?>" alt="">
                    </a>
                    <h2 class="slick__item-heading"><a class="slick__item-link" href=""><?php echo $row['name'] ?></a>
                    </h2>
                    <p class="slick__item-author">Tác giả: <?php echo $row['author'] ?></p>
                    <span class="slick__item-price"><?php echo number_format($row['price']) ?>₫</span>

                    <div class="slick__hover">
                        <div class="slick__hover-content">
                            <h2 class="slick__hover-heading"><a class="slick__hover-link" href="index.php?page_layout=detail_product&id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></h2>

                        </div>
                        <div class="slick__hover-btn">
                            <button class="btn btn--primary"><a class="btn_link" href="index.php?page_layout=cart&id=<?php echo $row['id'] ?>&action=add">Mua</a></button>
                            <button class="btn btn--primary"><a class="btn_link" href="index.php?page_layout=detail_product&id=<?php echo $row['id'] ?>">Xem</a></button>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>