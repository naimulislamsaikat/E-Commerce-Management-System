<?php
include 'start.php';

$sql = "SELECT Product_ID, Product_Name, Product_Category, Product_Type, Product_Price, Product_Available, Product_Stocked FROM product_table";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<script>
            var tbl = document.getElementById('order');
          </script>";

    while($row = $result->fetch_assoc()) {
        echo "<script>
                var row = document.createElement('tr');
                row.innerHTML = `
                    <td>{$row['Product_ID']}</td>
                    <td>{$row['Product_Name']}</td>
                    <td>{$row['Product_Category']}</td>
                    <td>{$row['Product_Type']}</td>
                    <td>{$row['Product_Price']}</td>
                    <td>{$row['Product_Available']}</td>
                    <td>{$row['Product_Stocked']}</td>
                `;
                tbl.appendChild(row);
              </script>";
    }
} else {
    echo "0 results";
}

?>
