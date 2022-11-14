<?php

include "mail.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['price']) && isset($_POST['count']) && isset($_POST['tour']))  {
// Переменные с формы
    $tour = $_POST['tour'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $count = $_POST['count'];

// Параметры для подключения
    $db_host = "localhost";
    $db_user = "cn74711_travel"; // Логин БД
    $db_password = "Bsk2515k"; // Пароль БД
    $db_base = 'cn74711_travel'; // Имя БД
    $db_table = "users"; // Имя Таблицы БД

    $result = false;

    try {
// Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
// Устанавливаем корректную кодировку
        $db->exec("set names utf8");
// Собираем данные для запроса
        $data = array('name' => $name, 'email' => $email, 'phone' => $phone, 'date' => $date, 'price' => $price, 'count' => $count, 'tour' => $tour);
// Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (name, email, phone, date, price, count, tour) values (:name, :email, :phone, :date, :price, :count, :tour)");
// Выполняем запрос с данными
        $query->execute($data);
// Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
// Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        header("mail.php");
        exit();
    }

}
?>

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Заявка принята</title>-->
<!--    <style>-->
<!--        * {-->
<!--            padding: 0;-->
<!--            margin: 0;-->
<!--            box-sizing: border-box;-->
<!--        }-->
<!--        .container {-->
<!--            display: flex;-->
<!--            justify-content: center;-->
<!--            align-items: center;-->
<!--            width: 100%;-->
<!--            height: 100vh;-->
<!--            background-color: white;-->
<!--        }-->
<!--        .wrapper {-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            align-items: center;-->
<!--            justify-content: space-around;-->
<!--            width: 340px;-->
<!--            height: 500px;-->
<!--            background-color: #2e2e2e;-->
<!--            padding: 30px;-->
<!--            border-radius: 12px;-->
<!--            box-shadow: 10px 10px 21px 2px rgba(0,0,0,0.75);-->
<!--            -webkit-box-shadow: 10px 10px 21px 2px rgba(0,0,0,0.75);-->
<!--            -moz-box-shadow: 10px 10px 21px 2px rgba(0,0,0,0.75);-->
<!--        }-->
<!--        .page {-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            align-items: center;-->
<!--        }-->
<!---->
<!--        .title {-->
<!--            font-size: 36px;-->
<!--            color: white;-->
<!--            margin-bottom: 20px;-->
<!--        }-->
<!--        .subtitle {-->
<!--            font-size: 28px;-->
<!--            color: white;-->
<!--            text-align: center;-->
<!--        }-->
<!---->
<!--        .send-ok__img {-->
<!--            object-fit: contain;-->
<!--            width: 100%;-->
<!--            margin-bottom: 0;-->
<!--            margin-top: auto;-->
<!--        }-->
<!---->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="wrapper">-->
<!--        <div class="page">-->
<!--            <h1 class="title">Заявка принята!</h1>-->
<!--            <p class="subtitle">Мы с Вами свяжемся в ближайшее время!</p>-->
<!--        </div>-->
<!--        <div class="send-ok">-->
<!--            <img src="../img/accept.png" alt="Заявка принята" class="send-ok__img">-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
