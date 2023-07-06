<?php 
$id_oder = $_GET['id'];
$sql = "SELECT *, oders_detail.quantity  FROM oders_detail,products WHERE oders_detail.id_product = products.id AND oders_detail.id_oder = '$id_oder' ORDER BY oders_detail.id_oder DESC";
$query = mysqli_query($conn, $sql);

?>
<div class="admin_create_user">
    <h1 class="admin__heading">
        Chi tiết hóa đơn
    </h1>
    <div class="select_user">
        <div class="select_user_head">
            <h1 class="select_user__heading">
                Chi tiết hóa đơn
            </h1>
            <div class="select_user__contents">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th class="width_cart">Mã đơn hàng</th>
                            <th class="width_cart">Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>                           
                            <th class="width_cart">Tổng số lượng sản phẩm</th>
                            <th>Giá sản phẩm</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>   
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['id_oder'] ?></td>
                            <td><?php echo $row['id_product'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><?php echo number_format($row['price'] )?>đ</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>