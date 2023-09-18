<?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fields_to_check = ['att_name', 'att_CityNum', 'ATT_AREAID', 'days', 'att_type', 'att_content'];

            foreach ($fields_to_check as $field) {
                if (empty($_POST[$field])) {
                    echo "<script>alert('請確保所有欄位都已填寫！'); window.history.back();</script>";
                    exit;
                }
            }
        }

        $att_name = $_POST['att_name']	;
        $att_CityNum = $_POST['att_CityNum'];
        $ATT_AREAID = $_POST['ATT_AREAID'];


        if (isset($_POST["alltimecheckbox"])) {
            $att_StartTime ="00:00:00";
            $att_EndTime ="00:00:00";
        }else{
            $att_StartTime = $_POST['att_Starttime']	;
            $att_EndTime = $_POST['att_Endtime']	;
        }




        $selected_days = $_POST['days']; // 這將是一個陣列，包含所有被選中的天的值
    
        $att_Week = "";
        foreach ($selected_days as $day) {
            $att_Week .= $day;
        }


    
        

        // $att__Week = $_POST['att__Week']	;
        $att_type = $_POST['att_type']	;
        $att_content=$_POST['att_content'];

        $att_tag_1=$_POST['att_tag_1'];
        $att_tag_2=$_POST['att_tag_2'];
        $att_tag_3=$_POST['att_tag_3'];
        // $att_tag_4=$_POST['att_tag_4'];

        // $att_tag_4_name=$_POST['att_tag_4_name'];
        $att_picture = $_FILES['att_picture']['name'];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $targetDir = "C:/wamp64/www/ntravel/img/";
            $targetFile = $targetDir . basename($_FILES["att_picture"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // 檢查檔案是否為圖片
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["att_picture"]["tmp_name"]);
                if ($check !== false) {
                    echo "檔案是一個圖片 - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "檔案不是一個圖片。";
                    $uploadOk = 0;
                }
            }

            // 檢查檔案是否已存在
            if (file_exists($targetFile)) {
                echo "抱歉，檔案已經存在。";
                $uploadOk = 0;
            }

            // 檢查檔案大小
            if ($_FILES["att_picture"]["size"] > 50000000) { // 限制大小
                echo "抱歉，檔案太大。";
                $uploadOk = 0;
            }

            // 允許特定的圖片格式，這裡我們只允許JPEG和PNG格式
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "抱歉，只允許JPG、JPEG、PNG格式。";
                $uploadOk = 0;
            }

            // 檢查$uploadOk是否設為0（表示有錯誤）
            if ($uploadOk == 0) {
                echo "抱歉，檔案未上傳。";
            } else {
                // 沒有錯誤，上傳檔案
                if (move_uploaded_file($_FILES["att_picture"]["tmp_name"], $targetFile)) {
                    echo "檔案 " . basename($_FILES["att_picture"]["name"]) . " 已成功上傳。";
                } else {
                    echo "抱歉，上傳檔案時發生錯誤。";
                }
            }
        }



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
            "att_Week:".$att_Week."<br>".
            "att_type:".$att_type."<br>".
            "att_content:".$att_content."<br>".
            "att_tag_1:".$att_tag_1."<br>".
            "att_tag_2:".$att_tag_2."<br>".
            "att_tag_3:".$att_tag_3."<br>".
            // "att_tag_4:".$att_tag_4."<br>".
            // "att_tag_4_name:".$att_tag_4_name."<br>".
            "att_picture:".$att_picture."<br>".
            "att_Address:".$att_Address."<br>".
            "att_lat:".$att_lat."<br>".
            "att_lng:".$att_lng."<br>";


        require_once('db_connect_wamp.php');

        if (isset($_POST["att_freetag"])) {
            $att_freetag =$_POST["att_freetag"];
            echo "att_freetag:".$att_freetag."<br>";
            $sql = "INSERT INTO `attractions` (`att_id`, `att_name`, `att_City`, `att_CityNum`, `att_Address`, `att_lat`, `att_lng`, `att_type`, `att_StartTime`, `att_EndTime`, `att_Week`, `att_content`, `att_picture`, `att_Fraction`, `ATT_AREANAME`, `ATT_AREAID`,`att_freetag`) 
            VALUES (NULL, '$att_name', NULL, '$att_CityNum', '$att_Address', '$att_lat', '$att_lng', '$att_type', '$att_StartTime', '$att_EndTime', '$att_Week', '$att_content', '$att_picture', NULL, NULL, '$ATT_AREAID','$att_freetag');";
        }else{
            $sql = "INSERT INTO `attractions` (`att_id`, `att_name`, `att_City`, `att_CityNum`, `att_Address`, `att_lat`, `att_lng`, `att_type`, `att_StartTime`, `att_EndTime`, `att_Week`, `att_content`, `att_picture`, `att_Fraction`, `ATT_AREANAME`, `ATT_AREAID`) 
            VALUES (NULL, '$att_name', NULL, '$att_CityNum', '$att_Address', '$att_lat', '$att_lng', '$att_type', '$att_StartTime', '$att_EndTime', '$att_Week', '$att_content', '$att_picture', NULL, NULL, '$ATT_AREAID');";
        }
        


        if (mysqli_query($con, $sql)) {
            // 獲取 AUTO_INCREMENT 值
            $att_id = mysqli_insert_id($con);
            if($att_tag_1!=''){
                mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_1')");
                echo "att_id:".$att_id."<br>"."att_tag_1:".$att_tag_1."<br>";
                echo "tag1成功.<br>";
            }
            if($att_tag_2!=''){
                mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_2')");
                echo "tag2成功.<br>";
            }
            if($att_tag_3!=''){
                mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_3')");
                echo "tag3成功.<br>";
            }
            // if($att_tag_4_name!=''){
            //     if($att_tag_4!=''){
            //         mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_4')");
            //         echo "舊有tag4成功.<br>";
            //     }else{
            //         $sql ="INSERT INTO `tags` (`tag_name`, `tag_state`) VALUES ('$att_tag_4_name', '4')";
            //         mysqli_query($con, $sql);
            //         $att_tag_4 = mysqli_insert_id($con);
            //         echo "新的tag_id:". $att_tag_4 . "<br>";
            //         mysqli_query($con,"INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES ('$att_id', '$att_tag_4')");
            //         echo "新的tag_4成功<br>";

            //     }
            // }

            echo "插入成功，att_id 值為: " . $att_id;
            echo "<script>alert('成功上傳景點資料!')</script>"; 

        }else{
            echo "<script>alert('上傳景點資料失敗，請在試一次')</script>"; 
        }
        

        
        header("refresh:0; url=../willattraction.php"); 
    







?>