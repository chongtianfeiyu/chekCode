<?php
			session_start();
			echo "POST:".$_POST["code"]."<br>";
			echo "SESSION:".$_SESSION["code"]."<br>";
			if(strtoupper($_POST["code"])==strtoupper($_SESSION["code"])){
				echo "<font Color='green'>正确</font>";
			}else{
				echo "<font Color='red'>错误</font>";
			}
		?>
<!doctype html>
<html>
	<head>
		<title>网页标题</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
		 *{margin:0 auto}

		</style>
	</head>
	<body>
	
		<form action="check.php" method="post">
			code:<input type="text" name="code"><img src="checkCode.php" onclick="this.src='checkCode.php'"/>
			<input type="submit" name="l" value="验证">
		</form>
		
	</body>
</html>
