<?php 
include('server.php');
    if (!isset($_SESSION['email'])) {
    header('location: login.php');
    }
    if (!isset($_SESSION['username'])) {
    header('location: login.php');
    }
    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input[name="email"] ~ label,
        input[name="username"] ~ label{
        top: 20px;
        color: var(--primary-light);
    }
    </style>
</head>
<body>
    <section>
        <div class="signupform-box">
            <div class="form-value">
                <form name = "signup" action="contact.php" method="POST">
                    <?php include('errors.php'); ?>
                    <h2>Get in Touch</h2>
                    <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="username" value = "<?php echo $_SESSION['username']?>" readonly>
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" value = "<?php echo $_SESSION['email']?>" readonly>
                        <label for="">E-mail</label>
                    </div>
                    <div class="inputbox">
                    <ion-icon name="call-outline"></ion-icon>
                        <input type="tel" name="ph_number" pattern = '[0-9]{10}' title = 'Enter valid phone number' required>
                        <label for="">Enter Contact Number</label>
                    </div>
                    <div class="inputbox">
                    <ion-icon name="clipboard-outline"></ion-icon>
                        <input type="text" name="message" required>
                        <label for="">Feedback/Query </label>
                    </div>
                    
                    <button type="submit" class="btn" name="contact_user">Send</button>
                </form>
            </div>
        </div>
    </section>

    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>