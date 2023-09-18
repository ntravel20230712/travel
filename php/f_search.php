<?php
    header('Content-Type: application/json');
    // $mem_id = "4";
    // $att_CityNum = "18";
    $mem_id = $_POST['mem_id'];
    $att_CityNum = $_POST['att_CityNum'];


	require_once('db_connect_wamp.php');
    $sql="SELECT a.*
        FROM favorites f
        JOIN attractions a ON f.att_id = a.att_id
        WHERE f.mem_id = '$mem_id' AND a.att_CityNum = '$att_CityNum';";

    $result = mysqli_query($con, $sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
    } else {
        echo "查無資料";
    }

?>