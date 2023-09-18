<?php
    header('Content-Type: application/json');
    // $att_id = 30;
    // $radius = 100;
    $att_id = $_POST['att_id'];
    $radius = $_POST['radius'];
    $km=($radius*0.009);
	require_once('db_connect_wamp.php');

        // 執行查詢並取得結果
        $sql = "SELECT * FROM `attractions` WHERE `att_id` LIKE '$att_id'" ;
        $result = mysqli_query($con,$sql) or die (mysqli_error($con));
        // 檢查是否有資料
        if ($result->num_rows > 0) {
            // 取得第一筆資料的 lat 和 lng 值
            $row = $result->fetch_assoc();
        }
        // 1KM=0.009latlng
        $lat_max=$row["att_lat"]+$km;
        $lat_min=$row["att_lat"]-$km;
        $lng_max=$row["att_lng"]+$km;
        $lng_min=$row["att_lng"]-$km;
        $sql="SELECT * FROM `attractions` WHERE `att_lat` BETWEEN '$lat_min' AND '$lat_max' AND `att_lng` BETWEEN '$lng_min' AND '$lng_max'";
        $result = mysqli_query($con,$sql) or die (mysqli_error($con));
        $data = array();
            if ($result->num_rows > 0) {
                // 將資料存入陣列中
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
      
            // 回傳資料陣列
            echo json_encode($data);






?>
