<?php
function getAttractionstag() {

	require_once('db_connect_wamp.php');
    $sql = "SELECT tag_id,tag_name FROM tags";
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