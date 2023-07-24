<?php
require_once('db_connect_wamp.php');

// 假設你已經建立了與資料庫的連接

if (isset($_GET['attractionName'])) {
    $attractionName = $_GET['attractionName'];

    // 使用 $attractionName 在資料庫中檢索相應的資料
    // 假設你的資料庫表名為 attractions，並且包含 att_name 和 att_description 欄位
    $query = "SELECT att_content FROM attractions WHERE att_name = '$attractionName'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // 如果查詢成功，獲取資料
        $row = mysqli_fetch_assoc($result);
        $description = $row['att_content'];

        // 在此處使用 $description 變數來顯示景點的介紹內容
        echo $description;
    } else {
        // 查詢失敗，輸出錯誤訊息
        echo "<script>alert('無法檢索景點資料。');</script>";
    }
}
?>
