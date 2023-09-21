<html>

<?php
session_start();

require_once('db_connect_wamp.php');

$mem_email=$_POST['mem_email'];
$mem_pwd=md5($_POST['mem_pwd']);
$found=0;

$sql ="SELECT * FROM `member` WHERE `mem_email` = '$mem_email' AND `mem_pwd` = '$mem_pwd'";
$results = mysqli_query($con,$sql) or die (mysqli_error($con));

while($rs=mysqli_fetch_assoc($results)){
    $found=1;
    $_SESSION['mem_id']=$rs['mem_id'];
}

if($found==1){
    $sql ="SELECT * FROM `memdata` WHERE `mem_email` = '$mem_email'";
    $results = mysqli_query($con,$sql) or die (mysqli_error($con));
    $rs = mysqli_fetch_assoc($results);
    $_SESSION['mem_name']=$rs['mem_name'];
    echo "<script>alert('登入成功!')</script>";
    header("refresh:0; url=../index.php");
}
else
{
    echo "<script>alert('登入失敗!')</script>";
    header("refresh:0; url=../login.html");
}
?>

<!-- Add this script at the end of the HTML content -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const loginSuccess = <?php echo $found; ?>;

            <?php
            $mem_email = $_POST['mem_email'];
            $checkSql = "SELECT * FROM `survey_responses` WHERE `member_email` = '$mem_email'";
            $checkResult = mysqli_query($con, $checkSql) or die (mysqli_error($con));
            $hasFilledProfile = mysqli_num_rows($checkResult) > 0;
            ?>

            if (<?php echo $hasFilledProfile ? 'true' : 'false'; ?>) {
                const confirmed = confirm('已填寫過個人資料。是否想再重新填寫？');

                if (confirmed) {    
                    window.location.href = '../questionnaire'; // 修改为你的首页URL
                }else{
                    window.location.href = '../index'; // 修改为你的首页URL
                }
            } else {
                const confirmed = confirm('是否要填寫個人資料？填完可以根據您的喜好分析與推薦景點！');
                if (confirmed) {    
                    window.location.href = '../questionnaire'; // 修改为你的首页URL
                }else{
                    window.location.href = '../index'; // 修改为你的首页URL
                }
            }
});
</script>
</html>
