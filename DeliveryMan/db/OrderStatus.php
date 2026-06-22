<?php
include "start.php";

if (isset($_GET['orderID']) && isset($_GET['status'])) {
    $orderID = $_GET['orderID'];
    $status = $_GET['status'];

    $sql = "UPDATE customer_order_table SET Order_Status = '$status' WHERE Order_ID = '$orderID'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../view/Oder_Status.php"); // redirect back
        exit();
    } else {
        echo "Error updating order: " . $conn->error;
    }
} else {
    echo "Invalid request";
}
?>
