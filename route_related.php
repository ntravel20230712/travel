<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 隨機行程瀏覽 route_random.php -->
    <meta charset="utf-8">
    <title>route show</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php
		session_start();
        $attractionName = $_GET['attractionName'];
        $attractionId = $_GET['attractionId'];
        // print_r($_SESSION['relatedData']);
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
                                    <a href='my_route.html' class='dropdown-item'>未去過行程</a>
                                    <a href='my_route_history.html' class='dropdown-item'>已去過行程</a>
                                    <a href='like_attractions.html' class='dropdown-item'>已收藏景點</a>
                                    <a href='like_route.html' class='dropdown-item'>已收藏行程</a>
                                    <a href='php/logout_res.php' class='dropdown-item'>登出</a>
                                </div>";

                    }else {
                        echo "<a href='login.html' class='nav-item nav-link'>登入/註冊</a>";
                        }
                    ?>
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
                <h6 class="section-title bg-white text-center text-primary px-3">行程瀏覽</h6>
                <h1 class="mb-5" id="resultText"></h1>

                <div class="row g-4">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <section class="intro">
                            <div class="bg-image h-100" style="background-color: #f5f7fa;">
                                <div class="mask d-flex align-items-center h-100">
                                    <div class="container">
                                        <!-- 排列bar開始-->
                                        <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3 py-3 fadeInUp"data-wow-delay="0.1s">
                                            <strong class="d-block py-2">已查到 <span id="numAttractions">0</span> 筆路線 </strong>
                                            <div class="ms-auto">
                                                <select class="form-select d-inline-block w-auto border pt-1 fadeInUp" data-wow-delay="0.1s" onchange="sortTable(this.value)">
                                                    <option value="">選擇排序</option>
                                                    <option value="0">最多收藏數</option>
                                                    <option value="1">最少收藏數</option>
                                                    <option value="2">最新路線</option>
                                                    <option value="3">最舊路線</option>
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
                                                                require_once('php/get_related_data.php');
                                                                // print_r($_SESSION['relatedData']);
                                                                $routeData = getroutesData();
                                                                // 按照路線 ID 由新到舊排序
                                                                usort($routeData, function($a, $b) {
                                                                    return $b['RouteID'] - $a['RouteID'];
                                                                });
                                                                $newestRoutes = array_slice($routeData, 0, 10); // 获取最新的 10 条数据
                                                                $relatedData = isset($_SESSION['relatedData']) ? $_SESSION['relatedData'] : [];
                                                                // 获取景点数量
                                                                $numAttractions = !empty($relatedData) ? count($relatedData) : count($newestRoutes);


                                                                // 输出到页面上的景点数量计数器
                                                                echo '<script>document.getElementById("numAttractions").textContent = "' . $numAttractions . '";</script>';
                                                                if (!empty($relatedData)) {
                                                                    $routeTagCounts = array();
                                                                    foreach ($relatedData as $route) {
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
                                                                        <td><a href="route_detail.php?RouteID=' . $routeID . '&route_startdate=' . $route['route_startdate'] . '&route_update=' . $route['route_update'] . '">查看詳細</a></td>
                                                                        <td>
                                                                            <input type="checkbox" class="btn-check" id="btn-check-1-outlined" autocomplete="off">
                                                                            <label class="mb-3 me-2 btn btn-outline-secondary" id="routefavoriteBtn' . $routeID . '" data-routeid="' . $routeID . '" onclick="toggleFavorite(' . $routeID . ')">加入收藏';
                                                                        echo '</label>
                                                                        </td>
                                                                        </tr>';
                                                                    }
                                                                } else {
                                                                    $routeTagCounts = array();
                                                                    foreach ($newestRoutes as $route) {
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
                                                                        <td><a href="route_detail.php?RouteID=' . $routeID . '&route_startdate=' . $route['route_startdate'] . '&route_update=' . $route['route_update'] . '">查看詳細</a></td>
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
                                                                    foreach ($newestRoutes as $route) {
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

            <script>
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

                    // 获取 PHP 中的 $_SESSION['relatedData'] 判断是否为空
                    <?php
                    $isRelatedDataEmpty = empty($_SESSION['relatedData']);
                    ?>

                    // 在 <script> 中根据判断结果显示不同的内容
                    document.addEventListener('DOMContentLoaded', function() {
                        const attractionName = "<?php echo $attractionName; ?>";

                        if (<?php echo $isRelatedDataEmpty ? 'true' : 'false'; ?>) {
                            // 如果 $_SESSION['relatedData'] 为空
                            document.getElementById('resultText').textContent = '無搜尋到"' + attractionName + '"的行程，以下顯示10筆最新路線';
                        } else {
                            // 如果 $_SESSION['relatedData'] 不为空
                            document.getElementById('resultText').textContent = '有關"' + attractionName + '"的行程';
                        }
                    });
            </script>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>

</body>

</html>