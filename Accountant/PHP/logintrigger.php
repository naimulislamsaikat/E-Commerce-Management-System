<?php 
    include 'ServerStart.php';
    session_start();
    $id = 15;
    setcookie('id', $id, time() + (86400 * 30), "/");

    $sql = "SELECT * FROM Employee_Table WHERE Employee_Id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['name'] = $row['Employee_Name'];
            $_SESSION['email'] = $row['Employee_Email'];
            $_SESSION['phone'] = $row['Employee_Number'];
            $_SESSION['department'] = $row['Employee_Department'];
            $_SESSION['joiningdate'] = $row['Employee_Joining_Date'];
        }
    } else {
        echo "0 results";
    }

?>