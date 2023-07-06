<?php 
$id = $_GET['id'];
$sql_up = "SELECT * FROM category WHERE id_category = $id";
$query_up = mysqli_query($conn, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);


if (isset($_POST['submit'])) {
    $name_category = $_POST['name_category'];

    $sql = "UPDATE `category` SET 
     `id_category` = '$id',
     `name_category` = '$name_category'
     WHERE `id_category` = '$id'";

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
        Sửa Loại hàng
    </h1>
    <div class="create_user">
        <form action="" method="POST" class="user__form" enctype="multipart/form-data">
            <div class="user__lable">
                <label class="user__lable-name" for="">Tên loại:</label>
                <input placeholder="Tên loại..." name="name_category" type="text" class="user__form-username"required value="<?php echo $row_up['name_category'] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn--primary user__form-btn">Sửa</button>
        </form>
    </div>
</div>