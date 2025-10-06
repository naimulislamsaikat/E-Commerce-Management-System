<?php
include 'config.php';

$sql = "SELECT Employee_ID, Employee_Name, Employee_Number, Employee_Email, Employee_Password, Employee_Address, Employee_Joining_Date FROM Employee_TABLE WHERE Employee_Department='HR'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
            var tbl = document.getElementById('hr');
          </script>";

    while($row = $result->fetch_assoc()) {
        echo "<script>
                var row = document.createElement('tr');
                row.innerHTML = `
                <td>{$row['Employee_ID']}</td>
                    <td>{$row['Employee_Name']}</td>
                    <td>{$row['Employee_Number']}</td>
                    <td>{$row['Employee_Email']}</td>
                    <td>{$row['Employee_Password']}</td>
                    <td>{$row['Employee_Address']}</td>
                    <td>{$row['Employee_Joining_Date']}</td>
                `;
                tbl.appendChild(row);
              </script>";
    }
} else {
    echo "0 results";
}
?>
