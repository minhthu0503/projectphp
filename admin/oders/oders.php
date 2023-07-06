<?php 
$sql = "SELECT * FROM oders,users WHERE oders.id_user = users.id ORDER BY oders.id_oder DESC";
$query = mysqli_query($conn, $sql);

?>
<div class="admin_create_user">
    <h1 class="admin__heading">
        Quản lý hóa đơn
    </h1>
    <div class="select_user">
        <div class="select_user_head">
            <h1 class="select_user__heading">
                Quản lý hóa đơn
            </h1>
            <div class="select_user__contents">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th class="width_cart">Mã đơn hàng</th>
                            <th class="width_cart">Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th class="width_cart">Tổng số lượng sản phẩm</th>
                            <th>Tổng tiền</th>
                            <th>Ngày đặt</th>
                            <th>Ghi chú</th>
                           
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>   
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['id_oder'] ?></td>
                            <td><?php echo $row['id_user'] ?></td>
                            <td><?php echo $row['name_user'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>0<?php echo $row['phone'] ?></td>
                            <td><?php echo $row['quantity_count'] ?></td>
                            <td><?php echo number_format($row['total'] )?>đ</td>
                            <td><?php echo $row['cart_date'] ?></td>
                            <td><?php echo $row['note'] ?></td>
                           
                            <td><a href="admin.php?page_layout=oders_detail&id=<?php echo $row['id_oder'] ?>" class="btn btn--primary btn_sua">Xem đơn hàng</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>