<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>旅遊規劃</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

  <!-- <link href="css/tablestyle.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    body {
      background-color: #3e94ec;
      font-family: "Roboto", helvetica, arial, sans-serif;
      font-size: 16px;
      font-weight: 400;
      text-rendering: optimizeLegibility;
    }

    div.table-title {
      display: block;
      margin: auto;
      max-width: 600px;
      padding: 5px;
      width: 100%;
    }

    .table-title h3 {
      color: #fafafa;
      font-size: 30px;
      font-weight: 400;
      font-style: normal;
      font-family: "Roboto", helvetica, arial, sans-serif;
      text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
      text-transform: uppercase;
    }


    /*** Table Styles **/

    .table-fill {
      background: white;
      border-radius: 3px;
      border-collapse: collapse;
      height: 320px;
      margin: auto;
      max-width: 600px;
      padding: 5px;
      width: 100%;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      animation: float 5s infinite;
    }

    th {
      color: #D5DDE5;
      ;
      background: #1b1e24;
      border-bottom: 4px solid #9ea7af;
      border-right: 1px solid #343a45;
      font-size: 23px;
      font-weight: 100;
      padding: 24px;
      text-align: left;
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
      vertical-align: middle;
    }

    th:first-child {
      border-top-left-radius: 3px;
    }

    th:last-child {
      border-top-right-radius: 3px;
      border-right: none;
    }

    tr {
      border-top: 1px solid #C1C3D1;
      border-bottom-: 1px solid #C1C3D1;
      color: #666B85;
      font-size: 16px;
      font-weight: normal;
      text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
    }

    tr:hover td {
      background: #4E5066;
      color: #FFFFFF;
      border-top: 1px solid #22262e;
    }

    tr:first-child {
      border-top: none;
    }

    tr:last-child {
      border-bottom: none;
    }

    tr:nth-child(odd) td {
      background: #EBEBEB;
    }

    tr:nth-child(odd):hover td {
      background: #4E5066;
    }

    tr:last-child td:first-child {
      border-bottom-left-radius: 3px;
    }

    tr:last-child td:last-child {
      border-bottom-right-radius: 3px;
    }

    td {
      background: #FFFFFF;
      padding: 20px;
      text-align: left;
      vertical-align: middle;
      font-weight: 300;
      font-size: 18px;
      text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
      border-right: 1px solid #C1C3D1;
    }

    td:last-child {
      border-right: 0px;
    }

    th.text-left {
      text-align: left;
    }

    th.text-center {
      text-align: center;
    }

    th.text-right {
      text-align: right;
    }

    td.text-left {
      text-align: left;
    }

    td.text-center {
      text-align: center;
    }

    td.text-right {
      text-align: right;
    }

    body {
      background-color: #c6def6;
    }
  </style>
</head>

