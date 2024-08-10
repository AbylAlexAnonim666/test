<?php
// Configuration
$db_host = 'localhost';
$db_username = 'alexzet_zetusers';
$db_password = 'ZetAdmin123+';
$db_name = 'alexzet_zetusers';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

// Query database
$query = "SELECT * FROM usersss";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  echo "<table border='1'>";
  echo "<tr><th>Username</th><th>Email</th><th>Password</th><th>Balance</th><th>Registration Date</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["username"]. "</td>";
    echo "<td>". $row["email"]. "</td>";
    echo "<td>". $row["password"]. "</td>";
    echo "<td>". $row["balance"]. "</td>";
    echo "<td>". $row["registration_date"]. "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No users found";
}

$conn->close();
?>