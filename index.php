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
	<title>Donation System - KMUTT Chorus</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
	<link rel="icon" href="kc_icon.ico">
	<!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
	<link rel="preload" href="https://fonts.googleapis.com/css?family=Mitr|Sarabun&amp;subset=thai" as="fetch" crossorigin="anonymous">
	<script type="text/javascript">
	!function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Mitr|Sarabun&amp;subset=thai",r="__3perf_googleFonts_68df8";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
	</script>
	<!-- End of code snippet for Google Fonts -->
	<style>
		body {
			background:purple;
			background-image:url("./images/bg.jpg");
			background-size:cover;
			background-position:center center;
			font-family: 'Sarabun', sans-serif;
		}
		.content h1, .content h2 {
			font-family: 'Mitr', sans-serif;
			font-weight: normal;
		}
	</style>
</head>
<body>
	<div class="hero is-fullheight">
		<div class="hero-body">
			<div class="container content">
				<div class="box">
					<div class="columns" style="margin:0">
						<div class="column is-narrow has-text-right is-hidden-tablet">
							<a class="button is-danger is-outlined" href="logout.php">Logout ❌</a>
						</div>
						<div class="column">
							<h1 style="margin:0">สวัสดีคุณ <?php echo $_SESSION['username'] ?></h1>
						</div>
						<div class="column is-narrow has-text-right is-hidden-mobile">
							<a class="button is-danger is-outlined" href="logout.php">Logout ❌</a>
						</div>
					</div>
					<hr style="margin:.5rem 0 1rem">
					<form method="post" action="score_process.php">
						<h2 class="has-text-centered">ใส่จำนวนเงินที่อยากให้ได้เลยจ้า 💵</h2>
						<div class="field">
							<div class="control">
								<input name="score" class="input is-large" type="number" required value="<?php echo $_SESSION['score']; ?>" min="0" step="1" max="500">
							</div>
							<p class="help">สามารถให้เงินได้ตั้งแต่ 0 - 500 บาท</p>
						</div>
						<br>
						<button class="button is-fullwidth is-success">ให้เงิน ✔</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		window.addEventListener("onload",function(){
			var el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
			el.parentNode.removeChild(el);
		});
	</script>
</body>
</html>
