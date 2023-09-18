<?php
session_start(); // 開始 session

if (isset($_POST['existingTiles'])) {
    $existingTiles = json_decode(stripslashes($_POST['existingTiles']), true);
    $_SESSION['existingTiles'] = $existingTiles; // 存儲到 session
    echo "Success";
} else {
    echo "No existingTiles received.";
}
?>
