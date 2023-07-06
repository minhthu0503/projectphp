<?php
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
?>
<h1 class="select_user__heading heading_cart">
    Giỏ hàng
</h1>
<div class="select_user__contents form_products">
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
                <th class="cart_btn"></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            $total_price = 0;
            foreach ($cart as $key => $value) {
                $total_price += ($value['price'] * $value['quantity']);
            ?>

                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td class="image"><img src="./assets/img/<?php echo $value['image'] ?>" alt=""></td>
                    <td class="cart_quantity">
                        <form action="index.php?page_layout=cart&id=<?php echo $value['id'] ?>" method="POST">
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                            <input class="cart_quantity_input" type="number" name="quantity" value="<?php echo $value['quantity'] ?>">
                            <button type="submit" class="cart_quantity_btn btn btn--primary">UP</button>
                        </form>
                    </td>
                    <td><?php echo number_format($value['price']); ?>đ</td>
                    <td><?php echo number_format(($value['price'] * $value['quantity'])); ?>đ</td>
                    <td><a onclick="return del('<?php echo $value['name'] ?>')" href="index.php?page_layout=cart&id=<?php echo $value['id']; ?>&action=delete" class="btn btn--primary btn_xoa">Xóa</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
   
</div>
<?php
    if (empty($cart)) { ?>
        <h1 class="cart_notify">Không có sản phẩm nào</h1>
        <a href="index.php?page_layout=products_main" class="cart_notify btn btn--primary">Mua ngay</a>
    <?php  } else { ?>
        <h1 class="cart_notify">Tổng tiền: <?php echo number_format($total_price); ?>VND</h1>
        <?php
        if (isset($_SESSION['username'])) { ?>
            <a href="index.php?page_layout=products_main" class="cart_notify btn btn--primary">Mua tiếp</a> <br>
            <a href="index.php?page_layout=checkout" class="cart_notify btn btn--primary">Thanh toán</a>
        <?php } else {
        ?>
            <a onclick="return signup();" class="cart_notify btn btn--primary">Thanh toán</a>
    <?php  }
    }
    ?>
