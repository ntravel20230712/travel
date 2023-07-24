<?php
// 連接到你的資料庫
require_once('db_connect_wamp.php');

if (!$con) {
    die("資料庫連接失敗: " . mysqli_connect_error());
}

// 從前端接收景點名稱參數
$attractionName = $_POST['attractionName'];

// 更新點閱次數
$query = "UPDATE attractions SET att_views = att_views + 1 WHERE att_name = '$attractionName'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "點閱次數已增加";
} else {
    echo "更新點閱次數失敗";
}

?>
