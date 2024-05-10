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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/Styles.css">
</head>

<body>
    <section>
        <?php
        if (isset($_POST["Login"])) {
            $Name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $ConfirmPassword = $_POST["confirm_password"]; // Changed to match HTML input name
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            
            $errors = array();
            
            if (empty($Name) || empty($email) || empty($password) || empty($ConfirmPassword)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) <5) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $ConfirmPassword) {
                array_push($errors, "Password does not match");
            }
            require_once "db.php";
            $sql = "SELECT * FROM admin WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
            $row_count = mysqli_num_rows($result); // Initialize $row_count here
            if ($row_count > 0) {
                array_push($errors, "Email already exists!");
            }
            if (count($errors) > 0) {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $sql = "INSERT INTO admin (name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($con);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $Name, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong");
                }
            }
            if($row_count == 1) {
                $_SESSION['admin'] = 'admin';
                echo '<script> window.location="Dashboard.php";</script>';
            } 
        }
        ?>
        <form method="post">
            <h1>Sign Up</h1>
            <div class="inputbox">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" name="name" required>
                <label for="name">Name</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="confirm_password" required>
                <label for="confirm_password">Confirm Password</label>
            </div>

            <button type="submit" name="Login">Sign Up</button>
            <div class="register">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </form>
    </section>
</body>

</html>
