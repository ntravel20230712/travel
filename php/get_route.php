<?php
// 连接数据库  
require_once('db_connect_wamp.php');

// 查询语句
$sql = "SELECT * FROM route";

$result = mysqli_query($con, $sql);

// 获取路线  
$route = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 返回 JSON 格式
header('Content-Type: application/json');
echo json_encode($route);

mysqli_close($con);

?>