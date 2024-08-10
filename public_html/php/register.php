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
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$date = date('Y-m-d H:i:s');

// проверяем, заполнены ли все поля
if (empty($username) || empty($email) || empty($password)) {
  echo "Все поля должны быть заполнены";
  exit;
}

// проверяем, существует ли уже пользователь с таким именем или email
$query = "SELECT * FROM usersss WHERE username = '$username'";
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
$query = "INSERT INTO usersss (username, email, password, registration_date) VALUES ('$username', '$email', '$password', '$date')";
if ($conn->query($query) === TRUE) {
  echo "Account created";
  echo '<br><a href="login.html">Log in account</a>';

} else {
  echo "Error: ". $query. "<br>". $conn->error;
}

$conn->close();
?>