<?php 
$sql = "SELECT * FROM news ORDER BY time DESC";
$query = mysqli_query($conn,$sql);
?>
<h1 class="product-heading">Tin tức</h1>
<div class="row">
<?php while($row = mysqli_fetch_assoc($query)){ ?>
    <a href="index.php?page_layout=news_detail&id=<?php echo $row['id_news'] ?>" class="news_link">
        <div class="col l-6">
            <div class="news">
                <div class="news_modal"></div>
                <img src="./assets/img/<?php echo $row['image'] ?>" alt="" class="news_img">
                <h1 class="news_heading"><?php echo $row['name_news'] ?></h1>
            </div>
        </div>
    </a>
    <?php }?>
</div>