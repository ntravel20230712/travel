<?php
require_once('db_connect_wamp.php'); 
// 取得路線名稱
$routename = $_GET['routename'];

try {
    // 根據路線名稱找到對應的routeID
    $stmt = $con->prepare("SELECT routeID FROM route WHERE routename = :routename");
    $stmt->bindParam(':routename', $routename);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $routeID = $row['routeID'];

    // 根據routeID找到對應的路線資料
    $stmt = $con->prepare("SELECT * FROM route_sightseeing WHERE routeID = :routeID ORDER BY SORTORDER");
    $stmt->bindParam(':routeID', $routeID);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 根據route_sightseeing的結果，透過ATT_ID找到對應的ATT_NAME
    $att_names = array();
    foreach ($results as $result) {
        $att_id = $result['ATT_ID'];
        $stmt = $con->prepare("SELECT ATT_NAME FROM ATTractions WHERE ATT_ID = :att_id");
        $stmt->bindParam(':att_id', $att_id);
        $stmt->execute();
        $att_row = $stmt->fetch(PDO::FETCH_ASSOC);
        $att_name = $att_row['ATT_NAME'];
        $att_names[] = $att_name;
    }

    // 將結果回傳成JSON格式
    header('Content-Type: application/json');
    echo json_encode($att_names);
} catch (PDOException $e) {
    die("錯誤：" . $e->getMessage());
}
