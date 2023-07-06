<?php
// include '../connect.php';
if (isset($_POST['submit'])) {
    $name_news = $_POST['name_news'];

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
    $time = $_POST['time'];
    $content_news = $_POST['content_news'];
    $view = $_POST['view'];

    $sql = "INSERT INTO `news` (`id_news`, `name_news`, `image`, `time`, `content_news`,`view`) 
    VALUES (NULL,'$name_news', '$image', '$time', '$content_news', '0');";

    $query = mysqli_query($conn, $sql);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
        ?>
    <script>
        location.href = 'admin.php?page_layout=select_news';
    </script>
<?php
    } else {
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
}

?>
<div class="admin_create_user">
    <h1 class="admin_create_heading">
        Thêm Bài viết
    </h1>
    <div class="create_user">
        <form action="" method="POST" class="user__form" enctype="multipart/form-data">
        <div class="user__lable">
                <label class="user__lable-name" for="">Tên bài viết:</label>
                <input placeholder="Tên bài viết..." name="name_news" type="text" class="user__form-username"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Image:</label>
                <input placeholder="Image..." name="image" type="file" class="user__form-image-user"required >
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Thời gian:</label>
                <input placeholder="Thời gian..." type="date" name="time" class="user__form-username"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Nội dung:</label>
                <input placeholder="Nội dung..." name="content_news" type="text" class="user__form-email"required>
            </div>
            
            <button type="submit" name="submit" class="btn btn--primary user__form-btn">Thêm</button>
        </form>
    </div>
</div>