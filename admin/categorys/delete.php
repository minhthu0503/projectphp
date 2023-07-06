<?php
$id = $_GET['id'];
$sql = "DELETE FROM category WHERE id_category = $id";
$query = mysqli_query($conn, $sql);

if ($query > 0) {
    echo '<script language="javascript">alert("Đã Xóa thành công!");</script>';
?>
    <script>
        location.href = 'admin.php?page_layout=select_categorys';
    </script>
<?php
} else {
    echo '<script language="javascript">alert("Đã thất bại thất bại!");</script>';
}
?>