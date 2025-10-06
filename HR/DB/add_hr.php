<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $joining = $_POST['joining'];

    $sql = "INSERT INTO Employee_Table (Employee_Name, Employee_Number, Employee_Email, Employee_Password, Employee_Address, Employee_Joining_Date, Employee_Department) VALUES ('$name', '$number', '$email', '$password', '$address', '$joining', 'HR')";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    header("Location:../View/employee.php");
    $conn->close();
}
?>
