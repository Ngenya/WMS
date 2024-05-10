<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Management System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/Styles.css">
</head>

<body>
    <section>
        <form method="post">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" name="Name" required>
                <label for="Name">Name</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="Password" required>
                <label for="Password">Password</label>
            </div>
            <div class="forget">
                <label for="remember"><input type="checkbox" id="remember" name="remember">Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            <button type="submit" name="Login">Login</button>
            <div class="register">
                <p>Don't have an account?<a href="Newuser.php">register</a></p>
            </div>
        </form>
        <?php
        include('db.php');
        if(isset($_POST['Login'])) {
            $Name = mysqli_real_escape_string($con, $_POST['Name']);
            $Password = mysqli_real_escape_string($con, $_POST['Password']);
            
            if(empty($Name) || empty($Password)) {
                echo '<script>alert("Please enter both username and password.");</script>';
            } else {
                $stmt = mysqli_prepare($con, "SELECT Password FROM `admin` WHERE Name = ?");
                mysqli_stmt_bind_param($stmt, 's', $Name);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $hashedPassword);
                mysqli_stmt_fetch($stmt);
                
                if(password_verify($Password, $hashedPassword)) {
                    $_SESSION['admin'] = 'admin';
                    echo '<script> window.location="Dashboard.php";</script>';
                } else {
                    echo '<script>alert("Incorrect username or password.");</script>';
                }
            }
        }
        ?>
    </section>
</body>
</html>
