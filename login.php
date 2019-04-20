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
</head>
<body>

    <form method="post" action="login_process.php">
        <h3>Login Form</h3>

        <input type="username" name="username" id="usernmae" placeholder="username"><br>

        <input type="password" name="password" id="password" placeholder="password"><br>

        <button type="submit" id = "login" name = "login">Login</button>

    </form>

</body>
</html>

<!-- <script>
    function checkPassword() {
        var username = document.getElementById("username");
        var password = document.getElementById("password");
    }
</script> -->