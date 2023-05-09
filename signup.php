<?php 
include('server.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="signupform-box">
            <div class="form-value">
                <form name = "signup" action="signup.php" method="POST">
                    <?php include('errors.php'); ?>
                    <h2>Signup</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="username" pattern = "[A-Za-z]{2,}" title = "Invalid Name" value="<?php echo $username; ?>" required>
                        <label for="">Name</label>
                    </div> 
        
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title = "Enter Valid Email" value="<?php echo $email; ?>" required>
                        <label for="">E-mail</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" title="Must contain at least one  number and one uppercase and lowercase letter, and 8 to 15 characters" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="confirmPassword" required>
                        <label for="">Confirm Password</label>
                    </div>
                    
                    <button type="submit" class="btn" name="reg_user">Register</button>
                    <div class="register">
                        <p>Already Registered ? <a href="login.php">Login Now</a></p>
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