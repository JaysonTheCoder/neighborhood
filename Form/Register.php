<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/Register.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="title">
                <h2>Register</h2>
            </div>
            <div class="form">
                <form action="">
                    <div class="input">
                        <input type="text" name="firstname" required id="firstname" >
                        <span>firstname</span>
                    </div>
                    <div class="input">
                        <input type="text" required name="lastname" id="lastname" >
                        <span>lastname</span>
                    </div>
                    <div class="input">
                        <input type="text" required name="username" id="username" >
                        <span>username</span>
                    </div>
                    <div class="input">
                        <input type="password" required name="password" id="password" >
                        <span>password</span>
                    </div>
                    <div class="submit-button">
                        <button type="submit">submit</button>
                    </div>
                    <div class="register-button">
                        <p>Already have an account? <a href="../index.php">Signin here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>