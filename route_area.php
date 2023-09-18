<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 區域景點瀏覽 route_area.php -->
    <meta charset="utf-8">
    <title>route show</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php
		session_start();

		?>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-flag me-3"></i>newTRAVEL</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">首頁</a>
                <a href="about.html" class="nav-item nav-link">關於我們</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">去哪裡玩</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="attraction_area.php" class="dropdown-item">區域景點</a>
                        <a href="attraction_address.php" class="dropdown-item">地理座標景點</a>
                        <a href="attraction_tag.php" class="dropdown-item">關鍵字景點</a>
                        <a href="attraction_random.php" class="dropdown-item">隨機推薦景點</a>
                        <a href="willattraction.php" class="dropdown-item">景點分享</a>
                        <!-- <a href="route_show.html" class="dropdown-item">所有路線</a> -->
                        <!-- <a href="attraction_board.html" class="dropdown-item">景點留言板</a> -->
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">別人怎麼玩</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="route_area.php" class="dropdown-item">區域行程</a>
                        <!-- <a href="route_tag.html" class="dropdown-item">地理座標景點瀏覽</a> -->
                        <a href="route_tag.html" class="dropdown-item">關鍵字行程</a>
                        <a href="route_random.html" class="dropdown-item">隨機推薦行程</a>
                        <a href="php/logout_res.php" class="dropdown-item">session清除</a>
                        <!-- <a href="route_custom.html" class="dropdown-item">自訂規劃路線</a> -->
                    </div>
                </div>
                
                <?php	
                    if (isset($_SESSION['mem_name'])) {
                        echo "<div class='nav-item dropdown'>";
                        echo "<a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>".$_SESSION['mem_name']."會員</a>";
                        echo " <div class='dropdown-menu fade-down m-0'>
                                    <a href='my_route.php' class='dropdown-item'>我的行程</a>
                                    <a href='like_route.html' class='dropdown-item'>已收藏行程</a>
                                    <a href='like_attractions.html' class='dropdown-item'>已收藏景點</a>
                                    <a href='php/logout_res.php' class='dropdown-item'>登出</a>
                                </div>";

                    }else {
                        echo "<a href='login.html' class='nav-item nav-link'>登入/註冊</a>";
                        }
                    ?>

                    <!-- <a href='my_route_history.html' class='dropdown-item'>已去過行程</a> -->

                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">會員管理</a> -->
                    <!-- <div class="dropdown-menu fade-down m-0">
                        <a href="my_route.html" class="dropdown-item">未去過行程</a>
                        <a href="my_route_history.html" class="dropdown-item">已去過行程</a>
                        <a href="like_attractions.html" class="dropdown-item">已收藏景點</a>
                        <a href="like_route.html" class="dropdown-item">已收藏行程</a>
                        <a href="404.html" class="dropdown-item">登出</a>
                    </div> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="route_custom.html"
                    class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">試試隨機行程GO&#32;&#10140;</a>
            </div>
            <!-- 未登入前 -->
            <!--<a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">加入我們<i class="fa fa-arrow-right ms-3"></i></a>-->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">路線瀏覽</h6>
                <h1 class="mb-5">區域路線瀏覽</h1>
                <!-- Booking Start -->
                <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="bg-white shadow" style="padding: 35px;">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <form action="php/search_route.php" method="post">
                                        <div class="row g-2">
                                            <div class="col-md-4 py-4 px-0">
                                            <select id="city" class="form-select" name='att_CityNum' onchange="updateDistricts()">
                                                <option value="0">全國</option>
                                                <option value="" disabled>----------北部----------</option>
                                                <option value="01">基隆市</option>
                                                <option value="02">台北市</option>
                                                <option value="03">新北市</option>
                                                <option value="04">桃園市</option>
                                                <option value="05">新竹市</option>
                                                <option value="06">新竹縣</option>
                                                <option value="19">宜蘭縣</option>
                                                <option value="" disabled>----------中部----------</option>
                                                <option value="07">苗栗縣</option>
                                                <option value="08">台中市</option>
                                                <option value="09">彰化縣</option>
                                                <option value="10">南投縣</option>
                                                <option value="11">雲林縣</option>
                                                <option value="" disabled>----------南部----------</option>   
                                                <option value="12">嘉義市</option>
                                                <option value="13">嘉義縣</option>
                                                <option value="14">台南市</option>
                                                <option value="15">高雄市</option>
                                                <option value="16">屏東縣</option>
                                                <option value="" disabled>----------東部----------</option> 
                                                <option value="17">台東縣</option>
                                                <option value="18">花蓮縣</option>
                                                <option value="" disabled>----------外島----------</option> 
                                                <option value="20">澎湖縣</option>
                                                <option value="21">金門縣</option>
                                                <option value="22">連江縣</option>
                                                <!-- 在這裡可以添加更多城市選項 -->
                                            </select>
                                                <!-- <select class="form-select" name='att_CityNum'>
                                                    <option selected value="0">選擇縣市</option>
                                                    <option value="1">台中市</option>
                                                    <option value="19">宜蘭縣</option>
                                                    <option value="14">台南市</option><br>
                                                </select> -->
                                            </div>
                                            <div class="col-md-4 py-4 px-2">
                                            <select id="district" class="form-select" name="ATT_AREAID" >
                                            <option value="0" selected>無</option>
                                            <!-- 區域選項會在 JavaScript 中動態生成 -->
                                                </select>
                                                <!-- <select class="form-select">
                                                    <option selected>選擇區域</option>
                                                    <option value="1">北屯區</option>
                                                    <option value="2">中區</option>
                                                    <option value="3">霧峰區</option><br>
                                                </select> -->
                                            </div>
                                            
                                            <div class="col-md-4 py-4">
                                                <button type='submit' class="btn btn-primary w-100">搜尋</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking End -->
            <div class="row g-4">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <section class="intro">
                        <div class="bg-image h-100" style="background-color: #f5f7fa;">
                            <div class="mask d-flex align-items-center h-100">
                                <div class="container">
                                    <!-- 排列bar開始-->
                                    <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3 py-3 fadeInUp"data-wow-delay="0.1s">
                                        <strong class="d-block py-2">已查到 <span id="numAttractions">0</span> 個景點 </strong>
                                        <div class="ms-auto">
                                            <select class="form-select d-inline-block w-auto border pt-1 fadeInUp" data-wow-delay="0.1s" onchange="sortTable(this.value)">
                                                <option value="">選擇排序</option>
                                                <option value="0">最多收藏</option>
                                                <option value="1">最少收藏</option>
                                                <option value="2">最新收藏</option>
                                                <option value="3">最舊收藏</option>
                                            </select>
                                        </div>
                                    </header>
                                    <!-- 排列bar結束 -->
                                    <div class="row justify-content-center">
                                        <div class="card">
                                            <div class="card-body p-1">
                                                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 500px">

                                                    <table class="table table-striped mb-0">
                                                        <thead style="background-color: #424242;">
                                                            <tr>
                                                                <th scope="col"  style="display: none;">ID</th>
                                                                <th scope="col">路線名</th>
                                                                <th scope="col">縣市</th>
                                                                <th scope="col">時間</th>
                                                                <th scope="col">標籤</th>
                                                                <th scope="col">已被收藏數</th>
                                                                <th scope="col">上傳日期</th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            require_once('php/functionsrouteall.php');
                                                            $routeData = getroutesData();
                                                            // 从会话中获取 $dataArray 数据
                                                            $dataArray = isset($_SESSION['dataArray']) ? $_SESSION['dataArray'] : [];
                                                            // 获取景点数量
                                                            if (!empty($dataArray)) {
                                                                $numAttractions = count($dataArray);
                                                            } else {
                                                                $numAttractions = count($routeData);
                                                            }

                                                            // 输出到页面上的景点数量计数器
                                                            echo '<script>document.getElementById("numAttractions").textContent = "' . $numAttractions . '";</script>';
                                                            if (!empty($dataArray)) {
                                                                $routeTagCounts = array();
                                                                foreach ($dataArray as $route) {
                                                                    $routeID = $route['RouteID'];
                                                                    $routeName = $route['RouteName'];

                                                                    $tagCounts = array();
                                                                    $cityCounts = array();

                                                                    $sightseeingData = getRouteSightseeingData($routeID);
                                                                    if (!empty($sightseeingData)) {
                                                                        foreach ($sightseeingData as $sightseeing) {
                                                                            $attID = $sightseeing['Att_ID'];
                                                                            $attractionData = getAttractionData($attID);
                                                                            if (!empty($attractionData)) {
                                                                                foreach ($attractionData as $attraction) {
                                                                                    $tagIDs = getTagIDs($attID);
                                                                                    foreach ($tagIDs as $tagID) {
                                                                                        if (isset($tagCounts[$tagID])) {
                                                                                            $tagCounts[$tagID]++;
                                                                                        } else {
                                                                                            $tagCounts[$tagID] = 1;
                                                                                        }
                                                                                    }

                                                                                    $city = $attraction['att_City'];
                                                                                    if (isset($cityCounts[$city])) {
                                                                                        $cityCounts[$city]++;
                                                                                    } else {
                                                                                        $cityCounts[$city] = 1;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }

                                                                    // 找出每個路線中標籤數量最多的一筆資料
                                                                    $maxTagCount = max($tagCounts);
                                                                    $routeTagCounts[$routeName] = $maxTagCount;

                                                                    // 獲取 SortOrder 等於 1 的 startTime
                                                                    $startTime = '';
                                                                    foreach ($sightseeingData as $sightseeing) {
                                                                        if ($sightseeing['SortOrder'] == 1) {
                                                                            $startTime = $sightseeing['startTime'];
                                                                            break;
                                                                        }
                                                                    }

                                                                    // 排序並轉換標籤字串，只顯示達兩次以上的標籤
                                                                    arsort($tagCounts);
                                                                    $tagsString = '';
                                                                    foreach ($tagCounts as $tagID => $count) {
                                                                        if ($count >= 2) {
                                                                            $tagName = getTagName($tagID);
                                                                            $tagsString .= $tagName . ' ';
                                                                        }
                                                                    }
                                                                    $tagsString = rtrim($tagsString, ' ');

                                                                    // 排序並轉換縣市字串
                                                                    arsort($cityCounts);
                                                                    $citiesString = implode(' ', array_keys($cityCounts));

                                                                    // 輸出表格資料
                                                                    echo '<tr id="route_'.$routeID.'">
                                                                    <td style="display: none;">' . $routeID . '</td>
                                                                    <td>' . $routeName . '</td>
                                                                    <td>' . $citiesString . '</td>
                                                                    <td>' . $startTime . '</td>
                                                                    <td>';

                                                                    foreach ($tagCounts as $tagID => $count) {
                                                                    if ($count >= 2) {
                                                                    $tagName = getTagName($tagID);
                                                                    $encodedTagName = urlencode($tagName);
                                                                    echo '<a href="attraction_tag.php?tag_name=' . $encodedTagName . '"><button type="button" class="btn btn-outline-secondary">' . $tagName . '</button></a> ';
                                                                    }
                                                                    }

                                                                    echo '</td>
                                                                    <td class="recommend">' . $route['route_recommend'] . '</td>
                                                                    <td>' . $route['route_update'] . '</td>
                                                                    <td><a href="route_detail.php?RouteID=' . $routeID . '&RouteName=' . $route['RouteName']. '&route_update=' . $route['route_update'] . '">查看詳細</a></td>
                                                                    <td>
                                                                        <input type="checkbox" class="btn-check" id="btn-check-1-outlined" autocomplete="off">
                                                                        <label class="mb-3 me-2 btn btn-outline-secondary" id="routefavoriteBtn' . $routeID . '" data-routeid="' . $routeID . '" onclick="toggleFavorite(' . $routeID . ')">加入收藏';
                                                                    echo '</label>
                                                                    </td>
                                                                    </tr>';
                                                                }
                                                            } else {
                                                                $routeTagCounts = array();
                                                                foreach ($routeData as $route) {
                                                                    $routeID = $route['RouteID'];
                                                                    $routeName = $route['RouteName'];

                                                                    $tagCounts = array();
                                                                    $cityCounts = array();

                                                                    $sightseeingData = getRouteSightseeingData($routeID);
                                                                    if (!empty($sightseeingData)) {
                                                                        foreach ($sightseeingData as $sightseeing) {
                                                                            $attID = $sightseeing['Att_ID'];
                                                                            $attractionData = getAttractionData($attID);
                                                                            if (!empty($attractionData)) {
                                                                                foreach ($attractionData as $attraction) {
                                                                                    $tagIDs = getTagIDs($attID);
                                                                                    foreach ($tagIDs as $tagID) {
                                                                                        if (isset($tagCounts[$tagID])) {
                                                                                            $tagCounts[$tagID]++;
                                                                                        } else {
                                                                                            $tagCounts[$tagID] = 1;
                                                                                        }
                                                                                    }

                                                                                    $city = $attraction['att_City'];
                                                                                    if (isset($cityCounts[$city])) {
                                                                                        $cityCounts[$city]++;
                                                                                    } else {
                                                                                        $cityCounts[$city] = 1;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }

                                                                    // 找出每個路線中標籤數量最多的一筆資料
                                                                    $maxTagCount = max($tagCounts);
                                                                    $routeTagCounts[$routeName] = $maxTagCount;

                                                                    // 獲取 SortOrder 等於 1 的 startTime
                                                                    $startTime = '';
                                                                    foreach ($sightseeingData as $sightseeing) {
                                                                        if ($sightseeing['SortOrder'] == 1) {
                                                                            $startTime = $sightseeing['startTime'];
                                                                            break;
                                                                        }
                                                                    }

                                                                    // 排序並轉換標籤字串，只顯示達兩次以上的標籤
                                                                    arsort($tagCounts);
                                                                    $tagsString = '';
                                                                    foreach ($tagCounts as $tagID => $count) {
                                                                        if ($count >= 2) {
                                                                            $tagName = getTagName($tagID);
                                                                            $tagsString .= $tagName . ' ';
                                                                        }
                                                                    }
                                                                    $tagsString = rtrim($tagsString, ' ');

                                                                    // 排序並轉換縣市字串
                                                                    arsort($cityCounts);
                                                                    $citiesString = implode(' ', array_keys($cityCounts));

                                                                    // 輸出表格資料
                                                                    echo '<tr id="route_'.$routeID.'">
                                                                    <td style="display: none;">' . $routeID . '</td>
                                                                    <td>' . $routeName . '</td>
                                                                    <td>' . $citiesString . '</td>
                                                                    <td>' . $startTime . '</td>
                                                                    <td>';

                                                                    foreach ($tagCounts as $tagID => $count) {
                                                                    if ($count >= 2) {
                                                                    $tagName = getTagName($tagID);
                                                                    $encodedTagName = urlencode($tagName);
                                                                    echo '<a href="attraction_tag.php?tag_name=' . $encodedTagName . '"><button type="button" class="btn btn-outline-secondary">' . $tagName . '</button></a> ';
                                                                    }
                                                                    }

                                                                    echo '</td>
                                                                    <td class="recommend">' . $route['route_recommend'] . '</td>
                                                                    <td>' . $route['route_update'] . '</td>
                                                                    <td><a href="route_detail.php?RouteID=' . $routeID . '&RouteName=' . $route['RouteName']. '&route_update=' . $route['route_update'] . '">查看詳細</a></td>
                                                                    <td>
                                                                        <input type="checkbox" class="btn-check" id="btn-check-1-outlined" autocomplete="off">
                                                                        <label class="mb-3 me-2 btn btn-outline-secondary" id="routefavoriteBtn' . $routeID . '" data-routeid="' . $routeID . '" onclick="toggleFavorite(' . $routeID . ')">加入收藏';
                                                                    echo '</label>
                                                                    </td>
                                                                    </tr>';

                                                                }
                                                            }
                                                                // 找出標籤數量最多的路線名
                                                                arsort($routeTagCounts);
                                                                $mostTagsRouteName = key($routeTagCounts);

                                                                // 將只顯示標籤數量最多的路線名，其他路線名隱藏
                                                                $shouldHideRoute = false;
                                                                foreach ($routeData as $route) {
                                                                    $routeName = $route['RouteName'];
                                                                    if ($routeName !== $mostTagsRouteName) {
                                                                        echo '<script>document.getElementById("'.$routeName.'").style.display = "none";</script>';
                                                                    } else {
                                                                        $shouldHideRoute = true;
                                                                    }
                                                                }

                                                                if ($shouldHideRoute) {
                                                                    echo '<script>document.getElementById("'.$mostTagsRouteName.'").style.display = "";</script>';
                                                                } else {
                                                                echo "沒有資料。";
                                                                }
                                                            
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center  mt-2">
                                                <div class="col-12 text-center">
                                                    <button id="prevButton" class="btn btn-primary mr-2">上一頁</button>
                                                    <span id="pageInfo"></span>
                                                    <button id="nextButton" class="btn btn-primary ml-2">下一頁</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">關於我們</h4>
                    <a class="btn btn-link" href="about.html">關於我們</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">發現景點</h4>
                    <a class="btn btn-link" href="attraction_show.html">所有景點</a>
                    <a class="btn btn-link" href="404.html">個性化景點推薦</a>
                    <a class="btn btn-link" href="404.html">族群特選景點推薦</a>
                    <a class="btn btn-link" href="404.html">猜你喜歡-景點</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">發現路線</h4>
                    <a class="btn btn-link" href="route_show.html">所有路線</a>
                    <a class="btn btn-link" href="404.html">個性化路線推薦</a>
                    <a class="btn btn-link" href="404.html">族群特選路線推薦</a>
                    <a class="btn btn-link" href="404.html">猜你喜歡-路線</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">我要推薦</h4>
                    <a class="btn btn-link" href="404.html">我要推薦景點</a>
                    <a class="btn btn-link" href="myroute.html">我要推薦路線</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">會員管理</h4>
                    <a class="btn btn-link" href="404.html">我的景點</a>
                    <a class="btn btn-link" href="myroute.html">我的路線</a>
                    <a class="btn btn-link" href="404.html">登出</a>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>朝陽資管3C</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">newTRAVEL</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="index.html">Home</a>
                                    <a href="404.html">Cookies</a>
                                    <a href="about.html">About</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
            <script>
                //判斷是否登入
                var isLoggedIn = <?php echo isset($_SESSION['mem_id']) ? 'true' : 'false'; ?>;

                // 获取表格和页码按钮的引用
                    const table = document.querySelector('.table');
                    const prevButton = document.getElementById('prevButton');
                    const nextButton = document.getElementById('nextButton');
                    const pageInfo = document.getElementById('pageInfo');

                    // 定义每页显示的行数和当前页码
                    const rowsPerPage = 8;
                    let currentPage = 1;

                    // 计算总页数
                    const totalRows = table.tBodies[0].rows.length;
                    const totalPages = Math.ceil(totalRows / rowsPerPage);

                    // 更新表格显示和页码信息
                    const updateTableDisplay = () => {
                        // 隐藏所有行
                        for (let row of table.tBodies[0].rows) {
                        row.style.display = 'none';
                        }

                        // 计算当前页的起始索引和结束索引
                        const startIndex = (currentPage - 1) * rowsPerPage;
                        const endIndex = startIndex + rowsPerPage;

                        // 显示当前页的行
                        for (let i = startIndex; i < endIndex; i++) {
                        if (table.tBodies[0].rows[i]) {
                            table.tBodies[0].rows[i].style.display = '';
                        }
                        }

                        // 更新上一页和下一页按钮的状态
                        prevButton.disabled = currentPage === 1;
                        nextButton.disabled = currentPage === totalPages;

                        // 更新页码信息
                        pageInfo.textContent = `第 ${currentPage} 頁 / 共 ${totalPages} 頁`;
                    };

                    // 初始化表格显示和页码信息
                    updateTableDisplay();

                    // 上一页按钮的点击事件处理程序
                    prevButton.addEventListener('click', () => {
                        if (currentPage > 1) {
                        currentPage--;
                        updateTableDisplay();
                        }
                    });

                    // 下一页按钮的点击事件处理程序
                    nextButton.addEventListener('click', () => {
                        if (currentPage < totalPages) {
                        currentPage++;
                        updateTableDisplay();
                        }
                    });

                    let isFavorite = {}; // 使用物件儲存每筆路線的收藏狀態

                    // 在页面载入时检查是否已收藏
                    window.addEventListener('DOMContentLoaded', () => {
                        const favoriteButtons = document.querySelectorAll('[data-routeid]');
                        favoriteButtons.forEach(button => {
                            const routeID = button.getAttribute('data-routeid');
                            checkFavoriteStatus(routeID);
                        });
                    });

                    // 檢查收藏狀態
                    function checkFavoriteStatus(RouteID) {
                        // 创建 XMLHttpRequest 对象
                        const xhr = new XMLHttpRequest();

                        // 设置请求方法和 URL
                        xhr.open('GET', `php/check_routefavorite.php?RouteID=${RouteID}`, true);

                        // 定义回调函数，处理响应
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                const response = JSON.parse(xhr.responseText);
                                isFavorite[RouteID] = response.isFavorite;
                                const favoriteButton = document.getElementById('routefavoriteBtn' + RouteID);
                                favoriteButton.textContent = isFavorite[RouteID] ? '取消收藏' : '加入收藏';
                            }
                        };

                        // 发送请求
                        xhr.send();
                    }

                    // 切換收藏状态
                    function toggleFavorite(RouteID) {
                        //判斷是否登入並跳出警示框
                        if (!isLoggedIn) {
                            if (confirm('請先登入開啟此功能')) {
                                window.location.href = 'login.html';
                            }
                            return;
                        }
                        // 建立 XMLHttpRequest 物件
                        const xhr = new XMLHttpRequest();

                        // 設定請求方法和 URL
                        xhr.open('POST', 'php/add_to_routefavorites.php', true);

                        // 設定請求頭（如果需要）
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        // 定義回調函式，處理響應
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                // 根據伺服器回應來設定按鈕文字和提示訊息
                                const favoriteButton = document.getElementById('routefavoriteBtn' + RouteID);
                                isFavorite[RouteID] = !isFavorite[RouteID];
                                favoriteButton.textContent = isFavorite[RouteID] ? '取消收藏' : '加入收藏';
                                alert(isFavorite[RouteID] ? '路線已成功添加到收藏！' : '路線已成功取消收藏！');
                            }
                                // 更新收藏数
                                const routeEl = document.getElementById('route_'+RouteID); 
                                const recommendEl = routeEl.querySelector('.recommend');
                                if (isFavorite[RouteID]) {
                                recommendEl.innerText = parseInt(recommendEl.innerText) - 1;
                                } else {
                                recommendEl.innerText = parseInt(recommendEl.innerText) + 1; 
                                }

                            
                        };

                        // 构建请求体（根据需要传递其他参数）
                        const requestBody = `RouteID=${encodeURIComponent(RouteID)}`;

                        // 发送请求
                        xhr.send(requestBody);
                    }


                    function sortTable(sortType) {
                        const table = document.querySelector('table');
                        const tbody = table.querySelector('tbody');
                        const rows = Array.from(tbody.querySelectorAll('tr'));

                        rows.sort((rowA, rowB) => {
                            let cellA, cellB;

                            switch (sortType) {
                                case '0': // 最多收藏
                                    cellA = parseInt(rowA.querySelector('td:nth-child(6)').textContent);
                                    cellB = parseInt(rowB.querySelector('td:nth-child(6)').textContent);
                                    return cellB - cellA; // 降序排列
                                case '1': // 最少收藏
                                    cellA = parseInt(rowA.querySelector('td:nth-child(6)').textContent);
                                    cellB = parseInt(rowB.querySelector('td:nth-child(6)').textContent);
                                    return cellA - cellB; // 升序排列
                                case '2': // 最新收藏
                                    cellA = parseInt(rowA.querySelector('td:nth-child(1)').textContent);
                                    cellB = parseInt(rowB.querySelector('td:nth-child(1)').textContent);
                                    return cellB - cellA; // 降序排列
                                case '3': // 最舊收藏
                                    cellA = parseInt(rowA.querySelector('td:nth-child(1)').textContent);
                                    cellB = parseInt(rowB.querySelector('td:nth-child(1)').textContent);
                                    return cellA - cellB; // 升序排列
                            }
                        });

                        tbody.innerHTML = '';
                        rows.forEach(row => tbody.appendChild(row));

                        // 更新所有分页的数据显示
                        updateTableDisplay();
                    }

                    

            </script>
            <script>
                // 定義各城市的區域選項
    const districts = {
        "0": [
        { value: '0', label: '無' },
        ],
      "01": [
        { value: '0', label: '全區' },
        { value: '200', label: '仁愛區' },
        { value: '201', label: '信義區' },
        { value: '202', label: '中正區' },
        { value: '203', label: '中山區' },
        { value: '204', label: '安樂區' },
        { value: '205', label: '暖暖區' },
        { value: '206', label: '七堵區' }
      ],
        "02": [
            { value: '0', label: '全區' },
            { value: '100', label: '中正區' },
            { value: '103', label: '大同區' },
            { value: '104', label: '中山區' },
            { value: '105', label: '松山區' },
            { value: '106', label: '大安區' },
            { value: '108', label: '萬華區' },
            { value: '110', label: '信義區' },
            { value: '111', label: '士林區' },
            { value: '112', label: '北投區' },
            { value: '114', label: '內湖區' },
            { value: '115', label: '南港區' },
            { value: '116', label: '文山區' }
      ],
      "03": [
        { value: '0', label: '全區' },
        { value: '207', label: '萬里區' },
        { value: '208', label: '金山區' },
        { value: '220', label: '板橋區' },
        { value: '221', label: '汐止區' },
        { value: '222', label: '深坑區' },
        { value: '223', label: '石碇區' },
        { value: '224', label: '瑞芳區' },
        { value: '226', label: '平溪區' },
        { value: '227', label: '雙溪區' },
        { value: '228', label: '貢寮區' },
        { value: '231', label: '新店區' },
        { value: '232', label: '坪林區' },
        { value: '233', label: '烏來區' },
        { value: '234', label: '永和區' },
        { value: '235', label: '中和區' },
        { value: '236', label: '土城區' },
        { value: '237', label: '三峽區' },
        { value: '238', label: '樹林區' },
        { value: '239', label: '鶯歌區' },
        { value: '241', label: '三重區' },
        { value: '242', label: '新莊區' },
        { value: '243', label: '泰山區' },
        { value: '244', label: '林口區' },
        { value: '247', label: '蘆洲區' },
        { value: '248', label: '五股區' },
        { value: '249', label: '八里區' },
        { value: '251', label: '淡水區' },
        { value: '252', label: '三芝區' },
        { value: '253', label: '石門區' }
      ],
      "04": [
        { value: '0', label: '全區' },
        { value: '320', label: '中壢區' },
        { value: '324', label: '平鎮區' },
        { value: '325', label: '龍潭區' },
        { value: '326', label: '楊梅區' },
        { value: '327', label: '新屋區' },
        { value: '328', label: '觀音區' },
        { value: '330', label: '桃園區' },
        { value: '333', label: '龜山區' },
        { value: '334', label: '八德區' },
        { value: '335', label: '大溪區' },
        { value: '336', label: '復興區' },
        { value: '337', label: '大園區' },
        { value: '338', label: '蘆竹區' }
            ],
      "05": [
        { value: '0', label: '全區' },
        { value: '300', label: '北區' },
        { value: '301', label: '東區' },
        { value: '302', label: '香山區' }
      ],
      "06": [
        { value: '0', label: '全區' },
        { value: '300', label: '寶山鄉' },
        { value: '302', label: '竹北市' },
        { value: '303', label: '湖口鄉' },
        { value: '304', label: '新豐鄉' },
        { value: '305', label: '新埔鎮' },
        { value: '306', label: '關西鎮' },
        { value: '307', label: '芎林鄉' },
        { value: '308', label: '寶山鄉' },
        { value: '310', label: '竹東鎮' },
        { value: '311', label: '五峰鄉' },
        { value: '312', label: '橫山鄉' },
        { value: '313', label: '尖石鄉' },
        { value: '314', label: '北埔鄉' },
        { value: '315', label: '峨眉鄉' }
      ],
      "07": [
        { value: '0', label: '全區' },
        { value: '350', label: '竹南鎮' },
        { value: '351', label: '頭份市' },
        { value: '352', label: '三灣鄉' },
        { value: '353', label: '南庄鄉' },
        { value: '354', label: '獅潭鄉' },
        { value: '356', label: '後龍鎮' },
        { value: '357', label: '通霄鎮' },
        { value: '358', label: '苑裡鎮' },
        { value: '360', label: '苗栗市' },
        { value: '361', label: '造橋鄉' },
        { value: '362', label: '頭屋鄉' },
        { value: '363', label: '公館鄉' },
        { value: '364', label: '大湖鄉' },
        { value: '365', label: '泰安鄉' },
        { value: '366', label: '銅鑼鄉' },
        { value: '367', label: '三義鄉' },
        { value: '368', label: '西湖鄉' },
        { value: '369', label: '卓蘭鎮' }
      ],
      "08": [
        { value: '0', label: '全區' },
        { value: '400', label: '中區' },
        { value: '401', label: '東區' },
        { value: '402', label: '南區' },
        { value: '403', label: '西區' },
        { value: '404', label: '北區' },
        { value: '406', label: '北屯區' },
        { value: '407', label: '西屯區' },
        { value: '408', label: '南屯區' },
        { value: '411', label: '太平區' },
        { value: '412', label: '大里區' },
        { value: '413', label: '霧峰區' },
        { value: '414', label: '烏日區' },
        { value: '420', label: '豐原區' },
        { value: '421', label: '后里區' },
        { value: '422', label: '石岡區' },
        { value: '423', label: '東勢區' },
        { value: '424', label: '和平區' },
        { value: '426', label: '新社區' },
        { value: '427', label: '潭子區' },
        { value: '428', label: '大雅區' },
        { value: '429', label: '神岡區' },
        { value: '432', label: '大肚區' },
        { value: '433', label: '沙鹿區' },
        { value: '434', label: '龍井區' },
        { value: '435', label: '梧棲區' },
        { value: '436', label: '清水區' },
        { value: '437', label: '大甲區' },
        { value: '438', label: '外埔區' },
        { value: '439', label: '大安區' }
      ],
      "09": [
        { value: '0', label: '全區' },
        { value: '500', label: '彰化市' },
        { value: '502', label: '芬園鄉' },
        { value: '503', label: '花壇鄉' },
        { value: '504', label: '秀水鄉' },
        { value: '505', label: '鹿港鎮' },
        { value: '506', label: '福興鄉' },
        { value: '507', label: '線西鄉' },
        { value: '508', label: '和美鎮' },
        { value: '509', label: '伸港鄉' },
        { value: '510', label: '員林市' },
        { value: '511', label: '社頭鄉' },
        { value: '512', label: '永靖鄉' },
        { value: '513', label: '埔心鄉' },
        { value: '514', label: '溪湖鎮' },
        { value: '515', label: '大村鄉' },
        { value: '516', label: '埔鹽鄉' },
        { value: '520', label: '田中鎮' },
        { value: '521', label: '北斗鎮' },
        { value: '522', label: '田尾鄉' },
        { value: '523', label: '埤頭鄉' },
        { value: '524', label: '溪州鄉' },
        { value: '525', label: '竹塘鄉' },
        { value: '526', label: '二林鎮' },
        { value: '527', label: '大城鄉' },
        { value: '528', label: '芳苑鄉' },
        { value: '530', label: '二水鄉' }
      ],
      "10": [
        { value: '0', label: '全區' },
        { value: '540', label: '南投市' },
        { value: '541', label: '中寮鄉' },
        { value: '542', label: '草屯鎮' },
        { value: '544', label: '國姓鄉' },
        { value: '545', label: '埔里鎮' },
        { value: '546', label: '仁愛鄉' },
        { value: '551', label: '名間鄉' },
        { value: '552', label: '集集鎮' },
        { value: '553', label: '水里鄉' },
        { value: '555', label: '魚池鄉' },
        { value: '556', label: '信義鄉' },
        { value: '557', label: '竹山鎮' },
        { value: '558', label: '鹿谷鄉' }
      ],
      "11": [
        { value: '0', label: '全區' },
        { value: '630', label: '斗南鎮' },
        { value: '631', label: '大埤鄉' },
        { value: '632', label: '虎尾鎮' },
        { value: '633', label: '土庫鎮' },
        { value: '634', label: '褒忠鄉' },
        { value: '635', label: '東勢鄉' },
        { value: '636', label: '臺西鄉' },
        { value: '637', label: '崙背鄉' },
        { value: '638', label: '麥寮鄉' },
        { value: '640', label: '斗六市' },
        { value: '643', label: '林內鄉' },
        { value: '646', label: '古坑鄉' },
        { value: '647', label: '莿桐鄉' },
        { value: '648', label: '西螺鎮' },
        { value: '649', label: '二崙鄉' },
        { value: '651', label: '北港鎮' },
        { value: '652', label: '水林鄉' },
        { value: '653', label: '口湖鄉' },
        { value: '654', label: '四湖鄉' },
        { value: '655', label: '元長鄉' }
      ],
      "12": [
        { value: '0', label: '全區' },
        { value: '600', label: '東區' },
        { value: '601', label: '西區' }
      ],

      "13": [
        { value: '0', label: '全區' },
        { value: '602', label: '番路鄉' },
        { value: '603', label: '梅山鄉' },
        { value: '604', label: '竹崎鄉' },
        { value: '605', label: '阿里山鄉' },
        { value: '606', label: '中埔鄉' },
        { value: '607', label: '大埔鄉' },
        { value: '608', label: '水上鄉' },
        { value: '611', label: '鹿草鄉' },
        { value: '612', label: '太保市' },
        { value: '613', label: '朴子市' },
        { value: '614', label: '東石鄉' },
        { value: '615', label: '六腳鄉' },
        { value: '616', label: '新港鄉' },
        { value: '621', label: '民雄鄉' },
        { value: '622', label: '大林鎮' },
        { value: '623', label: '溪口鄉' },
        { value: '624', label: '義竹鄉' },
        { value: '625', label: '布袋鎮' }
      ],

      "14": [
        { value: '0', label: '全區' },
        { value: '700', label: '中西區' },
        { value: '701', label: '東區' },
        { value: '702', label: '南區' },
        { value: '704', label: '北區' },
        { value: '708', label: '安平區' },
        { value: '709', label: '安南區' },
        { value: '710', label: '永康區' },
        { value: '711', label: '歸仁區' },
        { value: '712', label: '新化區' },
        { value: '713', label: '左鎮區' },
        { value: '714', label: '玉井區' },
        { value: '715', label: '楠西區' },
        { value: '716', label: '南化區' },
        { value: '717', label: '仁德區' },
        { value: '718', label: '關廟區' },
        { value: '719', label: '龍崎區' },
        { value: '720', label: '官田區' },
        { value: '721', label: '麻豆區' },
        { value: '722', label: '佳里區' },
        { value: '723', label: '西港區' },
        { value: '724', label: '七股區' },
        { value: '725', label: '將軍區' },
        { value: '726', label: '學甲區' },
        { value: '727', label: '北門區' },
        { value: '730', label: '新營區' },
        { value: '731', label: '後壁區' },
        { value: '732', label: '白河區' },
        { value: '733', label: '東山區' },
        { value: '734', label: '六甲區' },
        { value: '735', label: '下營區' },
        { value: '736', label: '柳營區' },
        { value: '737', label: '鹽水區' },
        { value: '741', label: '善化區' },
        { value: '741', label: '新市區' },
        { value: '742', label: '大內區' },
        { value: '743', label: '山上區' },
        { value: '744', label: '新市區' },
        { value: '745', label: '安定區' }
      ],

      "15": [
        { value: '0', label: '全區' },
        { value: '800', label: '新興區' },
        { value: '801', label: '前金區' },
        { value: '802', label: '苓雅區' },
        { value: '803', label: '鹽埕區' },
        { value: '804', label: '鼓山區' },
        { value: '805', label: '旗津區' },
        { value: '806', label: '前鎮區' },
        { value: '807', label: '三民區' },
        { value: '811', label: '楠梓區' },
        { value: '812', label: '小港區' },
        { value: '813', label: '左營區' },
        { value: '814', label: '仁武區' },
        { value: '815', label: '大社區' },
        { value: '817', label: '東沙群島' },
        { value: '819', label: '南沙群島' },
        { value: '820', label: '岡山區' },
        { value: '821', label: '路竹區' },
        { value: '822', label: '阿蓮區' },
        { value: '823', label: '田寮區' },
        { value: '824', label: '燕巢區' },
        { value: '825', label: '橋頭區' },
        { value: '826', label: '梓官區' },
        { value: '827', label: '彌陀區' },
        { value: '828', label: '永安區' },
        { value: '829', label: '湖內區' },
        { value: '830', label: '鳳山區' },
        { value: '831', label: '大寮區' },
        { value: '832', label: '林園區' },
        { value: '833', label: '鳥松區' },
        { value: '840', label: '大樹區' },
        { value: '842', label: '旗山區' },
        { value: '843', label: '美濃區' },
        { value: '844', label: '六龜區' },
        { value: '845', label: '內門區' },
        { value: '846', label: '杉林區' },
        { value: '847', label: '甲仙區' },
        { value: '848', label: '桃源區' },
        { value: '849', label: '那瑪夏區' },
        { value: '851', label: '茂林區' },
        { value: '852', label: '茄萣區' }
      ],

      "16": [
        { value: '0', label: '全區' },
        { value: '900', label: '屏東市' },
        { value: '901', label: '三地門鄉' },
        { value: '902', label: '霧臺鄉' },
        { value: '903', label: '瑪家鄉' },
        { value: '904', label: '九如鄉' },
        { value: '905', label: '里港鄉' },
        { value: '906', label: '高樹鄉' },
        { value: '907', label: '鹽埔鄉' },
        { value: '908', label: '長治鄉' },
        { value: '909', label: '麟洛鄉' },
        { value: '911', label: '竹田鄉' },
        { value: '912', label: '內埔鄉' },
        { value: '913', label: '萬丹鄉' },
        { value: '920', label: '潮州鎮' },
        { value: '921', label: '泰武鄉' },
        { value: '922', label: '來義鄉' },
        { value: '923', label: '萬巒鄉' },
        { value: '924', label: '崁頂鄉' },
        { value: '925', label: '新埤鄉' },
        { value: '926', label: '南州鄉' },
        { value: '927', label: '林邊鄉' },
        { value: '928', label: '東港鎮' },
        { value: '929', label: '琉球鄉' },
        { value: '931', label: '佳冬鄉' },
        { value: '932', label: '新園鄉' },
        { value: '940', label: '枋寮鄉' },
        { value: '941', label: '枋山鄉' },
        { value: '942', label: '春日鄉' },
        { value: '943', label: '獅子鄉' },
        { value: '944', label: '車城鄉' },
        { value: '945', label: '牡丹鄉' },
        { value: '946', label: '恆春鎮' },
        { value: '947', label: '滿州鄉' }
      ],
      "17": [
        { value: '0', label: '全區' },
        { value: '950', label: '臺東市' },
        { value: '951', label: '綠島鄉' },
        { value: '952', label: '蘭嶼鄉' },
        { value: '953', label: '延平鄉' },
        { value: '954', label: '卑南鄉' },
        { value: '955', label: '鹿野鄉' },
        { value: '956', label: '關山鎮' },
        { value: '957', label: '海端鄉' },
        { value: '958', label: '池上鄉' },
        { value: '959', label: '東河鄉' },
        { value: '961', label: '成功鎮' },
        { value: '962', label: '長濱鄉' },
        { value: '963', label: '太麻里鄉' },
        { value: '964', label: '金峰鄉' },
        { value: '965', label: '大武鄉' },
        { value: '966', label: '達仁鄉' }
      ],
      "18": [
        { value: '0', label: '全區' },
        { value: '970', label: '花蓮市' },
        { value: '971', label: '新城鄉' },
        { value: '972', label: '秀林鄉' },
        { value: '973', label: '吉安鄉' },
        { value: '974', label: '壽豐鄉' },
        { value: '975', label: '鳳林鎮' },
        { value: '976', label: '光復鄉' },
        { value: '977', label: '豐濱鄉' },
        { value: '978', label: '瑞穗鄉' },
        { value: '979', label: '萬榮鄉' },
        { value: '981', label: '玉里鎮' },
        { value: '982', label: '卓溪鄉' },
        { value: '983', label: '富里鄉' }
      ],
      "19": [
        { value: '0', label: '全區' },
        { value: '260', label: '壯圍鄉' },
        { value: '261', label: '頭城鎮' },
        { value: '262', label: '礁溪鄉' },
        { value: '263', label: '壯圍鄉' },
        { value: '264', label: '員山鄉' },
        { value: '265', label: '羅東鎮' },
        { value: '266', label: '三星鄉' },
        { value: '267', label: '大同鄉' },
        { value: '268', label: '五結鄉' },
        { value: '269', label: '冬山鄉' },
        { value: '270', label: '蘇澳鎮' },
        { value: '272', label: '南澳鄉' },
        { value: '290', label: '釣魚臺' }
      ],
      "20": [
        { value: '0', label: '全區' },
        { value: '880', label: '馬公市' },
        { value: '881', label: '西嶼鄉' },
        { value: '882', label: '望安鄉' },
        { value: '883', label: '七美鄉' },
        { value: '884', label: '白沙鄉' },
        { value: '885', label: '湖西鄉' }
      ],
      "21": [
        { value: '0', label: '全區' },
        { value: '890', label: '金沙鎮' },
        { value: '891', label: '金湖鎮' },
        { value: '892', label: '金寧鄉' },
        { value: '893', label: '金城鎮' },
        { value: '894', label: '烈嶼鄉' },
        { value: '896', label: '烏坵鄉' }
      ],
      "22": [
        { value: '0', label: '全區' },
        { value: '209', label: '南竿鄉' },
        { value: '210', label: '北竿鄉' },
        { value: '211', label: '莒光鄉' },
        { value: '212', label: '東引鄉' }
      ],


      // 在這裡可以添加更多城市和區域
    };

    function updateDistricts() {
      const citySelect = document.getElementById('city');
      const districtSelect = document.getElementById('district');
      const districtLabel = document.getElementById('districtLabel');

      // 清空區域選項
      districtSelect.innerHTML = '';

      // 獲取所選城市的值
      const selectedCity = citySelect.value;

      // 如果未選擇城市，隱藏區域選單
      if (selectedCity === '') {
        districtSelect.classList.add('hidden');
        districtLabel.classList.add('hidden');
        return;
      }

      // 獲取該城市的區域陣列
      const selectedDistricts = districts[selectedCity];

      // 生成區域選項
      selectedDistricts.forEach(function(district) {
        const option = document.createElement('option');
        option.value = district.value;
        option.textContent = district.label;
        districtSelect.appendChild(option);
      });

      // 顯示區域選單和標籤
      districtSelect.classList.remove('hidden');
      districtLabel.classList.remove('hidden');
    }
            </script>
</body>

</html>