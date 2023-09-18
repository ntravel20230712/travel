<?php
function getAttractionslatlngdata() {
    
	require_once('php/db_connect_wamp.php');
        // 執行查詢並取得結果
        $sql = "SELECT * FROM `attractions`" ;
        $result = mysqli_query($con,$sql) or die (mysqli_error($con));
        // 檢查是否有資料
        $data = array();
        if ($result->num_rows > 0) {
          // 將資料存入陣列中
          while ($row = $result->fetch_assoc()) {
              $lnglatdata[] = $row;
          }
      }
   

    // 回傳資料陣列
    mysqli_close($con);
    return $lnglatdata;


}
?>