<?php
	require("db_config.php");
	$password_hash=password_hash('admin', PASSWORD_DEFAULT);
	mysqli_query($link,"TRUNCATE user");
	$sql = "INSERT INTO user (username, password) VALUES (?, ?)";
	if($stmt=mysqli_prepare($link,$sql)){
		for($i=1;$i<=200;$i++){
			mysqli_stmt_bind_param($stmt,"ss",$param_user,$param_pass);
			$param_user="crazyrich".strval(sprintf("%03d",$i));
			$param_pass=password_hash("kc".strval(sprintf("%03d",$i)),PASSWORD_DEFAULT);
			mysqli_stmt_execute($stmt);
		}
	}
	echo "SUCCESSFULL";
?>