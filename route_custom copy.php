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
  <link href="css/style.css" rel="stylesheet">
  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
  <link href="css/tile_styles.css" rel="stylesheet" media="all">


      <?php
    session_start(); // 開始 session，如果尚未開始

    if (!isset($_SESSION['mem_id'])) {
        echo "<script>
            if (confirm('請先登入開啟此功能')) {
                window.location.href = 'login.html';
            } else {
                history.go(-1);
            }
            </script>";
        exit;
    }

    $mem_name = $_SESSION['mem_id'];
    // 其他代碼
    ?>






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
                <a href="route_custom.html"
                    class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">試試隨機行程GO&#32;&#10140;</a>
            </div>
            <!-- 未登入前 -->
            <!--<a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">加入我們<i class="fa fa-arrow-right ms-3"></i></a>-->
        </div>
    </nav>
    <!-- Navbar End -->
  <div class="container">
  <form action="my_route.html" method="post">
    <div class="row justify-content-center">
      <!-- <div class="col-2 mt-5">
      <label for="date-input" class="form-label">出遊日期</label>
          <input type="date" class="form-control" id="date-input">
      </div> -->
      <!-- <div class="col">
      <input type="text" name="RouteName" value="我的行程表" id="routname-input" class="text-center my-5" style="border: none; background: transparent; font-size: 2em;">
      </div> -->
    </div>
    

    
      <div class="row mb-3 justify-content-center">

      <div class="wrapper">
            <div class="card card-2">
                <div class="card-body">
                <ul class="tab-list" style="margin:-16px -16px 10px -16px;box-shadow: 0px 3px 5px 0px #C4C4C4;" >
                        <li class="tab-list__item active" style="padding-bottom:10px;">
                            <a class="tab-list__link" href="#tab1" data-toggle="tab">新增景點</a>
                        </li>
                        <!-- <li class="tab-list__item" style="font-size:22px">
                        |
                        </li>
                        <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab2" data-toggle="tab">新增行程-鄰近景點</a>
                        </li> -->
                        <!-- <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab3" data-toggle="tab">flight</a>
                        </li> -->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                          <div class="d-flex justify-content-start" style="font-size:18px; margin-bottom: 18px; margin-top: -25px;font-weight: bold;">
                              <div class="col-md-3">                        
                                <lable style="color:#1C806A;">根據收藏景點新增行程...</lable>
                              </div>
                          </div>
                            <div class="d-flex justify-content-center" style="margin-top: -25px;padding-left:100px;">
                              <div class="col-md-2 ps-1 pe-1 mb-5">
                                <lable>先選擇要搜尋的區域:</lable>
                                <select id="att_CityNum" class="form-select" name='att_CityNum'>
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
                              </div>
                              <div class="col-md-2 d-flex align-items-center ps-1 mb-4" style="padding-right:100px;">
                                  <button type="button" id="fsearchbutton" class="btn btn-primary">搜尋</button>
                              </div>
                          </div>
                          <div id="hidden-section" style="display: none;">
                            <hr style="margin-top:-25px;">
                            <div class="row justify-content-center">
                              <div class="col-md-2">
                                <label for="time-input">時間</label>
                                <input type="time" class="form-control" id="f_time-input" placeholder="12:00">
                              </div>
                              <!-- 收藏景點 -->
                              <div class="col-md-2">
                                <label for="place-input">景點</label>
                                <input class="form-control" list="f_att_name" id="f_place-input" autocomplete="off">
                                <datalist id="f_att_name">
                                </datalist>
                                <input type="hidden" class="form-control" id="f_attid-input" readonly="readonly" value="">
                              </div>

                              <div class="col-md-2">
                                <label for="comment-input">註解</label>
                                <input type="text" class="form-control" id="f_comment-input">
                              </div>
                              <div class="col-md-2">
                                <button type="button" class="btn btn-primary btn-lg w-100 mt-4" id="f-add-btn">新增</button>
                              </div>
                              <div class="row justify-content-center">
                                <div class="col-12 me-5" style="margin-left:-150px;">
                                  <a href='bigattraction.html' target="_blank" class='nav-item nav-link' name='att_name_href' id='f_placeLink' style="font-size:18px;"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                    <div class="d-flex justify-content-center" style="font-size:18px; margin-bottom: 18px; margin-top: -25px;font-weight: bold;">
                            <div class="col-md-4 pe-5">                        
                              <lable style="color:#1C806A;">根據下方地點搜尋鄰近相關景點...</lable>
                            </div>
                            <!-- 這個 span 用來顯示 value -->
                            <div class="col-md-5 pe-5">
                              <label>搜尋</label>
                              <label for="km-input">&thinsp;的方圓半徑</label>
                                  <span id="km-display">10</span>  
                              <label>公里(KM)</label>
                                <div class="col-md-11">
                                <input type="range" id="km-input" name="km-input" 
                                    min="1" max="30" value="5" step="1">
                                </div>
                            </div>
                          </div>
                          <hr style="margin-top:-10px;">
                          <div class="row justify-content-center">
                            <div class="col-md-2">
                              <label for="time-input">時間</label>
                              <input type="time" class="form-control" id="time-input" placeholder="12:00">
                            </div>
                            <!-- 鄰近景點 -->
                            <div class="col-md-2">
                              <label for="place-input">景點</label>
                              <input class="form-control"  list="att_name" id="place-input" autocomplete="off">
                              <datalist id="att_name">
                              <option value="0" label="無">
                              <option value="1" label="無1">
                              <option value="2" label="無2">
                              </datalist>
                              <input type="hidden" class="form-control" id="attid-input" readonly="readonly" value="">
                            </div>

                            <div class="col-md-2">
                              <label for="comment-input">註解</label>
                              <input type="text" class="form-control" id="comment-input">
                            </div>
                            <div class="col-md-2">
                              <button type="button" class="btn btn-primary btn-lg w-100 mt-4" id="add-btn">新增</button>
                            </div>
                          </div>
                          <div class="row justify-content-center">
                            <div class="col-12 me-5" style="margin-left:-150px;">
                              <a href='bigattraction.html' target="_blank" class='nav-item nav-link' name='att_name_href' id='placeLink'></a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                        <label for="time-input" class="form-label">間</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      <div class="row justify-content-center">
        
        <!-- <div class="col-2 my-4">
        <i id="clickme" class='fas fa-angle-double-left'>點我看詳細</i>
          </div> -->
          <!-- 這個 span 用來顯示 value -->
      <!-- <div class="col-md-2">
        <label for="km-input">要搜尋的方圓半徑(KM)</label>
        <input type="range" id="km-input" name="km-input" 
            min="1" max="30" value="5" step="1">
            <span id="km-display">10</span>  
      </div> -->
        <!-- <div class="col-2 my-3">
            <button type="button" id="f5button" class="btn btn-primary btn-lg w-20">點我刷新搜尋</button>
          </div> -->
      </div>
      <div class="d-flex justify-content-end" style="margin-top:50px;">         
          <div class="col-md-3" style="margin-right:-75px;">
              <label style="font-size:28px;font-weight: bold;" for="routname-input" class="form-label">我的行程表</label>
          </div>
          <div class="col-md-4 me-5">
              <button type="button" class="btn btn-primary btn-lg" id="end-btn" style="width: 200px; margin-right:175px;">完成</button>
          </div>  
      </div>
      <div class="row justify-content-center" id="tiles-container"></div>
      <div class="row justify-content-center">

      </div>
    </form>
    <button id="show-updated-tiles">顯示更新後的行程</button>
