<?php
$sql_cate = "SELECT * FROM category";
$query_cate = mysqli_query($conn, $sql_cate);
// include '../connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

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

    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $content = $_POST['content'];
    $day = $_POST['day'];
    $click = $_POST['click'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $author = $_POST['author'];

    $sql = "INSERT INTO `products` (`id`, `name`, `image`, `category`, `quantity`,`content`,`day`,`click`,`price`,`sale`,`author`) 
    VALUES (NULL,'$name', '$image', '$category', '$quantity', '$content', '$day', '$click', '$price', '$sale', '$author ');";

    $query = mysqli_query($conn, $sql);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
        ?>
    <script>
        location.href = 'admin.php?page_layout=select_product';
    </script>
<?php
    } else {
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
}

?>
<div class="admin_create_user">
    <h1 class="admin_create_heading">
        Thêm Sản phẩm
    </h1>
    <div class="create_user">
        <form action="" method="POST" class="user__form" enctype="multipart/form-data">
            <div class="user__lable">
                <label class="user__lable-name" for="">Tên sản phẩm:</label>
                <input placeholder="Tên sản phẩm..." name="name" type="text" class="user__form-username"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Image:</label>
                <input placeholder="Image..." name="image" type="file" class="user__form-image-user"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Loại:</label>
                <select placeholder="Loại..." name="category" type="text" class="user__form-password"required >
                    <?php
                    while ($row_cate = mysqli_fetch_assoc($query_cate)) { ?>
                    <option value="<?php echo $row_cate['id_category'] ?>"><?php echo $row_cate['name_category']?></option>
                    <?php }
                    ?>
                </select>            
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Số lượng:</label>
                <input placeholder="Số lượng..." type="text" name="quantity" class="user__form-username"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Nội dung:</label>
                <input placeholder="Nội dung..." name="content" type="text" class="user__form-email"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Ngày:</label>
                <input placeholder="Ngày..." name="day" type="text" class="user__form-phone"required >
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Lượt xem:</label>
                <input placeholder="Lượt xem..." type="text" name="click" class="user__form-address"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Giá:</label>
                <input placeholder="Giá..." type="text" name="price" class="user__form-address"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Giảm giá:</label>
                <input placeholder="Giảm giá..." type="text" name="sale" class="user__form-address"required>
            </div>
            <div class="user__lable">
                <label class="user__lable-name" for="">Tác giả:</label>
                <input placeholder="Tác giả..." type="text" name="author" class="user__form-address"required>
            </div>
            <button type="submit" name="submit" class="btn btn--primary user__form-btn">Thêm</button>
        </form>
    </div>
</div>