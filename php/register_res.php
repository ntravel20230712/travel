<html>
	<body>
		<?php
			$mem_name = $_POST['mem_name']	;		
			$mem_email = $_POST['mem_email']	;
            $mem_Birthday = $_POST['mem_bd']	;
            $mem_phone=$_POST['mem_phone'];
			$mem_pwd = md5($_POST['mem_pwd'])	;

			echo $mem_name.$mem_email.$mem_Birthday.$mem_phone.$mem_pwd;

			require_once('db_connect_wamp.php');
	
			$sql = "INSERT INTO memdata (mem_name, mem_email, mem_phone, mem_Birthday) VALUES ('$mem_name','$mem_email','$mem_phone','$mem_Birthday')";
			mysqli_query ($con, $sql) or die ( mysqli_error($con));
			$sql = "INSERT INTO member (mem_email, mem_pwd) VALUES ('$mem_email','$mem_pwd')";
			mysqli_query ($con, $sql) or die ( mysqli_error($con)); 
			

			echo "<script>alert('註冊完畢')</script>"; 
			
			header("refresh:5; url=../index.php"); 
			


		?>
	</body>
</html>
