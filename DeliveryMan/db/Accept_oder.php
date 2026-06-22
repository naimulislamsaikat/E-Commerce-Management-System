<?php
include 'start.php';

$sql = "SELECT Order_ID, Order_Price, Order_Location, Order_City, Order_Type, Order_Product_Category, Order_Status, Customer_ID, Order_Date FROM Customer_Order_Table";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<script>
            orderview(
                '".$row['Order_ID']."',
                '".$row['Order_Status']."',
                '".$row['Order_Price']."',
                '".$row['Order_Location']."',
                '".$row['Order_City']."',
                '".$row['Order_Type']."',
                '".$row['Order_Product_Category']."',
                '".$row['Customer_ID']."',
                '".$row['Order_Date']."'
            );
        </script>";
    }
} else {
    echo "<p>No orders found.</p>";
}
?>
