<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if(isset($_GET["action"])){
    $action = $_GET["action"];
}else if(isset($_POST['action'])){
    $action = $_POST['action'];
}else{
    $action = 1;
}
// echo $action;
// echo '<br>';
// echo $id;
// die();
$quantity = (isset($_POST['quantity'])) ? $_POST['quantity'] : 1;
if($quantity <= 0){
    $quantity = 1;
}

$sql = "SELECT * FROM products WHERE id = $id";
$query = mysqli_query($conn,$sql);
if($query ){
    $row = mysqli_fetch_assoc($query); 
}
$item = [
    'id' => $row['id'],
    'name' => $row['name'],
    'image' => $row['image'],
    'price' => ($row['sale'] > 0) ? $row['sale'] : $row['price'],
    'quantity' => $quantity
];
if($action == 'add'){
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    }else{
        $_SESSION['cart'][$id] = $item;
    }
}
if($action == 'update'){
    $_SESSION['cart'][$id]['quantity'] = $quantity;
}
if($action == 'delete'){
    unset($_SESSION['cart'][$id]);
}


?>
    <script>
        location.href = 'index.php?page_layout=cart_view';
    </script>
<?php
?>