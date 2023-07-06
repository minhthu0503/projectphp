<?php
$id = $_GET['id'];
$sql = "DELETE FROM comment WHERE id = $id";
$query = mysqli_query($conn, $sql);

if ($query > 0) {
    echo '<script language="javascript">alert("Đã Xóa thành công!");</script>';
?>
    <script>
        location.href = 'admin.php?page_layout=select_comment';
    </script>
<?php
} else {
    echo '<script language="javascript">alert("Đã thất bại thất bại!");</script>';
}
?>