<?php
use Carbon\Carbon;

$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql_up = "SELECT * FROM users WHERE username = '$username'";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
} else {
    echo '<script language="javascript">alert("Vui lòng đăng nhập!");</script>';
?>
    <script>
        location.href = 'index.php?page_layout=cart_view';
    </script>
<?php
}
?>
<?php
$total = '';
$quantity_count = '';
require 'carbon/autoload.php';
$now = Carbon::now('Asia/Ho_Chi_Minh');

if (isset($_POST['submit'])) {
    $id = $row_up['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $total = $_POST['total'];
    $quantity_count = $_POST['quantity_count'];

    $sql = "INSERT INTO oders(id_oder,id_user,total,quantity_count,note,status,address,email,phone,cart_date) 
    VALUE ('NULL','$id','$total','$quantity_count','$note','1','$address','$email','$phone','$now') ";
    $query = mysqli_query($conn,$sql);

    if($query){
        $id_order = mysqli_insert_id($conn);
        foreach($cart as $value){
            mysqli_query($conn,"INSERT INTO oders_detail(id_oder,id_product,quantity,price)
            VALUE ('$id_order','$value[id]','$value[quantity]','$value[price]') ");
        }
        echo '<script language="javascript">alert("Đặt hàng thành công!");</script>';
        unset($_SESSION['cart']);
        ?>
        <script>
        location.href = 'index.php?page_layout=receipt&id_oder=<?php echo $id_order ?>';
        </script>
 <?php   }
}
?>
<h1 class="user__heading">Thông tin khách hàng</h1>
<form action="" method="POST" class="user__form">
    <div class="user__lable">
        <label class="user__lable-name" for="">Họ và tên:</label>
        <input placeholder="Họ và tên..." name="name" type="text" class="user__form-username" required value="<?php echo $row_up['name_user'] ?>">
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
        <label class="user__lable-name" for="">Ghi chú:</label>
        <textarea cols="54" rows="5" placeholder="Ghi chú..." type="" name="note" class="user__form-address" value=""></textarea>
    </div>
    <h1 class="select_user__heading heading_cart">
        Thông tin đơn hàng
    </h1>
    <div class="select_user__contents form_products">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Ngày đặt hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                $total = 0;
                $quantity_count = 0;
                foreach ($cart as $key => $value) {
                    $total += ($value['price'] * $value['quantity']);
                    $quantity_count += $value['quantity'];
                ?>

                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $value['name'] ?>
                        </td>
                        <td class="cart_quantity">
                            <?php echo $value['quantity'] ?>
                        </td>
                        <td><?php $price_products = ($value['price'] * $value['quantity']);
                            echo number_format($price_products) ?>đ
                        </td>
                        <td><?php echo $now ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <span class="cart_notify">Tổng số lượng: <?php echo $quantity_count; ?></span>
        <h1 class="cart_notify">Tổng tiền: <?php echo number_format($total); ?>VND</h1>
        <input type="date" hidden name="day" value="<?php echo $quantity_count ?>">
        <input type="hidden" name="quantity_count" value="<?php echo $quantity_count ?>">
        <input type="hidden" name="total" value="<?php echo $total ?>">
        <button type="submit" name="submit" class="btn btn--primary user__form-btn">Đặt hàng</button>        
    </div>

</form>