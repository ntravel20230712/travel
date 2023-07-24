<?php
require_once('db_connect_wamp.php');

try {
    // 確保使用 $_GET['routename'] 時，該變數存在且有值
    if (isset($_GET['routename'])) {
        $routename = $_GET['routename'];

        // 根據路線名稱找到對應的routeID
        $sql = "SELECT routeID FROM route WHERE routename = '$routename'";
        $result = $con->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $routeID = $row['routeID'];
          

                // 使用routeID查詢route_sightseeing資料表獲取所有相符的資料並排序
                $sql = "SELECT * FROM route_sightseeing WHERE routeID = '$routeID' ORDER BY SORTORDER";
                $result = $con->query($sql);
                
                
                
                if ($result) {
                    $att_names = array();

                    if ($result->num_rows > 0) {
                        // 將查詢結果存入陣列
                        while ($row = $result->fetch_assoc()) {

                
                            $att_id = $row['Att_ID'];


                            $sql = "SELECT ATT_NAME FROM attractions WHERE Att_ID = '$att_id'";
                            $result_att = $con->query($sql);

                            if ($result_att) {
                                $row_att = $result_att->fetch_assoc();
                                $att_name = $row_att['ATT_NAME'];
                                $att_names[] = array('Att_ID' => $att_id, 'ATT_NAME' => $att_name);
                            } else {
                                // 查詢出現錯誤
                                throw new Exception("查詢 attractions 資料表時出現錯誤：" . $con->error);
                            }
                        }

                        // 將結果回傳給APP端
                        echo json_encode($att_names);
                    } else {
                        // 無符合條件的資料
                        echo "無符合條件的資料";
                    }
                } else {
                    // 查詢出現錯誤
                    throw new Exception("查詢 route_sightseeing 資料表時出現錯誤：" . $con->error);
                }
            } else {
                // 找不到對應的路線名稱
                echo "找不到對應的路線名稱";
            }
        } else {
            // 查詢出現錯誤
            throw new Exception("查詢 route 資料表時出現錯誤：" . $con->error);
        }
    } else {
        // $_GET['routename'] 變數不存在或沒有值
        echo "缺少路線名稱資料";
    }

    $con->close();
} catch (Exception $e) {
    // 捕獲例外，印出錯誤訊息
    echo "發生錯誤：" . $e->getMessage();
}
?>
