<?php
    session_start();
    $att_CityNum=$_POST['att_CityNum']	;	
    $ATT_AREAID=$_POST['ATT_AREAID'];	
    $att_type=$_POST['att_type'];
	require_once('db_connect_wamp.php');
    echo "CityNum:".$att_CityNum."<br>ATT_AREAID:".$ATT_AREAID."<br>att_type:".$att_type."<br>";

    if($att_CityNum!="0"){
        if($ATT_AREAID!="0"){
            if($att_type!="0"){
                $sql = "SELECT * FROM `attractions` WHERE `att_CityNum` = '$att_CityNum' AND `ATT_AREAID` = '$ATT_AREAID' AND `att_type` = '$att_type'";
                echo "有有有";
            }
            else{
                $sql = "SELECT * FROM `attractions` WHERE `att_CityNum` = '$att_CityNum' AND `ATT_AREAID` = '$ATT_AREAID'";
                echo "有有沒";
            }
            }
        else{
            if($att_type!="0"){
                $sql = "SELECT * FROM `attractions` WHERE `att_CityNum` = '$att_CityNum' AND `att_type` = '$att_type'";
                echo "有沒有";
            }
            else{
                $sql = "SELECT * FROM `attractions` WHERE `att_CityNum` = '$att_CityNum' ";
                echo "有沒沒";
            }
        }
    }
    else{
            $sql = "SELECT att_name,att_City,att_Fraction FROM attractions";
            echo "沒沒沒";
    }
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

    // echo "<script>alert('登入成功!')</script>";
    header("refresh:0; url=../attraction_area.php");

?>
