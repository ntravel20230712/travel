<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>register</title>
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

    <style>
        .steps {
            --normal-color: #666;
            --active-color: #06e;
            max-width: 700px; /* 根据需要进行调整 */
            display: flex;
            justify-content: space-between;
            padding: 0;
            margin: 0;
            counter-reset: order;
            width: 80%; /* 缩小宽度 */
            margin: auto; /* 水平居中 */
        }
    
        /* 步骤项 */
        .steps > li {
            flex: auto;
            display: inline-flex;
            align-items: center;
            counter-increment: order;
        }
    
        .steps > li:last-child {
            flex: none;
        }
    
        /* 步骤编号（带圈数字） */
        .steps > li::before {
            content: counter(order);
            flex-shrink: 0;
            width: 1.4em;
            line-height: 1.4em;
            margin-right: .5em;
            text-align: center;
            border-radius: 50%;
            border: 1px solid;
            color: var(--normal-color); /* 设置数字颜色 */
            background-color: #fff; /* 设置圆圈背景色 */
        }
    
        /* 步骤项引导线 */
        .steps > li:not(:last-child)::after {
            content: '';
            flex: 1;
            margin: 0 1em;
            border-bottom: 1px solid;
            opacity: .6;
        }
    
        /* 步骤状态 */
        .steps > .active {
            color: var(--active-color);
        }
    
        .steps > .active::before {
            color: #fff;
            background: var(--active-color);
            border-color: var(--active-color);
        }
    
        .steps > .active::after,
        .steps > .active ~ li {
            color: var(--normal-color);
        }

        .vertical-center {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 20vh; /* 调整此处的高度 */
    }
/* 父级容器，使用 Flexbox 布局 */
.form-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center; /* 垂直居中对齐 */
}

/* 北部标题 */
.form-check-inline {
    flex: 0 0 auto; /* 不要强制换行 */
    margin-right: 10px; /* 调整标题之间的间距 */
}

/* 城市选择组 */
.form-check-group {
    flex: 1; /* 填满剩余可用空间 */
    display: flex;
    flex-wrap: wrap;
    margin-left: 10px; /* 调整城市选择组与标题之间的间距 */
}

/* 选项 */
.form-check-inline {
    flex: 0 0 calc(25% - 30px); /* 每行显示四个选项，减去一些间距 */
    margin-right: 30px; /* 选项之间的间距 */
}
.form-check-group {
    display: flex;
    flex-wrap: wrap;
}

.form-check {
    flex-basis: calc(33.33% - 1rem); /* 每3個選項佔1/3的寬度 */
    margin-right: 1rem; /* 添加右邊間距，可根據需要調整 */
    margin-bottom: 1rem; /* 添加下邊間距，可根據需要調整 */
}

/* 清除每一行的最後一個選項的右邊間距 */
.form-check:nth-child(3n) {
    margin-right: 0;
}

    /* 自定义CSS样式来调整单选框选项之间的距离 */
    .custom-radio-spacing {
        margin-right: 80px; /* 调整右侧间距，根据需要进行调整 */
    }
    </style>
    

    
    
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
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">個人資料</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    

   <!-- 在已有的HTML代码中添加问卷 -->
