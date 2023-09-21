<?php
session_start();
$memID = $_SESSION['mem_id'];
require_once('db_connect_wamp.php');

// 检查是否收到了POST请求
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 检查是否接收到了特定字段
    if (isset($_POST["location"]) && isset($_POST["travelFrequency"])) {
        // 获取问题1的答案，这是一个数组
        $question1Answers = implode(",", $_POST["location"]);

        // 获取问题2的答案，这也是一个数组
        $question2Answers = array();

        // 循环遍历每个单选组并将值添加到数组中
        for ($i = 1; $i <= 15; $i++) {
            $fieldName = "travelStyleGroup" . $i;
            if (isset($_POST[$fieldName])) {
                $question2Answers[] = $_POST[$fieldName];
            }
        }
        // 获取问题3的答案，这是一个数组foodGroup1
        $question3Answers = array();

        // 循环遍历每个单选组并将值添加到数组中
        for ($i = 1; $i <= 15; $i++) {
            $foodName = "foodGroup" . $i;
            if (isset($_POST[$foodName])) {
                $question3Answers[] = $_POST[$foodName];
            }
        }

        // 获取问题4的答案，这是一个字符串
        $question4Answer = $_POST["travelFrequency"];

        // 查询会员电子邮件
        $sql = "SELECT mem_email FROM member WHERE mem_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $memID);
        $stmt->execute();
        $stmt->bind_result($memberEmail);
        $stmt->fetch();
        $stmt->close();
        // 统计每个类别的数量
        // 统计每个类别的数量并乘以2
        $stimulateCount = (array_count_values($question2Answers)["刺激"] ?? 0) * 2;
        $leisureCount = (array_count_values($question2Answers)["休閒"] ?? 0) * 2;
        $cultureCount = (array_count_values($question2Answers)["文化"] ?? 0) * 2;
        $natureCount = (array_count_values($question2Answers)["自然"] ?? 0) * 2;
        $entertainmentCount = (array_count_values($question2Answers)["娛樂"] ?? 0) * 2;
        $otherCount = (array_count_values($question2Answers)["其他"] ?? 0) * 2;

        // 统计每个类别的数量
        // 统计每个类别的数量并乘以2
        $FastfoodCount = (array_count_values($question3Answers)["速食"] ?? 0) * 2;
        $RicefoodCount = (array_count_values($question3Answers)["飯類"] ?? 0) * 2;
        $NoodlefoodCount = (array_count_values($question3Answers)["麵類"] ?? 0) * 2;
        $DessertfoodCount = (array_count_values($question3Answers)["甜點"] ?? 0) * 2;
        $StreetfoodCount = (array_count_values($question3Answers)["小吃"] ?? 0) * 2;
        $ExquisitefoodCount = (array_count_values($question3Answers)["精緻"] ?? 0) * 2;

        // 插入数据到survey_responses表
        $insertSql = "INSERT INTO survey_responses (member_email, location, StimulateStyle,LeisureStyle,CultureStyle,NatureStyle,EntertainmentStyle,OtherStyle, Fastfood, Ricefood, Noodlefood, Dessertfood, Streetfood, Exquisitefood, travel_frequency) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?, ?,?,?)";
        $insertStmt = $con->prepare($insertSql);
        $insertStmt->bind_param("sssssssssssssss", $memberEmail, $question1Answers,$stimulateCount,$leisureCount,$cultureCount,$natureCount,$entertainmentCount,$otherCount,$FastfoodCount,$RicefoodCount,$NoodlefoodCount,$DessertfoodCount,$StreetfoodCount,$ExquisitefoodCount, $question4Answer);

        if ($insertStmt->execute()) {
            // 插入成功后重定向到index页面
            echo "<script>alert('感謝您的填寫！'); window.location.href='../index';</script>";
            exit(); // 确保在重定向后退出脚本执行
        } else {
            echo "插入数据时出现错误: " . $insertStmt->error;
        }
        $insertStmt->close();

        // 如果需要重定向到其他页面，可以使用以下代码
        // header("Location: 感谢页面的URL");
        // exit(); // 确保在重定向后退出脚本执行
    } else {
        // 如果缺少任何一个字段，可以返回一个错误消息
        echo "缺少必要的表單字段。";
    }
} else {
    // 如果不是POST请求，可以返回一个错误消息
    echo "只接受POST请求。";
}
?>
