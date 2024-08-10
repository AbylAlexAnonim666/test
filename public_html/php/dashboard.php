<?php
if (!isset($_COOKIE['username'])) {
  header('Location: login.php');
  exit;
}

$username = $_COOKIE['username'];
// Rest of the dashboard code here

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
$query = "SELECT registration_date FROM usersss WHERE username = '". $_COOKIE['username']."'";
$query = "SELECT balance FROM usersss WHERE username = '". $_COOKIE['username']. "'";
$result = $conn->query($query);
$user = $result->fetch_assoc();

// Получаем дату регистрации из результата запроса
$date = mysqli_fetch_assoc($result)['registration_date'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="zetwallet, zet, wallet, crypto, binance, зетваллет, ptndfkktn, яуецфддуе, tegwallet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet</title>
    <link rel="stylesheet" href="/css/lk.css">
    <link rel="stylesheet" href="/css/lk1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="menu">
            <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
            <label for="burger-checkbox" class="burger"></label>
            <ul class="menu-list">
                <br>
                <form action="/summa.html" method="post">
                <li><button type="submit" style="color: #000;" class="menu-item">
                Пополнить кошелек</button></li></form>
                <li><a style="color: #000;" class="menu-item" href="/repl.html">
                Вывести средства</a></li>
                <li><a style="color: #000;" class="menu-item" href="https://t.me/zetwallet_support">
                Поддержка</a><li>
                <li><a class="menu-item" href="logout.php" style="color: #505050;">Выйти с аккаунта</a></li>
                    <br><br>
                <li class="menu-item">
                    <p style="color: #000;">Наши соц сети:</p>
                </li>
                <li><a class="menu-item" href="https://t.me/zetwallet_com">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px;" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/></svg></a><li>
            </ul>
        </div>
        <a href="#cabinet">Личный кабинет ></a>
        <a href="#settings">Настройки ></a>
        <a style="color: #6e32c2">Баланс: $<span id="balance"><?php echo $user['balance']; ?></span></a>
    </div>
    <div class="container max-w-7xl pt-5 pb-12 mb-12">
        <div class="gradient-line">
        </div>
        <div class="row">
            <div class="col">
                    <style>
                        .draw-path {
                            --length: 100;
                            stroke-dasharray: var(--length) var(--length);
                            stroke-dashoffset: var(--path-from);
                            filter: blur(10px);
                            fill: none;
                            animation: draw 1.5s infinite ease-in-out;
                        }

                        header {
                            z-index: 999999999999999999;
                        }
    
                        .u-path {
                            --path-from: calc(var(--length) * 3px);
                            --path-to: var(--length);
                        }
    
                        .seven-path {
                            --path-from: calc(var(--length) * -3px);
                            --path-to: calc(var(--length) * -1px);
                            animation-delay: 0.4s;
                        }
    
                        @keyframes draw {
                            from {
                                stroke-dashoffset: var(--path-from);
                            }
    
                            to {
                                stroke-dashoffset: var(--path-to);
                                opacity: 0;
                            }
                        }
                    </style>
                    <defs>
                        <linearGradient id="seven-gradient" gradientUnits="userSpaceOnUse" x1="23.5345" y1="27.9014" x2="121.9345" y2="27.9014" gradientTransform="matrix(1 0 0 -1 0 55.8028)">
                            <stop offset="0" style="stop-color: #f0ebab" />
                            <stop offset="0.4" style="stop-color: #f3b4ce" />
                            <stop offset="1" style="stop-color: #96cfca" />
                        </linearGradient>
                        <clipPath id="clip-seven">
                            <path d="M102.2345,2.9014v9.8h9.6v23.6l-65.3-33.3l-0.3-0.1h-22.7l32.4,16.3l66,33.7v-50H102.2345z" />
                        </clipPath>
                        <clipPath id="clip-u">
                            <path d="M52.3345,38.5014c0,2.2091-1.7909,4-4,4h-31.6c-2.2091,0-4-1.7909-4-4v-35.6h-9.8v35.6c0,7.7,6.2,13.9,13.8,13.9h31.6c7.6,0,13.8-6.2,13.8-13.9v-8.1l-9.8-5V38.5014z" />
                        </clipPath>
                    </defs>
    
                    <g fill="rgba(255,255,255,0.08)">
                        <path d="M102.2345,2.9014v9.8h9.6v23.6l-65.3-33.3l-0.3-0.1h-22.7l32.4,16.3l66,33.7v-50H102.2345z" />
                        <path d="M52.3345,38.5014c0,2.2091-1.7909,4-4,4h-31.6c-2.2091,0-4-1.7909-4-4v-35.6h-9.8v35.6c0,7.7,6.2,13.9,13.8,13.9h31.6c7.6,0,13.8-6.2,13.8-13.9v-8.1l-9.8-5V38.5014z" />
                    </g>
    
                    <path clip-path="url(#clip-seven)" class="draw-path seven-path" stroke="url(#seven-gradient)" stroke-width="11" stroke-miterlimit="10" d="M102.0318,7.8102h14.9001v36.7666L25.5799-1.9312" pathLength="100" />
                    <path clip-path="url(#clip-u)" class="draw-path u-path" stroke="#fff" stroke-width="11" stroke-miterlimit="10" d="M7.8842,2.7939l0.0451,35.4694c0,5.0171,3.8335,9.0363,8.8506,9.0363h31.1442c5.0171,0,9.0843-4.0672,9.0843-9.0843V24.9046" pathLength="100" />
                    <path clip-path="url(#clip-seven)" class="draw-path seven-path" stroke="url(#seven-gradient)" stroke-width="11" stroke-miterlimit="10" d="M102.0318,7.8102h14.9001v36.7666L25.5799-1.9312" pathLength="100" />
                    <path clip-path="url(#clip-u)" class="draw-path u-path" stroke="#fff" stroke-width="11" stroke-miterlimit="10" d="M7.8842,2.7939l0.0451,35.4694c0,5.0171,3.8335,9.0363,8.8506,9.0363h31.1442c5.0171,0,9.0843-4.0672,9.0843-9.0843V24.9046" pathLength="100" />
                    <path clip-path="url(#clip-seven)" class="draw-path seven-path" stroke="url(#seven-gradient)" stroke-width="11" stroke-miterlimit="10" d="M102.0318,7.8102h14.9001v36.7666L25.5799-1.9312" pathLength="100" />
                    <path clip-path="url(#clip-u)" class="draw-path u-path" stroke="#fff" stroke-width="11" stroke-miterlimit="10" d="M7.8842,2.7939l0.0451,35.4694c0,5.0171,3.8335,9.0363,8.8506,9.0363h31.1442c5.0171,0,9.0843-4.0672,9.0843-9.0843V24.9046" pathLength="100" />
                </h1>
            </div>
        </div>
      
        <div class="row g-4 mt-3" id="settings">
            <div class="col-lg-4">
                <div class="gradient-border-card"> 
                    <h2 class="gradient-text-animation">Настройки</h2>
                    <p class="mt-3">Ваш логин: <?php echo $_COOKIE['username']; ?></p>
                    <button type="button" onclick="deleteAccount()">Удалить аккаунт</button>
                    <br><br>
                    <a href="update_login.php"><button type="button">Изменить логин</button></a>
                    <script>
                    function deleteAccount() {
                        if (confirm("Вы уверены, что хотите удалить свой аккаунт?")) {
                            window.location.href = "delacc.php";
                        }
                    }
                    </script>
                    <div class="shimmer" style="--delay: -6s"></div>
                    <i aria-hidden="true"></i>
            <br> 
        </div>
    </div>
</div>

<div class="row g-4 mt-3" id="cabinet">
    <div class="col-lg-4">
        <div class="gradient-border-card"> 
            <h2 class="gradient-text-animation">Личный кабинет</h2>
            <p class="mt-3">Ваш баланс: $<span id="balance"><?php echo $user['balance']; ?></span></p>
            <div class="shimmer" style="--delay: -6s"></div>
            <i aria-hidden="true"></i>
            <br>
        </div>
    </div>
</div>

<div class="row g-4 mt-3">
    <div class="col-lg-4">
        <div class="gradient-border-card"> 
            <h2 class="gradient-text-animation">Заработок</h2>
            <p class="mt-3">Ежедневная награда: 2,47%</p>
            <p class="mt-3">Время получения награды: 2:00</p>
            <div class="shimmer" style="--delay: -6s"></div>
            <i aria-hidden="true"></i>
            <br>
        </div>
    </div>
</div>
    <script src="/js/index.js"></script>
</body>
</html>

<?php
$conn->close();
?>