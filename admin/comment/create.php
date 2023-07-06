<?php
$sql_us = "SELECT * FROM users";
$query_us = mysqli_query($conn, $sql_us);
$row_us = mysqli_fetch_assoc($query_us);

$sql_pr = "SELECT * FROM products";
$query_pr = mysqli_query($conn, $sql_pr);
$row_pr = mysqli_fetch_assoc($query_pr);

// include '../connect.php';
if (isset($_POST['submit'])) {
    $id_user = $_POST['id_user'];
    $id_product = $_POST['id_product'];
    $comment = $_POST['comment'];
    $time = $_POST['time'];


    $sql = "INSERT INTO `comment` (`id`, `id_user`, `id_product`, `comment`, `time`) 
    VALUES (NULL,'$id_user', '$id_product', '$comment', '$time');";
    // $sql = "UPDATE `comment` SET 
    //  `id` = '$id',
    //  `id_user` = '$id_user',
    //  `id_product` = '$id_product',
    //  `comment` = '$comment',
    //  `time` = '$time'
    //  WHERE `id` = '$id'";

    $query = mysqli_query($conn, $sql);


    if ($query > 0) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
?>
        <script>
            location.href = 'admin.php?page_layout=select_comment';
        </script>
<?php
    } else {
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
}

?>
<div class="admin_create_user">
    <h1 class="admin_create_heading">
        Thêm Bình luận
    </h1>
    <div class="create_user">
        <form action="" method="POST" class="user__form" enctype="multipart/form-data">
            <div class="user__lable">
                <label class="user__lable-name" for="">ID Người dùng:</label>
                <select placeholder="ID Người dùng..." name="id_user" type="text" class="user__form-username"required >
                <?php
                    while ($row_us = mysqli_fetch_assoc($query_us)) { ?>
                    <option value="<?php echo $row_us['id'] ?>"><?php echo $row_us['id'] ?></option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">ID Sản phẩm:</label>
                <select placeholder="ID Sản phẩm..." name="id_product" type="text" class="user__form-username"required >
                <?php
                    while ($row_pr = mysqli_fetch_assoc($query_pr)) { ?>
                    <option value="<?php echo $row_pr['id'] ?>"><?php echo $row_pr['name']?></option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Nội dung:</label>
                <input placeholder="Nội dung..." name="comment" type="text" class="user__form-password"required >
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Thời gian:</label>
                <input placeholder="Thời gian..." name="time" type="date" class="user__form-phone"required >
            </div>
            <button type="submit" name="submit" class="btn btn--primary user__form-btn">Thêm</button>
        </form>
    </div>
</div>