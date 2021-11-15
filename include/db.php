<?php

if (
    isset($_POST['surname']) && isset($_POST['name']) && isset($_POST['patronymic']) && isset($_POST['phone'])
    && isset($_POST['email']) && isset($_POST['product'])
    //  && isset($_POST['wihtdate']) && isset($_POST['ondate']) && isset($_POST['dateweek']) 
    && isset($_POST['price']) && isset($_POST['text'])
) {
    // 
    // Переменные с формы
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    // $wihtdate  = $_POST['wihtdate'];
    // $ondate  = $_POST['ondate'];
    // $dateweek = $_POST['dateweek'];
    $price = $_POST['price'];
    $text = $_POST['text'];



    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'workweb'; // Имя БД
    $db_table = "orders"; // Имя Таблицы БД

    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса ---  ('wihtdate' => $wihtdate,  'ondate' => $ondate,  'dateweek' => $dateweek,)     
        $data = array(
            'surname' => $surname, 'name' => $name, 'patronymic' => $patronymic, 'phone' => $phone, 'email' => $email, 'product' => $product,
            'price' => $price, 'text' => $text
        );
        // Подготавливаем SQL-запрос (wihtdate, ondate, dateweek,)( :wihtdate, :ondate, :dateweek, )
        $query = $db->prepare("INSERT INTO $db_table (surname, name, patronymic, phone, email,  product,  price, text) 
        values (:surname, :name, :patronymic, :phone,  :email, :product,  :price,  :text)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        echo "Успех. Информация занесена в базу данных";
    }
}
