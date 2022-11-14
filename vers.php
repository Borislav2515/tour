<?php
$db_host = "localhost";
$db_user = "cn74711_travel"; // Логин БД
$db_password = "Bsk2515k"; // Пароль БД
$db_base = 'cn74711_travel'; // Имя БД
$db_table = "comments"; // Имя Таблицы БД
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base);
if ($link == false) {
    echo "Соединение не удалось";
}
$result = mysqli_query($link, "SELECT * FROM `comments`");
$users = mysqli_fetch_assoc($result);;
//while ($row = $result->fetch_assoc()) {
//    echo '
//        <li>' . $row["name"] . '</li>
//    ';
//}


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bd.css">
    <title>Инфо</title>
</head>
<body>
<header class="header" id="header">
    <div class="header__desctop">
        <div class="header__menu" id="menu-desctop">
            <div class="header__container container">
                <div class="brand">
                    <a href="index.html" class="header__logo">
                        <span class="header-logo__name">Tsallagti <strong>Tour</strong></span>
                    </a>
                </div>

                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item"><a href="index.html" class="heder__link">Главная</a></li>
                        <li class="header__item"><a href="etno.html" class="heder__link">Этно-Тур</a></li>
                        <li class="header__item"><a href="clients.php" class="heder__link">Юзеры</a></li>
                        <li class="header__item"><a href="test.html" class="heder__link">Тур номер</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div id="menuToggle">
            <input type="checkbox" id="check-menu-mobile">
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li><a href="index.html">Главная</a></li>
                <li><a href="etno.html">Этно-Тур</a></li>
                <li><a href="active.html">Актив-Тур</a></li>
                <li><a href="test.html">Тур номер 3</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="main">
    <section>
        <div class="container">
            <?php
            $filter = $_POST['filter'];
            echo $filter;
            while ($row = $result->fetch_assoc()) {
                echo '
                        <ul class="users__list">
                            <li class="users__item">
                                <span>Ид</span>
                                <span>' . $row["id"] . '</span>
                            </li>
                             <li class="users__item">
                                <span>Имя</span>
                                <span>' . $row["name"] . '</span>
                            </li>
                            <li class="users__item">
                                <span>Рейтинг</span>
                                <span>' . $row["rating"] . '</span>
                            </li>
                             <li class="users__item">
                                <span>Комментарий</span>
                                <span>' . $row["comment"] . '</span>
                            </li>
                         </ul>
        ';
            }
            ?>
        </div>
    </section>

</main>
<script src="js/accordion.js"></script>
<script src="test.js"></script>
</body>
</html>
