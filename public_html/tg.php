<?php

$chat_name = "@bdpopolnenie";
$token = "7236894765:AAHq6AT85t3rhkBzMZ8qz-qxO53kXI-fn_A";

// подключаемся к базе данных
$host = 'localhost';
$username = 'alexzet_zetusers';
$password = 'ZetAdmin123+';
$db_name = 'alexzet_zetusers';

$conn = new mysqli($host, $username, $password, $db_name);

// проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// получаем баланс пользователя
$query = "SELECT * FROM usersss";
$result = $conn->query($query);
$user = $result->fetch_assoc();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["total"];
    $text = urlencode($message);
    $username = $_POST["username"];
    $uj = '$';
    $balance = $user["balance"];
    $url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_name}&text=сумма перевода: {$text}{$uj}, login: {$username}";

    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);

    echo "Ваш платеж будет обработан если все прошло успешно то деньги будут зачислены";
}

?>
