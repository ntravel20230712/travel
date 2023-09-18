
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
            
<!-- Booking End -->
<div class="row g-3">
    <!-- 標籤部分 -->
    <div class="col-lg-4 col-md-12">
        <div class="bg-white shadow h-100 p-4 rounded">
            <div class="d-flex flex-column">
                <form action="php/search_tag_list.php" method="post">
                    <div class="row g-2">
                        <div class="col-md-10 py-4 px-2">
                            <input type="text" class="form-control" id="text_input" name="text_input"
                                placeholder="輸入景點或#關鍵字">
                            <input type="hidden" name="att_CityNum" value="0">
                            <input type="hidden" name="ATT_AREAID" value="0">
                        </div>
                    </div>

                    <h6 class="mb-3 text-center">主題標籤:</h6>
                    <!-- 標籤部分 -->
                    <div class="d-flex justify-content-center mb-2">
                        <label class="btn btn-outline-secondary mx-1">
                            <input type="checkbox" autocomplete="off" name="mainTag" value="地點"
                                onclick="toggleSelects()"> 類型
                        </label>
                        <label class="btn btn-outline-secondary mx-1">
                            <input type="checkbox" autocomplete="off" name="mainTag" value="飲食"
                                onclick="toggleSelects()"> 飲食
                        </label>
                        <label class="btn btn-outline-secondary mx-1">
                            <input type="checkbox" autocomplete="off" name="mainTag" value="客群"
                                onclick="toggleSelects()"> 性質
                        </label>
                    </div>

                    <!-- 您的下拉選單 -->
                    <h6 class="mt-3 mb-2 text-center">類型:</h6>
                    <select class="form-select mb-3" id="locationSelect" name="mainTag_location" disabled=false >
                        <!-- 這裡將使用 JavaScript 動態載入標籤選項 -->
                    </select>

                    <h6 class="my-2 text-center">飲食:</h6>
                    <select class="form-select mb-3" id="diningSelect" name="mainTag_food" disabled=false >
                        <!-- 這裡將使用 JavaScript 動態載入標籤選項 -->
                    </select>

                    <h6 class="my-2 text-center">性質:</h6>
                    <select class="form-select mb-3" id="audienceSelect" name="mainTag_audience" disabled=false >
                        <!-- 這裡將使用 JavaScript 動態載入標籤選項 -->
                    </select>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">搜索</button>
                    </div>
                </form>
            </div>
        </div>
</div>
<div class="col-lg-8 col-md-12">
<div class="row g-3">
            <!-- 排列bar開始-->
            <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3 fadeInUp" data-wow-delay="0.1s">
                <!-- 查詢景點開始 -->
                <strong class="d-block py-2">已查到<?php
                if(isset($_SESSION['datacount'])){
                    echo $_SESSION['datacount'] ;
                }
                else{
                    echo $_SESSION['t'] ;
                }

                ?>個景點 </strong>
                <!-- 查詢景點結束 -->
                <div class="ms-auto">
                <select class="form-select d-inline-block w-auto border pt-1 fadeInUp" data-wow-delay="0.1s"  onchange="sortProducts(this.value)">
                        <option value="">選擇排序</option>
                        <option value="0">最多點閱</option>
                        <option value="1">最少點閱</option>
                        <option value="2">最多收藏</option>
                        <option value="3">最少收藏</option>
                        <option value="4">最新上傳</option>
                        <option value="5">最舊上傳</option>
                    </select>
                </div>
            </header>
            <!-- 排列bar結束 -->
            <div class="col-lg-12 col-md-6">
                <div class="row g-3" id="productContainer">
                    <!-- 商品內容 -->
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
            <!-- 跳頁結束 -->
        </div>
        <!-- 動態磚結束 -->
    </div>
    </div>
    <!-- Categories end -->

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
                    <h4 class="text-white mb-3">去哪裡玩</h4>
                        <a href="attraction_area.html" class="btn btn-link">區域景點瀏覽</a>
                        <a href="attraction_address.html" class="btn btn-link">地理座標景點瀏覽</a>
                        <a href="attraction_tag.html" class="btn btn-link">關鍵字景點瀏覽</a>
                        <a href="attraction_random.html" class="btn btn-link">隨機推薦景點</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">別人怎麼玩</h4>
                    <a href="route_area.html" class="btn btn-link">區域行程瀏覽</a>
                    <a href="route_tag.html" class="btn btn-link">關鍵字行程瀏覽</a>
                    <a href="route_random.html" class="btn btn-link">隨機推薦行程</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">QAQ會員管理</h4>
                   <a href='my_route.html' class='btn btn-link'>未去過行程</a>
                    <a href='my_route_history.html' class='btn btn-link'>已去過行程</a>
                    <a href='like_attractions.html' class='btn btn-link'>已收藏景點</a>
                    <a href='like_route.html' class='btn btn-link'>已收藏行程</a>
                    <a href='php/logout_res.php' class='btn btn-link'>登出</a>
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
                       <?php require_once('php/getfavorites.php'); ?>
        const favoriteCounts = <?php echo json_encode($favoriteCounts); ?>;
        <?php require_once('php/getviews.php'); ?>
        const viewsData = <?php echo json_encode($viewsData); ?>;
        const idData = <?php echo json_encode($idData); ?>;
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
                                echo "{id:" .$t.",name:'". $attraction["att_name"]."',views:'" .$attraction["att_City"]."',picture:'". $attraction["att_picture"]."'},";
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
                                echo "{id:" .$t.",name:'". $attraction["att_name"]."',views:'" .$attraction["att_City"]."',picture:'". $attraction["att_picture"]."'},";
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

