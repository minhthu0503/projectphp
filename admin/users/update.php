<?php
$id = $_GET['id'];
$sql_up = "SELECT * FROM users WHERE id = $id";
$query_up = mysqli_query($conn, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);
// include '../connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($file_parts));
    $expensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $expensions) === false) {
        $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'Kích thước file không được lớn hơn 2MB';
    }
    $image = $_FILES['image']['name'];
    $target = "../assets/img/" . basename($image);

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $status = $_POST['status'];
    $role = $_POST['role'];

    $sql = "UPDATE `users` SET 
     `id` = '$id',
     `name_user` = '$name',
     `username` = '$username',
     `password` = '$password',
     `image` = '$image',
     `address` = '$address',
     `email` = '$email',
     `phone` = '$phone',
     `status` = '$status',
     `role` = '$role' 
     WHERE `id` = '$id'";

    $query = mysqli_query($conn, $sql);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
?>
        <script>
            location.href = 'admin.php?page_layout=select_user';
        </script>
<?php
    } else {
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
}

?>
<div class="admin_create_user">
    <h1 class="admin_create_heading">
        Sửa người dùng
    </h1>
    <div class="create_user">
        <form action="" method="POST" class="user__form" enctype="multipart/form-data">
            <div class="user__lable">
                <label class="user__lable-name" for="">Họ và tên:</label>
                <input placeholder="Họ và tên..." name="name" type="text" class="user__form-username" required value="<?php echo $row_up['name_user'] ?>">
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Tài khoản:</label>
                <input placeholder="Tài khoản..." name="username" type="text" class="user__form-username" required value="<?php echo $row_up['username'] ?>">
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Mật khẩu:</label>
                <input placeholder="Mật khẩu..." name="password" type="text" class="user__form-password" required value="<?php echo $row_up['password'] ?>">
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Ảnh:</label>
                <input placeholder="" type="file" name="image" class="user__form-image-user" required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Email:</label>
                <input placeholder="Email..." name="email" type="email" class="user__form-email" required value="<?php echo $row_up['email'] ?>">
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Số điện thoại:</label>
                <input placeholder="Số điện thoại..." name="phone" type="text" class="user__form-phone" required value="0<?php echo $row_up['phone'] ?>">
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Địa chỉ:</label>
                <input placeholder="Địa chỉ..." type="text" name="address" class="user__form-address" required value="<?php echo $row_up['address'] ?>">
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Tình trạng:</label>
                <input placeholder="Tình trạng..." type="text" name="status" class="user__form-address" required value="<?php echo $row_up['status'] ?>">
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Vai trò:</label>
                <input placeholder="Vai trò..." type="text" name="role" class="user__form-address" required value="<?php echo $row_up['role'] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn--primary user__form-btn">Sửa</button>
        </form>
    </div>
</div>