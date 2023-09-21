<?php
// check_email_availability.php
header("Access-Control-Allow-Origin: *"); // 允许所有域名的请求
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // 允许的HTTP方法
header("Access-Control-Allow-Headers: *"); // 允许的请求头


// 获取来自 AJAX 请求的电子邮件
$mem_email = $_POST['mem_email'];

// 假设您的数据库连接代码在这里
require_once('db_connect_wamp.php');
// 查询数据库以检查电子邮件是否已存在
$sql = "SELECT mem_id FROM member WHERE mem_email = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 's', $mem_email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) {
    echo 'exists'; // 电子邮件已存在
} else {
    echo 'available'; // 电子邮件可用
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
