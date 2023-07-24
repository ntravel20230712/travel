<?php
// 檢查是否收到 mem_email 參數
if (isset($_GET['mem_email'])) {
    // 獲取 mem_email 參數的值
    $mem_email = $_GET['mem_email'];
   
    // 將 mem_email 返回作為 JSON 格式
    $response = array(
        'mem_email' => $mem_email
    );
   
    // 將回應轉換為 JSON 格式並輸出
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // 如果未收到 mem_email 參數，返回錯誤訊息
    $error_response = array(
        'error' => '未收到 mem_email 參數'
    );
   
    // 將回應轉換為 JSON 格式並輸出
    header('Content-Type: application/json');
    echo json_encode($error_response);
}
?>