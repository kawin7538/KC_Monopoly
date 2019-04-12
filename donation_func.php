<?php
	require('db_config.php');
	$sum=mysqli_query($link,"SELECT SUM(money) FROM money");
	$row=mysqli_fetch_assoc($sum);
	echo $row['SUM(money)'];
?>