<body>
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
  <div class="container ">
    <div class="d-flex justify-content-center mt-5">
      <h1>悠遊台南行</h1>
    </div>
    <div class="d-flex justify-content-between mb-3">
      <h4>遊玩日期:<?php
                    $route_startdate = $_GET['route_startdate'];
                    echo "$route_startdate";?></h4>
      <h4>創建者:<?php
                    $route_creator = $_GET['route_creator'];;
                    echo "$route_creator";?></h4>
    </div>
    <div class="d-flex flex-row-reverse bd-highlight my-4">
      <!-- <button type="submit" class="btn btn-primary btn-lg w-20 mx-3" id="custom-route-btn">按照此行程自訂</button> -->
      <a href="route_custom.html" class="btn btn-primary btn-lg w-20 mx-3">按照此行程自訂</a>
      <button type="button" class="btn btn-primary btn-lg w-20 mx-3" id="favorite-btn">加入收藏</button>
    </div>
    <div class="table-wrap my-3">
      <table class="table-fill">
        <thead>
          <tr>
            <th class="text-left">開始時間</th>
            <th class="text-left">景點名稱</th>
            <th class="text-left">備註</th>
          </tr>
        </thead>
        <tbody class="table-hover">
          <!-- <tr>
            <td class="text-left">January</td>
            <td class="text-left">$ 50,000.00</td>
            <td class="text-left">無</td>
          </tr>
          <tr>
            <td class="text-left">February</td>
            <td class="text-left">$ 10,000.00</td>
            <td class="text-left">無</td>
          </tr>
          <tr>
            <td class="text-left">March</td>
            <td class="text-left">$ 85,000.00</td>
            <td class="text-left">無</td>
          </tr>
          <tr>
            <td class="text-left">April</td>
            <td class="text-left">$ 56,000.00</td>
            <td class="text-left">無</td>
          </tr>
          <tr>
            <td class="text-left">May</td>
            <td class="text-left">$ 98,000.00</td>
            <td class="text-left">無</td>
          </tr> -->
          <?php
          $RouteID = $_GET['RouteID'];
          require_once('php/functionsrouteatt.php');
          $routeattData = getroutesatt($RouteID);
          if (!empty($routeattData)) {
              // 輸出資料
              foreach ($routeattData as $routeatt) {
                  echo "      <tr>
                  <td class='text-left'>".$routeatt['startTime']."</td>
                  <td class='text-left'><a href='big_attraction.php#".$routeatt['att_name']."'>".$routeatt['att_name']."</a></td>
                  <td class='text-left'>無</td>
                </tr>";
              }
          } else {
              echo "沒有資料。";
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center">
      <!-- <button type="button" class="btn btn-primary btn-lg w-20" id="back-btn">上一頁</button> -->
      <a href="javascript:history.back()" class="btn btn-primary">返回上一頁</a>
    </div>
  </div>
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
  </div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script>
    var timeInput = document.getElementById("time-input");
    timeInput.addEventListener("input", function () {
      var selectedTime = new Date(this.value);
      var selectedMinutes = selectedTime.getMinutes();
      if (selectedMinutes % 15 !== 0) {
        var roundedMinutes = Math.floor(selectedMinutes / 15) * 15;
        selectedTime.setMinutes(roundedMinutes);
        this.value = selectedTime.toISOString().substr(11, 5);
      }
    });
    $(document).ready(function () {
      var tilesContainer = $("#tiles-container");

      function addTile(time, place) {
        var tile = $("<div>").addClass("col-md-6 tile");
        var deleteBtn = $("<i>").addClass("fas fa-times delete-btn");
        var timeEl = $("<div>").addClass("time").text(time);
        var placeEl = $("<div>").addClass("place").text(place);

        tile.append(deleteBtn);
        tile.append(timeEl);
        tile.append(placeEl);
        tilesContainer.append(tile);

        deleteBtn.click(function () {
          tile.remove();
          sortTiles();
        });
      }

      $("#add-btn").click(function () {
        var time = $("#time-input").val();
        var place = $("#place-input").val();

        if (time && place) {
          addTile(time, place);
          $("#time-input").val("");
          $("#place-input").val("");
          sortTiles();
        }
      });

      // 定義排序函數
      function sortTiles() {
        var tiles = tilesContainer.children(".tile").get();
        tiles.sort(function (a, b) {
          var timeA = $(a).find(".time").text();
          var timeB = $(b).find(".time").text();
          return timeA.localeCompare(timeB);
        });
        $.each(tiles, function (index, tile) {
          tilesContainer.append(tile);
        });
      }

      // 在每次新增、刪除、更改之後重新排序
      tilesContainer.on("click", ".delete-btn", sortTiles);
      tilesContainer.on("input", ".time, .place", sortTiles);

      // 載入現有的行程
      var existingTiles = [
        { time: "09:00", place: "奇美博物館" },
        { time: "11:30", place: "午餐 - 原燒 - 台南永華店" },
        { time: "13:00", place: "赤崁樓" },
        { time: "15:00", place: "十鼓仁糖文創園區" },
        { time: "17:00", place: "四草綠色隧道" },
        { time: "19:00", place: "晚餐 - 漢來海港餐廳" },
      ];

      $.each(existingTiles, function (index, tileData) {
        addTile(tileData.time, tileData.place);
      });

      // 綁定排序按鈕點擊事件
      $("#sort-btn").click(function () {
        sortTiles();
      });

      // 定義排序函式
      function sortTiles() {
        var tiles = tilesContainer.children(".tile").get();
        tiles.sort(function (a, b) {
          var timeA = $(a).find(".time").text();
          var timeB = $(b).find(".time").text();
          return timeA.localeCompare(timeB);
        });
        $.each(tiles, function (index, tile) {
          tilesContainer.append(tile);
        });
      }
    });
  </script>
</body>

</html>