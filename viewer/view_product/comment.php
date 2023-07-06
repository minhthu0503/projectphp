<?php
if (isset($_POST['submit'])) {
    $comment = $_POST['comment'];
    if (isset($_SESSION['username'])) {
        $date = date("Y-m-d");
        $id_product = $_GET['id'];
        $user_id = mysqli_fetch_array($conn->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'"));
        $user_id = $user_id['id'];
        $conn->query("INSERT INTO `comment` (`id`, `id_user`, `id_product`, `comment`, `time`) 
            VALUES (NULL, '$user_id', '$id_product', '$comment', '$date')");
        echo '<script language="javascript">alert("Đã bình luận! Cảm ơn bạn!");</script>';
    }
}
?>
<div class="comment">
    <div class="comment_head">
        <h1 class="comment__heading">
            Bình luận
        </h1>
        <div class="comment__contents">
            <table>           
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Nội dung</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $comments = $conn->query("SELECT * FROM users 
                    JOIN comment ON users.id = comment.id_user 
                    JOIN products ON comment.id_product = products.id WHERE id_product=".$_GET['id']);
                 if (mysqli_num_rows($comments) == 0) { ?>
                    <td></td>
                    <td>Sản phẩm chưa có bình luận</td>
                    <td></td>";
                <?php } else {
                    foreach($comments as $comment){
                    ?>
                    <tr>
                        <td><?php echo $comment['name_user'] ?></td>
                        <td><?php echo $comment['comment'] ?></td>
                        <td><?php echo $comment['time'] ?></td>
                    </tr>
                 <?php }
                 } ?>
                   
                </tbody>
            </table>
        </div>
    </div>
    <?php 
    if(isset($_SESSION['username'])){ ?>
        <form method="POST" class="comment__form">
            <input placeholder="Viết bình luận..." type="text" name="comment" class="comment__input" required>
            <button type="submit" name="submit" class="comment__btn btn btn--primary">Gửi bình luận</button>
        </form>
    <?php } else{ ?>
        <form class="comment__form">
            <h1 class="comment__form-heading">Đăng nhập để bình luận</h1>
        </form>
    <?php }
    ?>
</div>