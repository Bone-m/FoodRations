<?php
//Подключение шапки
require_once __DIR__ . '/vendor/autoload.php';
session_start();
$phraseBuilder = new \Gregwar\Captcha\PhraseBuilder(5, '0123456789');
$captcha = new \Gregwar\Captcha\CaptchaBuilder(null, $phraseBuilder);
$captcha->setBackgroundColor(255, 255, 255);
require_once("header.php");

?>
<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
    //Если в сессии существуют сообщения об ошибках, то выводим их
    if (isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])) {
        echo $_SESSION["error_messages"];

        //Уничтожаем чтобы не выводились заново при обновлении страницы
        unset($_SESSION["error_messages"]);
    }

    //Если в сессии существуют радостные сообщения, то выводим их
    if (isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])) {
        echo $_SESSION["success_messages"];

        //Уничтожаем чтобы не выводились заново при обновлении страницы
        unset($_SESSION["success_messages"]);
    }
    ?>
</div>

<?php
//Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
//иначе выводим сообщение о том, что он уже зарегистрирован
if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
?>
    <div id="form_registero">
        <div class="col-md-0 position-relative">
            <h2>Форма регистрации</h2>
        </div>

        <form action="register.php" method="post" name="form_register">
            <div class="col-md-3 position-relative">
                <table>
                    <tbody>
                        <tr>
                            <td> Имя: </td>
                            <td>
                                <input type="text" name="first_name" class="form-control" id="first_name" required="required" placeholder="Имя">
                            </td>
                        </tr>

                        <tr>
                            <td> Фамилия:</td>
                            <td>
                                <input type="text" name="last_name" id="last_name" class="form-control" required="required" placeholder="Фамилия">
                            </td>
                        </tr>

                        <tr>
                            <td> Email: </td>
                            <td>
                                <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Email"><br>
                                <span id="valid_email_message" class="mesage_error"></span>
                            </td>
                        </tr>

                        <tr>
                            <td> Пароль: </td>
                            <td>

                                <input type="password" id="password" name="password" class="form-control" placeholder="минимум 6 символов" required="required"><br>
                                <span id="valid_password_message" class="mesage_error"></span>
                            </td>
                        </tr>
                        <tr><br>
                            <td> Введите капчу: </td><br>
                            <td>
                                <p>
                                    <?php
                                    $captcha->build(150, 40);
                                    $_SESSION['captcha'] = $captcha->getPhrase();
                                    ?>
                                    <img src="<?= $captcha->inline() ?>" alt=""><br><br>
                                    <input name="code" type="text" class="form-control" placeholder="Проверочный код" required="required">

                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="btn_submit_register" value="Зарегистрироватся!">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

<?php
} else {
?>
    <div id="authorized">
        <h2>Вы уже зарегистрированы</h2>
    </div>
<?php
}

//Подключение подвала
require_once("footer.php");
