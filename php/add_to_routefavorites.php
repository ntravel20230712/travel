<?php

session_start();

// 檢查使用者是否已登入
if (!isset($_SESSION['mem_id'])) {
    // 使用者未登入，可以根據需要執行相應的操作（如重定向到登入頁面）
    // ...
    exit;
}
$originalRecommend = $route['route_recommend'];

// 取得前端發送的路線 ID
$RouteID = $_POST['RouteID'];

// 建立資料庫連線
require_once('db_connect_wamp.php');

// 檢查連線是否成功
if ($con->connect_error) {
    die("連結資料庫失敗: " . $con->connect_error);
}

// 設定字元集
$con->set_charset("utf8mb4");

// 檢查當前使用者是否已收藏該路線
if (isset($_SESSION['mem_id'])) {
    $memID = $_SESSION['mem_id'];

    // 在这里处理其他逻辑，如获取路线数据等

    // 检查 $memID 是否存在
    if (empty($memID)) {
        echo '<script>alert("请先登入会员");</script>';
    }
} else {
    echo '<script>alert("请先登入会员");</script>';
}$stmt = $con->prepare("SELECT * FROM route_favorites WHERE mem_id = ? AND RouteID = ?");
$stmt->bind_param("ii", $memID, $RouteID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // 已收藏，執行取消收藏操作
    $stmt = $con->prepare("DELETE FROM route_favorites WHERE mem_id = ? AND RouteID = ?");
    $stmt->bind_param("ii", $memID, $RouteID);
    $sql = "UPDATE route SET route_recommend = route_recommend - 1 WHERE RouteID = {$RouteID}";
    mysqli_query($con, $sql);


    if ($stmt->execute()) {
        // 取消收藏成功
        echo "unfavorited";
    } else {
        // 取消收藏失敗
        echo "error";
    }
} else {
    // 未收藏，執行添加收藏操作
    $stmt = $con->prepare("INSERT INTO route_favorites (mem_id, RouteID) VALUES (?, ?)");
    $stmt->bind_param("ii", $memID, $RouteID);
    $sql = "UPDATE route SET route_recommend = route_recommend + 1 WHERE RouteID = {$RouteID}";
    mysqli_query($con, $sql);


    try {
        if ($stmt->execute()) {
            // 收藏成功
            echo "favorited";
        } else {
            // 收藏失敗
            echo "error1";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// 關閉連線和語句
$stmt->close();
$con->close();
?>
