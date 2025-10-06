<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $leaves = $_POST['leaves'];

    $sql = "UPDATE Employee_Table SET Employee_Name='$name', Employee_Number='$number', Employee_Leaves='$leaves' WHERE Employee_Department='Accountant' AND Employee_id='$id'";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    header("Location:../View/leave_days.php");
    $conn->close();
}
?>