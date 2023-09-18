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
  <?php
		session_start();
    $_SESSION['mem_id']="QAQ";
    $mem_name=$_SESSION['mem_id'];

		?>
  <style>
    form,
    h1 {
      text-align: center;
      /* 水平置中 */
      margin-top: 50px;
      /* 垂直置中 */
    }

    .tile {
      position: relative;
      padding: 20px;
      margin-bottom: 25px;
      width: 800px;
      background-color: #fff;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5);
      margin: 0 auto;
      /* 左右置中 */
      display: flex;
      /* 使用 flex 來垂直置中 */
      align-items: center;
    }

    .tile .delete-btn {
      position: absolute;
      top: 5px;
      right: 5px;
      font-size: 1.2rem;
      color: #dc3545;
      cursor: pointer;
    }

    .tile .date {
      font-size: 1.2rem;
      font-weight: bold;
      color: #007bff;
    }

    .tile .time {
      font-size: 1.2rem;
      font-weight: bold;
      color: #007bff;
    }

    .tile .place {
      font-size: 1.2rem;
      color: #333;
    }

    .col-md-2 {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .form-label {
      margin-bottom: 10px;
      font-size: 1.5rem;
      margin: 0 auto;
      /* 左右置中 */
      display: flex;
      /* 使用 flex 來垂直置中 */
      align-items: center;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }

    #clickme{
      font-size: 24px;
    }

    #placeLink{
      font-size: 24px;
    }




    body {
      background-color: #c6def6;
    }
  </style>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-primary"><i class="fa fa-flag me-3"></i>newTRAVEL</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.html" class="nav-item nav-link active">首頁</a>
        <a href="about.html" class="nav-item nav-link">關於我們</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">景點瀏覽</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="attraction_area.html" class="dropdown-item">區域景點瀏覽</a>
            <a href="attraction_address.html" class="dropdown-item">地理座標景點瀏覽</a>
            <a href="attraction_tag.html" class="dropdown-item">關鍵字景點瀏覽</a>
            <a href="attraction_random.html" class="dropdown-item">隨機推薦景點</a>
            <!-- <a href="route_show.html" class="dropdown-item">所有路線</a> -->
            <!-- <a href="attraction_board.html" class="dropdown-item">景點留言板</a> -->
          </div>
        </div>

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">行程瀏覽</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="route_area.html" class="dropdown-item">區域行程瀏覽</a>
            <!-- <a href="route_tag.html" class="dropdown-item">地理座標景點瀏覽</a> -->
            <a href="route_tag.html" class="dropdown-item">關鍵字行程瀏覽</a>
            <a href="route_random.html" class="dropdown-item">隨機推薦行程</a>
            <!-- <a href="route_custom.html" class="dropdown-item">自訂規劃路線</a> -->
          </div>
        </div>
        <a href="willattraction.html" class="nav-item nav-link">景點分享</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">會員管理</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="my_route.html" class="dropdown-item">未去過行程</a>
            <a href="my_route_history.html" class="dropdown-item">已去過行程</a>
            <a href="like_attractions.html" class="dropdown-item">已收藏景點</a>
            <a href="like_route.html" class="dropdown-item">已收藏行程</a>
            <a href="404.html" class="dropdown-item">登出</a>
          </div>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="route_custom.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">開始自訂行程GO&#32;&#10140;</a>
      </div>
      <!-- 未登入前 -->
      <!--<a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">加入我們<i class="fa fa-arrow-right ms-3"></i></a>-->
    </div>
  </nav>
  <!-- Navbar End -->
  <div class="container">
  <form action="my_route.html" method="post">
    <div class="row justify-content-center">
      <div class="col-2 mt-5">
      <label for="date-input" class="form-label">出遊日期</label>
          <input type="date" class="form-control" id="date-input">
      </div>
      <div class="col">
      <label for="routname-input" class="form-label">行程名稱:</label>
      <input type="text" name="RouteName" value="我的行程表" id="routname-input" class="text-center my-5" style="border: none; background: transparent; font-size: 2em;">
      </div>
 
      <div class="col-md-2">
        <a href='willattraction.php' target="_blank" class="btn btn-primary btn-lg w-100 mt-4">我要分享景點</a>
      </div>
    </div>
      <div class="row mb-3 justify-content-center">
        <div class="col-md-2">
          <label for="time-input" class="form-label">時間</label>
          <input type="time" class="form-control" id="time-input">
        </div>
        <!-- <div class="col-md-2">
          <label for="place-input" class="form-label">景點</label>
          <input type="text" class="form-control" id="place-input" name=att_name>
        </div> -->
        <div class="col-md-1 mt-5">
          <label for="attid-input" class="form-label">attID</label>
          <input type="text" class="form-control" id="attid-input" readonly="readonly" value="">
        </div>
        <div class="col-md-2 mt-5">
          <label for="place-input" class="form-label">景點</label>
          <input class="form-control mb-5"  list="att_name" id="place-input">
          <datalist id="att_name">
          <option value="0" label="無">
          <option value="1" label="無1">
          <option value="2" label="無2">
          </datalist>
        </div>
        <div class="col-md-2">
          <label for="comment-input" class="form-label">註解</label>
          <input type="text" class="form-control" id="comment-input">
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-primary btn-lg w-100 mt-4" id="add-btn">新增</button>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-3 my-3">
        <a href='bigattraction.html' target="_blank" class='nav-item nav-link' name='att_name_href' id='placeLink'></a>
        </div>        
        <div class="col-2 my-4">
        <i id="clickme" class='fas fa-angle-double-left'>點我看詳細</i>
          </div>
          <div class="col-md-2">
          <label for="km-input">要搜尋的方圓半徑(KM)</label>
          <input type="range" id="km-input" name="km-input" 
              min="1" max="30" value="5" step="1">
              <span id="km-display">10</span>  <!-- 這個 span 用來顯示 value -->
      </div>
        <!-- <div class="col-2 my-3">
            <button type="button" id="f5button" class="btn btn-primary btn-lg w-20">點我刷新搜尋</button>
          </div> -->
      </div>
      <div class="row justify-content-center" id="tiles-container"></div>
      <div class="row justify-content-center">
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary btn-lg mt-3" id="end-btn">完成</button>
        </div>
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


  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script>

      $(document).ready(function () {
                    document.getElementById("km-input").addEventListener("input", function() {
                  // 更新 span 的內容為滑動條的當前值
                    document.getElementById("km-display").textContent = this.value;
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

                      // existingTiles.push(tileData);





                  var tile = $("<div>").addClass("col-md-6 tile");
                  
                  // 新增 "由此點做搜尋" 的按鈕
                  var searchBtn = $("<button>").addClass("btn btn-search").text("由此點做搜尋");
                  searchBtn.on("click", function() {
                      event.preventDefault();  // 防止按鈕送出表單
                      sendRequest(att_id);  // 使用 att_id 進行搜索
                  });
                  tile.append(searchBtn);
                  
                  var deleteBtn = $("<i>").addClass("fas fa-times delete-btn");
                  var editBtn = $("<button>").addClass("btn btn-edit").text("修改");
                  var timeInput = $("<input>").attr("type", "time").addClass("time").val(time).css("border", "none").prop("disabled", true);
                  var placeEl = $("<a>").attr("href", "big_attraction.php#" + place).addClass("place").text(place);
                  var commentInput = $("<input>").attr("type", "text").addClass("comment").val(comment).css("border", "none").css("margin-top", "10px").prop("disabled", true).css("margin-left", "30px");

                  var moveUpBtn = $("<i>").addClass("fas fa-arrow-up move-up-btn");
                  var moveDownBtn = $("<i>").addClass("fas fa-arrow-down move-down-btn");

                  // 上移功能
                  moveUpBtn.on("click", function() {
                      let currentTile = $(this).closest(".tile");
                      let prevTile = currentTile.prev();

                      // 交換 place、comment 和 att_id 的值
                      let currentPlace = currentTile.find(".place").text();
                      let currentComment = currentTile.find(".comment").val();
                      let currentAttId = currentTile.data("att-id"); // 假設您使用 data-att-id 存儲 att_id 值

                      let prevPlace = prevTile.find(".place").text();
                      let prevComment = prevTile.find(".comment").val();
                      let prevAttId = prevTile.data("att-id");

                      currentTile.find(".place").text(prevPlace);
                      currentTile.find(".comment").val(prevComment);
                      currentTile.data("att-id", prevAttId);

                      prevTile.find(".place").text(currentPlace);
                      prevTile.find(".comment").val(currentComment);
                      prevTile.data("att-id", currentAttId);
                  });

                  // 下移功能
                  moveDownBtn.on("click", function() {
                      let currentTile = $(this).closest(".tile");
                      let nextTile = currentTile.next();

                      // 交換 place、comment 和 att_id 的值
                      let currentPlace = currentTile.find(".place").text();
                      let currentComment = currentTile.find(".comment").val();
                      let currentAttId = currentTile.data("att-id");

                      let nextPlace = nextTile.find(".place").text();
                      let nextComment = nextTile.find(".comment").val();
                      let nextAttId = nextTile.data("att-id");

                      currentTile.find(".place").text(nextPlace);
                      currentTile.find(".comment").val(nextComment);
                      currentTile.data("att-id", nextAttId);

                      nextTile.find(".place").text(currentPlace);
                      nextTile.find(".comment").val(currentComment);
                      nextTile.data("att-id", currentAttId);
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
                      if ($(this).text() === "修改") {
                          $(this).text("完成");
                          tile.find(".time, .comment").prop("disabled", false);
                      } else {
                          $(this).text("修改");
                          tile.find(".time, .comment").prop("disabled", true);
                          tileData.time = tile.find(".time").val();
                          tileData.comment = tile.find(".comment").val();
                          sortTiles();
                      }
                  });

                  timeInput.change(function () {
                      adjustTimes();
                  });

                  commentInput.on('input', function() {
                      tileData.comment = $(this).val();
                  });

                  placeEl.on('input', function() {
                      tileData.place = $(this).text();
                  });
                  updateAndRenderTiles();
              }

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





              var existingTiles = [
                  // { time: "09:00", place: "奇美博物館", comment: "早上的第一6站", att_id: 1 },
                  <?php
                $RouteID = $_GET['RouteID'];
                require_once('php/functionsrouteatt.php');
                $routeattData = getroutesatt($RouteID);
                if (!empty($routeattData)) {
                    // 輸出資料
                    foreach ($routeattData as $routeatt) {
                        echo "{ time: '".$routeatt['startTime']."', place: '".$routeatt['att_name']."', comment: '".$routeatt['comment']."', att_id: '".$routeatt['att_id']."' }, ";
                    }
                } else {
                    echo "沒有資料。";
                }
                ?>
              ];

              $.each(existingTiles, function (index, tileData) {
                  addTile(tileData.time, tileData.place, tileData.comment, tileData.att_id);  // Make sure to pass att_id here
              });

              $("#sort-btn").click(function () {
                  sortTiles();
              });

              window.getexistingTiles = function() {
                  return existingTiles;
              };

              

              


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

                // 網頁加載時，先發送一次請求
                sendRequest();

                // 當 f5button 被點擊時，再次發送請求
                document.getElementById("f5button").addEventListener("click", sendRequest);


                function updateAndRenderTiles() {


                  // 清空目前的瓦片
                  tilesContainer.empty();


                  // 使用 existingTiles 重新渲染瓦片
                  existingTiles.forEach(function(tileData) {
                    var tile = $("<div>").addClass("tile");
                    var time = tileData.time;
                    var place = tileData.place;
                    var comment = tileData.comment;
                    var att_id = tileData.att_id; 
                  
                  // 新增 "由此點做搜尋" 的按鈕
                  var searchBtn = $("<button>").addClass("btn btn-search").text("由此點做搜尋");
                  searchBtn.on("click", function() {
                      event.preventDefault();  // 防止按鈕送出表單
                      sendRequest(att_id);  // 使用 att_id 進行搜索
                  });
                  tile.append(searchBtn);
                  
                  var deleteBtn = $("<i>").addClass("fas fa-times delete-btn");
                  var editBtn = $("<button>").addClass("btn btn-edit").text("修改");
                  var timeInput = $("<input>").attr("type", "time").addClass("time").val(time).css("border", "none").prop("disabled", true);
                  var placeEl = $("<a>").attr("href", "big_attraction.php#" + place).addClass("place").text(place);
                  var commentInput = $("<input>").attr("type", "text").addClass("comment").val(comment).css("border", "none").css("margin-top", "10px").prop("disabled", true).css("margin-left", "30px");

                  var moveUpBtn = $("<i>").addClass("fas fa-arrow-up move-up-btn");
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
                  if ($(this).text() === "修改") {
                      $(this).text("完成");
                      tile.find(".time, .comment").prop("disabled", false);
                  } else {
                      $(this).text("修改");
                      tile.find(".time, .comment").prop("disabled", true);
                      
                      let timeValue = tile.find(".time").val();
                      
                      // Check if the format is not HH:MM:SS, and if so, add :00
                      if (!/^\\d{2}:\\d{2}:\\d{2}$/.test(timeValue)) {
                          timeValue += ":00";
                      }
                      if (/^\d{2}:\d{2}:\d{2}:\d{2}$/.test(timeValue)) {
                      timeValue = timeValue.slice(0, -3);
                  }
                      tileData.time = timeValue;
                      tileData.comment = tile.find(".comment").val();
                      sortTiles();
                  }
              });



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

              }


                




                $("#show-updated-tiles").click(function() {
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

                
          });


</script>








</body>

</html>