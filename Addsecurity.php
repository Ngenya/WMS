<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $warehouse = $_POST["warehouse"];
    $code = $_POST["code"];

    // Prepare a SQL statement using a prepared statement
    $sql = "INSERT INTO `security` (`Name`, `Warehouse`, `Code`) VALUES (?, ?, ?)";
    
    // Prepare the statement
    $stmt = $con->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sss", $name, $warehouse, $code);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Added Successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }

    // Close the statement
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Managment System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<!--Navigation-->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="#"></ion-icon>
                        </span>
                        <span class="title">WMS</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">WareHouses</span>
                    </a>
                </li>

                <li>
                    <a href="Finances.html">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Finances</span>
                    </a>
                </li>

                <li>
                    <a href="Security.html">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Security</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

           <!-- ========================= Main ==================== -->
           <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/pngwing.com.png" alt="">
                </div>
            </div>
    <!--Addition form-->
    <div class="details">
        <div class="recentOrders">
            <div class="booking-form">
            <div class="cardHeader">
                <h2>Security</h2>
            </div>
            <form action="Addsecurity.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="warehouse">Warehouse:</label>
    <input type="text" name="warehouse" id="warehouse" required>

    <label for="code">Code:</label>
    <input type="text" name="code" id="code" required>

    <button type="submit">Submit</button>
</form>

        </div>
         <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== icons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>