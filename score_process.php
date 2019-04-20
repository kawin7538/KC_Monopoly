<?php
	session_start();
	if (!isset($_SESSION['username']) || empty($_SESSION['username'])){
		header("location: login.php");
		exit;
	}
	$username = $_SESSION['username'];
	$result=0;
	require("db_config.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!empty(trim($_POST["score"]))){
	        $score=trim($_POST["score"]);
	        if($score>0){
	        	$text="SELECT COUNT(ip) FROM money WHERE ip = ?";
	        	if($stmt=mysqli_prepare($link,$text)){
	        		mysqli_stmt_bind_param($stmt,"s",$username);
	        		if(mysqli_stmt_execute($stmt)){
	        			mysqli_stmt_bind_result($stmt,$result);
	        			if(mysqli_stmt_fetch($stmt)){
	        				mysqli_stmt_close($stmt);
	        				if($result>0){
	        					$text="UPDATE money SET money= ? where IP = ? ;";
	        					if($stmt=mysqli_prepare($link,$text)){
	        						mysqli_stmt_bind_param($stmt,"is",$score,$username);
	        						if(mysqli_stmt_execute($stmt)){
	        							echo "f";
	        						}
	        					}
		        			}
		        			else{
		        				$text="INSERT INTO `money` (`IP`, `money`) VALUES (?,?);";
								if($stmt=mysqli_prepare($link,$text)){
									mysqli_stmt_bind_param($stmt,"si",$username,$score);
									if(mysqli_stmt_execute($stmt)){
										echo "f";
									}
								}
		        			}
	        			}
	        			$_SESSION['score']=$score;
	        			echo "Scoring Complete. Redirect to main page";
	        			$_SESSION['msg']="Successfully donate with "+strval($_SESSION['score']);
	       				//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://kawin7538.000webhostapp.com/kc\">";
	       				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=../KC_Monopoly\">";
	        		}
	        	}
			}
	    }
	}
	mysqli_close($link);	
?>