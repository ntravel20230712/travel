<?php
function getAttractionsData() {

    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");	
    
    $sql = "SELECT att_name,att_City,att_Fraction FROM attractions";
    $result = mysqli_query($con,$sql) or die (mysqli_error($con));

    $data = array();

    if ($result->num_rows > 0) {
        // 將資料存入陣列中
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }


    // 回傳資料陣列
    return $data;
}
?>