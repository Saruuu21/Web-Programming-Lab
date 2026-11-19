
<?php
$conn = new mysqli("localhost", "root", "", "db");

if ($conn->connect_error) {
    die("Connection failed");
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

echo "<h2>Product Details</h2>";

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Price</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Item Name'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
