<?php
// 假设您已经建立了数据库连接
require_once('db_connect_wamp.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 执行从 "favorites" 表中删除记录的操作
    $query = "DELETE FROM favorites WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // 检查是否删除成功
    if ($stmt->affected_rows > 0) {
        // 删除成功，可以进行相应的重定向或显示成功消息等操作
        header("Location: ../like_attractions.php");
        exit;

    } else {
        // 删除失败，可以显示错误消息或进行其他处理
        echo "删除失败。";
    }

    $stmt->close();
}

$con->close();
?>