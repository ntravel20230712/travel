<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BIGattraction</title>
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
                        <a href="route_area.html" class="dropdown-item">區域行程</a>
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
                                    <a href='like_attractions.php' class='dropdown-item'>已收藏景點</a>
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


    <!-- Carousel Start 跑馬燈 -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/anping.jpg" alt="">
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/lukang.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-start text-primary pe-3">景點介紹</h6>
                <h1 class="mb-4" id="attractionName">安平老街</h1>
                <p class="fs-5 text-block mb-4 pb-2" id="descriptionContainer">
                    
                </p>
                <div class="col-md-12">
                    <div class="row g-2">
                    <div class="col-md-8">
    <h5 class="text-right">景點標籤:&emsp;
        <a href="attraction_tag.php"><button type="button" class="btn btn-outline-secondary">#好玩的</button></a>
        <a href="attraction_tag.php"><button type="button" class="btn btn-outline-secondary">#適合小孩</button></a>
        <a href="attraction_tag.php"><button type="button" class="btn btn-outline-secondary">#刺激的</button></a>
        <a href="attraction_tag.php"><button type="button" class="btn btn-outline-secondary">#適合長時間</button></a>
    </h5>
</div>
                        <div class="col-md-4">
                            <form action="route_related.html">
                                <input type="checkbox" class="btn-check" id="btn-check-1-outlined" autocomplete="off">
                                <label class="mb-3 me-2 btn btn-outline-secondary" id="favoriteBtn" onclick="toggleFavorite()">加入收藏</label>
                                <button type="submit" class="mb-3 btn btn-primary" id="end-btn">查詢相關行程</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">這裡可能有你喜歡的</h6>
                <h1 class="mb-5">附近景點</h1>
            </div>

            <!-- 動態磚開始 -->
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/anping.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">安平古堡</h5>
                                    <small class="text-primary">103次觀看</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/lukang.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">鹿港老街</h5>
                                    <small class="text-primary">93次觀看</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                <img class="img-fluid" src="img/lukang.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">鹿港老街</h5>
                                    <small class="text-primary">93次觀看</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-12 wow zoomIn" data-wow-delay="0.7s">
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
                const fragment = window.location.hash.substr(1);
                const attractionName = decodeURIComponent(fragment); // 解碼片段值，如果需要的話

                // 發送 Ajax 請求到 `get_attraction.php`，並傳送景點名稱作為參數
                const xhr = new XMLHttpRequest();
                xhr.open('GET', `php/get_attraction.php?attractionName=${attractionName}`, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // 獲取 Ajax 回應，這是從資料庫檢索的景點介紹內容
                        const description = xhr.responseText;

                        // 將景點介紹內容設定為 HTML 元素的內容
                        descriptionContainer.textContent = description;
                    }
                };
                xhr.send();

            </Script>
            <script>
                // 在頁面載入時動態修改景點名稱
                window.addEventListener('DOMContentLoaded', () => {
                    const attractionNameElement = document.getElementById('attractionName');
                    if (attractionNameElement) {
                        const fragment = window.location.hash.substr(1);
                        const attractionName = decodeURIComponent(fragment);
                        attractionNameElement.textContent = attractionName;
                    }
                });

            </Script>
            <Script>
                // 在页面载入时检查是否已收藏
                window.addEventListener('DOMContentLoaded', () => {
                    const favoriteBtn = document.getElementById('favoriteBtn');
                    const attractionName = document.getElementById('attractionName').textContent;

                    // 创建 XMLHttpRequest 对象
                    const xhr = new XMLHttpRequest();

                    // 设置请求方法和 URL
                    xhr.open('GET', `php/check_favorite.php?attractionName=${attractionName}`, true);

                    // 定义回调函数，处理响应
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            const response = JSON.parse(xhr.responseText);

                            if (response.isFavorite) {
                                // 如果已收藏，更改按钮文本为 "取消收藏"
                                favoriteBtn.textContent = '取消收藏';
                                isFavorite = true; // 将 isFavorite 设置为 true
                            }
                        }
                    };

                    // 发送请求
                    xhr.send();
                });

                let isFavorite = false; // 初始状态为已收藏

                function toggleFavorite() {
                    // 获取景点名称或其他必要的数据
                    const attractionName = document.getElementById('attractionName').textContent;

                    // 创建 XMLHttpRequest 对象
                    const xhr = new XMLHttpRequest();

                    // 设置请求方法和 URL
                    xhr.open('POST', 'php/add_to_favorites.php', true);

                    // 设置请求头（如果需要）
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    // 定义回调函数，处理响应
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            // 根据收藏状态更新按钮文本和提示信息
                            if (isFavorite) {
                                isFavorite = false;
                                document.getElementById('favoriteBtn').textContent = '加入收藏';
                                alert('景點已成功取消收藏！');
                            } else {
                                isFavorite = true;
                                document.getElementById('favoriteBtn').textContent = '取消收藏';
                                alert('景點已成功添加到收藏！');
                            }
                        }
                    };

                    // 构建请求体（根据需要传递其他参数）
                    const requestBody = `attractionName=${encodeURIComponent(attractionName)}`;

                    // 发送请求
                    xhr.send(requestBody);
                }
            </Script>
</body>

</html>