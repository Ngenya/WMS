<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $location = $_POST["Location"];
    $code = $_POST["code"];
    // Check if the state is set, if not, assign an empty string
    $state = isset($_POST["State"]) ? $_POST["State"] : "";   
    $security = $_POST["security"];

    // Prepare a SQL statement using a prepared statement
    $sql = "INSERT INTO `warehouses` (`Name`, `location`, `Code`, `Security`, `State`) VALUES (?, ?, ?, ?, ?)";
    
    // Prepare the statement
    $stmt = $con->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssss", $name, $location, $code, $security, $state);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Added Successfully";
    } else {
        echo "Error: " . $stmt->error; // Output the specific error message
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
    <title>Warehouse Management System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
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
                    <a href="Dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="WareHouses.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">WareHouses</span>
                    </a>
                </li>

                <li>
                    <a href="Finances.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Finances</span>
                    </a>
                </li>

                <li>
                    <a href="Security.php">
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
    <div class="details">
        <div class="recentOrders">
            <div class="booking-form">
            <div class="cardHeader">
                <h2>Warehouses</h2>
            </div>
            <form action="Addwarehouse.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="Location">Location:</label>
    <input type="text" name="Location" id="Location" required>

    <label for="code">Code:</label>
    <input type="text" name="code" id="code" required>

    <label for="security">Security:</label>
    <input type="text" name="security" id="security" required>

    <label for="status">State:</label>
    <input type="text" name="State" id="state" required>
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