<div class="container-fluid">
    <div class="row vertical-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
            <form method="POST" action="php/questionnaire_res.php">
                <!-- 步骤1：问卷问题1 -->
                <div id="step1">
                    <h4>喜歡的地區：</h4>
                    
                    <div class="form-check form-check-inline">
                        <h6>北部：</h6>
                    </div>

                    <div class="form-check-group">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="基隆市" name="location[]">
                            <label class="form-check-label" for="基隆市">基隆市</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="台北市" name="location[]">
                            <label class="form-check-label" for="台北市">台北市</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="新北市" name="location[]">
                            <label class="form-check-label" for="新北市">新北市</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="桃園市" name="location[]">
                            <label class="form-check-label" for="桃園市">桃園市</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="新竹市" name="location[]">
                            <label class="form-check-label" for="新竹市">新竹市</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="新竹縣" name="location[]">
                            <label class="form-check-label" for="新竹縣">新竹縣</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="宜蘭縣" name="location[]">
                            <label class="form-check-label" for="宜蘭縣">宜蘭縣</label>
                        </div>
                    </div>
                    
                    <!-- 添加更多北部縣市選項 -->
                    
                    <br><div class="form-check form-check-inline">
                        <h6>中部：</h6>
                    </div>
                    <div class="form-check-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="苗栗縣" name="location[]">
                        <label class="form-check-label" for="苗栗縣">苗栗縣</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="台中市" name="location[]">
                        <label class="form-check-label" for="台中市">台中市</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="彰化縣" name="location[]">
                        <label class="form-check-label" for="彰化縣">彰化縣</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="南投縣" name="location[]">
                        <label class="form-check-label" for="南投縣">南投縣</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="雲林縣" name="location[]">
                        <label class="form-check-label" for="雲林縣">雲林縣</label>
                    </div></div>

                    <br><div class="form-check form-check-inline">
                        <h6>南部：</h6>
                    </div>
                    <div class="form-check-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="嘉義市" name="location[]">
                        <label class="form-check-label" for="嘉義市">嘉義市</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="嘉義縣" name="location[]">
                        <label class="form-check-label" for="嘉義縣">嘉義縣</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="台南市" name="location[]">
                        <label class="form-check-label" for="台南市">台南市</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="高雄市" name="location[]">
                        <label class="form-check-label" for="高雄市">高雄市</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="屏東縣" name="location[]">
                        <label class="form-check-label" for="屏東縣">屏東縣</label>
                    </div></div>

                    <br><div class="form-check form-check-inline">
                        <h6>東部：</h6>
                    </div>
                    <div class="form-check-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="台東縣" name="location[]">
                        <label class="form-check-label" for="台東縣">台東縣</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="花蓮縣" name="location[]">
                        <label class="form-check-label" for="花蓮縣">花蓮縣</label>
                    </div></div>

                    <br><div class="form-check form-check-inline">
                        <h6>離島：</h6>
                    </div>
                    <div class="form-check-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="澎湖縣" name="location[]">
                        <label class="form-check-label" for="澎湖縣">澎湖縣</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="金門縣" name="location[]">
                        <label class="form-check-label" for="金門縣">金門縣</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="連江縣" name="location[]">
                        <label class="form-check-label" for="連江縣">連江縣</label>
                    </div></div><br>


                    <button type="button" class="btn btn-primary py-3 w-100 mb-4" onclick="goToStep(2)">下一步</button>
                </div>


                <!-- 步骤2：问卷问题2 -->
                <div id="step2" style="display: none;">
                    <h4>喜歡的旅行風格：</h4>
                    <!-- 添加旅行風格问题选项 -->
                    <div class="form-radio">
                        <h6>1. </h6>
                        
                        <div class="form-radio form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="刺激" name="travelStyleGroup1">
                            <label class="form-check-label" for="刺激">刺激</label>
                        </div>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="休閒" name="travelStyleGroup1">
                            <label class="form-check-label" for="悠閒">悠閒</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>2. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="休閒" name="travelStyleGroup2">
                            <label class="form-check-label" for="度假">度假</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="文化" name="travelStyleGroup2">
                            <label class="form-check-label" for="在地文化">在地文化</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>3. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="文化" name="travelStyleGroup3">
                            <label class="form-check-label" for="古蹟">古蹟</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="自然" name="travelStyleGroup3">
                            <label class="form-check-label" for="大自然">大自然</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>4. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="自然" name="travelStyleGroup4">
                            <label class="form-check-label" for="海灘">海灘</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="娛樂" name="travelStyleGroup4">
                            <label class="form-check-label" for="美食">美食</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>5. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="娛樂" name="travelStyleGroup5">
                            <label class="form-check-label" for="音樂">音樂</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="其他" name="travelStyleGroup5">
                            <label class="form-check-label" for="購物">購物</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>6. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="其他" name="travelStyleGroup6">
                            <label class="form-check-label" for="科學">科學</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="刺激" name="travelStyleGroup6">
                            <label class="form-check-label" for="冒險">冒險</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>7. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="刺激" name="travelStyleGroup7">
                            <label class="form-check-label" for="極限運動">極限運動</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="文化" name="travelStyleGroup7">
                            <label class="form-check-label" for="歷史">歷史</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>8. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="休閒" name="travelStyleGroup8">
                            <label class="form-check-label" for="放鬆">放鬆</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="自然" name="travelStyleGroup8">
                            <label class="form-check-label" for="動物觀察">動物觀察</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>9. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="娛樂" name="travelStyleGroup9">
                            <label class="form-check-label" for="遊樂園">遊樂園</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="其他" name="travelStyleGroup9">
                            <label class="form-check-label" for="浪漫">浪漫</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>10. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="其他" name="travelStyleGroup10">
                            <label class="form-check-label" for="購物">購物</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="休閒" name="travelStyleGroup10">
                            <label class="form-check-label" for="放鬆">放鬆</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>11. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="刺激" name="travelStyleGroup11">
                            <label class="form-check-label" for="背包客">背包客</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="文化" name="travelStyleGroup11">
                            <label class="form-check-label" for="藝術">藝術</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>12. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="自然" name="travelStyleGroup12">
                            <label class="form-check-label" for="登山">登山</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="娛樂" name="travelStyleGroup12">
                            <label class="form-check-label" for="夜生活">夜生活</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>13. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="刺激" name="travelStyleGroup13">
                            <label class="form-check-label" for="冒險">冒險</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="自然" name="travelStyleGroup13">
                            <label class="form-check-label" for="戶外露營">戶外露營</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>14. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="文化" name="travelStyleGroup14">
                            <label class="form-check-label" for="宗教">宗教</label>
                        </div>

                        <div class="form-check form-check-inline  custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="其他" name="travelStyleGroup14">
                            <label class="form-check-label" for="科學">科學</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>15. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="娛樂" name="travelStyleGroup15">
                            <label class="form-check-label" for="遊樂園">遊樂園</label>
                        </div>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="休閒" name="travelStyleGroup15">
                            <label class="form-check-label" for="度假">度假</label>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary py-3 w-100 mb-4" onclick="goToStep(3)">下一步</button>
                </div>

                <!-- 步骤3：问卷问题3 -->
                <div id="step3" style="display: none;">
                    <h4>喜歡的食物類型：</h4>
                    <!-- 添加食物類型问题选项 -->
                    <div class="form-radio">
                        <h6>1. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="速食" name="foodGroup1">
                            <label class="form-check-label" for="漢堡">漢堡</label>
                        </div>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="飯類" name="foodGroup1">
                            <label class="form-check-label" for="滷肉飯">滷肉飯</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>2. </h6>
                        
                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="飯類" name="foodGroup2">
                            <label class="form-check-label" for="便當">便當</label>
                        </div>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="麵類" name="foodGroup2">
                            <label class="form-check-label" for="義大利麵">義大利麵</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>3. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="麵類" name="foodGroup3">
                            <label class="form-check-label" for="炒麵">炒麵</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="甜點" name="foodGroup3">
                            <label class="form-check-label" for="蛋糕">蛋糕</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>4. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="甜點" name="foodGroup4">
                            <label class="form-check-label" for="鬆餅">鬆餅</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="小吃" name="foodGroup4">
                            <label class="form-check-label" for="蚵仔煎">蚵仔煎</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>5. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="小吃" name="foodGroup5">
                            <label class="form-check-label" for="割包">割包</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="精緻" name="foodGroup5">
                            <label class="form-check-label" for="牛排">牛排</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>6. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="精緻" name="foodGroup6">
                            <label class="form-check-label" for="火鍋">火鍋</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="速食" name="foodGroup6">
                            <label class="form-check-label" for="薯條">薯條</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>7. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="小吃" name="foodGroup7">
                            <label class="form-check-label" for="肉圓">肉圓</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="甜點" name="foodGroup7">
                            <label class="form-check-label" for="泡芙">泡芙</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>8. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="飯類" name="foodGroup8">
                            <label class="form-check-label" for="炒飯">炒飯</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="精緻" name="foodGroup8">
                            <label class="form-check-label" for="燒肉">燒肉</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>9. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="速食" name="foodGroup9">
                            <label class="form-check-label" for="披薩">披薩</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="麵類" name="foodGroup9">
                            <label class="form-check-label" for="拉麵">拉麵</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>10. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="甜點" name="foodGroup10">
                            <label class="form-check-label" for="布丁">布丁</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="精緻" name="foodGroup10">
                            <label class="form-check-label" for="法餐">法餐</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>11. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="速食" name="foodGroup11">
                            <label class="form-check-label" for="炸雞">炸雞</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="小吃" name="foodGroup11">
                            <label class="form-check-label" for="蚵仔麵線">蚵仔麵線</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>12. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="飯類" name="foodGroup12">
                            <label class="form-check-label" for="燉飯">披薩</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="麵類" name="foodGroup12">
                            <label class="form-check-label" for="牛肉麵">牛肉麵</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>13. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="飯類" name="foodGroup13">
                            <label class="form-check-label" for="丼飯">丼飯</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="小吃" name="foodGroup13">
                            <label class="form-check-label" for="臭豆腐">臭豆腐</label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <h6>14. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="精緻" name="foodGroup14">
                            <label class="form-check-label" for="壽司">壽司</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="麵類" name="foodGroup14">
                            <label class="form-check-label" for="乾麵">乾麵</label>
                        </div>
                    </div>


                    <div class="form-radio">
                        <h6>15. </h6>

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="甜點" name="foodGroup15">
                            <label class="form-check-label" for="雞蛋糕">雞蛋糕</label>
                        </div>    

                        <div class="form-check form-check-inline custom-radio-spacing">
                            <input class="form-check-input" type="radio" value="速食" name="foodGroup15">
                            <label class="form-check-label" for="潛艇堡">潛艇堡</label>
                        </div>
                    </div>


                    <br><br><button type="button" class="btn btn-primary py-3 w-100 mb-4" onclick="goToStep(4)">下一步</button>
                </div>

                <!-- 步骤4：问卷问题4 -->
                <div id="step4" style="display: none;">
                    <h4>出遊的頻率：</h4>

                    <div class="form-check-group">
                        <!-- 每月一次 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="travelFrequency" id="monthly" value="每月一次">
                            <label class="form-check-label" for="monthly">每月一次</label>
                        </div>

                        <!-- 每季度一次 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="travelFrequency" id="quarterly" value="每季度一次">
                            <label class="form-check-label" for="quarterly">每季度一次</label>
                        </div>

                        <!-- 每半年一次 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="travelFrequency" id="semiAnnually" value="每半年一次">
                            <label class="form-check-label" for="semiAnnually">每半年一次</label>
                        </div>

                        <!-- 每年一次 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="travelFrequency" id="annually" value="每年一次">
                            <label class="form-check-label" for="annually">每年一次</label>
                        </div>

                        <!-- 幾乎不出遊 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="travelFrequency" id="rarely" value="幾乎不出遊">
                            <label class="form-check-label" for="rarely">幾乎不出遊</label>
                        </div>
                    </div><br>

                    <!-- 添加提交按鈕 -->
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">提交問卷</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>







    <!-- login End -->




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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <!-- JavaScript代码 -->
            <script>
                let currentStep = 1;

                function goToStep(step) {
                    document.getElementById('step' + currentStep).style.display = 'none';
                    document.getElementById('step' + step).style.display = 'block';
                    currentStep = step;
                }

            </script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>