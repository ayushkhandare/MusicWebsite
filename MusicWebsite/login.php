<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form name = "login" action="login.php" method = 'post'>
                    <?php include('errors.php'); ?>
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name = 'email' title="Inavlid Email" required>
                        <label for="">E-mail</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name = 'password' required>
                        <label for="">Password</label>
                    </div>
                    <button type="submit" class="btn" name="login_user">Login</button>
                    <div class="register">
                        <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>