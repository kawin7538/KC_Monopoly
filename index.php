<?php
	session_start();
	function get_client_ip() {
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
		    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
		    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
		    $ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
		    $ipaddress = $_SERVER['REMOTE_ADDR'];
		else
		    $ipaddress = 'UNKNOWN';
		return $ipaddress;
	} 
	$ip = get_client_ip();
	require("db_config.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty(trim($_POST["score"]))){
	        $score=trim($_POST["score"]);
	        if($score>0){
				$text="INSERT INTO `money` (`IP`, `money`) VALUES (?,?);";
				if($stmt=mysqli_prepare($link,$text)){
					mysqli_stmt_bind_param($stmt,"si",$ip,$score);
					if(mysqli_stmt_execute($stmt)){
						echo "Score Complete";
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="slider.css">
	<script type="text/javascript" src="remove_000.js"></script>
	<script type="text/javascript" src="slider.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<br>
<br>
<div class="title">How much did you donate?</div>
<form method="post">
<div class="container">
  <div class="range-slider">
    <span id="rs-bullet" class="rs-label">0</span>
    <input name="score" id="rs-range-line" class="rs-range" type="range" value="0" min="0" max="500">
    
  </div>
  
  <div class="box-minmax">
    <span>0</span><span>500</span>
  </div>
  
</div>
<div class="submitt"><input class="button" type="submit" value="Submit" onclick="submit();"></div>
</form>
</body>
</html>