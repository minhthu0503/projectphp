<?php

if (isset($_GET['id'])) {
    $id_category = $_GET['id'];
    $sql_cate = "SELECT * FROM category WHERE id_category = $id_category ";
    $query_cate = mysqli_query($conn, $sql_cate);
    $row_cate = mysqli_fetch_assoc($query_cate);
}else{
    $id_category = '';
}

$sql = "SELECT * FROM products ORDER BY name ASC";
$query = mysqli_query($conn, $sql);
$sql_top = "SELECT * FROM products ORDER BY click DESC";
$query_top = mysqli_query($conn, $sql_top);
?>
<?php
if (isset($_GET['id'])) { ?>
    <h1 class="product-heading"><?php echo $row_cate['name_category'] ?></h1>
<?php } else { ?>
    <h1 class="product-heading">Tất cả sản phẩm</h1>
<?php
} ?>
<div class="row">
    <?php while ($row = mysqli_fetch_assoc($query)) {
        if (isset($_GET['id'])) {
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
        } else { ?>
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
    <?php  }
    } ?>
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