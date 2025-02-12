<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>行程詳細</title>
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
  <!-- 引入 Google Charts 函式庫 -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!-- <link href="css/tablestyle.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">
  <?php
  session_start(); // 啟動 session
  if (isset($_SESSION['mem_id'])) {
    $mem_id = $_SESSION['mem_id'];
}
  ?>
  <style>
    body {
      position: relative;  
      background-image: url('img/taiwan_night.png');
      background-repeat: no-repeat;  /* 使圖片不重複 */
      background-size: cover;        /* 使圖片覆蓋整個畫面 */
      background-position: center;   /* 使圖片居中 */
      background-attachment: fixed;  /* 圖片固定不隨頁面滾動 */
      margin: 0;                     /* 移除邊界 */
      font-family: "Roboto", helvetica, arial, sans-serif;
      font-size: 16px;
      font-weight: 400;
      text-rendering: optimizeLegibility;
    }
    /* 使用偽元素調整背景亮度 */
    body::before {
        content: "";                   /* 偽元素內容為空 */
        position: fixed;               /* 固定定位，使其覆蓋整個視窗 */
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100vw;                 /* 覆蓋整個視窗的寬度 */
        height: 100vh;                /* 覆蓋整個視窗的高度 */
        background: rgba(0, 0, 0, 0.5); /* 使用半透明的黑色覆蓋，這裡的 0.5 可以調整為您想要的透明度 */
        pointer-events: none;          /* 確保偽元素不會干擾其他元素的互動 */
        z-index: -1;                   /* 確保偽元素位於背景圖片之下 */
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
    /* 隱藏面板初始樣式 */
    #hiddenPanel {
    opacity: 0;
    transform: scale(0);
    transition: all 0.3s ease;
    display: none;
    position: fixed;
    bottom: 70px;
    right: 20px;
    background-color: #f1f1f1;
    padding: 20px;
    border-radius: 8px;
    }
    /* 隱藏面板顯示樣式 */
    #hiddenPanel.show {
        opacity: 1;
        transform: scale(1);
        display: block;
    } 
    /* 內容區塊樣式 */
    .content-div {
    display: none;
    }
  </style>
  <script>
        // 載入繪圖函式庫
        google.charts.load('current', {'packages':['corechart']});
        // google.charts.load("current", {'packages':["calendar"]});
        // 當函式庫載入完成後，呼叫函數
        google.charts.setOnLoadCallback(function() {
          drawChart1();
          drawChart2();
          drawChart3(); 
          drawLineChart1();
          drawLineChart2();
          drawChart4();
        });
        // google.charts.setOnLoadCallback(drawChart);

          // 繪製第一個圓餅圖
          function drawChart1() {
          var rawData1 = [
            ['台北', 1],
            ['台中', 8],
            ['高雄', 9]
          ];
          rawData1.sort(function(a, b) {
            return b[1] - a[1];
          });
          var data1 = google.visualization.arrayToDataTable([['城市', '人口數量']].concat(rawData1));

          var options1 = {
            title: '收藏這個行程的人也住在這裡',
            backgroundColor: 'transparent',
            titleTextStyle: {
              color: '#000'  // 設定標題文字為白色
            },
            legendTextStyle: {
              color: '#000'  // 設定圖例文字為白色
            }
          };


          var chart1 = new google.visualization.PieChart(document.getElementById('bar_chart_div1'));
          chart1.draw(data1, options1);
        }

        // 繪製並排序第二個圓餅圖
        function drawChart2() {
          var rawData2 = [
            ['爬山', 4],
            ['健行', 6],
            ['散步', 7]
          ];
          rawData2.sort(function(a, b) {
            return b[1] - a[1];
          });
          var data2 = google.visualization.arrayToDataTable([['分類', '人']].concat(rawData2));

          var options2 = {
            title: '收藏這個行程的人也有這些興趣',
            backgroundColor: 'transparent',
            titleTextStyle: {
              color: '#000'  // 設定標題文字為白色
            },
            legendTextStyle: {
              color: '#000'  // 設定圖例文字為白色
            }
          };

          var chart2 = new google.visualization.PieChart(document.getElementById('pie_chart_div2'));
          chart2.draw(data2, options2);
        }
          // 繪製第三個圓餅圖，使用年齡區間來分類
          function drawChart3() {
            var rawData3 = [
              ['0-18', 53],
              ['19-35', 62],
              ['36-50', 32],
              ['51+', 16]
            ];
            var data3 = google.visualization.arrayToDataTable([['年齡區間', '人數']].concat(rawData3));

            var options3 = {
              title: '收藏這個行程的人年齡區間分布',
              backgroundColor: 'transparent',
              titleTextStyle: {
                color: '#000'  // 設定標題文字為白色
              },
              legendTextStyle: {
                color: '#000'  // 設定圖例文字為白色
              }
            };

            var chart3 = new google.visualization.PieChart(document.getElementById('pie_chart_div3'));
            chart3.draw(data3, options3);
          }

          // 畫第一個折線圖
          function drawLineChart1() {
            var data4 = new google.visualization.DataTable();
            data4.addColumn('string', '分數(越多越刺激)');
            data4.addColumn('number', '人數');
            data4.addRows([
              ['1',  62],
              ['2',  47],
              ['3',  34],
              ['4',  45],
              ['5',  17]
            ]);

            var options4 = {
              title: '喜歡的行程刺激程度',
              backgroundColor: 'transparent',
              titleTextStyle: {
                color: '#000'  // 設定標題文字為黑色
              },
              legendTextStyle: {
                color: '#000'  // 設定圖例文字為黑色
              },
              hAxis: { 
                title: '休閒-------------------------------------------------------刺激',
                textStyle: { color: '#000' },
                titleTextStyle: { color: '#000' }
              },
            };

            var chart4 = new google.visualization.LineChart(document.getElementById('line_chart_div1'));
            chart4.draw(data4, options4);
          }


          // 畫第二個折線圖
          function drawLineChart2() {
            var data5 = new google.visualization.DataTable();
            data5.addColumn('string', '分數(越多越刺激)');
            data5.addColumn('number', '人數');
            data5.addRows([
              ['1',  18],
              ['2',  24],
              ['3',  32],
              ['4',  76],
              ['5',  65]
            ]);

            var options5 = {
              title: '喜歡的食物程度',
              backgroundColor: 'transparent',
              titleTextStyle: {
                color: '#000'  // 設定標題文字為黑色
              },
              legendTextStyle: {
                color: '#000'  // 設定圖例文字為黑色
              },
              hAxis: { 
                title: '甜食-------------------------------------------------------鹹食',
                textStyle: { color: '#000' },
                titleTextStyle: { color: '#000' }
              },
            };

            var chart5 = new google.visualization.LineChart(document.getElementById('line_chart_div2'));
            chart5.draw(data5, options5);
          }




