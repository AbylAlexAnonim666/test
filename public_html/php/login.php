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

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query database
$query = "SELECT * FROM usersss WHERE username='$username'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  $user_data = $result->fetch_assoc();
  if ($password == $user_data['password']) {
    // Login successful, set cookie
    setcookie('username', $username, time() + 3600); // expires in 1 hour
    header('Location: dashboard.php');
    exit;
  } else {
    echo "Invalid password";
  }
} else {
  echo "Username not found";
}

$conn->close();
?>