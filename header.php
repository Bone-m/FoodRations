<?php
//Запускаем сессию
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Название нашего сайта</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Web application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include_once 'navbar.php' ?>

</head>



<script type="text/javascript">
    $(document).ready(function() {
        "use strict";
        //================ Проверка email ==================

        //регулярное выражение для проверки email
        var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
        var mail = $('input[name=email]');

        mail.blur(function() {
            if (mail.val() != '') {

                // Проверяем, если введенный email соответствует регулярному выражению
                if (mail.val().search(pattern) == 0) {
                    // Убираем сообщение об ошибке
                    $('#valid_email_message').text('');

                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                } else {
                    //Выводим сообщение об ошибке
                    $('#valid_email_message').text('Не правильный Email');

                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);
                }
            } else {
                $('#valid_email_message').text('Введите Ваш email');
            }
        });

        //================ Проверка длины пароля ==================
        var password = $('input[name=password]');

        password.blur(function() {
            if (password.val() != '') {

                //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                if (password.val().length < 6) {
                    //Выводим сообщение об ошибке
                    $('#valid_password_message').text('Минимальная длина пароля 6 символов');

                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);

                } else {
                    // Убираем сообщение об ошибке
                    $('#valid_password_message').text('');

                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }
            } else {
                $('#valid_password_message').text('Введите пароль');
            }
        });
    });
</script>



<body bgcolor="black" background="img/11.jpg" bgproperties="fixed">

    <div id="header">
        <div class="clear"></div>
    </div>
    <!--    /*В шапке сайта (файл header.php), с помощью сессии мы проверяем, авторизован ли уже пользователь.-->
    <!--    Если нет, то выводим ссылки регистрации и авторизации, в противном случае (если он авторизован )-->
    <!--    то вместо ссылок регистрации и авторизации выводим ссылку Выход. */-->