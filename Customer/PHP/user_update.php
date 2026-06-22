<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    // $name = $_POST['name'];
    $number = $_POST['number'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    $address = $_POST['address'];
    // $joining = $_POST['joining'];

    $sql = "UPDATE customer_table SET  Customer_Number='$number', Customer_Address='$address'  WHERE Customer_ID='$id'";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    header("Location:../View/show.php");
    $conn->close();
}
?>