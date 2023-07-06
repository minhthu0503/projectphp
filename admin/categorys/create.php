<?php 
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name_category = $_POST['name_category'];

    $sql = "INSERT INTO `category` (`id_category`, `name_category`) 
    VALUES (NULL,'$name_category');";

    $query = mysqli_query($conn, $sql);

    if ($query > 0) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
?>
        <script>
            location.href = 'admin.php?page_layout=select_categorys';
        </script>
<?php
    } else {
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
}

?>

<div class="admin_create_user">
    <h1 class="admin_create_heading">
        Thêm Loại hàng
    </h1>
    <div class="create_user">
        <form action="" method="POST" class="user__form" enctype="multipart/form-data">
            <div class="user__lable">
                <label class="user__lable-name" for="">Tên loại:</label>
                <input placeholder="Tên loại..." name="name_category" type="text" class="user__form-username"required >
            </div>
            <button type="submit" name="submit" class="btn btn--primary user__form-btn">Thêm</button>
        </form>
    </div>
</div>