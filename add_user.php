<?php
	require("db_config.php");
	$password_hash=password_hash('admin', PASSWORD_DEFAULT);
	$sql = "INSERT INTO user (username, password) VALUES (?, ?)";
	if($stmt=mysqli_prepare($link,$sql)){
		for($i=1;$i<=10;$i++){
			mysqli_stmt_bind_param($stmt,"ss",$param_user,$param_pass);
			$param_user="crazyrich".strval(sprintf("%02d",$i));
			$param_pass=password_hash("kc".strval(sprintf("%02d",$i)),PASSWORD_DEFAULT);
			mysqli_stmt_execute($stmt);
		}
	}
	echo "SUCCESSFULL";
?>