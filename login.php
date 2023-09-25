<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">

</head>

<body>
    <div class="container">
        <div class="form-box Login">
            <h1>LOGIN</h1>
            <form action="include/signin.php" method="post">
                <?php if (isset($_SESSION['error1'])) {
                    echo $_SESSION['error1'];
                    unset($_SESSION['error1']);
                }
                if (isset($_SESSION['error2'])) {
                    echo "<br>" . $_SESSION['error2'];
                    unset($_SESSION['error2']);
                } ?>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input name="email" type="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input name="password" type="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <!-- <label><input type="checkbox">
                        Remember me
                    </label> -->
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
                <button class="btn" type="submit" name="login">LOGIN</button>
                <div class="login-singup">
                    <p>Don't have an account?
                        <a href="register.php" class="singup-link">SIGN UP</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>