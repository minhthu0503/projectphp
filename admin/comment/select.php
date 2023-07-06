<?php 
$sql = "SELECT * FROM comment";
$query = mysqli_query($conn, $sql);
?>
<div class="admin_create_user">
    <h1 class="admin__heading">
        Quản lý bình luận
    </h1>
    <div class="select_user">
        <div class="select_user_head">
            <h1 class="select_user__heading">
                Quản lý Bình luận
            </h1>
            <div class="select_user__contents">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Người dùng</th>
                            <th>ID Bài viết</th>
                            <th>Nội dung</th>
                            <th>Thời gian</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>    
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['id_user'] ?></td>
                            <td><?php echo $row['id_product'] ?></td>
                            <td><?php echo $row['comment'] ?></td>
                            <td><?php echo $row['time'] ?></td>
                            <td><a href="admin.php?page_layout=update_comment&id=<?php echo $row['id'] ?>" class="btn btn--primary btn_sua">Sửa</a></td>
                            <td><a onclick="return del('<?php echo $row['id'] ?>')" href="admin.php?page_layout=delete_comment&id=<?php echo $row['id'] ?>" class="btn btn--primary btn_xoa">Xóa</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>