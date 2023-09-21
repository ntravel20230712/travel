<?php
// 建立数据库连接
require_once('db_connect_wamp.php');

// 获取收藏数的查询语句，使用左连接和 COALESCE 函数处理没有收藏的景点
$query = "SELECT route.routeid, COALESCE(COUNT(route_favorites.routeid), 0) AS favoriteCount
          FROM route
          LEFT JOIN route_favorites ON route.routeid = route_favorites.routeid
          GROUP BY route.routeid";

// 执行查询
$result = mysqli_query($con, $query);


// 存储收藏数的数组
$favoriteCounts = array();

// 处理查询结果
while ($row = mysqli_fetch_assoc($result)) {
    $routeid = $row['routeid']; // 修改此行，將 'attraction_id' 改為 'att_id'
    $favoriteCount = $row['favoriteCount'];
    $favoriteCounts[$routeid] = $favoriteCount;

}
//print_r($favoriteCounts);
$sql = "SELECT RouteID, COUNT(*) AS route_recommend 
        FROM route_favorites 
        GROUP BY RouteID";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {

  $routeId = $row['RouteID'];
  $recommend = $row['route_recommend'];
  
  $sql = "UPDATE route SET route_recommend = $recommend WHERE RouteID = $routeId";

  mysqli_query($con, $sql);

}

?>