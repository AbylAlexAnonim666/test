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
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $new_username = $_POST['new_login'];

  // Check if username exists
  $query = "SELECT * FROM usersss WHERE username = '$username'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    // Update balance
    $query = "UPDATE usersss SET username = '$new_username' WHERE username = '$username'";
    if ($conn->query($query) === TRUE) {
      echo "Login updated successfully";
    } else {
      echo "Error: " . $query . "<br>" . $conn->error;
    }
  } else {
    echo "Username not found";
  }
}

if (!isset($_COOKIE['username'])) {
    header('Location: loginadmin.php');
    exit;
}

// Close connection
$conn->close();
?>

<!-- Admin panel form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="new_login">New Login:</label>
        <input type="text" id="new_login" name="new_login"><br><br>
        <input type="submit" value="Update Login">
</form>