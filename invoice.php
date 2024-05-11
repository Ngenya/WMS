<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Managment System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/styles2.css">
    <style>
        table {
  margin-top: 2rem;
  width: 100%;
}
tr,
td,
th,
table {
  border: 1px solid var(--decoration-color);
  border-collapse: collapse;
}
th {
  text-align: center;
  background-color: var(--grey);
  font-family: var(--primary-font);
  color: var(--decoration-color);
}
      </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="WareHouses.html">
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
                        <span class="title">Invoice</span>
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

            
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>INVOICE</h2>
                        
                    </div>
                    <div class="container2">
                        <header>
                          <p class="logo">WMS</p>
                          <p class="logohead">WMS INVOICE</p>
                        </header>
                  
                        <div class="info">
                          <div class="iContent">
                            <p class="invH">INVOICE TO</p>
                            <p id="invName">demo</p>
                            <p id="invAddress">12345</p>
                          </div>
                          <div class="iContent1">
                            <div class="invDate">
                              <p class="date">DATE:</p>
                              <p id="invDate">23</p>
                            </div>
                            <div class="invDate">
                              <p class="date">INVOICE:</p>
                              <p id="invNumber"></p>
                            </div>
                          </div>
                        </div>
                        <table>
                          <tr>
                            <th>Warehouse Name</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Total</th>
                          </tr>
                          <tr>
                            <td>Kenya</td>
                            <td>100</td>
                            <td>2</td>
                            <td>200</td>
                          </tr>
                          <tr>
                            <td>Kenya</td>
                            <td>100</td>
                            <td>2</td>
                            <td>200</td>
                          </tr>
                          <tr>
                            <td>Kenya</td>
                            <td>100</td>
                            <td>2</td>
                            <td>200</td>
                          </tr>
                          <tr>
                            <td>Kenya</td>
                            <td>100</td>
                            <td>2</td>
                            <td>200</td>
                          </tr>
                        </table>
                        <footer>
                          <div class="left"></div>
                          <div class="right">
                            <p class="subTotal">SubTotal</p>
                            <p class="total" id="subTotal">Ksh.1000</p>
                          </div>
                  
                          <div class="right">
                            <p class="subTotal">Grand Total</p>
                            <p class="total" id="grandTotal">Ksh.200</p>
                          </div>
                        </footer>
                      </div>
                </div>
                </div>
                </div>

                <!-- ================= New Customers ================ -->
               

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>