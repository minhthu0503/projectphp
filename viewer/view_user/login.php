<?php
$username = '';
$password = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['username'] = $username;
        echo '<script> location.href = "index.php"; </script>';
    } else {
        echo '<script language="javascript">alert("Sai tài khoản hoặc mật khẩu!");</script>';
    }
}


?>
<h1 class="user__heading">Đăng nhập</h1>
<form action="" method="POST" class="user__form">
    <div class="user__lable">
        <label class="user__lable-name" for="">Tài khoản:</label>
        <input placeholder="Tài khoản..." type="text" name="username" class="user__form-username"required>
    </div>
    <div class="user__lable">
        <label class="user__lable-name" for="">Mật khẩu:</label>
        <input placeholder="Mật khẩu..." type="password" name="password" class="user__form-password"required>
    </div>
    <button type="submit" name="submit" class="btn btn--primary user__form-btn">Đăng nhập</button>
</form>
<ul class="user__list">
    <li class="user__item">
        <a href="index.php?page_layout=create" class="user__item-link">Đăng ký</a>
    </li>
    <li class="user__item">
        <a href="index.php?page_layout=forgotpassword" class="user__item-link">Quên mật khẩu</a>
    </li>
</ul>