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
    if (isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])) {
        echo $_SESSION["error_messages"];

        //Уничтожаем чтобы не появилось заново при обновлении страницы
        unset($_SESSION["error_messages"]);
    }

    if (isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])) {
        echo $_SESSION["success_messages"];

        //Уничтожаем чтобы не появилось заново при обновлении страницы
        unset($_SESSION["success_messages"]);
    }
    ?>
</div>
<?php
//Проверяем, если пользователь не авторизован, то выводим форму авторизации,
//иначе выводим сообщение о том, что он уже авторизован
if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
?>
    <div class=container11>
        <p style="font-size:50px; color:white;" h1>
            Форма для регистрации!
        </p>
    </div>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-3 position-relative">
            <form class="row g-1">
                <div class="col-auto8">
                    <label for="validationTooltipUsername" class="form-label" color:white>Почта</label>
                    <input type="email" name="email" class="form-control" id="staticEmail2" value="email@example.com" required="required">
                    <span id="valid_email_message" class="mesage_error"></span>

                </div>
                <div class="col-auto8">
                    <label for="validationTooltip02" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required="required">
                    <span id="valid_password_message" class="mesage_error"></span>

                    <br>
                    <br>
                    <br>
                </div>

                <div class="col-auto8">
                    <label for="validationTooltip02" class="form-label">Проверочный капчи</label>

                    <?php
                    $captcha->build(185, 30);
                    $_SESSION['captcha'] = $captcha->getPhrase();
                    ?>
                    <img src="<?= $captcha->inline() ?>" alt="Изображение капчи">
                    <br>
                    <br>
                    <input type="text" name="captcha" class="form-control" id="inputPassword1" placeholder="Проверочный код" required="required">
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Войти</button>
                </div>

            </form>
        <?php
    } else {
        ?>

            <div id="authorized">
                <h2>Вы уже авторизованы</h2>
            </div>

        <?php
    }
        ?>
        <?php
        //Подключение подвала
        require_once("footer.php");
        ?>