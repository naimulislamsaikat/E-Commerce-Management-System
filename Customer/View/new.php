<?php
if (isset($_COOKIE["id"])) {
    // echo $_COOKIE["id"];
    $id = $_COOKIE["id"];
    include '../PHP/config.php';

    $sql = "SELECT * FROM customer_table WHERE Customer_ID = '$id' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            echo "<script>
    document.getElementById('name').value = '" . $rows['Customer_Name'] . "';
    document.getElementById('email').value = '" . $rows['Customer_Email'] . "';
    document.getElementById('id').value = '" . $rows['Customer_ID'] . "';
    document.getElementById('phn-no').value = '" . $rows['Customer_Number'] . "';
    document.getElementById('address').value = '" . $rows['Customer_Address'] . "';
</script>";
        }
        // header("Location:show.php");
    }

}
?>