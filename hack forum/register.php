<?php
// Подключение к базе данных
require_once 'db.php';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$date = date('Y-m-d H:i:s');

// проверяем, заполнены ли все поля
if (empty($username) || empty($password)) {
  echo "Все поля должны быть заполнены";
  exit;
}

// проверяем, существует ли уже пользователь с таким именем или email
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "Пользователь с таким логином";
    exit;
}

// Check if passwords match
if ($password!= $confirm_password) {
  echo "Passwords do not match";
  exit;
}

// Insert into database
$query = "INSERT INTO users (username, password, registration_date) VALUES ('$username', '$password', '$date')";
if ($conn->query($query) === TRUE) {
  echo "Account created";
  echo '<br><a href="/log-in.html">Log in account</a>';

} else {
  echo "Error: ". $query. "<br>". $conn->error;
}

$conn->close();
?>