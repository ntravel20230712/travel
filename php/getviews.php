<?php
// 建立数据库连接
        require_once('php/db_connect_wamp.php');

        // 获取景点数据的查询语句，假设您使用的是 MySQL 数据库
        $query = "SELECT att_id, att_name, att_views FROM attractions";

        // 执行查询
        $result = mysqli_query($con, $query);

        // 存储结果的数组
        $viewsData = array();
        $idData = array();
        // 处理查询结果
        while ($row = mysqli_fetch_assoc($result)) {
            $viewsData[$row['att_name']] = $row['att_views'];
            $idData[$row['att_name']] = $row['att_id'];
        }
        
        // 关闭数据库连接
        mysqli_close($con);
?>