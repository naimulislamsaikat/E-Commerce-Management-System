<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    
    $sql = "DELETE FROM customer_table WHERE 'Customer_ID='$id'";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    header("Location:../View/employee.php");
    $conn->close();
}

?>