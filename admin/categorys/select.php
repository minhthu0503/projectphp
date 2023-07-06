<?php 
$sql = "SELECT * FROM category";
$query = mysqli_query($conn, $sql);
?>
<div class="admin_create_user">
    <h1 class="admin__heading">
        Quản lý loại hàng
    </h1>
    <div class="select_user">
        <div class="select_user_head">
            <h1 class="select_user__heading">
                Quản lý loại hàng
            </h1>
            <div class="select_user__contents">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>   
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['name_category'] ?></td>
                            <td><a href="admin.php?page_layout=update_categorys&id=<?php echo $row['id_category'] ?>" class="btn btn--primary btn_sua">Sửa</a></td>
                            <td><a onclick="return del('<?php echo $row['name_category'] ?>')" href="admin.php?page_layout=delete_categorys&id=<?php echo $row['id_category'] ?>" class="btn btn--primary btn_xoa">Xóa</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>