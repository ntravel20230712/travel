<?php
    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");

    // 取得從 URL 傳來的景點名稱
    if (isset($_GET['attractionName'])) {
        $attractionName = ($_GET['attractionName']);
        // 使用 $attractionName 查詢景點的標籤
        $sql = "SELECT DISTINCT t.tag_name 
                FROM attractions_tags a
                INNER JOIN tags t ON a.tag_id = t.tag_id
                WHERE a.att_id = (SELECT att_id FROM attractions WHERE att_name = '$attractionName')";

        $result = mysqli_query($con, $sql) or die(mysqli_error($con));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tag_name = htmlspecialchars($row['tag_name']);
                echo '<a href="http://127.0.0.1/ntravel/attraction_tag.php?attractionName=' . urlencode($attractionName) . '&tag=' . urlencode($tag_name) . '"><button type="button" class="btn btn-outline-secondary">' . $tag_name . '</button></a> ';
            }
        }    
    } else {
        // 如果沒有接收到 attractionName 參數，可以執行其他預設操作
        echo "沒有接收到景點名稱";
    }

    mysqli_close($con);
    ?>
