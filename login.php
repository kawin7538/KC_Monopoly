<?php
    session_start();
    if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
        header("location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login to Donate - KMUTT Chorus</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
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
<form method="post" action="login_process.php">
  <div class="hero is-fullheight">
    <div class="hero-body">
      <div class="container content">
        <div class="box">
          <h1 class="has-text-centered">🎲 Audience Login 🎶</h1>
          <?php
            if(isset($_SESSION['msg'])&&!empty($_SESSION['msg'])){
              echo $_SESSION['msg'];
              $_SESSION['msg']="";
            }
          ?>
          <div class="field">
            <label class="label" for="username">Username</label>
            <div class="control">
              <input class="input" type="text" id="username" name="username" placeholder="crazyrich000" required>
            </div>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <div class="control">
              <input class="input" type="password" id="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;" required>
            </div>
          </div>
          <br>
          <button class="button is-success is-fullwidth">&emsp;Login ✔&emsp;</button>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>

<!-- <script>
    function checkPassword() {
        var username = document.getElementById("username");
        var password = document.getElementById("password");
    }
</script> -->
