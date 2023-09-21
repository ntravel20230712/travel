<?php
require_once('db_connect_wamp.php');

// 假設你已經建立了與資料庫的連接

if (isset($_GET['attractionName'])) {
    $attractionName = $_GET['attractionName'];

    // 使用 $attractionName 在資料庫中檢索相應的資料
    // 假設你的資料庫表名為 attractions，並且包含 att_name、att_content、att_lat 和 att_lng 欄位
    $query = "SELECT att_content, att_lat, att_lng, att_id, att_StartTime, att_EndTime, att_Address, att_Week FROM attractions WHERE att_name = '$attractionName'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // 如果查詢成功，獲取資料
        $row = mysqli_fetch_assoc($result);
        $description = $row['att_content'];
        $latitude = $row['att_lat'];
        $longitude = $row['att_lng'];
        $attid = $row['att_id'];
        $attStartTime = $row['att_StartTime'];
        $attEndTime = $row['att_EndTime'];
        $attAddress = $row['att_Address'];
        $attWeek = $row['att_Week']; // 假设这是从数据库中获取的数字
    
        // 使用函数将数字转换为文字
        $weekText = convertWeekNumberToText($attWeek);
    
        // 建立一個關聯陣列，包含景點的介紹內容、緯度和經度
        $attractionData = array(
            "attid" => $attid,
            "description" => $description,
            "lat" => $latitude,
            "lng" => $longitude,
            "attStartTime" => $attStartTime,
            "attEndTime" => $attEndTime,
            "attAddress" => $attAddress,
            "attWeek" => $weekText
        );
    
        // 將關聯陣列轉換為 JSON 格式回傳給前端
        echo json_encode($attractionData);
    } else {
        // 查詢失敗，輸出錯誤訊息
        echo "<script>alert('無法檢索景點資料。');</script>";
    }    
}
function convertWeekNumberToText($weekNumber) {
    if ($weekNumber === '1234567') {
        return '每天';
    }

    $days = array(
        1 => '週一',
        2 => '週二',
        3 => '週三',
        4 => '週四',
        5 => '週五',
        6 => '週六',
        7 => '週日'
    );

    // 将数字拆分为数组，每个数组元素代表一位数字
    $digits = str_split($weekNumber);

    $weekTextArray = array();

    foreach ($digits as $digit) {
        if ($digit >= 1 && $digit <= 7) {
            $weekTextArray[] = $days[$digit];
        }
    }

    $weekText = implode('、', $weekTextArray);

    return $weekText;
}



?>
