<?php
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['mem_id'])) {
    // 用户未登录，可以根据需要执行相应的操作（如重定向到登录页面）
    // ...
    exit;
}

// 获取前端发送的景点名称
$attractionName = $_POST['attractionName'];

// 创建数据库连接
require_once('db_connect_wamp.php');

// 检查连接是否成功
if ($con->connect_error) {
    die("连接数据库失败: " . $con->connect_error);
}

// 设置字符集
$con->set_charset("utf8mb4");

// 查询数据库获取景点ID
$stmt = $con->prepare("SELECT att_id FROM attractions WHERE att_name = ?");
$stmt->bind_param("s", $attractionName);
$stmt->execute();
$result = $stmt->get_result();

// 检查是否找到对应的景点
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $attractionID = $row['att_id'];

    // 检查当前用户是否已收藏该景点
    $memID = $_SESSION['mem_id'];
    $stmt = $con->prepare("SELECT * FROM favorites WHERE member_id = ? AND attraction_id = ?");
    $stmt->bind_param("ii", $memID, $attractionID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // 已收藏，执行取消收藏操作
        $stmt = $con->prepare("DELETE FROM favorites WHERE member_id = ? AND attraction_id = ?");
        $stmt->bind_param("ii", $memID, $attractionID);
        if ($stmt->execute()) {
            // 取消收藏成功
            echo "unfavorited";
        } else {
            // 取消收藏失败
            echo "error";
        }
    } else {
        // 未收藏，执行添加收藏操作
        $stmt = $con->prepare("INSERT INTO favorites (member_id, attraction_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $memID, $attractionID);
        if ($stmt->execute()) {
            // 收藏成功
            echo "favorited";
        } else {
            // 收藏失败
            echo "error";
        }
    }
} else {
    // 未找到对应的景点
    echo "attraction_not_found";
}

// 关闭连接和语句
$stmt->close();
$con->close();
?>
