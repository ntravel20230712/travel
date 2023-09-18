<html>

		<?php
		session_start();

		require_once('db_connect_wamp.php');

		$mem_email=$_POST['mem_email'];
		$mem_pwd=md5($_POST['mem_pwd']);
		$found=0;

		/*
		$sqll = "SELECT * FROM `member` WHERE `mem_email` = '$mem_email' AND `mem_pwd` = '$mem_pwd'";
		$results = mysqli_query ($con, $sqll) or die ( mysqli_error($con)); 
		
		while ($now  = mysqli_fetch_assoc ($results) )
		{ 

			 echo "<tr><td>"."<a href='member_delete.php?mem_pid=".$now['mem_pid']."'>". $now['mem_pid']. "</a></td>"; 
			 echo "<td>". $now['mem_name']. "</td>"; 
			 echo "<td>". $now['mem_email']. "</td>";
		}
*/

		$sql ="SELECT * FROM `member` WHERE `mem_email` = '$mem_email' AND `mem_pwd` = '$mem_pwd'";
		$results = mysqli_query($con,$sql) or die (mysqli_error($con));
		



		while($rs=mysqli_fetch_assoc($results)){
				$found=1;
				###$mem_name=$now['mem_name'];
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
	</body>
</html>