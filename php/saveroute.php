<?php
session_start(); // 開始 session

date_default_timezone_set('Asia/Taipei');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['input'])) {
    $userInput = $_POST['input'];
    
    // 儲存到 session
    $_SESSION['RouteName'] = $userInput;
    $RouteName=$_SESSION['RouteName'];
    echo $RouteName."<br>";

    $mem_id=$_SESSION['mem_id'];
    echo $mem_id."<br>";

    $route_update = date("Y-m-d H:i:s");
    echo $route_update."<br>";





    $V_C="";
    $t=1;
    $existingTiles = $_SESSION['existingTiles'];
    foreach ($existingTiles as $tile) {
    //   echo "[".$t.",".$tile["att_id"].",".$tile["time"].",".$tile["place"].",".$tile["comment"]."]";
      $V_C.=$t.$tile["att_id"];
      $t+=1;
    }
    echo $V_C."<br>";

	require_once('db_connect_wamp.php');
    $sql="INSERT INTO `route` (`RouteName`, `V_C`, `route_recommend`, `route_startdate`, `route_update`, `mem_id`) 
    VALUES ('$RouteName', '$V_C', '0', NULL, '$route_update', '$mem_id');";

    // 執行SQL語句
    if ($con->query($sql) === TRUE) {
        // 獲取剛插入的route_id
        $route_id = $con->insert_id;
        echo $route_id."<br>";
        $sql="INSERT INTO `member_routes` (`mem_id`, `RouteID`, `updated_at`, `mem_route_state`, `mem_route_collect`) 
                                    VALUES ('$mem_id', '$route_id', '$route_update', '0', '0');";
        mysqli_query($con, $sql);

        $t=1;
        $existingTiles = $_SESSION['existingTiles'];
        foreach ($existingTiles as $tile) {
            $sql = "INSERT INTO `route_sightseeing` (`RouteID`, `Att_ID`, `SortOrder`, `startTime`, `comment`) 
            VALUES ('$route_id', '{$tile['att_id']}', '$t', '{$tile['time']}', '{$tile['comment']}');";
            mysqli_query($con, $sql);
            echo "[".$t.",".$tile["att_id"].",".$tile["time"].",".$tile["place"].",".$tile["comment"]."]";
            $t+=1;
        }

        
    }
    
    unset($_SESSION['existingTiles']);
    echo "<script>alert('成功上傳行程資料!')</script>"; 
        
    header("refresh:0; url=../my_route.php"); 


}




?>