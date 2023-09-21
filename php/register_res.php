<?php
// register_res.php
$mem_name = $_POST['mem_name'];
$mem_email = $_POST['mem_email'];
$mem_pwd = $_POST['mem_pwd'];
$mem_Birthday = $_POST['mem_bd'];
$mem_phone = $_POST['mem_phone'];
$mem_gender = $_POST['mem_gender']; // 获取性别
$mem_location = $_POST['mem_location']; // 获取居住地区
$mem_interests = isset($_POST['mem_interests']) ? $_POST['mem_interests'] : array(); // 获取兴趣数组

// 避免 SQL 注入，使用预处理语句
require_once('db_connect_wamp.php');

// 检查电子邮件是否已存在
$check_email_sql = "SELECT mem_id FROM member WHERE mem_email = ?";
$check_email_stmt = mysqli_prepare($con, $check_email_sql);
mysqli_stmt_bind_param($check_email_stmt, 's', $mem_email);
mysqli_stmt_execute($check_email_stmt);
mysqli_stmt_store_result($check_email_stmt);

if (mysqli_stmt_num_rows($check_email_stmt) > 0) {
    echo "<script>alert('此電子郵件已被註冊!')</script>";
    header("refresh:0; url=../register1");
    exit(); // 电子邮件已存在，退出脚本
}

mysqli_stmt_close($check_email_stmt);

// 插入用户数据到 memdata 表
$insert_memdata_sql = "INSERT INTO memdata (mem_name, mem_email, mem_phone, mem_Birthday, mem_gender, mem_location, mem_interests) 
                      VALUES (?, ?, ?, ?, ?, ?, ?)";
$insert_memdata_stmt = mysqli_prepare($con, $insert_memdata_sql);
mysqli_stmt_bind_param($insert_memdata_stmt, 'sssssss', $mem_name, $mem_email, $mem_phone, $mem_Birthday, $mem_gender, $mem_location, implode(', ', $mem_interests));
mysqli_stmt_execute($insert_memdata_stmt);
mysqli_stmt_close($insert_memdata_stmt);

// 插入用户数据到 member 表
$mem_pwd_hashed = md5($mem_pwd);
$insert_member_sql = "INSERT INTO member (mem_email, mem_pwd) VALUES (?, ?)";
$insert_member_stmt = mysqli_prepare($con, $insert_member_sql);
mysqli_stmt_bind_param($insert_member_stmt, 'ss', $mem_email, $mem_pwd_hashed);
mysqli_stmt_execute($insert_member_stmt);
mysqli_stmt_close($insert_member_stmt);

// 提示用户注册成功
echo "<script>alert('註冊成功!')</script>";

header("refresh:0; url=../register3");
?>
