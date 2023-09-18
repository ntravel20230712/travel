<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
mysqli_query($con, "set names utf8");

$tagState = $_GET['tag_state']; // 從 GET 參數中獲取 tag_state 值

$sql = "SELECT * FROM tags WHERE tag_state = $tagState"; // 根據 tag_state 選取相應的標籤
$result = mysqli_query($con, $sql);

$options = array();
while ($row = mysqli_fetch_assoc($result)) {
    $options[] = $row;
}

echo json_encode($options);
?>
