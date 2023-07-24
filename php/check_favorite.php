<?php
// 创建数据库连接
require_once('db_connect_wamp.php');

// 检查连接是否成功
if ($con->connect_error) {
    die("连接数据库失败: " . $con->connect_error);
}

// 设置字符集
$con->set_charset("utf8mb4");

// 获取景点名称参数
$attractionName = $_GET['attractionName'];
$attractionName = mysqli_real_escape_string($con, $attractionName); // 防止 SQL 注入攻击

// 获取当前会员的 ID（根据您的代码中的会员登录部分来获取）
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['mem_id'])) {
    // 用户未登录，可以根据需要执行相应的操作（如重定向到登录页面）
    // ...
    exit;
}
$memberId = $_SESSION['mem_id']; // 假设当前会员的 ID 为 1

// 准备 SQL 查询
$sql = "SELECT COUNT(*) AS favoriteCount
        FROM favorites
        WHERE member_id = $memberId AND attraction_id = (
            SELECT att_id
            FROM attractions
            WHERE att_name = '$attractionName'
        )";

$result = $con->query($sql);

if ($result) {
    // 检查收藏记录是否存在
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // 获取收藏数量
        $favoriteCount = $row['favoriteCount'];

        // 构建 JSON 响应
        $response = array(
            'isFavorite' => $favoriteCount > 0
        );

        // 发送 JSON 响应
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // 没有收藏记录
        $response = array(
            'isFavorite' => false
        );

        // 发送 JSON 响应
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // 查询失败
    echo "查询失败: " . $con->error;
}

// 关闭连接
$con->close();
?>
