<?php
            // require_once('php/db_connect_wamp.php');
            // // echo "search_text:".$search_text."<br>nearby_checkbox:".$nearby_checkbox."<br>";
        

            //     // 執行查詢並取得結果
            //     $sql = "SELECT * FROM `attractions`" ;
            //     echo "on";
            //     $result = mysqli_query($con,$sql) or die (mysqli_error($con));
            //     // 檢查是否有資料
            //     $data = array();
            //     if ($result->num_rows > 0) {
            //       // 將資料存入陣列中
            //       while ($row = $result->fetch_assoc()) {
            //           $data[] = $row;
            //       }
            //   }
            //   $tt=count($data);
            //   // 呼叫函式並取得資
            //   if (!empty($data)) {
            //       // 輸出資料
            //       foreach ($data as $attraction) {

            //           echo "[".$attraction["att_name"].','.$attraction["att_lat"].",".$attraction["att_lng"].",". $tt."],<br>";
            //           $tt-=1;
            //       }
            //   } else {
            //       echo "沒有資料。";
            //   }

            require_once('php/functionslatlng.php');

                
            // 呼叫函式並取得資料
            $attractionsData = getAttractionslatlngdata();
        
            if (!empty($attractionsData)) {
                // 輸出資料
                $tt=count($attractionsData);
                foreach ($attractionsData as $attraction) {
                    echo "['".$attraction["att_name"]."',".$attraction["att_lat"].",".$attraction["att_lng"].",". $tt."],<br>";
                    $tt-=1;
                }
            } else {
                echo "沒有資料。";
            }
              echo"['Bondi Beach', -33.890542, 151.274856, 4],";


// print_r($data);

?>