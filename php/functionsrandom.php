<?php
function getAttractionsDatarandom() {

	require_once('db_connect_wamp.php');
    $sql = "SELECT * FROM attractions ORDER BY RAND() LIMIT 6";
    // $sql = "SELECT att_name,att_City,att_Fraction FROM attractions";
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