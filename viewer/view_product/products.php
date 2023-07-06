<?php 
$sql = "SELECT * FROM products";
$query = mysqli_query($conn, $sql);
$sql_top = "SELECT * FROM products ORDER BY click DESC";
$query_top = mysqli_query($conn, $sql_top);
?>
<div class="slick">
    <h1 class="product-heading">Sản phẩm mới</h1>
    <div class="slick__slider row">
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
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
            <?php } ?>
    </div>

</div>

<div class="slick">
    <h1 class="product-heading">TOP sảm phẩm</h1>
    <div class="slick__slider row">
        <?php while ($row_top = mysqli_fetch_assoc($query_top)) { ?>
            <div class="slick__item col l-3">
                <div class="slick__item-content" title="<?php echo $row_top['name'] ?>">
                   <a href="index.php?page_layout=detail_product&id=<?php echo $row_top['id'] ?>">
                       <img class="slick__item-img" class="" src="./assets/img/<?php echo $row_top['image'] ?>" alt="">
                   </a> 
                    <h2 class="slick__item-heading"><a class="slick__item-link" href=""><?php echo $row_top['name'] ?></a>
                    </h2>
                    <p class="slick__item-author">Tác giả: <?php echo $row_top['author'] ?></p>
                    <span class="slick__item-price"><?php echo number_format($row_top['price']) ?>₫</span>

                    <div class="slick__hover">
                        <div class="slick__hover-content">
                            <h2 class="slick__hover-heading"><a class="slick__hover-link" href="index.php?page_layout=detail_product&id=<?php echo $row_top['id'] ?>"><?php echo $row_top['name'] ?></a></h2>

                        </div>
                        <div class="slick__hover-btn">
                            <button class="btn btn--primary"><a class="btn_link" href="index.php?page_layout=cart&id=<?php echo $row_top['id'] ?>&action=add">Mua</a></button>
                            <button class="btn btn--primary"><a class="btn_link" href="index.php?page_layout=detail_product&id=<?php echo $row_top['id'] ?>">Xem</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
    </div>
</div>
