<?php
// Connect to the database
$host = 'localhost';
$username = 'alexzet_zetusers';
$password = 'ZetAdmin123+';
$db_name = 'alexzet_zetusers';

$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username from the cookie
$username = $_COOKIE['username'];

// Delete the user from the database
$query = "DELETE FROM usersss WHERE username = '$username'";
if ($conn->query($query) === TRUE) {
    // Delete the cookie
    setcookie("username", "", time() - 3600);
    header('Location: login.php');
    exit;
} else {
    echo "Error deleting account: " . $conn->error;
}

$conn->close();
?>