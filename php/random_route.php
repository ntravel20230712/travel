<?php
    require_once("php/db_connect_wamp.php");
    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");	

    $sql = "SELECT * FROM `route` ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($con,$sql) or die (mysqli_error($con));

    $data = array();

    if ($result->num_rows > 0) {
        // 將資料存入陣列中
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // print_r($data);
    // 回傳資料陣列
    $routedata=$data[0];
    return $routedata;
    ?>