<?php
	require("db_config.php");
	$password_hash=password_hash('admin', PASSWORD_DEFAULT);
	$sql = "INSERT INTO user (username, password) VALUES (?, ?)";
	if($stmt=mysqli_prepare($link,$sql)){
		mysqli_stmt_bind_param($stmt,"ss",$param_user,$param_pass);
		$param_user="admin";
		$param_pass=$password_hash;
		if(mysqli_stmt_execute($stmt)){
			echo "SUCCESSFULL";
		}
	}
?>