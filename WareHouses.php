<?php
session_start();
include('db.php');
if (isset($_GET['Name'])){
   $name=$_GET['Name'];
    $delete=mysqli_query($con,"DELETE FROM `warehouses` WHERE `Name`='$name'");

}
$query="SELECT * FROM warehouses";
$result= mysqli_query($con,$query);
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
    <style>
        table {
          width: 100%;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
        }
        th {
          background-color: #f2f2f2;
        }
        .button-container {
    position: fixed;
    bottom: 10px; 
    right: 20px;
        }

.button {
   
    padding: 10px 20px;
    background-color: #007bff; /*background color */
    color: white; /*text color */
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.btn{
    background: #808080;
    color: darkred;
    font-size: 1.2em;
    padding: 5px 30px;
    text-decoration: none;
    }
.btn:hover{
    background: darkred;
    color:#808080;

}
</style>
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
                    <a href="Dashboard.php">
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
            <!--Table-->
            <div class="details">
               <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>WareHouses</h2>
                    </div>
                        <table class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Code</th>
                                    <th>State</th>
                                    <th>Security</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['Name'];?></td>
                                    <td><?php echo $row['location'];?></td>
                                    <td><?php echo $row['Code'];?></td> 
                                    <td><?php echo $row['State'];?></td>
                                    <td><?php echo $row['Security'];?></td>
                                    <td>
                                    <a href='WareHouses.php?Name=<?php echo $row['Name']; ?>' class="btn">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                    }                            
                                ?>
                            </tbody>  
                        </table>
                    <div class="button-container">
                   
            <button class="button" onclick="location.href='Addwarehouse.php'">Add Warehouse</button>
            

        </div>
        </div>
            </div>
        </div>
         <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== icons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>