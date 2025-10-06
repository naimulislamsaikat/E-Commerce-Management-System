<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $joining = $_POST['joining'];

    $sql = "UPDATE Customer_Table SET Customer_Name='$name', Customer_Number='$number', Customer_Email='$email', Customer_Password='$password', Customer_Address='$address', Customer_Registration_Date='$joining' WHERE Customer_id='$id'";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    header("Location:../View/employee.php");
    $conn->close();
}
?>