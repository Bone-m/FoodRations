<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <div class="bd-brand-item w-45 p-8">
            <div class="h2">Рационы Питания</div>
        </div>


        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">Главная страница </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="slimming.php">Похудение</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="healthpromotion.php">Укрепления здоровья</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="stock.php">Акции</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="reviews.php">Отзывы</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login.php">Личный кабинет</a>
                </li> -->

                <div id="auth_block">
                    <li class="nav-item">
                        <!--    /*В шапке сайта (файл header.php), с помощью сессии мы проверяем, авторизован ли уже пользователь.-->
                        <!--    Если нет, то выводим ссылки регистрации и авторизации, в противном случае (если он авторизован )-->
                        <!--    то вместо ссылок регистрации и авторизации выводим ссылку Выход. */-->
                        <?php
                        //Проверяем авторизован ли пользователь
                        if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
                            // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
                        ?>
                            <a class="link_register" aria-current="page" href="/form_register.php">Регистрация</a>
                    </li>
                    <li class="link_auth">
                        <a class="nav-link" aria-current="page" href="/form_auth.php">Авторизация</a>
                    </li>

                <?php
                        } else {
                            //Если пользователь авторизован, то выводим ссылку Выход
                ?>

                    <li class="nav-item">
                        <a class="link_logout" aria-current="page" href="/logout.php">Выход</a>
                    </li>
                <?php
                        }
                ?>
            </ul>
        </div>
    </div>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
</nav>
</div>