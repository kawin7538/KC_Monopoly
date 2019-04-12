<?php
	session_start();
	require("db_config.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty(trim($_POST["score"]))){
	        $score=trim($_POST["score"]);
			$text="INSERT INTO `money` (`IP`, `money`) VALUES ('NULL',?);";
			if($stmt=mysqli_prepare($link,$text)){
				mysqli_stmt_bind_param($stmt,"i",$score);
				if(mysqli_stmt_execute($stmt)){
					
				}
			}
	    }
	}
	mysqli_close($link);	
?>

<!DOCTYPE html>
<html>
<head>
	<title> Donation System </title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="icon" href="kc_icon.ico">
	<style>
		div {
		  background-color: white;
		  width: 300px;
		  border: 1px solid black;
		  padding: 50px;
		  margin: 20px;
		}
		#message{
			display: none;
		}
	</style>
</head>
<body>
<div><center>How much did you donate?
<form name="score" action="" method="post">
KC<input type="text" name="score"><br>
<br>
<input type="submit" value="Submit" class="button">
</form></center>
</div>
<span id="message">YOu FCUK</span>
</body>
</html>
