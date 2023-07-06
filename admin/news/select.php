<?php
$sql = "SELECT * FROM news ";
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
                            <th>Thời gian</th>
                            <th>Số lượng</th>
                            <th>Lượt xem</th>
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
                            <td><?php echo $row['name_news']; ?></td>
                            <td class="image"><img src="../assets/img/<?php echo $row['image']?>" alt=""></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo substr($row['content_news'],0,60);?>...</td>
                            <td><?php echo $row['view']; ?></td>
                            <td><a href="admin.php?page_layout=update_news&id=<?php echo $row['id_news'];?>" class="btn btn--primary btn_sua">Sửa</a></td>
                            <td><a onclick="return del('<?php echo $row['name_news'] ?>')" href="admin.php?page_layout=delete_news&id=<?php echo $row['id_news'];?>" class="btn btn--primary btn_xoa">Xóa</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>