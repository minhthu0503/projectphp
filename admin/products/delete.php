<?php
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $id";
$query = mysqli_query($conn, $sql);

if ($query > 0) {
    echo '<script language="javascript">alert("Đã Xóa thành công!");</script>';
?>
    <script>
        location.href = 'admin.php?page_layout=select_product';
    </script>
<?php
} else {
    echo '<script language="javascript">alert("Đã thất bại thất bại!");</script>';
}
?>