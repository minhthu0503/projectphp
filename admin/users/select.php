<?php 
$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);
?>
<div class="admin_create_user">
    <h1 class="admin__heading">
        Quản lý người dùng
    </h1>
    <div class="select_user">
        <div class="select_user_head">
            <h1 class="select_user__heading">
                Quản lý người dùng
            </h1>
            <div class="select_user__contents">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tình trạng</th>
                            <th>Vai trò</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>    
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['name_user'] ?></td>
                                <td class="image_admin_user">
                                    <img src="../assets/img/<?php echo $row['image']?>" alt="">
                                </td>
                                <td><?php echo $row['username']?></td>
                                <td><?php echo $row['password']?></td>
                                <td><?php echo $row['email']?></td>
                                <td>0<?php echo $row['phone']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['status']?></td>
                                <td><?php echo $row['role']?></td>
                                <td><a href="admin.php?page_layout=update_user&id=<?php echo $row['id'] ?>" class="btn btn--primary btn_sua">Sửa</a></td>
                                <td><a onclick="return del('<?php echo $row['name_user'] ?>')" href="admin.php?page_layout=delete_user&id=<?php echo $row['id'] ?>" class="btn btn--primary btn_xoa">Xóa</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>