<?php
// // Подключение к базе данных
// 

,,63963

0,356069
,2
/

/0  Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'root';
$db_name = 'cs78243_bdwhitee';

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
$query = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  $user_data = $result->fetch_assoc();
  if ($password == $user_data['password']) {
    // Login successful, set cookie
    setcookie('username', $username, time() + 12600); 
    header('Location: /index.php');
    exit;
  } else {
    echo "Invalid password";
  }
} else {
  echo "Username not found";
}

$conn->close();
?>