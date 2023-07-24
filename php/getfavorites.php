<?php
// 建立数据库连接
require_once('db_connect_wamp.php');

// 获取收藏数的查询语句，使用左连接和 COALESCE 函数处理没有收藏的景点
$query = "SELECT attractions.att_id, COALESCE(COUNT(favorites.attraction_id), 0) AS favoriteCount
          FROM attractions
          LEFT JOIN favorites ON attractions.att_id = favorites.attraction_id
          GROUP BY attractions.att_id";

// 执行查询
$result = mysqli_query($con, $query);


// 存储收藏数的数组
$favoriteCounts = array();

// 处理查询结果
while ($row = mysqli_fetch_assoc($result)) {
    $attractionId = $row['att_id']; // 修改此行，將 'attraction_id' 改為 'att_id'
    $favoriteCount = $row['favoriteCount'];
    $favoriteCounts[$attractionId] = $favoriteCount;

}

?>
