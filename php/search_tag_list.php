<?php
session_start(); // 开启会话
require_once('db_connect_wamp.php'); // 引入数据库连接文件

// 检查是否设置了主标签（地点、食物、受众）
if (isset($_POST['mainTag_location'])) {
    $mainTag_location = $_POST['mainTag_location'];
} else {
    $mainTag_location = '';
}

if (isset($_POST['mainTag_food'])) {
    $mainTag_food = $_POST['mainTag_food'];
} else {
    $mainTag_food = '';
}

if (isset($_POST['mainTag_audience'])) {
    $mainTag_audience = $_POST['mainTag_audience'];
} else {
    $mainTag_audience = '';
}

$att_CityNum = $_POST['att_CityNum']; // 获取城市编号
$ATT_AREAID = $_POST['ATT_AREAID']; // 获取地区编号
$text_input = "%" . $_POST['text_input'] . "%"; // 获取用户输入的文本，用百分号包裹以实现模糊搜索

// 存储用户选择的标签和文本输入在会话中
$_SESSION['mainTag_location'] = $mainTag_location; // 存储主标签（地点）
$_SESSION['mainTag_food'] = $mainTag_food; // 存储主标签（食物）
$_SESSION['mainTag_audience'] = $mainTag_audience; // 存储主标签（受众）
$_SESSION['att_CityNum'] = $att_CityNum; // 存储城市编号
$_SESSION['ATT_AREAID'] = $ATT_AREAID; // 存储地区编号
$_SESSION['text_input'] = $_POST['text_input']; // 存储用户输入的文本

echo "城市编号：" . $att_CityNum . "<br>地区编号：" . $ATT_AREAID . "<br>搜索文本：" . $text_input . "<br>";

$data = array(); // 初始化一个空数组，用于存储搜索结果

// 如果选择了标签，则进一步过滤
if ($mainTag_location != "" || $mainTag_food != "" || $mainTag_audience != "") {
    $tagQuery = "SELECT a.* FROM attractions a WHERE a.att_name LIKE '$text_input' AND a.att_id IN (SELECT att_id FROM attractions_tags WHERE";

    $conditions = array(); // 创建一个条件数组

    if ($mainTag_location != "") {
        $conditions[] = "tag_id = $mainTag_location";
    }

    if ($mainTag_food != "") {
        $conditions[] = "tag_id = $mainTag_food";
    }

    if ($mainTag_audience != "") {
        $conditions[] = "tag_id = $mainTag_audience";
    }

    if (!empty($conditions)) {
        $tagQuery .= " " . implode(" OR ", $conditions) . ")";
        $resultTags = mysqli_query($con, $tagQuery) or die(mysqli_error($con));

        if ($resultTags->num_rows > 0) {
            while ($row = $resultTags->fetch_assoc()) {
                $data[] = $row;
            }
        } else {
            echo "未找到符合条件的景点。"; // 如果没有符合条件的结果，显示消息
        }
    }
} else {
    // 仅根据文本输入搜索
    $sql = "SELECT * FROM `attractions` WHERE `att_name` LIKE '$text_input'";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "未找到符合条件的景点。"; // 如果没有符合条件的结果，显示消息
    }
}

$_SESSION['searchdata'] = $data; // 将搜索结果存储在会话中
$_SESSION['datacount'] = count($data); // 存储搜索结果数量

header("refresh:0; url=../attraction_tag.php"); // 重定向用户到景点标签页面
?>