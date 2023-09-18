<?php

function getroutesData() {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");	

    $sql = "SELECT * FROM `route`";
    $result = mysqli_query($con,$sql) or die (mysqli_error($con));

    $data = array();

    if ($result->num_rows > 0) {
        // 將資料存入陣列中
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // print_r($data);
    // 回傳資料陣列
    return $data;
}
function getRouteSightseeingData($routeID) {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");

    $sql = "SELECT * FROM `route_sightseeing` WHERE `RouteID` = $routeID";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

function getAttractionData($attID) {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");	

    $sql = "SELECT * FROM `attractions` WHERE `att_id` = $attID";
    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

function getTagIDs($attID) {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");	

    $sql = "SELECT `tag_id` FROM `attractions_tags` WHERE `att_id` = $attID";
    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $tagIDs = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tagIDs[] = $row['tag_id'];
        }
    }

    return $tagIDs;
}

function getTagName($tagID) {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');
    mysqli_query($con, "set names utf8");	

    $sql = "SELECT `tag_name` FROM `tags` WHERE `tag_id` = $tagID";
    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['tag_name'];
    }

    return null;
}
?>