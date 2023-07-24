<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Dashboard Template · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

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

  <main class="col-md-12 ms-sm-auto px-md-4">
    <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">已收藏的景點</h1>
    </div>
      <!-- 排列bar開始-->
      <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3 py-3 fadeInUp" data-wow-delay="0.1s">
        <strong class="d-block py-2">已查到32個景點 </strong>
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
      <?php
      // 创建数据库连接
      require_once('php/db_connect_wamp.php');

      // 检查连接是否成功
      if ($con->connect_error) {
          die("连接数据库失败: " . $con->connect_error);
      }

// 检查用户是否已登录
if (!isset($_SESSION['mem_id'])) {
    // 用户未登录，可以根据需要执行相应的操作（如重定向到登录页面）
    // ...
    exit;
}
$memberId = $_SESSION['mem_id']; // 假设当前会员的 ID 为 1

// 查询用户收藏的景点信息

// 检索用户的收藏景点信息
$query = "SELECT f.id, f.member_id, f.attraction_id, f.created_at, a.att_name, a.att_City, a.att_type FROM favorites f INNER JOIN attractions a ON f.attraction_id = a.att_id WHERE f.member_id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $memberId); // 将会员 ID 绑定到查询参数
$stmt->execute();
$result = $stmt->get_result();

// 构建表格显示查询结果和删除链接
if ($result->num_rows > 0) {
    echo '<div class="row justify-content-center">';
    echo '    <div class="card">';
    echo '        <div class="card-body p-1">';
    echo '            <div class="table-responsive" style="height: auto; width: auto;">';
    echo '                <table class="table">';
    echo '                    <thead style="background-color: #424242;">';
    echo '                        <tr>';
    echo '                            <th scope="col">景点名称</th>';
    echo '                            <th scope="col">城市</th>';
    echo '                            <th scope="col">旅游类型</th>';
    echo '                            <th scope="col">收藏日期</th>';
    echo '                            <th scope="col">詳細介紹</th>';
    echo '                            <th scope="col">操作</th>';
    echo '                        </tr>';
    echo '                    </thead>';
    echo '                    <tbody>';

    // 遍历查询结果，显示每一行数据和删除链接
    while ($row = $result->fetch_assoc()) {
        echo '                        <tr>';
        echo '                            <td>' . $row['att_name'] . '</td>';
        echo '                            <td>' . $row['att_City'] . '</td>';
        echo '                            <td>' . $row['att_type'] . '</td>';
        echo '                            <td>' . $row['created_at'] . '</td>';
        echo '                            <td><a href="big_attraction.php#' . urlencode($row['att_name']) . '">點擊查看</a></td>';
        echo '                            <td><a href="php/delete_favorites.php?id=' . $row['id'] . '">删除</a></td>';
        echo '                        </tr>';
    }

    echo '                    </tbody>';
    echo '                </table>';
    echo '            </div>';
    echo '              <div class="row justify-content-center mt-2">';
    echo '              <div class="col-12 text-center">';
    echo '                <button id="prevButton" class="btn btn-primary mr-2">上一頁</button>';
    echo '                <span id="pageInfo"></span>';
    echo '                <button id="nextButton" class="btn btn-primary ml-2">下一頁</button>';
    echo '              </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
} else {
    echo '沒有找到用戶的收藏景點資訊。';
}

$stmt->close();
$con->close();
?>

    </main>
  

    <script>
      function adjustSidebarBackgroundImage() {
        var sidebar = document.getElementById('sidebarMenu');
        var backgroundImage = document.querySelector('.sidebar-background-image');

        var windowHeight = window.innerHeight;
        var sidebarHeight = sidebar.scrollHeight;

        if (sidebarHeight < windowHeight) {
          sidebar.style.height = windowHeight + 'px';
        } else {
          sidebar.style.height = 'auto';
        }
      }

      window.addEventListener('DOMContentLoaded', adjustSidebarBackgroundImage);
      window.addEventListener('resize', adjustSidebarBackgroundImage);
    </script>

<script>
  // 获取表格和页码按钮的引用
  const table = document.querySelector('.table');
  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');
  const pageInfo = document.getElementById('pageInfo');

  // 定义每页显示的行数和当前页码
  const rowsPerPage = 8;
  let currentPage = 1;

  // 计算总页数
  const totalRows = table.tBodies[0].rows.length;
  const totalPages = Math.ceil(totalRows / rowsPerPage);

  // 更新表格显示和页码信息
  const updateTableDisplay = () => {
    // 隐藏所有行
    for (let row of table.tBodies[0].rows) {
      row.style.display = 'none';
    }

    // 计算当前页的起始索引和结束索引
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    // 显示当前页的行
    for (let i = startIndex; i < endIndex; i++) {
      if (table.tBodies[0].rows[i]) {
        table.tBodies[0].rows[i].style.display = '';
      }
    }

    // 更新上一页和下一页按钮的状态
    prevButton.disabled = currentPage === 1;
    nextButton.disabled = currentPage === totalPages;

    // 更新页码信息
    pageInfo.textContent = `第 ${currentPage} 頁 / 共 ${totalPages} 頁`;
  };

  // 初始化表格显示和页码信息
  updateTableDisplay();

  // 上一页按钮的点击事件处理程序
  prevButton.addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      updateTableDisplay();
    }
  });

  // 下一页按钮的点击事件处理程序
  nextButton.addEventListener('click', () => {
    if (currentPage < totalPages) {
      currentPage++;
      updateTableDisplay();
    }
  });
</script>


  <script src="assets/bootstrap_5.2.3/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
    crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>