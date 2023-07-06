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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $count_category = count($row = mysqli_fetch_assoc($query));
            $i = 1;
            foreach ($row = mysqli_fetch_assoc($query) as $thongke) {
             
                if ($i == $count_category) $dayphay = '';
                else $dayphay = ',';?>
                ['<?php echo $thongke['name_category']; ?>', <?php echo $thongke['count_products']?>]<?php echo $dayphay?>
            <?php
                $i+=1;
            } ?>
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'My Average Day',
            'width': 550,
            'height': 400
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>