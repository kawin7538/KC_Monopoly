<?php
	session_start();
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
		header("location: login.php");
		exit;
	}
?>
<?php
	if(!isset($_SESSION['score']) || empty($_SESSION['score'])){
		$_SESSION['score']=0;
	}
?>
<?php
	if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
		unset($_SESSION['msg']);
	}
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
	<style>
		.status{
			color: white;
			width: 200px;
			text-align: center;
			position: relative;
			top: 0px;
			left: 0px;
			font-size:20px;
		}
		.logout-box{
			background-color:white;
			color:black;
			border-radius: 20px;
			text-align:center;
			position: relative;
			width: 100px;
			height: 40px;
			font-size: 20px;
			margin: 10px;
		}
		.logout{
			background-color:white;
			color:black;
			text-align:center;
			position: relative;
		}
	</style>
</head>
<body>
<br>
<div class="status">
	Sign in as <u><i><?php echo $_SESSION['username'] ?></i></u>
	<br>
	<a class="logout" href="logout.php">
		<div class="logout-box">
			Logout
		</div>
	</a>
</div>
<div class="title">How much did you donate?</div>
<form method="post" action="score_process.php">
<div class="container">
  <div class="range-slider">
    <span id="rs-bullet" class="rs-label"><?php echo $_SESSION['score']; ?></span>
    <input name="score" id="rs-range-line" class="rs-range" type="range" value="<?php echo $_SESSION['score']; ?>" min="0" max="500">

  </div>

  <div class="box-minmax">
    <span>0</span><span>500</span>
  </div>

</div>
<div class="submitt"><input class="button" type="submit" value="Submit" onclick="submit();"></div>
</form>
</body>
</html>
