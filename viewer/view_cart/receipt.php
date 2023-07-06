<?php
$id_oder = $_GET['id_oder'];
$sql = "SELECT * FROM oders,users WHERE oders.id_user = users.id AND id_oder = $id_oder";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);


$sql_oder_detal = "SELECT *, oders_detail.quantity  FROM oders_detail,products WHERE oders_detail.id_product = products.id AND oders_detail.id_oder = '$id_oder'";
$query_oder_detal = mysqli_query($conn, $sql_oder_detal);


?>
<style>
    .receipt_header{
        margin-top:20px;
    }

    .receipt_heading{

    }

    .receipt_heading_name{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .receipt_heading_name-img{
        width: 150px;
        margin: auto;
    }

    .receipt_heading_address{
        display: block;
        font-size: 1.3rem;
        color: var(--primary-color);
        margin: auto;
    }

    .receipt_heaing_title{
        text-align: center;
        line-height: 3rem;
        color: var(--primary-color);
        align-items: center;
    }

    .receipt_heaing_title-1{
        display: block;
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--text-color);
    }

    .receipt_name_user, .receipt_address{
        font-size: 1.3rem;
        margin: 20px 0 20px 60px;
        color: var(--text-color);
    }

    .receipt_table{
        width: 100%;
        background-color: aliceblue;
        border-radius: 2px;
    }

    
    .receipt_table_th{
        padding: 10px 0;
        font-size: 1.3rem;
        color: var(--primary-color);
        border-bottom: 1px dashed rgba(0, 0, 0, 0.2);
    }
    .receipt_table_th:nth-child(1){
        width: 5%;
    }
    .receipt_table_th:nth-child(2){
        width: 50%;
    }
    .receipt_table_th:nth-child(3){
        width: 10%;
    }

    .receipt_table_td{
        text-align: center;
        padding: 15px 0;
        font-size: 1.1rem;
        color: var(--text-color) ;
    }
    .receipt_btn{
        margin: auto;
        text-align: center;
        margin-top: 20px;
    }

</style>
<h1 class="user__heading">Hóa Đơn</h1>
<div class="row">
    <div class="col l-12">
        <div class="receipt_header">
            <div class="receipt_heading">
                <div class="row">
                    <div class="col l-6">
                        <div class="receipt_heading_name">
                            <img class="receipt_heading_name-img" src="./assets/img/manga-logo.png" alt="">
                            <span class="receipt_heading_address">
                                04 Nguyễn Thúy - Hòa Minh Liên Chiểu - Đà Nẵng
                            </span>
                        </div>
                    </div>
                    <div class="col l-6">
                        <h1 class="receipt_heaing_title">
                            HÓA ĐƠN BÁN HÀNG
                            <span class="receipt_heaing_title-1">
                                MANGA SHOP
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="col l-6">
        <h1 class="receipt_name_user">
            Tên khách hàng: <?php echo $row['name_user'] ?>
        </h1>
        <h2 class="receipt_address">
            Địa chỉ: <?php echo $row['address'] ?>
        </h2>
        </div>
        <div class="col l-6">
        <h2 class="receipt_address">
            Số điện thoại: 0<?php echo $row['phone'] ?>
        </h2>
        <h2 class="receipt_address">
            Email: <?php echo $row['email'] ?>
        </h2>
    </div>
    <div class="col l-12">
        <h1 class="table_heading"></h1>
        <table class="receipt_table">
            <thead class="receipt_table_thead">
                <th class="receipt_table_th">STT</th>
                <th class="receipt_table_th">Tên sản phẩm</th>
                <th class="receipt_table_th">Số lượng</th>
                <th class="receipt_table_th">Đơn giá</th>
                <th class="receipt_table_th">Thành tiền</th>
            </thead>
            <?php
            $i = 1;
             while($row_oder_detal = mysqli_fetch_assoc($query_oder_detal)){  ?>
            <tbody class="receipt_table_tbody">
                <td class="receipt_table_td"><?php echo $i++ ?></td>
                <td class="receipt_table_td"><?php echo $row_oder_detal['name'] ?></td>
                <td class="receipt_table_td"><?php echo $row_oder_detal['quantity'] ?></td>
                <td class="receipt_table_td"><?php echo number_format($row_oder_detal['price'] )?>đ</td>
                <td class="receipt_table_td"><?php echo number_format(($row_oder_detal['quantity'] * $row_oder_detal['price'])) ?>đ</td>
            </tbody>
            <?php } ?>
            <tbody>
            <th class="receipt_table_td" colspan="2" >TỔNG</th>
            <th class="receipt_table_td"><?php echo $row['quantity_count'] ?></th>
            <th class="receipt_table_td"></th>
            <th class="receipt_table_td"><?php echo number_format($row['total'] )?>đ</th>
            </tbody>    
        </table>
    </div>
    <a href="index.php?page_layout=products" class="btn btn--primary receipt_btn">Hoàn tất</a>
</div>