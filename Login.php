<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
<!-- kjgk -->
    <link rel="stylesheet" href="style/login.css">
    
</head>
<body>
    <div class="container">
        <div class="form-box Login">
            <h1>LOGIN</h1>
        
            <form action="#">
            
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">
                            Remember me
                        </label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button class="btn">LOGIN</button>
                    <div class="login-singup">
                        <p>Don't have any account?
                            <a href="#" class="singup-link">SIGN UP</a>
                        </p>
                    </div>
                    <!-- Need your accaunt?  -->
            </form>
        </div>
    </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>