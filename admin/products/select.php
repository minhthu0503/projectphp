<?php
$sql = "SELECT * FROM products  INNER JOIN category  ON products.category = category.id_category";
$query = mysqli_query($conn, $sql);
?>
<div class="admin_create_user">
    <h1 class="admin__heading">
        Quản lý hàng hóa
    </h1>
    <div class="select_user">
        <div class="select_user_head">
            <h1 class="select_user__heading">
                Quản lý hàng hóa
            </h1>
            <div class="select_user__contents">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Loại</th>
                            <th>Số lượng</th>
                            <th>Nội dung</th>
                            <th>Ngày</th>
                            <th>Lượt xem</th>
                            <th>Giá</th>
                            <th>Giảm giá</th>
                            <th>Tác giả</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td class="image"><img src="../assets/img/<?php echo $row['image']?>" alt=""></td>
                            <td><?php echo $row['name_category']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo substr($row['content'],0,60);?>...</td>
                            <td><?php echo $row['day']; ?></td>
                            <td><?php echo $row['click']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['sale']; ?></td>
                            <td><?php echo $row['author']; ?></td>
                            <td><a href="admin.php?page_layout=update_product&id=<?php echo $row['id'];?>" class="btn btn--primary btn_sua">Sửa</a></td>
                            <td><a onclick="return del('<?php echo $row['name'] ?>')" href="admin.php?page_layout=delete_product&id=<?php echo $row['id'];?>" class="btn btn--primary btn_xoa">Xóa</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>