<div id="output"></div>
<div id="testOutput"></div>
  </div>
<!-- Custom Modal for Time Conflict -->
<div class="modal fade" id="timeConflictModal" tabindex="-1" role="dialog" aria-labelledby="timeConflictModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="timeConflictModalLabel">時間衝突</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        已發現有衝突時間，要取代或者自動將後續的項目增加一個小時?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="replaceBtn">取代</button>
        <button type="button" class="btn btn-primary" id="postponeBtn">延後</button>
      </div>
    </div>
  </div>
</div>
  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Vendor JS-->
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/jquery-validate/jquery.validate.min.js"></script>
  <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
  <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>
  <!-- Main JS-->
  <script src="js/global.js"></script>

  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script>

      $(document).ready(function () {

              document.getElementById("fsearchbutton").addEventListener("click", function() {
                event.preventDefault();
                  // 獲取隱藏區塊
                  let hiddenSection = document.getElementById('hidden-section');
                  
                  // 更改隱藏區塊的顯示狀態
                  hiddenSection.style.display = 'block';
  
                // 從 select 元素中獲取 att_CityNum 的值
                let att_CityNum = document.getElementById("att_CityNum").value;

                // TODO: 你需要從合適的地方獲取 mem_id 的值
                let mem_id = <?php echo json_encode($mem_name); ?>;

                f_sendRequest(att_CityNum, mem_id);
              });

              document.getElementById("km-input").addEventListener("input", function() {
                // 更新 span 的內容為滑動條的當前值
                document.getElementById("km-display").textContent = this.value;
                sendRequest();
                });
                      window.tilesContainer = $("#tiles-container");
                      window.existingTiles = [];

                      function addTile(time, place, comment, att_id) {
                      var tileData = {
                          time: time,
                          place: place,
                          comment: comment,
                          att_id: att_id  // Add the att_id field here
                      };


                  updateAndRenderTiles();
                }
                $("#f-add-btn").click(function () {
              // 獲取用戶輸入的時間
              var inputTime = $("#f_time-input").val() + ":00";

              // 檢查是否有相同時間的項目
              var conflictingTile = existingTiles.find(tile => tile.time === inputTime);

              if (conflictingTile) {
                  Swal.fire({
                      title: '已發現有衝突時間',
                      text: '要取代或者自動將後續的項目增加一個小時？',
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonText: '取代',
                      cancelButtonText: '延後',
                      showCloseButton: true,
                      closeButtonAriaLabel: '取消'
                  }).then((result) => {
                      if (result.isConfirmed) {
                          // 用戶選擇了取代
                          var index = existingTiles.indexOf(conflictingTile);
                          existingTiles[index] = { 
                              time: inputTime, 
                              place: $("#f_place-input").val(), 
                              comment: $("#f_comment-input").val(), 
                              att_id: $("#f_attid-input").val() 
                          };
                          sortExistingTilesByTime();
                          updateAndRenderTiles();
                      } else if (result.isDismissed && result.dismiss !== Swal.DismissReason.close) {
                          var time = $("#f_time-input").val() + ":00";

                          // 尋找與當前輸入時間相衝突的舊項目
                          var conflictTile = existingTiles.find(tile => tile.time === time);

                          // 如果找到了衝突項目，將其時間延遲1小時
                          if (conflictTile) {
                              var newTime = new Date('1970-01-01T' + time + 'Z');
                              newTime.setHours(newTime.getHours() + 1);
                              var newTimeString = newTime.toISOString().substr(11, 5) + ":00";
                              conflictTile.time = newTimeString;
                          }

                          // 添加新項目
                          var place = $("#f_place-input").val();
                          var comment = $("#f_comment-input").val();
                          var att_id = $("#f_attid-input").val();
                          existingTiles.push({ time: time, place: place, comment: comment, att_id: att_id });
                          sortExistingTilesByTime();
                          updateAndRenderTiles();
                      }
                  });
              } else {
                  // 在這裡添加你希望在沒有衝突時執行的功能
                  var place = $("#f_place-input").val();
                  var comment = $("#f_comment-input").val();
                  var att_id = $("#f_attid-input").val();
                  existingTiles.push({ time: inputTime, place: place, comment: comment, att_id: att_id });
                  sortExistingTilesByTime();
                  updateAndRenderTiles();
              }
          });
              $("#add-btn").click(function () {
              // 獲取用戶輸入的時間
              var inputTime = $("#time-input").val() + ":00";

              // 檢查是否有相同時間的項目
              var conflictingTile = existingTiles.find(tile => tile.time === inputTime);

              if (conflictingTile) {
                  Swal.fire({
                      title: '已發現有衝突時間',
                      text: '要取代或者自動將後續的項目增加一個小時？',
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonText: '取代',
                      cancelButtonText: '延後',
                      showCloseButton: true,
                      closeButtonAriaLabel: '取消'
                  }).then((result) => {
                      if (result.isConfirmed) {
                          // 用戶選擇了取代
                          var index = existingTiles.indexOf(conflictingTile);
                          existingTiles[index] = { 
                              time: inputTime, 
                              place: $("#place-input").val(), 
                              comment: $("#comment-input").val(), 
                              att_id: $("#attid-input").val() 
                          };
                          sortExistingTilesByTime();
                          updateAndRenderTiles();
                      } else if (result.isDismissed && result.dismiss !== Swal.DismissReason.close) {
                          var time = $("#time-input").val() + ":00";

                          // 尋找與當前輸入時間相衝突的舊項目
                          var conflictTile = existingTiles.find(tile => tile.time === time);

                          // 如果找到了衝突項目，將其時間延遲1小時
                          if (conflictTile) {
                              var newTime = new Date('1970-01-01T' + time + 'Z');
                              newTime.setHours(newTime.getHours() + 1);
                              var newTimeString = newTime.toISOString().substr(11, 5) + ":00";
                              conflictTile.time = newTimeString;
                          }

                          // 添加新項目
                          var place = $("#place-input").val();
                          var comment = $("#comment-input").val();
                          var att_id = $("#attid-input").val();
                          existingTiles.push({ time: time, place: place, comment: comment, att_id: att_id });
                          sortExistingTilesByTime();
                          updateAndRenderTiles();
                      }
                  });
              } else {
                  // 在這裡添加你希望在沒有衝突時執行的功能
                  var place = $("#place-input").val();
                  var comment = $("#comment-input").val();
                  var att_id = $("#attid-input").val();
                  existingTiles.push({ time: inputTime, place: place, comment: comment, att_id: att_id });
                  sortExistingTilesByTime();
                  updateAndRenderTiles();
              }
          });

              function sortExistingTilesByTime() {
              existingTiles.sort((a, b) => {
                  if (a.time < b.time) return -1;
                  if (a.time > b.time) return 1;
                  return 0;
              });
          }
              function adjustTimes() {
              var times = [];
              tilesContainer.children(".tile").each(function () {
                  var timeVal = $(this).find(".time").val();
                  if (times.includes(timeVal)) {
                      var newTime = incrementTime(timeVal);
                      $(this).find(".time").val(newTime);
                  }
                  times.push($(this).find(".time").val());
              });
          }

          function incrementTime(time) {
              var timeParts = time.split(":");
              var hour = parseInt(timeParts[0]);
              var minute = parseInt(timeParts[1]);

              hour = (hour + 1) % 24;
              return (hour < 10 ? "0" + hour : hour) + ":" + (minute < 10 ? "0" + minute : minute);
          }

          function sortTiles() {
          var tiles = tilesContainer.children(".tile").get();
          var lastTile = tiles[tiles.length - 1]; // 最新添加的項目

          // 解決時間衝突
          for (let i = 0; i < tiles.length - 1; i++) {  // 注意這裡我們不檢查最後一個項目，因為它是新添加的
              for (let j = i + 1; j < tiles.length; j++) {
                  var timeA = $(tiles[i]).find(".time").val().substring(0, 5);
                  var timeB = $(tiles[j]).find(".time").val().substring(0, 5);

                  if (timeA === timeB) {
                      if (tiles[j] !== lastTile) {
                          // 如果 timeB 不是新項目，則延後它的時間
                          var incrementedTimeB = incrementTime(timeB);
                          $(tiles[j]).find(".time").val(incrementedTimeB);
                      } else {
                          // 如果 timeA 不是新項目，則延後它的時間
                          var incrementedTimeA = incrementTime(timeA);
                          $(tiles[i]).find(".time").val(incrementedTimeA);
                      }
                  }
              }
          }

          // 排序所有項目
          tiles.sort(function (a, b) {
              var timeA = $(a).find(".time").val().substring(0, 5);
              var timeB = $(b).find(".time").val().substring(0, 5);
              return timeA.localeCompare(timeB);
          });

          $.each(tiles, function (index, tile) {
              tilesContainer.append(tile);
          });
      }





      <?php if (isset($_SESSION['existingTiles'])) : ?>
      // 如果 $_SESSION['existingTiles'] 存在，則輸出其內容
      existingTiles = <?php echo json_encode($_SESSION['existingTiles']); ?>;
      <?php
        // 刪除 $_SESSION['existingTiles']
        unset($_SESSION['existingTiles']);
      ?>
      <?php else: ?>
          // 如果 $_SESSION['existingTiles'] 不存在，則執行以下代碼
          existingTiles = [
              <?php
                $RouteID = $_GET['RouteID'];
                require_once('php/functionsrouteatt.php');
                $routeattData = getroutesatt($RouteID);
                if (!empty($routeattData)) {
                    foreach ($routeattData as $routeatt) {
                        echo "{ time: '".$routeatt['startTime']."', place: '".$routeatt['att_name']."', comment: '".$routeatt['comment']."', att_id: '".$routeatt['att_id']."' }, ";
                    }
                } else {
                    echo "沒有資料。";
                }
              ?>
          ];
      <?php endif; ?>

              $.each(existingTiles, function (index, tileData) {
                  addTile(tileData.time, tileData.place, tileData.comment, tileData.att_id);  // Make sure to pass att_id here
              });

              $("#sort-btn").click(function () {
                  sortTiles();
              });

              window.getexistingTiles = function() {
                  return existingTiles;
              };

              function f_sendRequest(att_CityNum, mem_id) {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', 'php/f_search.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                  if (this.status === 200) {
                    console.log("Response from server:", this.responseText);

                    // 檢查是否返回 "查無資料"
                    if (this.responseText.trim() === '查無資料') {
                      alert('查無資料'); // 跳出警示框
                      return; // 結束後續處理
                    }

                    let dataList = document.getElementById('f_att_name');

                    // 清空 <datalist> 中的所有選項
                    dataList.innerHTML = '';

                    let options = JSON.parse(this.responseText);

                    options.forEach(function(item) {
                      let option = document.createElement('option');
                      option.value = item.att_name;
                      option.setAttribute('data-attid', item.att_id);
                      dataList.appendChild(option);
                    });

                    document.getElementById("f_place-input").addEventListener("change", function() {
                      let selectedPlace = this.value;
                      let options = document.querySelectorAll("#f_att_name option");
                      let found = false;

                      console.log("Selected place:", selectedPlace);
                      console.log("All options:", options);

                      for (let option of options) {
                        if (option.getAttribute("data-attid") && option.value === selectedPlace) {
                          let attid = option.getAttribute("data-attid");
                          console.log("Matching att_id:", attid);
                          document.getElementById("f_attid-input").value = attid;
                          found = true;
                          break;
                        }
                      }
                      let f_placeLink = document.getElementById("f_placeLink");
                          if (found) {
                              f_placeLink.href = "big_attraction.php#" + selectedPlace;
                              f_placeLink.textContent = selectedPlace;
                          } else {
                              document.getElementById("f_attid-input").value = "";
                              f_placeLink.href = "";
                              f_placeLink.textContent = "";
                          }

                    });

                  }
                };

                // 將 att_CityNum 和 mem_id 傳送到後端
                xhr.send('att_CityNum=' + att_CityNum + '&mem_id=' + mem_id);
              }


              function sendRequest(att_id_param) {
                  let kmValue = document.getElementById("km-input").value;
                  document.getElementById("km-display").textContent = kmValue;
                  
                  let att_id = att_id_param || existingTiles[0].att_id;  // 使用提供的att_id或預設值
                  let xhr = new XMLHttpRequest();
                  xhr.open('POST', 'php/attractionsnearbysearch.php', true);
                  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                  xhr.onload = function() {
                      if (this.status === 200) {
                          console.log(this.responseText); 
                          let dataList = document.getElementById('att_name');
                          let testOutputDiv = document.getElementById('testOutput'); 
                              
                          // 清空 <datalist> 中的所有選項
                          dataList.innerHTML = '';
                              
                          let options = JSON.parse(this.responseText);
                              
                          options.forEach(function(item) {
                              let option = document.createElement('option');
                              option.value = item.att_name;
                              option.textContent = item.name;
                                  
                              // 添加 data-attid 屬性
                              option.setAttribute("data-attid", item.att_id);
                                  
                              dataList.appendChild(option);

                              // 將數據添加到 <div> 以供測試
                              let divContent = document.createElement('div');
                              divContent.textContent = `ID: ${item.att_id}, Name: ${item.att_name}`;
                              testOutputDiv.appendChild(divContent);
                      });

                      document.getElementById("place-input").addEventListener("change", function() {
                          let selectedPlace = this.value;
                          let options = document.querySelectorAll("#att_name option");
                          let found = false;

                          for (let option of options) {
                              if (option.value === selectedPlace) {
                                  document.getElementById("attid-input").value = option.getAttribute("data-attid");
                                  found = true;
                                  break;
                              }
                          }

                          let placeLink = document.getElementById("placeLink");
                          if (found) {
                              placeLink.href = "big_attraction.php#" + selectedPlace;
                              placeLink.textContent = selectedPlace;
                          } else {
                              document.getElementById("attid-input").value = "";
                              placeLink.href = "";
                              placeLink.textContent = "";
                          }
                      });
                      }
              };
              
              xhr.send('att_id=' + att_id + '&radius=' + kmValue);
          }







                var initialPlaceParam = $("<span>").css('color', '#229954').text(existingTiles[0].place);
                $("label[for='km-input']").before(initialPlaceParam);
                // 網頁加載時，先發送一次請求
                sendRequest();

                // 當 f5button 被點擊時，再次發送請求
                document.getElementById("f5button").addEventListener("click", sendRequest);


                function updateAndRenderTiles() {
                  var currentEditBtn = null; // 用於追蹤當前正在修改的按鈕
                  
                  // 清空目前的瓦片
                  tilesContainer.empty();
                  


                  // 使用 existingTiles 重新渲染瓦片
                  existingTiles.forEach(function(tileData) {
                    var tile = $("<div>").addClass("tile");
                    var time = tileData.time;
                    var place = tileData.place;
                    var comment = tileData.comment;
                    var att_id = tileData.att_id; 
                  
                    var searchBtn = $("<button>").addClass("btn btn-search").text("定點搜尋");
                    var currentTab; // 用來存儲當前激活的標籤的href值

                    searchBtn.on("click", function(event) {
                        event.preventDefault(); // 防止按鈕送出表單
                        sendRequest(att_id); // 使用 att_id 進行搜索
                        initialPlaceParam.text(place);
                    });
                    tile.append(searchBtn);


                    // $('.tab-list__link').click(function(e) {
                    //     e.preventDefault(); // 阻止默認行為

                    //     currentTab = $(this).attr('href'); // 存儲當前標籤的href值
                    //     if (currentTab === "#tab2") {
                    //         searchBtn.show();
                    //     } else {
                    //         searchBtn.hide();
                    //     }
                    // });



                  
                  var deleteBtn = $("<i>").addClass("fas fa-times delete-btn");
                  var editBtn = $("<button>").addClass("btn btn-edit").text("修改");
                  var timeInput = $("<input>").attr("type", "time").addClass("time").val(time).css("border", "none").prop("disabled", true);
                  var placeEl = $("<a>").attr({
                    "href": "big_attraction.php#" + place,
                    "target": "_blank"
                    }).addClass("place").text(place);
                  var commentInput = $("<input>").attr("type", "text").addClass("comment").val(comment).css("border", "none").css("margin-top", "10px").prop("disabled", true).css("margin-left", "30px");

                  var moveUpBtn = $("<i>").addClass("fas fa-arrow-up move-up-btn").css("padding-right","5px");
                  var moveDownBtn = $("<i>").addClass("fas fa-arrow-down move-down-btn");

                  tilesContainer.on("click", ".move-up-btn", function() {
                  let currentTile = $(this).closest(".tile");
                  let index = currentTile.index();

                  if (index > 0) {
                      // Swap data excluding the time
                      let tempPlace = existingTiles[index].place;
                      let tempComment = existingTiles[index].comment;
                      let tempAttId = existingTiles[index].att_id;

                      existingTiles[index].place = existingTiles[index - 1].place;
                      existingTiles[index].comment = existingTiles[index - 1].comment;
                      existingTiles[index].att_id = existingTiles[index - 1].att_id;

                      existingTiles[index - 1].place = tempPlace;
                      existingTiles[index - 1].comment = tempComment;
                      existingTiles[index - 1].att_id = tempAttId;

                      updateAndRenderTiles();
                  }
              });




              tilesContainer.on("click", ".move-down-btn", function() {
              let currentTile = $(this).closest(".tile");
              let index = currentTile.index();

              if (index < existingTiles.length - 1) {
                  // Swap data excluding the time
                  let tempPlace = existingTiles[index].place;
                  let tempComment = existingTiles[index].comment;
                  let tempAttId = existingTiles[index].att_id;

                  existingTiles[index].place = existingTiles[index + 1].place;
                  existingTiles[index].comment = existingTiles[index + 1].comment;
                  existingTiles[index].att_id = existingTiles[index + 1].att_id;

                  existingTiles[index + 1].place = tempPlace;
                  existingTiles[index + 1].comment = tempComment;
                  existingTiles[index + 1].att_id = tempAttId;

                  updateAndRenderTiles();
              }
          });



                  tile.append(moveUpBtn);
                  tile.append(moveDownBtn);

                  tile.append(deleteBtn);
                  tile.append(editBtn);
                  tile.append(timeInput);
                  tile.append(placeEl);
                  tile.append(commentInput);
                  tilesContainer.append(tile);

                  deleteBtn.click(function () {
                      var index = existingTiles.indexOf(tileData);
                      if (index > -1) {
                        existingTiles.splice(index, 1);
                      }
                      tile.remove();
                      sortTiles();
                  });






                  editBtn.click(function(event) {
                      event.preventDefault();

                      // 如果點擊的是不同的按鈕，並且有正在修改的按鈕，則先完成修改
                      if (currentEditBtn && currentEditBtn[0] !== $(this)[0]) {
                          finishEditing(currentEditBtn);
                          currentEditBtn = null;
                      }

                      if ($(this).text() === "修改") {
                          $(this).text("完成");
                          tile.find(".time, .comment").prop("disabled", false);
                          currentEditBtn = $(this); // 設定當前正在修改的按鈕
                      } else {
                          finishEditing($(this));
                          currentEditBtn = null; // 清除當前正在修改的按鈕
                      }
                  });

                  function finishEditing(btn) {
                      btn.text("修改");
                      let tile = btn.closest('.tile');
                      tile.find(".time, .comment").prop("disabled", true);

                      let timeValue = tile.find(".time").val();

                      // Check if the format is not HH:MM:SS, and if so, add :00
                      if (!/^\d{2}:\d{2}:\d{2}$/.test(timeValue)) {
                          timeValue += ":00";
                      }
                      if (/^\d{2}:\d{2}:\d{2}:\d{2}$/.test(timeValue)) {
                          timeValue = timeValue.slice(0, -3);
                      }

                      tileData.time = timeValue;
                      tileData.comment = tile.find(".comment").val();
                      sortTiles();
                  }







                  timeInput.change(function () {
                      adjustTimes();
                  });

                  commentInput.on('input', function() {
                      tileData.comment = $(this).val();
                  });

                  placeEl.on('input', function() {
                      tileData.place = $(this).text();
                  });

                  });
                  $("#show-updated-tiles").click(function() {
                    event.preventDefault();
                    var tiles = getexistingTiles();
                    var output = $("#output");
                    output.empty();
                    tiles.forEach(function(tile) {
                        output.append("<div><strong>Time:</strong> " + tile.time + "</div>");
                        output.append("<div><strong>Place:</strong> " + tile.place + "</div>");
                        output.append("<div><strong>Comment:</strong> " + tile.comment + "</div>");
                        output.append("<div><strong>att_id:</strong> " + tile.att_id + "</div>");
                        output.append("<hr>");
                    });
                });
              }
          });
          $('#end-btn').click(function() {
              // 使用 getexistingTiles 函數獲取 existingTiles
              var existingTiles = window.getexistingTiles();

              console.log("existingTiles:", existingTiles); // 打印 existingTiles 的值

              // 將 existingTiles 轉換為 JSON 格式
              var existingTilesJSON = JSON.stringify(existingTiles);
              console.log("existingTilesJSON:", existingTilesJSON); // 打印 existingTiles 的值

              // 使用 AJAX 將資料發送到 route_cheak.php
              $.ajax({
                  url: 'route_cheak.php',
                  method: 'POST',
                  data: { existingTiles: existingTilesJSON },
                  contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                  success: function(response) {
                      // 成功處理
                      setTimeout(function() {
                          window.location.href = 'route_cheak.php';
                      }, 1000); 
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      // 錯誤處理
                      console.error("Error:", textStatus, errorThrown);
                  }
              });
          });







</script>









</body>

</html>