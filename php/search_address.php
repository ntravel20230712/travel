<?php
session_start();
require_once('db_connect_wamp.php');

function searchAttractions($con, $search_text,  $range)
{
    // 檢查資料庫連接是否成功
    if (!$con) {
        die("資料庫連接失敗：" . mysqli_connect_error());
    }

    $hasSearchText = !empty($search_text); // 判斷是否有搜尋內容

    // 如果使用者沒有輸入搜尋內容，將座標設定為0
    if (!$hasSearchText) {
        $_SESSION['userLat'] = 0;
        $_SESSION['userLng'] = 0;
    }

    $search_text = '%' . $search_text . '%';

    // 执行查找单个地址并获取结果
    $sql = "SELECT * FROM `attractions` WHERE `att_Address` LIKE ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 's', $search_text);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result === false) {
        die("查询错误：" . mysqli_error($con));
    }

    $data = array();
    if ($result->num_rows > 0) {
        // 将数据存入数组中
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // 将第一个找到的景点的经纬度赋值给$userLat和$userLng
        $userLat = $data[0]["att_lat"];
        $userLng = $data[0]["att_lng"];

        // 如果$userLat和$userLng为空，将其设为默认值0
        if (empty($userLat) || empty($userLng)) {
            $userLat = 0;
            $userLng = 0;
        }

        if (!$hasSearchText) {
            // 如果使用者沒有輸入搜尋內容，將座標設定為0，這樣不會影響到之前的座標
            $userLat = 0;
            $userLng = 0;
        } else {
            // 在$userLat和$userLng赋值後，只有在使用者輸入了搜尋內容且找到相符的資料時，才將它們存儲在$_SESSION中
            $_SESSION['userLat'] = $userLat;
            $_SESSION['userLng'] = $userLng;
        }

        if (is_numeric($range)) {
            // 使用 $userLat 和 $userLng 來查找範圍內的景點
            $lat_max = $userLat + ($range / 110.574);
            $lat_min = $userLat - ($range / 110.574);
            $lng_max = $userLng + ($range / (111.320 * cos(deg2rad($userLat))));
            $lng_min = $userLng - ($range / (111.320 * cos(deg2rad($userLat))));
    
            $nearby_data = array(); // 用來儲存附近景點的資料
    
            $sql = "SELECT *, ( 6371 * acos( cos( radians(?) ) * cos( radians( att_lat ) ) * cos( radians( att_lng ) - radians(?) ) + sin( radians(?) ) * sin( radians( att_lat ) ) ) ) AS distance FROM `attractions` WHERE `att_lat` BETWEEN ? AND ? AND `att_lng` BETWEEN ? AND ? ORDER BY distance";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, 'ddddddd', $userLat, $userLng, $userLat, $lat_min, $lat_max, $lng_min, $lng_max);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
    
            if ($result === false) {
                die("查询错误：" . mysqli_error($con));
            }
    
            if ($result->num_rows > 0) {
                // 将数据存入数组中
                while ($row = $result->fetch_assoc()) {
                    $nearby_data[] = $row;
                }
            }
    
            // 返回附近景點的資料
            return $nearby_data;
        
        }
    } else {
        echo "没有找到相符的资料。";
        // 如果没有找到相符的資料，並且使用者沒有輸入搜尋內容，將$userLat和$userLng设为默认值0
        $userLat = 0;
        $userLng = 0;

        if (!$hasSearchText) {
            // 如果沒有找到相符的資料，並且使用者沒有輸入搜尋內容，將$userLat和$userLng设为默认值0
            $userLat = 0;
            $userLng = 0;
        } else {
            // 如果沒有找到相符的資料，但使用者有輸入搜尋內容，則保留原先的座標
            $_SESSION['userLat'] = $userLat;
            $_SESSION['userLng'] = $userLng;
        }
    }

    return $data;
}

$search_text = $_POST['search_text'] ?? '';
$range = $_POST['range'] ?? '';

// 如果使用者沒有輸入搜尋內容且沒有選擇範圍大小，將座標設定為0
if (empty($search_text) && empty($range)) {
    $_SESSION['userLat'] = 0;
    $_SESSION['userLng'] = 0;
}

// 如果使用者沒有輸入搜尋內容且有選擇範圍大小，顯示警告視窗並返回原來的景點列表頁面
if (empty($search_text) && !empty($range)) {
    echo '<script>alert("請輸入地址再選擇範圍大小。");</script>';
    echo '<script>window.history.go(-1);</script>';
    exit(); // 終止程式碼執行，確保警告視窗生效並返回原來的頁面
}

$_SESSION['searchdata'] = searchAttractions($con, $search_text, $range);
$_SESSION['datacount'] = count($_SESSION['searchdata']);
echo "userLng: " . $_SESSION['userLng']; // 顯示 $_SESSION['userLng'] 的值
header("refresh:0; url=../attraction_address.php");
?>
