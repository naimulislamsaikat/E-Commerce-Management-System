<?php
include 'config.php';

$sql = "SELECT Employee_ID, Employee_Name, Employee_Number, Employee_Training FROM Employee_TABLE WHERE Employee_Department='Accountant'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
            var tbl = document.getElementById('acc');
          </script>";

    while($row = $result->fetch_assoc()) {
        echo "<script>
                var row = document.createElement('tr');
                row.innerHTML = `
                <td>{$row['Employee_ID']}</td>
                    <td>{$row['Employee_Name']}</td>
                    <td>{$row['Employee_Number']}</td>
                    <td>{$row['Employee_Training']}</td>
                `;
                tbl.appendChild(row);
              </script>";
    }
} else {
    echo "0 results";
}
?>
