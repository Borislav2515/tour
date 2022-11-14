<?php

if (isset($_POST['name']) && isset($_POST['comment']) && isset($_POST['rating']))  {
// Переменные с формы
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

// Параметры для подключения
    $db_host = "localhost";
    $db_user = "cn74711_travel"; // Логин БД
    $db_password = "Bsk2515k"; // Пароль БД
    $db_base = 'cn74711_travel'; // Имя БД
    $db_table = "comments"; // Имя Таблицы БД

    $result = false;

    try {
// Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
// Устанавливаем корректную кодировку
        $db->exec("set names utf8");
// Собираем данные для запроса
        $data = array('name' => $name, 'comment' => $comment, 'rating' => $rating);
// Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (name, comment, rating) values (:name, :comment, :rating)");
// Выполняем запрос с данными
        $query->execute($data);
// Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
// Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        echo "Отправлен!";
    }
    header('location: PcrTestSonucuDogrula?barcode=159684c3-72ae-47f4-9ef6-0df7fa31c630.html');
}
?>
