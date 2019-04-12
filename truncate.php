<?php
	require('db_config.php');
	mysqli_query($link,"TRUNCATE money");
	mysqli_query($link,"INSERT INTO `money` (`IP`, `money`) VALUES ('NULL','0');");
	echo '0';
?>