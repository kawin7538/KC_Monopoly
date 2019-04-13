<?php
	session_start();
	require("db_config.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty(trim($_POST["score"]))){
	        $score=trim($_POST["score"]);
	        if($score>0){
				$text="INSERT INTO `money` (`IP`, `money`) VALUES ('NULL',?);";
				if($stmt=mysqli_prepare($link,$text)){
					mysqli_stmt_bind_param($stmt,"i",$score);
					if(mysqli_stmt_execute($stmt)){
						
					}
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
		#message{
			display: none;
		}
	</style>
	<link rel="stylesheet" href="slider.css">
	<script type="text/javascript" src="remove_000.js"></script>
	<script type="text/javascript" src="slider.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<br>
<br>
<div class="title">How much did you donate?</div>
<form name="score" action="" method="post">
<div class="container">
  
  <div class="range-slider">
    <span id="rs-bullet" class="rs-label">0</span>
    <input name="score" id="rs-range-line" class="rs-range" type="range" value="0" min="0" max="500">
    
  </div>
  
  <div class="box-minmax">
    <span>0</span><span>500</span>
  </div>
  
</div>
<div class="submitt"><input class="button" type="submit" value="Submit"></div>
</form>
<span id="message">YOu FCUK</span>
</body>
</html>
