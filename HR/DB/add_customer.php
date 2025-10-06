<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $joining = $_POST['joining'];

    $sql = "INSERT INTO customer_table (Customer_Name, Customer_Number, Customer_Email, Customer_Password, Customer_Address, Customer_Registration_Date) VALUES ('$name', '$number', '$email', '$password', '$address', '$joining')";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    header("Location:../View/employee.php");
    $conn->close();
}
?>