document.addEventListener("DOMContentLoaded", function () {
    // 取得所有商品名稱元素
    const productNames = document.querySelectorAll(".product-name a");

    // 為每個商品名稱元素新增點擊事件監聽器
    productNames.forEach(function (productName) {
        productName.addEventListener("click", function (event) {
            // 阻止預設的連結行為，以便手動處理重定向
            event.preventDefault();

            // 從點擊的錨點標籤中獲取 URL
            const url = event.target.getAttribute("href");

            // 重定向到該 URL
            window.location.href = url;
        });
    });
});
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
                        <a class="position-relative d-block overflow-hidden" href="big_attraction.php#${product.name}" onclick="increaseViews('${product.name}')">
                        <img class="img-fluid" src="img/${product.picture}" alt="">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                            <h5 class="m-0">${product.name}</h5>
                            <!-- 顯示點閱數 -->
                            <small class="text-primary">點閱數:${viewsData[product.name]}</small>
                            <small class="text-primary">收藏數:${favoriteCounts[idData[product.name]]}</small>
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

          <script>
            // 根据选择值排序景點
            function sortProducts(value) {
                switch (value) {
                    case '0':
                        products.sort((a, b) => viewsData[b.name] - viewsData[a.name]);
                        break;
                    case '1':
                        products.sort((a, b) => viewsData[a.name] - viewsData[b.name]);
                        break;
                    case '2':
                        products.sort((a, b) => favoriteCounts[idData[b.name]] - favoriteCounts[idData[a.name]]);
                        break;
                    case '3':
                        products.sort((a, b)  =>favoriteCounts[idData[a.name]] - favoriteCounts[idData[b.name]]);
                        break;
                    case '4':
                        products.sort((a, b) => idData[b.name] - idData[a.name]);
                        break;
                    case '5':
                        products.sort((a, b) => idData[a.name] - idData[b.name]);
                        break;
                    
                    default:
                        break;
                }
                currentPage = 1; // 重置当前页码
                updateProductList(); // 更新商品列表
            }
</script>
<script>
    // 新增toggleSelects函式
    function toggleSelects() {
        var mainTagCheckboxes = document.getElementsByName("mainTag");
        var locationSelect = document.querySelector("#locationSelect");
        var diningSelect = document.querySelector("#diningSelect");
        var audienceSelect = document.querySelector("#audienceSelect");

        locationSelect.disabled = true;
        diningSelect.disabled = true;
        audienceSelect.disabled = true;

        for (var i = 0; i < mainTagCheckboxes.length; i++) {
            if (mainTagCheckboxes[i].checked) {
                if (mainTagCheckboxes[i].value === "地點") {
                    locationSelect.disabled = false;
                } else if (mainTagCheckboxes[i].value === "飲食") {
                    diningSelect.disabled = false;
                } else if (mainTagCheckboxes[i].value === "客群") {
                    audienceSelect.disabled = false;
                }
            }
        }
    }

    function loadOptions(selectId, tagState) {
    var select = document.getElementById(selectId);
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "generate_select.php?tag_state=" + tagState, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var options = JSON.parse(xhr.responseText);
            options.forEach(function (option) {
                var optionElement = document.createElement("option");
                optionElement.value = option.tag_id;
                optionElement.textContent = option.tag_name;
                select.appendChild(optionElement);
            });
            select.disabled = false;

            // 當選項載入完畢後，根據 SESSION 中的值設置選項的選中狀態
            var sessionValue = null;
            switch (selectId) {
                case "locationSelect":
                    sessionValue = <?php echo json_encode($_SESSION['mainTag_location'] ?? '0'); ?>;
                    break;
                case "diningSelect":
                    sessionValue = <?php echo json_encode($_SESSION['mainTag_food'] ?? '0'); ?>;
                    break;
                case "audienceSelect":
                    sessionValue = <?php echo json_encode($_SESSION['mainTag_audience'] ?? '0'); ?>;
                    break;
                default:
                    break;
            }

            if (sessionValue !== null) {
                select.value = sessionValue;
            }
        }
    };
    xhr.send();
}

window.onload = function () {
    loadOptions("locationSelect", 1); // 類型
    loadOptions("diningSelect", 2);   // 飲食
    loadOptions("audienceSelect", 3);  // 性質
    
    // 检查会话中的主标签（地点、食物、受众）并设置选项
    var mainTagLocation = <?php echo json_encode($_SESSION['mainTag_location'] ?? '0'); ?>;
    var mainTagFood = <?php echo json_encode($_SESSION['mainTag_food'] ?? '0'); ?>;
    var mainTagAudience = <?php echo json_encode($_SESSION['mainTag_audience'] ?? '0'); ?>;
    
    // 设置地点、食物、受众的选项状态
    if (mainTagLocation !== '0') {
        document.getElementById("locationSelect").value = mainTagLocation;
    }
    if (mainTagFood !== '0') {
        document.getElementById("diningSelect").value = mainTagFood;
    }
    if (mainTagAudience !== '0') {
        document.getElementById("audienceSelect").value = mainTagAudience;
    }
    
    // 检查会话中的关键字并设置文本输入字段的值
    var keywordInput = document.getElementById("text_input");
    var keywordValue = <?php echo json_encode($_SESSION['text_input'] ?? ''); ?>;
    
    if (keywordValue !== '') {
        keywordInput.value = keywordValue;
    }
};
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