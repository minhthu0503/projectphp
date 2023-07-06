<?php 
    $sql = "SELECT * FROM category";
    $query = mysqli_query($conn, $sql);
?>
<h3 class="category__heading">
    <ion-icon class="category__heading-icon" name="list-outline"></ion-icon>
    Danh mục
</h3>
<ul class="category-list">
<?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <li class="category-item">
        <a href="index.php?page_layout=products_main&id=<?php echo $row['id_category'] ?>" class="category-item__link category-item__link-active"><?php echo $row['name_category'] ?></a>
    </li>
   <?php } ?>
</ul>