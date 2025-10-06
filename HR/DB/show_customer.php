<?php
include 'config.php';

$sql = "SELECT Customer_ID, Customer_Name, Customer_Number, Customer_Email, Customer_Password, Customer_Address, Customer_Registration_Date FROM Customer_TABLE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
            var tbl = document.getElementById('customer');
          </script>";

    while($row = $result->fetch_assoc()) {
        echo "<script>
                var row = document.createElement('tr');
                row.innerHTML = `
                <td>{$row['Customer_ID']}</td>
                    <td>{$row['Customer_Name']}</td>
                    <td>{$row['Customer_Number']}</td>
                    <td>{$row['Customer_Email']}</td>
                    <td>{$row['Customer_Password']}</td>
                    <td>{$row['Customer_Address']}</td>
                    <td>{$row['Customer_Registration_Date']}</td>
                `;
                tbl.appendChild(row);
              </script>";
    }
} else {
    echo "0 results";
}
?>
