<?php
$id_news = $_GET['id'];
$sql = "SELECT * FROM news WHERE id_news = $id_news";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
$view = $row['view'];
if (isset($_GET['id'])) {
    $view += 1;
    $sql = "UPDATE `news` SET 
     `view` = '$view'
     WHERE `id_news` = '$id_news'";
    $query = mysqli_query($conn, $sql);
}
?>
<div class="row">
    <div class="col l-12">
        <div class="news_detail">
            <h1 class="news_detail_heading">
                 <?php echo $row['name_news'] ?>
            </h1>
            <p class="news_detail_time"><?php echo $row['time'] ?><span class="news_detail_view"><?php echo $row['view'] ?> lượt xem</span></p>
            <img src="./assets/img/<?php echo $row['image'] ?>" alt="" class="news_detail_img">
            <p class="news_detail_content">
            <?php echo $row['content_news'] ?>
            </p>
        </div>
    </div>
</div>
<?php include 'news.php' ?>