// 繪製第一個長條圖
function drawChart4() {
  // 創建和填充數據表
  var data = google.visualization.arrayToDataTable([
    ['頻率', '人數', { role: 'annotation' }],
    ['一個月多次', 63, '一個月多次'],
    ['一個月一次', 55, '一個月一次'],
    ['半年一次', 43, '半年一次'],
    ['一年一次', 17, '一年一次']
  ]);

  // 設置圖表選項
  var options = {
    title: '出遊頻率',
    backgroundColor: 'transparent',
    titleTextStyle: {
      color: '#000'  // 設定標題文字為白色
    },
    legendTextStyle: {
      color: '#000'  // 設定圖例文字為白色
    },
    annotations: {
      alwaysOutside: true,
      textStyle: {
        fontSize: 12,
        auraColor: 'none',
        color: '#555'
      }
    }
  };

  // 繪製長條圖
  var chart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
  chart.draw(data, options);
}

    </script>
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
  <div class="container ">
    <div class="d-flex justify-content-center mt-5">
      <h1 style="color: white;"><?php
                    $RouteName = $_GET['RouteName'];
                    echo "$RouteName";?></h1>
    </div>
    <div class="d-flex justify-content-center mb-3">
      <h4 style="color: white;">更新日期:<?php
                    $route_update = $_GET['route_update'];
                    echo "$route_update";?></h4>
      <!-- <h4>創建者:
                    <?php
                    $mem_id = $_GET['mem_id'];
                    echo "$mem_id";
                    ?></h4> -->
    </div>
    <div class="d-flex flex-row-reverse bd-highlight my-4">

      <a href="route_custom.php?RouteID=<?php $routeID=$_GET['RouteID'];
        echo $routeID;?>" class="btn btn-primary btn-lg w-20 mx-3">按照此行程自訂</a>
      <?php
        echo'<div><input type="checkbox" class="btn-check" id="btn-check-1-outlined" autocomplete="off">
             <label class="me-2 btn btn-outline-light btn-lg" id="routefavoriteBtn' . $routeID . '" data-routeid="' . $routeID . '" onclick="toggleFavorite(' . $routeID . ')">加入收藏</lable></div>';
      ?>
      <button id="floatingButton" class="btn btn-primary btn-lg" style="margin-right:650px;">行程收藏數據概覽</button>

    </div>
    <div class="d-flex justify-content-center" style="margin-left:325px;">
    <!-- style="margin-left:200px;margin-top:-90px; -->
      <div id="col-1">
        <!-- 隱藏面板 -->
          <div id="hiddenPanel">
              <button onclick="switchContent('bar_chart_div1')">居住</button>
              <button onclick="switchContent('pie_chart_div2')">興趣</button>
              <button onclick="switchContent('pie_chart_div3')">年齡</button>
              <button onclick="switchContent('line_chart_div1')">刺激度</button>
              <button onclick="switchContent('line_chart_div2')">喜好甜鹹食</button>
              <button onclick="switchContent('bar_chart_div')">出遊頻率</button>
              <div id="bar_chart_div1" class="content-div" style="width: 350px; height: 200px;"></div>
              <div id="pie_chart_div2" class="content-div" style="width: 350px; height: 200px;"></div>
              <div id="pie_chart_div3" class="content-div" style="width: 350px; height: 200px;"></div>
              <div id="line_chart_div1" class="content-div" style="width: 350px; height: 200px;"></div>
              <div id="line_chart_div2" class="content-div" style="width: 350px; height: 200px;"></div>
              <div id="bar_chart_div" class="content-div" style="width: 350px; height: 200px;"></div>
          </div>
        <!-- 第一個長條圖將在這個 div 元素中顯示 -->
        <!-- <div id="bar_chart_div1" style="width: 400px; height: 200px; background-color: rgba(0, 0, 0, 0.5);"></div> -->

        <!-- 第二個圓餅圖將在這個 div 元素中顯示 -->
        <!-- <div id="pie_chart_div2" style="width: 400px; height: 200px; background-color: rgba(0, 0, 0, 0.5);"></div> -->

        <!-- 第三個圓餅圖將在這個 div 元素中顯示 -->
        <!-- <div id="pie_chart_div3" style="width: 400px; height: 200px; background-color: rgba(0, 0, 0, 0.5);"></div> -->
      </div>

      <div class="col-11" style="padding-right:500px;">
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
                      <td class='text-left'>".$routeatt['comment']."</td>
                    </tr>";
                  }
              } else {
                  echo "沒有資料。";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <!-- <button type="button" class="btn btn-primary btn-lg w-20" id="back-btn">上一頁</button> -->
      <a href="javascript:history.back()" class="btn btn-primary btn-lg">返回上一頁</a>
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
                    const floatingButton = document.getElementById('floatingButton');
                    const hiddenPanel = document.getElementById('hiddenPanel');
                    const contentDivs = document.querySelectorAll('.content-div');

                    // 切換隱藏面板的顯示狀態
                    floatingButton.addEventListener('click', function() {
                        if (hiddenPanel.classList.contains('show')) {
                            hiddenPanel.classList.remove('show');
                            setTimeout(() => { hiddenPanel.style.display = 'none'; }, 300);
                        } else {
                            hiddenPanel.style.display = 'block';
                            setTimeout(() => { hiddenPanel.classList.add('show'); }, 0);
                        }
                    });

                    // 切換內容區塊的顯示
                    function switchContent(id) {
                        contentDivs.forEach(div => {
                            if (div.id !== id) {
                                div.style.display = 'none';
                            } else {
                                div.style.display = 'block';
                            }
                        });
                    }

                    // 當網頁載入完成時，顯示bar_chart_div1的內容
                    document.addEventListener('DOMContentLoaded', function() {
                        switchContent('bar_chart_div1');
                    });


                    var isLoggedIn = <?php echo isset($_SESSION['mem_id']) ? 'true' : 'false'; ?>;
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
                        if (!isLoggedIn) {
                            if (confirm('請先登入開啟此功能')) {
                                window.location.href = 'login.php';
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








</script>
</body>

</html>