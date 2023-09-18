<?php
session_start();

require_once('db_connect_wamp.php');

$mem_email = $_GET['mem_email'];
$mem_pwd = md5($_GET['mem_pwd']);
$found = 0;

$sql = "SELECT * FROM `member` WHERE `mem_email` = '$mem_email' AND `mem_pwd` = '$mem_pwd'";
$results = mysqli_query($con, $sql) or die(mysqli_error($con));

while ($rs = mysqli_fetch_assoc($results)) {
    $found = 1;
    $_SESSION['mem_id'] = $rs['mem_id'];
}

$response = array();

if ($found == 1) {
    $sql = "SELECT * FROM `memdata` WHERE `mem_email` = '$mem_email'";
    $results = mysqli_query($con, $sql) or die(mysqli_error($con));
    $rs = mysqli_fetch_assoc($results);
    $_SESSION['mem_name'] = $rs['mem_name'];

    $response['success'] = true;
    $response['message'] = '登入成功';
} else {
    $response['success'] = false;
    $response['message'] = '登入失敗';
}

echo json_encode($response);
?>
