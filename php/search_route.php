<?php
// 连接到数据库
require_once('db_connect_wamp.php');
session_start();
if ($con->connect_error) {
    die("连接数据库失败: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cityNum = $_POST['att_CityNum'];
    $areaID = $_POST['ATT_AREAID'];

    // 查询第一个结果集
    $sql1 = "SELECT rs.RouteID, rs.Att_ID, rs.SortOrder, rs.startTime, rs.comment, a.att_name, a.att_City, a.att_Address, a.att_type, a.att_StartTime, a.att_EndTime, a.att__Week, a.att_content, a.att_picture, a.att_Fraction, a.ATT_AREANAME, a.ATT_AREAID, a.att_views 
            FROM route_sightseeing AS rs
            JOIN attractions AS a ON rs.Att_ID = a.att_id
            WHERE a.att_CityNum = '$cityNum'";

    // 如果 att_CityNum 和 ATT_AREAID 都不为 0，则使用两个条件
    if ($cityNum != 0 && $areaID != 0) {
        $sql1 .= " AND a.ATT_AREAID = '$areaID'";
    }

    $result1 = $con->query($sql1);

    // 将从第一个结果集找到的路线ID存储在数组中
    $routeIDs = array();
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $routeIDs[] = $row['RouteID'];
        }
    }

    // 根据找到的路线ID查询另一个数据表的信息
    $sql2 = "SELECT `RouteID`, `RouteName`, `V_C`, `route_recommend`, `route_startdate`, `route_update`, `mem_id` FROM `route` WHERE `RouteID` IN (" . implode(",", $routeIDs) . ")";
    $result2 = $con->query($sql2);

    // 将第二个结果集存储在数组中
    $dataArray = array();
    if ($result2 === false) {
        
    } else {
        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
                $dataArray[] = $row;
            } 
        }
    }

    // 存储数据到会话中
    $_SESSION['dataArray'] = $dataArray;

    // 检查是否找到路线并显示相关提示
    $noRoutesFound = empty($dataArray);
    if ($noRoutesFound && ($cityNum != 0 || $areaID != 0)) {
        echo '<script>alert("此區域無路線！");</script>';
    }
}

// 重定向到指定页面
header("refresh:0; url=../route_area.php");
?>
