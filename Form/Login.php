<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="title">
                <h2>Login</h2>
            </div>
            <div class="form">
                <form action="" method="POST">
                    <div class="input">
                        <input type="text" name="username" required id="username" >
                        <span>username</span>
                    </div>
                    <div class="input">
                        <input type="password" required name="password" id="password" >
                        <span>username</span>
                    </div>
                    <div class="submit-button">
                        <button name="submit_login_form" type="submit">submit</button>
                    </div>
                    <div class="register-button">
                        <p>Don't have an account? <a href="./Form/Register.php">Register here</a></p>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>
