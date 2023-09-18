<?php
// 获取从前端传递过来的 attractionId
$attractionId = $_GET['attractionId'];

// 连接数据库
require_once('db_connect_wamp.php');
if ($con->connect_error) {
    die("连接数据库失败: " . $con->connect_error);
}

// 查询包含 $attractionId 的路线
$sql1 = "SELECT `RouteID`, `Att_ID`, `SortOrder`, `startTime`, `comment` 
         FROM `route_sightseeing` 
         WHERE `Att_ID` = '$attractionId'";
$result1 = $con->query($sql1);

// 将查询到的 RouteID 存储在数组中
$routeIDs = array();
if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $routeIDs[] = $row['RouteID'];
    }

    // 查询对应的路线信息
    $relatedData = array();
    foreach ($routeIDs as $routeID) {
        $sql2 = "SELECT `RouteID`, `RouteName`, `V_C`, `route_recommend`, `route_startdate`, `route_update`, `mem_id` 
                 FROM `route` 
                 WHERE `RouteID` = '$routeID'";
        $result2 = $con->query($sql2);
        
        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
                $relatedData[] = $row;
            }
        }
    }

    // 将路线信息存储在会话中
    $_SESSION['relatedData'] = $relatedData;
} else {
    // 没有找到路线时，设置空数组并存储在会话中
    $_SESSION['relatedData'] = array();
}
?>
