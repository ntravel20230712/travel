<?php

// 確認mem_name是否已被設置和傳遞過來
if(isset($_POST['mem_name'])) {
    echo "mem_name: " . $_POST['mem_name'] . "<br>";
}

// 確認routname是否已被設置和傳遞過來
if(isset($_POST['routname'])) {
    echo "routname: " . $_POST['routname'] . "<br>";
}

// 確認date是否已被設置和傳遞過來
if(isset($_POST['date'])) {
    echo "date: " . $_POST['date'] . "<br>";
}

// 確認tilesData是否已被設置和傳遞過來
if(isset($_POST['tilesData'])) {
    // tilesData是一個陣列，所以我們可以遍歷它並輸出每一個tile的數據
    foreach($_POST['tilesData'] as $tile) {
        echo "Tile:<br>";
        echo "Time: " . $tile['time'] . "<br>";
        echo "Place: " . $tile['place'] . "<br>";
        echo "Comment: " . $tile['comment'] . "<br>";
        echo "att_id: " . $tile['att_id'] . "<br>";
        echo "--------------------<br>";
    }
}
print_r($_POST);
echo $_SERVER['REQUEST_METHOD'];
?>