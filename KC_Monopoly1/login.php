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
    <title>login to donation system</title>
    <style>
    .limiter {
      width: 100%;
      margin: 0 auto;
    }

    .container-login {
      width: 100%;
      min-height: 100vh;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 15px;
      background: #888888;
      background: -webkit-linear-gradient(-135deg, #000000, #ffffff);
      background: -o-linear-gradient(-135deg, #000000, #ffffff);
      background: -moz-linear-gradient(-135deg, #000000, #ffffff);
      background: linear-gradient(-135deg, #000000, #ffffff);
    }

    .wrap-login {
      width: 300px;
      background: #fff;
      border-radius: 10px;
      padding: 50px 100px 50px 100px;
    }

    .login-form {
      width: 290px;
    }

    .login-title {
      font-family: Poppins-Bold;
      font-size: 24px;
      color: #333333;
      text-align: center;

      width: 100%;
      display: block;
      padding-bottom: 40px;
    }

    .user-input {
      width: 100%;
      margin-bottom: 15px;
    }

    .input {
      font-family: Poppins-Medium;
      font-size: 18px;
      line-height: 1.5;
      color: #666666;

      display: block;
      width: 100%;
      background: #e6e6e6;
      height: 30px;
      border-radius: 25px;
      padding-left: 10px;
    }

    .login-button {
      width: 100%;
      padding-left: 25%;
      padding-top: 20px;
    }

    .button {
      font-size: 15px;
      color: #fff;
      text-transform: uppercase;

      width: 50%;
      height: 50px;
      border-radius: 25px;
      background: #57b846;
    }
    </style>
</head>
<body>
<form method="post" action="login_process.php">
  <div class="limiter">
    <div class="container-login">
      <div class="wrap-login">
        <form class="login-form">
          <span class="login-title">
            Audience Login
          </span>
          <?php
            if(isset($_SESSION['msg'])&&!empty($_SESSION['msg'])){
              echo $_SESSION['msg'];
              $_SESSION['msg']="";
            }
          ?>

          <div class="user-input">
            <input class="input" type="text" name="username" placeholder="Username">
          </div>

          <div class="user-input">
            <input class="input" type="password" name="password" placeholder="Password">
          </div>

          <div class="login-button">
            <button class="button">
              Login
            </button>
          </div>
        </form>
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
