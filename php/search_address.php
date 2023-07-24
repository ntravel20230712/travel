<?php
    session_start();
    $search_text='%'.$_POST['search_text'].'%'	;
    if(isset($_POST['nearby_checkbox'])){
        $nearby_checkbox="on" ;
    }
    else{
        $nearby_checkbox="off" ;
    }

	require_once('db_connect_wamp.php');
    echo "search_text:".$search_text."<br>nearby_checkbox:".$nearby_checkbox."<br>";

    if($nearby_checkbox=="on"){
        // 執行查詢並取得結果
        $sql = "SELECT * FROM `attractions` WHERE `att_Address` LIKE '$search_text'" ;
        echo "on";
        $result = mysqli_query($con,$sql) or die (mysqli_error($con));
        // 檢查是否有資料
        if ($result->num_rows > 0) {
            // 取得第一筆資料的 lat 和 lng 值
            $row = $result->fetch_assoc();
            echo "lat: " . $row["att_lat"] . "，lng: " . $row["att_lng"] . "<br>";
        } else {
            echo "沒有找到相符的資料。";
        }
        $lat_max=$row["att_lat"]+0.1;
        $lat_min=$row["att_lat"]-0.1;
        $lng_max=$row["att_lng"]+0.1;
        $lng_min=$row["att_lng"]-0.1;
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
        $_SESSION['searchdata']=$data;
        $_SESSION['datacount']=count($data);
        header("refresh:0; url=../attraction_address.php");

    }
    else{
            $sql = "SELECT * FROM `attractions` WHERE `att_Address` LIKE '$search_text'" ;
            echo "off";
            $result = mysqli_query($con,$sql) or die (mysqli_error($con));
            $data = array();
        
                if ($result->num_rows > 0) {
                    // 將資料存入陣列中
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                }
          
                // 回傳資料陣列
            $_SESSION['searchdata']=$data;
            $_SESSION['datacount']=count($data);
            header("refresh:0; url=../attraction_address.php");
            // echo "<script>alert('登入成功!')</script>";

    }




?>
