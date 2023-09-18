<?php
session_start();
require_once('db_connect_wamp.php'); 



// 獲取目前登入的會員帳號
$mem_email = $_POST['mem_email']; // 改成使用 $_GET['mem_email']

// 根據會員帳號查詢對應的mem_id
$sql = "SELECT mem_id FROM member WHERE mem_email = '$mem_email'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $mem_id = $row['mem_id'];

    // 使用mem_id查詢member_routes資料表
    $sql = "SELECT RouteID FROM member_routes WHERE mem_id = '$mem_id'";
    $result = $conn->query($sql);

    $routeIDs = array();

    if ($result->num_rows > 0) {
        // 將查詢結果存入陣列
        while ($row = $result->fetch_assoc()) {
            $routeIDs[] = $row['RouteID'];
        }

        // 使用RouteID查詢route資料表獲取對應的RouteName
        $routeNames = array();
        foreach ($routeIDs as $routeID) {
            $sql = "SELECT RouteName FROM route WHERE RouteID = '$routeID'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $routeNames[] = $row['RouteName'];
        }

        // 將結果回傳給APP端
        echo json_encode($routeNames);
    } else {
        // 無符合條件的資料
        echo "無符合條件的資料";
    }
} else {
    // 找不到對應的會員帳號
    echo "找不到對應的會員帳號";
}

$conn->close();
?>
