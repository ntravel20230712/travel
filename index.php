<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>newTRAVEL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
		<!--連接資料庫-->
		<?php require_once("php/db_connect_wamp.php"); ?>
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
                        echo "<a href='login.php' class='nav-item nav-link'>登入/註冊</a>";
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
            <?php
            
            require_once("php/random_route.php");
            echo '<a href=route_detail.php?RouteID=' . $routedata['RouteID'] . '&RouteName=' . $routedata['RouteName']. '&route_update=' . $routedata['route_update'] . '"
                    class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">試試隨機行程GO&#32;&#10140;</a>';

            ?>
            </div>
            <!-- 未登入前 -->
            <!--<a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">加入我們<i class="fa fa-arrow-right ms-3"></i></a>-->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start 跑馬燈 -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/anping.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">安平老街</h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    荷蘭人於西元1624年，在安平建造了臺灣第一座城堡「熱蘭遮城」，也就是現在的安平古堡，這裡曾是荷蘭人統治的中樞，更是對外貿易的總樞紐，原本的建築格局分為方形內城與長方形外城。西元1661年，鄭成功來台驅荷後，將此地改名為安平，故熱蘭遮城也稱為「王城」或「臺灣城」，俗稱安平古堡，是臺灣最早的一座城池。
                                </p>
                                <a href="big_attraction.html"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">查看更多</a>
                                    <?php	
                    if (!isset($_SESSION['mem_name'])) {
                        echo "<a href='login.html' class='btn btn-light py-md-3 px-md-5 animated slideInRight'>加入我們</a>";
                    }
                    ?>
                                <!-- <a href="login.html"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">加入我們</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/lukang.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">鹿港老街</h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    鹿港老街位於臺灣彰化縣鹿港鎮，廣義的『鹿港老街』一詞，範圍包含整個鹿港鎮的歷史古蹟街區，狹義的定義則主要由瑤林街與埔頭街連結而成，鹿港是荷蘭及清治時期中臺灣最重要對外經商港口，過往曾因商業的發展而繁榮。
                                </p>
                                <a href="big_attraction.html"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">查看更多</a>
                                    <?php	
                    if (!isset($_SESSION['mem_name'])) {
                        echo "<a href='login.html' class='btn btn-light py-md-3 px-md-5 animated slideInRight'>加入我們</a>";
                    }
                    ?>
                                <!-- <a href="login.html"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">加入我們</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">景點推薦</h6>
                <h1 class="mb-5">景點TOP5</h1>
            </div>

            <!-- 動態磚開始 -->
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/anping.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">安平古堡</h5>
                                    <small class="text-primary">103次觀看</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/anping.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">安平古堡</h5>
                                    <small class="text-primary">103次觀看</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/lukang.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">鹿港老街</h5>
                                    <small class="text-primary">93次觀看</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/lukang.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">鹿港老街</h5>
                                    <small class="text-primary">93次觀看</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/lukang.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">鹿港老街</h5>
                                    <small class="text-primary">93次觀看</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 動態磚結束 -->
    </div>
    <!-- Categories end -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">路線推薦</h6>
                <h1 class="mb-5">路線TOP5</h1>
                <!-- Booking Start -->
                <!-- <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="bg-white shadow" style="padding: 35px;">
                                <div class="row g-2">
                                    <div class="col-md-10">
                                        <div class="row g-2">
                                            <div class="col-md-3">
                                                <select class="form-select">
                                                    <option selected>選擇縣市</option>
                                                    <option value="1">台中市</option>
                                                    <option value="2">台北市</option>
                                                    <option value="3">台南市</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="text-center">選擇標籤:</h5>
                                                <input type="checkbox" class="btn-check" id="btn-check-1-outlined"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-secondary"
                                                    for="btn-check-1-outlined">親子同樂</label>
                                                <input type="checkbox" class="btn-check" id="btn-check-2-outlined"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-secondary"
                                                    for="btn-check-2-outlined">活力行程</label>
                                                <input type="checkbox" class="btn-check" id="btn-check-3-outlined"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-secondary"
                                                    for="btn-check-3-outlined">悠閒行程</label>
                                                <input type="checkbox" class="btn-check" id="btn-check-4-outlined"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-secondary"
                                                    for="btn-check-4-outlined">美食行程</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-select">
                                                    <option selected>排序方式</option>
                                                    <option value="1">最新</option>
                                                    <option value="2">按照筆畫</option>
                                                    <option value="3">推最多</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary w-100">搜尋</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- Booking End -->
                <div class="row g-4">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <section class="intro">
                            <div class="bg-image h-100" style="background-color: #f5f7fa;">
                                <div class="mask d-flex align-items-center h-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="table-responsive table-scroll"
                                                        data-mdb-perfect-scrollbar="true"
                                                        style="position: relative; height: 500px">
                                                        <table class="table table-striped mb-0">
                                                            <thead style="background-color: #424242;">
                                                                <tr>
                                                                    <th scope="col">路線名</th>
                                                                    <th scope="col">縣市</th>
                                                                    <th scope="col">星期</th>
                                                                    <th scope="col">時間</th>
                                                                    <th scope="col">標籤</th>
                                                                    <th scope="col">推薦數</th>
                                                                    <th scope="col">更新日期</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>悠遊台南行</td>
                                                                    <td>台南市</td>
                                                                    <td>星期五</td>
                                                                    <td>10:00</td>
                                                                    <td>親子同樂</td>
                                                                    <td>12</td>
                                                                    <td>6/8</td>
                                                                    <td><a href="#">點我查看</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>文藝復興台南路線</td>
                                                                    <td>台南市</td>
                                                                    <td>星期六</td>
                                                                    <td>9:00</td>
                                                                    <td>悠閒行程</td>
                                                                    <td>2</td>
                                                                    <td>7/4</td>
                                                                    <td><a href="#">點我查看</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>復古綠油油台南路線</td>
                                                                    <td>台南市</td>
                                                                    <td>星期一</td>
                                                                    <td>15:00</td>
                                                                    <td>親子同樂、活力行程</td>
                                                                    <td>24</td>
                                                                    <td>3/9</td>
                                                                    <td><a href="#">點我查看</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-car text-primary mb-4"></i>
                            <h5 class="mb-3">不知道去哪嗎?</h5>
                            <p>如果想出門不知道可以去哪?<br>我們提供各式各樣的行程<br>其中一定有適合你的!!!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-bell text-primary mb-4"></i>
                            <h5 class="mb-3">玩到忘我了嗎?</h5>
                            <p>表訂三點卻玩到五點?<br>我們有專屬APP智慧提醒<br>絕對不會讓你錯過下個景點!!!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">規劃行程很累人嗎?</h5>
                            <p>討厭的朋友又叫你規劃行程了嗎?<br>我們提供一鍵生成完美行程<br>讓朋友永遠從拜你!!!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">想推薦行程給同好嗎?</h5>
                            <p>有超讚行程想推廣出去嗎?<br>可以分享在這裡分享你的行程<br>讓更多人知道你的超棒玩法!!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/gpexample.png" alt=""
                            style="object-fit: contain;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">關於我們</h6>
                    <h1 class="mb-4">歡迎來到newTRAVEL</h1>
                    <p class="mb-4">newTRAVEL提供方便的功能給喜歡按照行程表遊玩的遊客們，在這裡你可以找到適合自己的行程，也可以參考別人玩過的路線，自由變化成屬於自己的完美行程。</p>
                    <p class="mb-4">我們網站目前有提供以下特色功能......</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>探索觀光景點</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>探索推薦行程</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>自訂旅遊行程</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>智慧導覽APP</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>行程及景點推薦</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>景點留言板</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
                window.onload = function() {
                window.scrollTo(0, 0);
                }
            </script>
</body>

</html>