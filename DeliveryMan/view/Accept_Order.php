<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>oder</title>
    <link rel="stylesheet" href="../css/accept_oder.css">

</head>
<body>
    <div class="from">
        <from>
            <nav class="navbar">
                <div class="logo">DeliveryMan</div>
                <ul class="nav-links">
                    <li><a href="../view/Oder Status.html">Order Status</a></li>
                    <li><a href="../view/Accept_Order.html">Accept Order</a></li>
                    <li><a href="../view/Reject_Order.html">Reject Order</a></li>
                    <li><a href="../view/Pick.html">Pick Status</a></li>
                    <li><a href="../view/Delivery.html">Delivery Status</a></li>
                    <li><a href="../view/Payment.html">Payment Status</a></li>
                    <li><a href="../view/profile.html">Profile</a></li>
                    <li><a href="../view/Login.html">Logout</a></li>
                    <br>
                </ul>
            </nav>
            <h1>DELIVERY MAN</h1>
            <table id="A_oder">
                <tr>
                    <th>Product_ID</th>
                    <th>Product_Name</th>
                    <th>Product_Category</th>
                    <th>Product_Type</th>
                    <th>Product_Price</th>
                    <th>Product_Available</th>
                    <th>Product_Stocked</th>
                </tr>
            </table>
   
</div>
</from>
</body>
</html> -->

<nav class="navbar">
                <div class="logo">DeliveryMan</div>
                <ul class="nav-links">
                    <li><a href="../view/Oder_Status.php">Order Status</a></li>
                    <!-- <li><a href="../view/Accept_Order.html">Accept Order</a></li>
                    <li><a href="../view/Reject_Order.html">Reject Order</a></li>
                    <li><a href="../view/Pick.html">Pick Status</a></li>
                    <li><a href="../view/Delivery.html">Delivery Status</a></li>
                    <li><a href="../view/Payment.html">Payment Status</a></li> -->
                    <li><a href="../view/profile.html">Profile</a></li>
                    <!-- <li><a href="../view/Login.html">Logout</a></li> -->
                    <br>
                    </ul>
            </nav>
<!DOCTYPE html>
<html>
<head>
    <title>Accept Orders</title>
    <script src="../js/accept.js"></script>
</head>
<body>
    <h2>Pending Orders</h2>
    <div id="orders"></div>

    <script>
        // Fetch orders via PHP
        fetch('../db/Accept_order.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(order => {
                orderview(
                    order.Order_ID,
                    order.Order_Status,
                    order.Order_Price,
                    order.Order_Location,
                    order.Order_City,
                    order.Order_Type,
                    order.Order_Product_Category,
                    order.Customer_ID,
                    order.Order_Date
                );
            });
        });
    </script>
</body>
</html>
