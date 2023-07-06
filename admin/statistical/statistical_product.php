<?php
$sql = "SELECT category.id_category ,
 category.name_category,
 count(products.id) as count_products,
 min(products.price) as min_price,
 max(products.price) as max_price,
 avg(products.price) as avg_price  
 FROM products LEFT JOIN category on category.id_category = products.category
 GROUP BY category.id_category ORDER BY category.id_category DESC";
$query = mysqli_query($conn, $sql);
?>
<div class="admin_create_user">
    <h1 class="admin__heading">
        Thống kê hàng hóa
    </h1>
    <div class="select_user">
        <div class="select_user_head">
            <h1 class="select_user__heading">
                Thống kê hàng hóa
            </h1>
            <div class="select_user__contents">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Loại truyện</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['name_category']; ?></td>
                            <td><?php echo $row['count_products'] ?></td>
                            <td><?php echo number_format( $row['max_price']) ?>đ</td>
                            <td><?php echo number_format( $row['min_price']) ?>đ</td>
                            <td><?php echo number_format( $row['avg_price']) ?>đ</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>