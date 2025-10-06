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

    $sql = "UPDATE Employee_Table SET Employee_Name='$name', Employee_Number='$number', Employee_Email='$email', Employee_Password='$password', Employee_Address='$address', Employee_Joining_Date='$joining' WHERE Employee_Department='Accountant' AND Employee_id='$id'";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    header("Location:../View/employee.php");
    $conn->close();
}
?>