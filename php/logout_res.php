<?php
	session_start();
    unset($_SESSION['mem_name']);
    // session_destroy();
    echo "<script>alert('已登出!')</script>";
    header("refresh:0; url=../index.php");
?>