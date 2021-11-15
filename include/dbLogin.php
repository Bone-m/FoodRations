<?php
// $host = 'localhost'; // имя хоста
// $user = 'root'; // имя пользователя
// $pass = ''; // пароль
// $name = 'workweb'; // имя базы данных
// $db_table = "users"; // Имя Таблицы БД
// $link = mysqli_connect($host, $user, $pass, $name);
// mysqli_query($link, "SET NAMES 'utf8'");


// $query = 'SELECT * FROM users';
// $result = mysqli_query($link, $query) or die(mysqli_error($link));
// $row = mysqli_fetch_assoc($result);
// var_dump($row);
















if (
    isset($_POST['login']) && isset($_POST['password'])
) {
    // 
    // Переменные с формы
    $login = $_POST['login'];
    $password = $_POST['password'];




    // Параметры для подключения
    $db_host = 'localhost'; // имя хоста
    $db_user = 'root'; // имя пользователя
    $db_password = ''; // пароль
    $db_base = 'workweb'; // имя базы данных
    $db_table = "users"; // Имя Таблицы БД

    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса ---  ('wihtdate' => $wihtdate,  'ondate' => $ondate,  'dateweek' => $dateweek,)     
        $data = array(
            'login' => $login, 'password' => $password
        );
        // Подготавливаем SQL-запрос (wihtdate, ondate, dateweek,)( :wihtdate, :ondate, :dateweek, )
        $query = $db->prepare("INSERT INTO $db_table (login, password) 
        values (:login, :password)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        header("Location: http://workone:81/shoppingBasket.php/");

        // require('work.php');
        // echo "Успех. Информация занесена в базу данных";
    }
}
