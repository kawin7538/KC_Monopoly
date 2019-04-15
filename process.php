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
						echo "FUCK";
					}
					echo "FUCK";
				}
				echo "FUCK";
			}
			echo "FUCK";
	    }
	    echo "FUCK";
	}
	mysqli_close($link);	
?>