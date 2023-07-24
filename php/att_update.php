<?php


        $att_name = $_POST['att_name']	;
        $att_CityNum = $_POST['att_CityNum'];
        $ATT_AREAID = $_POST['ATT_AREAID'];
        $att_StartTime = $_POST['att_Starttime']	;
        $att_EndTime = $_POST['att_Endtime']	;
        $att__Week = $_POST['att__Week']	;
        $att_type = $_POST['att_type']	;
        $att_content=$_POST['att_content'];
        $att_tag_1=$_POST['att_tag_1'];
        $att_tag_2=$_POST['att_tag_2'];
        $att_tag_3=$_POST['att_tag_3'];
        $att_picture=$_POST['att_picture'];

        // require_once('php/setCityName_function.php');
        // $att_City = setCityName($att_CityNum);

        $att_Address = $_POST['att_Address']	;
        require_once('getLatLng_function.php');
        $latLng = getLatLng($att_Address);
        $att_lat=$latLng['lat'];
        $att_lng=$latLng['lng'];

        echo "att_name:".$att_name."<br>".
            "att_CityNum:".$att_CityNum."<br>".
            "ATT_AREAID:".$ATT_AREAID."<br>".
            "att_StartTime:".$att_StartTime."<br>".
            "att_EndTime:".$att_EndTime."<br>".
            "att__Week:".$att__Week."<br>".
            "att_type:".$att_type."<br>".
            "att_content:".$att_content."<br>".
            "att_tag_1:".$att_tag_1."<br>".
            "att_tag_2:".$att_tag_2."<br>".
            "att_tag_3:".$att_tag_3."<br>".
            "att_picture:".$att_picture."<br>".
            "att_Address:".$att_Address."<br>".
            "att_lat:".$att_lat."<br>".
            "att_lng:".$att_lng."<br>";


        require_once('db_connect_wamp.php');
        
        $sql = "INSERT INTO `attractions` (`att_id`, `att_name`, `att_City`, `att_CityNum`, `att_Address`, `att_lat`, `att_lng`, `att_type`, `att_StartTime`, `att_EndTime`, `att__Week`, `att_content`, `att_picture`, `att_Fraction`, `ATT_AREANAME`, `ATT_AREAID`) 
                                        VALUES (NULL, '$att_name', NULL, '$att_CityNum', '$att_Address', '$att_lat', '$att_lng', '$att_type', '$att_StartTime', '$att_EndTime', '$att__Week', '$att_content', '$att_picture', NULL, NULL, '$ATT_AREAID');";

        if (mysqli_query($con, $sql)) {
            // 獲取 AUTO_INCREMENT 值
            $att_id = mysqli_insert_id($con);
            if($att_tag_1!=0){
                mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_1')");
                echo "att_id:".$att_id."<br>"."att_tag_1:".$att_tag_1."<br>";
                echo "tag1成功.<br>";
                if($att_tag_2!=0){
                    mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_2')");
                    echo "tag2成功.<br>";
                    if($att_tag_3!=0){
                        mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_3')");
                        echo "tag3成功.<br>";
                    }
                }
            }
            echo "插入成功，att_id 值為: " . $att_id;
        } else {
            echo "錯誤: " . $sql . "<br>" . mysqli_error($con);
        }

        
        echo "<script>alert('成功上傳景點資料!')</script>"; 
        
        header("refresh:0; url=../willattraction.php"); 
        







?>