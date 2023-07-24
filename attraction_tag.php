<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 關鍵字景點瀏覽 attraction_tag.php -->
    <meta charset="utf-8">
    <title>newTRAVEL</title>
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


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">景點瀏覽</h6>
                <h1 class="mb-5">關鍵字景點瀏覽</h1>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-3 m-2">
                        <form action="willattraction.html">
                            <button type="submit" class="btn btn-primary w-75">景點分享</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Booking Start -->
            <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 35px;">
            <div class="row g-2">
                <div class="col-md-12">
                    <form action="php/search_tag.php" method="post">
                        <!-- Corrected part: Add "name" attribute to the input element -->
                        <div class="row g-2">
                            <div class="col-md-6 py-4 px-2">
                                <input type="text" class="form-control" id="name" name="text_input" placeholder="輸入景點或#關鍵字">
                                <!-- Fixed the "att_CityNum" array key issue by adding a hidden input -->
                                <input type="hidden" name="att_CityNum" value="0">
                                <!-- Fixed the "ATT_AREAID" array key issue by adding a hidden input -->
                                <input type="hidden" name="ATT_AREAID" value="0">
                            </div>
                            <div class="col-md-2 py-4">
                                <button type="submit" class="btn btn-primary w-100">搜尋</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Booking End -->

    <!-- 動態磚開始 -->
    <div class="row g-3">

    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="bg-white shadow h-100" style="padding: 35px;">
        <h6 class="mb-1 text-right">選擇標籤:</h6>
        <div class="btn-group-toggle mb-3" data-toggle="buttons">
            <label class="btn btn-outline-secondary">
                <input type="checkbox" autocomplete="off" name="tags" value="#好吃的"> #好吃的
            </label>
            <label class="btn btn-outline-secondary">
                <input type="checkbox" autocomplete="off" name="tags" value="#有趣的"> #有趣的
            </label>
            <label class="btn btn-outline-secondary">
                <input type="checkbox" autocomplete="off" name="tags" value="#適合帶小孩"> #適合帶小孩
            </label>
            <label class="btn btn-outline-secondary">
                <input type="checkbox" autocomplete="off" name="tags" value="#風景好"> #風景好
            </label>
            <label class="btn btn-outline-secondary">
                <input type="checkbox" autocomplete="off" name="tags" value="#家庭聚餐"> #家庭聚餐
            </label>
            <label class="btn btn-outline-secondary">
                <input type="checkbox" autocomplete="off" name="tags" value="#刺激的"> #刺激的
            </label>
        </div>
    </div>
</div>
        <div class="col-lg-8 col-md-6">
            <!-- 排列bar開始-->
            <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3 fadeInUp" data-wow-delay="0.1s">
                <!-- 查詢景點開始 -->
                <strong class="d-block py-2">已查到
                    <?php
                    if(isset($_SESSION['datacount'])){
                        echo $_SESSION['datacount'] ;
                    }
                    else{
                        echo $_SESSION['t'] ;
                    }
    
                    ?>個景點
                </strong>
                <!-- 查詢景點結束 -->

                <div class="ms-auto">
                    <select class="form-select d-inline-block w-auto border pt-1 fadeInUp" data-wow-delay="0.1s">
                        <option value="0">最多收藏</option>
                        <option value="1">最少收藏</option>
                        <option value="2">最新上傳</option>
                        <option value="3">最舊上傳</option>
                    </select>
                </div>
            </header>
            <!-- 排列bar結束 -->
            <div class="row g-3" id="productContainer">
                <!-- 商品內容 -->
            </div>
        </div>
        <!-- 跳頁開始 -->
        <div id="pagination">
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                <ul class="pagination">
                    <li class="page-item" id="prevBtn">
                        <a class="page-link" href="#productContainer" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><span id="pageInfo"></span></li>
                    <li class="page-item" id="nextBtn">
                        <a class="page-link" href="#productContainer" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
    <!-- 跳頁結束 -->
    <!-- 動態磚結束 -->
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
            <script>
                // 商品數據
                const products = [
                    <?php
                    if (isset($_SESSION['searchdata'])) {
                        
                        $t=0;
                        // 呼叫函式並取得資料
                        $attractionsData =$_SESSION['searchdata'];

                        if (!empty($attractionsData)) {
                            // 輸出資料
                            foreach ($attractionsData as $attraction) {
                                $t+=1;
                                echo "{id:" .$t.",name:'". $attraction["att_name"]."',views:'" .$attraction["att_City"]."'},";
                            }
                        } else {
                            echo "沒有資料。";
                        }
                        $_SESSION['t']=$t;
                    }
                    else{
                        require_once('php/functions.php');
                        $t=0;
                        // 呼叫函式並取得資料
                        $attractionsData = getAttractionsData();

                        if (!empty($attractionsData)) {
                            // 輸出資料
                            foreach ($attractionsData as $attraction) {
                                $t+=1;
                                echo "{id:" .$t.",name:'". $attraction["att_name"]."',views:'" .$attraction["att_City"]."'},";
                            }
                        } else {
                            echo "沒有資料。";
                        }
                        $_SESSION['t']=$t;

                    }

                    ?>
                ];

                const itemsPerPage = 6; // 每頁顯示的商品數量

                let currentPage = 1; // 當前頁碼

                // 獲取當前頁面的商品數據
                function getCurrentPageProducts() {
                    const startIndex = (currentPage - 1) * itemsPerPage;
                    const endIndex = startIndex + itemsPerPage;
                    return products.slice(startIndex, endIndex);
                }

                // 更新商品列表
                function updateProductList() {
                    const productContainer = document.getElementById('productContainer');
                    productContainer.innerHTML = '';

                    const currentProducts = getCurrentPageProducts();

                    currentProducts.forEach(product => {
                        const productElement = document.createElement('div');
                        productElement.classList.add('col-lg-4', 'col-md-12', 'wow', 'zoomIn');
                        productElement.setAttribute('data-wow-delay', '0.1s');
                        productElement.innerHTML = `
                                                <div class="product">
                                                    <a class="position-relative d-block overflow-hidden" href="big_attraction.html">
                                                    <img class="img-fluid" src="img/imagenf.png" alt="">
                                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                                            style="margin: 1px;">
                                                            <h5 class="m-0">${product.name}</h5>
                                                            <small class="text-primary">${product.views}</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            `;
                        productContainer.appendChild(productElement);
                    });

                    // 更新總頁數和目前頁數信息
                    const totalPages = Math.ceil(products.length / itemsPerPage);
                    const pageInfo = document.getElementById('pageInfo');
                    pageInfo.innerHTML = `
          <li class="page-item"><a class="page-link">${currentPage}/${totalPages}</a></li>
        `;
                }

                // 換頁事件處理函數
                function changePage(page) {
                    currentPage = page;
                    updateProductList();
                }

                // 換頁按鈕事件監聽器
                document.getElementById('prevBtn').addEventListener('click', () => {
                    if (currentPage > 1) {
                        changePage(currentPage - 1);
                    }
                });

                document.getElementById('nextBtn').addEventListener('click', () => {
                    const totalPages = Math.ceil(products.length / itemsPerPage);
                    if (currentPage < totalPages) {
                        changePage(currentPage + 1);
                    }
                });

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

                // 初始化
                updateProductList();
            </script>
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