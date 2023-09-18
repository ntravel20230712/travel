<?php
require_once('db_connect_wamp.php');

try {
    // 確保使用 $_GET['mem_email'] 時，該變數存在且有值
    if (isset($_GET['mem_email'])) {
        $mem_email = $_GET['mem_email'];

        // 根據會員帳號查詢對應的mem_id
        $sql = "SELECT mem_id FROM member WHERE mem_email = '$mem_email'";
        $result = $con->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $mem_id = $row['mem_id'];

                // 使用mem_id查詢member_routes資料表
                $sql = "SELECT RouteID FROM member_routes WHERE mem_id = '$mem_id'";
                $result = $con->query($sql);

                if ($result) {
                    $routeIDs = array();

                    if ($result->num_rows > 0) {
                        // 將查詢結果存入陣列
                        while ($row = $result->fetch_assoc()) {
                            $routeIDs[] = $row['RouteID'];
                        }

                        // 使用RouteID查詢route資料表獲取對應的RouteName
                        $routeNames = array();
                        foreach ($routeIDs as $routeID) {
                            $sql = "SELECT RouteName FROM route WHERE RouteID = '$routeID'";
                            $result = $con->query($sql);

                            if ($result) {
                                $row = $result->fetch_assoc();
                                $routeNames[] = $row['RouteName'];
                            } else {
                                // 查詢出現錯誤
                                throw new Exception("查詢 route 資料表時出現錯誤：" . $conn->error);
                            }
                        }

                        // 將結果回傳給APP端
                        echo json_encode($routeNames);
                    } else {
                        // 無符合條件的資料
                        echo "無符合條件的資料";
                    }
                } else {
                    // 查詢出現錯誤
                    throw new Exception("查詢 member_routes 資料表時出現錯誤：" . $conn->error);
                }
            } else {
                // 找不到對應的會員帳號
                echo "找不到對應的會員帳號";
            }
        } else {
            // 查詢出現錯誤
            throw new Exception("查詢 member 資料表時出現錯誤：" . $conn->error);
        }
    } else {
        // $_GET['mem_email'] 變數不存在或沒有值
        echo "缺少會員帳號資料";
    }

    $con->close();
} catch (Exception $e) {
    // 捕獲例外，印出錯誤訊息
    echo "發生錯誤：" . $e->getMessage();
}
?>
