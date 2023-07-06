<?php
use Carbon\Carbon;
use Carbon\CarbonInterval;
include '../../connect.php';
require '../../carbon/autoload.php';

$subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(365)->toDateString();
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$sql = "SELECT * FROM statistical WHERE date BETWEEN '$subdays' AND '$now' ORDER BY date ASC";
$sql_query = mysqli_query($conn,$sql);
while($val = mysqli_fetch_array($sql_query)){
    $chart_data[] = array(
        'date' => $val['date'],
        'order' => $val['oders'],
        'sales' => $val['sales'],
        'quantity' => $val['quantity']
    );
}
echo $data = json_encode($chart_data);
?>