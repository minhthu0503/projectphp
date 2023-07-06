<?php 
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = '$username'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

?>
<h1 class="user__heading">Người dùng</h1>
<div class="user__login-sucssec">
    <div class="row">
        <img src="./assets/img/<?php echo $row['image'] ?>" class="user__login-sucssec-img col l-6 l-o-3">
        <h1 class="user__login-sucssec-name col l-12"><?php echo $row['name_user'] ?></h1>
    </div>
</div>
<ul class="user__list">
    <li class="user__item">
        <a href="index.php?page_layout=detail_user&id=<?php echo $_SESSION['username']; ?>" class="user__item-link">Quản lý tài khoản</a>
    </li>
    <?php if($row['role'] == 1){
    ?>
    <li class="user__item">
        <a href="./admin/admin.php" class="user__item-link">Quản lý ADMIN</a>
    </li>
   <?php }
    ?>
    <li class="user__item">
        <a href="../viewer/view_user/logout.php" class="user__item-link">Đăng Xuất</a>
    </li>
</ul>