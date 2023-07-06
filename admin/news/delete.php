<?php
$id = $_GET['id'];
$sql = "DELETE FROM news WHERE id_news = $id";
$query = mysqli_query($conn, $sql);

if ($query > 0) {
    echo '<script language="javascript">alert("Đã Xóa thành công!");</script>';
?>
    <script>
        location.href = 'admin.php?page_layout=select_news';
    </script>
<?php
} else {
    echo '<script language="javascript">alert("Đã thất bại thất bại!");</script>';
}
?>