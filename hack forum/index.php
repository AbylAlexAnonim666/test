<?php
if (!isset($_COOKIE['username'])) {
  header('Location: login.php');
  exit;
}

$username = $_COOKIE['username'];
// Rest of the dashboard code here

// Подключение к базе данных
require_once 'db.php';

// Создание объекта подключения
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// получаем баланс пользователя
$query = "SELECT * FROM users WHERE username = '". $_COOKIE['username']."'";
$result = $conn->query($query);
$user = $result->fetch_assoc();

// Получаем дату регистрации из результата запроса
$date = mysqli_fetch_assoc($result)['registration_date'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhiteeStore</title>
    <link rel="stylesheet" href="/index.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home.html">Home</a></li>
                <li><a href="/apple.html">Apple</a></li>
                <li><a href="">AirPods</a></li>
                <li><a href="/log-in.html">Login</a></li>
            </ul>
        </nav>
    </header>
        <p>whiteestore soon</p>
    <footer>
        <p>&copy; 2024 whiteestore</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>