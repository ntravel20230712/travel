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
    <style>
      /* 在你的 CSS 样式表中添加以下代码 */
        .no-bold {
            font-weight: normal; /* 设置为正常字体（非粗体） */
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
        <?php
        // 在這裡使用 PHP 代碼從資料庫中獲取圖片資訊
        require_once('php/functions.php');
        $attractionsData = getAttractionsData();

        if (!empty($attractionsData)) {
            foreach ($attractionsData as $attraction) {
                // 使用資料庫中的圖片路徑
                $imagePath = $attraction['att_picture'];
        ?>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/<?php echo $imagePath; ?>" alt="">
        </div>
        <?php
            }
        } else {
            // 如果資料庫中無資料，可以顯示一個預設的圖片或其他內容
            ?>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/default.jpg" alt="預設圖片">
            </div>
            <?php
        }
        ?>
    </div>
</div>

    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-start text-primary pe-3">景點介紹</h6>
                <h1 class="mb-4">
                    <span id="attractionName"></span>
                    <span class="fs-5 text-block mb-4 pb-2 no-bold">(</span>
                    <span id="attAddress" class="fs-5 text-block mb-4 pb-2 no-bold"></span>
                    <span class="fs-5 text-block mb-4 pb-2 no-bold">)</span>
                </h1>
                <p class="fs-5 text-block mb-4 pb-2" id="descriptionContainer">
                    
                </p>
                <h5 class="text-right">
                    <span>營業日: </span><span id="attWeek"></span>
                </h5>
                <h5 class="text-right">
                    <span>營業時間: </span><span id="attStartTime"></span> ~ <span id="attEndTime"></span>
                </h5>

                <div class="col-md-12">
                    <div class="row g-2">
                    <div class="col-md-8">
                        
                        <h5 class="text-right" id="attractionTags">景點標籤:&nbsp;
                        </h5>
                        

                        
                        
                    </div>
                        <div class="col-md-4">
                                <input type="checkbox" class="btn-check" id="btn-check-1-outlined" autocomplete="off">
                                <label class="mb-3 me-2 btn btn-outline-secondary" id="favoriteBtn" onclick="toggleFavorite()">加入收藏</label>
                                <button type="submit" class="mb-3 btn btn-primary" id="end-btn" onclick="redirectToRouteRelated()">查詢相關行程</button>
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
                    <div class="row g-3" id="productContainer">
                        
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
                //判斷是否登入
                var isLoggedIn = <?php echo isset($_SESSION['mem_id']) ? 'true' : 'false'; ?>;
                
                <?php 
                require_once('php/getfavorites.php'); ?>
                const favoriteCounts = <?php echo json_encode($favoriteCounts); ?>;
                <?php require_once('php/getviews.php'); ?>
                const viewsData = <?php echo json_encode($viewsData); ?>;
                const idData = <?php echo json_encode($idData); ?>;
                // 商品數據
                <?php
                require_once('php/functions.php');
                $attractionsData = getAttractionsData();
                $products = array();

                if (!empty($attractionsData)) {
                    foreach ($attractionsData as $attraction) {
                        $product = array(
                            "id" => $attraction["att_id"],
                            "name" => $attraction["att_name"],
                            "city" => $attraction["att_City"],
                            "latitude" => $attraction["att_lat"],
                            "longitude" => $attraction["att_lng"],
                            "picture"=> $attraction["att_picture"],
                        );
                        $products[] = $product;
                    }
                } else {
                    echo "沒有資料。";
                }

                // 將 $products 轉換為 JSON 格式
                $productsJSON = json_encode($products);
                ?>
                const products = <?php echo $productsJSON; ?>;

                const itemsPerPage = 3; // 每頁顯示的商品數量

                let currentPage = 1; // 當前頁碼


                // 更新商品列表
                function updateProductList(userLat, userLng) {
                    const productContainer = document.getElementById('productContainer');
                    productContainer.innerHTML = '';

                    // Step 1: 取得使用者點擊的景點的經緯度
                    const attractionLatitude = userLat;
                    const attractionLongitude = userLng;

                    // Step 2: 找出5公里內的商品（景點），排除與當前景點相同名稱的商品
                    const currentAttractionName = document.getElementById('attractionName').textContent;
                    const nearbyProducts = products.filter(product => {
                        const distance = getDistance(attractionLatitude, attractionLongitude, product.latitude, product.longitude);
                        return distance <= 5 && product.name !== currentAttractionName;
                    });

                    // Step 3: 判斷是否有附近景點，若有，則隨機選擇3個商品（景點）並在動態塊中顯示它們
                    if (nearbyProducts.length > 0) {
                    const randomProducts = getRandomAttractions(nearbyProducts).slice(0, 3);

                    randomProducts.forEach(product => {
                        const productElement = document.createElement('div');
                        productElement.classList.add('col-lg-4', 'col-md-12', 'wow', 'zoomIn');
                        productElement.setAttribute('data-wow-delay', '0.1s');
                        productElement.innerHTML = `
                            <div class="product">
                                <!-- 将景点名称作为参数添加到详情页 URL 中 -->
                                <a class="position-relative d-block overflow-hidden" href="big_attraction.php#${product.name}" onclick="increaseViews('${product.name}')">
                                    <img class="img-fluid" src="img/${product.picture}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">${product.name}</h5>
                                        <small class="text-primary">${product.city}</small><br>
                                        <small class="text-primary">點閱數:${viewsData[product.name]}</small>
                                        <small class="text-primary">收藏數:${favoriteCounts[idData[product.name]]}</small>
                                    </div>
                                </a>
                            </div>
                        `;
                        productElement.addEventListener('click', function() {
                            // 获取点击的景点名称
                            const attractionName = product.name;

                            // 使用 location.href 跳转到对应的景点详情页
                            location.href = `big_attraction#${(attractionName)}`;
                        });
                        productContainer.appendChild(productElement);
                    });
                } else {
                    // 若沒有附近景點，顯示提示
                    const noProductsMessage = document.createElement('div');
                    noProductsMessage.classList.add('col-12', 'text-center', 'my-4');
                    noProductsMessage.textContent = '附近無其他景點';
                    productContainer.appendChild(noProductsMessage);
                }
            }

                // 計算兩個經緯度之間的距離（單位：公里）
                function getDistance(lat1, lon1, lat2, lon2) {
                    const R = 6371; // 地球半徑（單位：公里）
                    const dLat = deg2rad(lat2 - lat1);
                    const dLon = deg2rad(lon2 - lon1);
                    const a =
                        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
                    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                    const distance = R * c;
                    return distance;
                }

                // 將角度轉換為弧度
                function deg2rad(deg) {
                    return deg * (Math.PI / 180);
                }

                // 從5公里範圍內的商品中隨機選擇 count 個商品
                function getRandomAttractions(attractions, count = 3) {
                    const shuffled = attractions.slice(); // 複製一份陣列，以保持原陣列的順序不變
                    for (let i = shuffled.length - 1; i > 0; i--) {
                        const j = Math.floor(Math.random() * (i + 1));
                        [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
                    }
                    return shuffled.slice(0, count);
                }

                //點閱模組
                function increaseViews(attractionName) {
                    // 使用AJAX向後端發送請求，更新景點的點閱次數
                    $.ajax({
                        url: 'php/recordView.php', // 指向後端處理程式的路徑
                        method: 'POST',
                        data: { attractionName: attractionName }, // 傳遞景點名稱作為參數
                        success: function(response) {
                            console.log('點閱次數已增加');
                        },
                        error: function(xhr, status, error) {
                            console.error('發生錯誤:', error);
                        }
                    });
                }
                

                // 初始化
                updateProductList();


                const fragment = window.location.hash.substr(1);
                const attractionName = decodeURIComponent(fragment); // 解碼片段值，如果需要的話

                // 在這個地方創建一個變數來存儲景點的經緯度資訊
                let attractionLatitude = null;
                let attractionLongitude = null;

                // 發送 Ajax 請求到 `get_attraction.php`，並傳送景點名稱作為參數
                const xhr = new XMLHttpRequest();
                xhr.open('GET', `php/get_attraction.php?attractionName=${(attractionName)}`, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // 獲取 Ajax 回應，這是從資料庫檢索的景點介紹內容和經緯度資訊
                        const response = JSON.parse(xhr.responseText);
                        // 將景點介紹內容設定為 HTML 元素的內容
                        descriptionContainer.textContent = response.description;
                        attStartTime.textContent = response.attStartTime;
                        attEndTime.textContent = response.attEndTime;
                        attAddress.textContent = response.attAddress;
                        attWeek.textContent = response.attWeek;
                        attid = response.attid;
                        // 存儲經緯度資訊
                        attractionLatitude = response.lat;
                        attractionLongitude = response.lng;

                        // 接下來你可以在這裡使用 `attractionLatitude` 和 `attractionLongitude` 進行地圖顯示等操作

                        // 確保在此處調用 updateProductList() 並傳遞經緯度值
                        updateProductList(attractionLatitude, attractionLongitude);
                    }
                };
                xhr.send();

                // 在頁面載入時動態修改景點名稱
                window.addEventListener('DOMContentLoaded', () => {
                    const attractionNameElement = document.getElementById('attractionName');
                    if (attractionNameElement) {
                        const fragment = window.location.hash.substr(1);
                        const attractionName = decodeURIComponent(fragment);
                        attractionNameElement.textContent = attractionName;
                    }
                });

                // 確保在頁面加載後執行此代碼
                document.addEventListener('DOMContentLoaded', function() {
                    // 在這個地方創建一個變數來存儲景點名稱

                    // 發送 AJAX 請求到 `get_tag.php`，並傳送景點名稱作為參數
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', `php/get_tag.php?attractionName=${(attractionName)}`, true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            // 獲取 AJAX 回應，這是從 `get_tag.php` 獲取的景點標籤
                            const tagsResponse = xhr.responseText;

                            // 將景點標籤設定為 `attractionTags` 元素的內容
                            const attractionTagsElement = document.getElementById('attractionTags');

                            // 存儲原始的 h5 標籤內容
                            const originalContent = attractionTagsElement.innerHTML;

                            // 在 h5 標籤的原始內容後添加景點標籤按鈕
                            attractionTagsElement.innerHTML = originalContent + tagsResponse;
                        }
                    };
                    xhr.send();


                });


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
                    //判斷是否登入並跳出警示框
                        if (!isLoggedIn) {
                            if (confirm('請先登入開啟此功能')) {
                                window.location.href = 'login.html';
                            }
                            return;
                        }
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
                    const requestBody = `attractionName=${(attractionName)}`;

                    // 发送请求
                    xhr.send(requestBody);
                }
                console.log('attractionName from JavaScript:', attractionName);
                console.log(xhr);

                function redirectToRouteRelated() {
                const attractionName = document.getElementById('attractionName').textContent;
                const attractionId = attid; // 获取景点ID的方式，可能需要根据 HTML 结构获取，比如从 data 属性或其他 DOM 属性中获取

                // 构建 URL
                const url = `route_related.php?attractionName=${encodeURIComponent(attractionName)}&attractionId=${encodeURIComponent(attractionId)}`;

                // 重定向页面
                window.location.href = url;
            }

            </Script>
</body>

</html>