
    <div class=container4>
        <h1> Форма для регистрации!</h1>

    </div>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Имя</label>
            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
            <div class="valid-tooltip">
                Успешно!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Фамилия</label>
            <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
            <div class="valid-tooltip">
                Успешно!
            </div>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltipUsername" class="form-label">Почта</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" value="MarkOtto@mail.ru" required>
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@mail.ru</span>
                <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                </div>
            </div>
        </div>
        <!-- Место для ввода пароля -->

        <div class="col-md-3 position-relative">
            <label for="validationTooltip02" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="validationTooltipPassword" value="password" required>
            <span id="valid_confirm_password_message" class="valid-tooltip"></span>
            <div class="valid-tooltip">
                Успешно!
            </div>
        </div>
        <!-- Место для ряда с полем ' повторите пароль ' -->

        <div class="col-md-3 position-relative">
            <label for="validationTooltip02" class="form-label">Повторите пароль</label>
            <input type="password" class="form-control" id="validationTooltipRPassword" value="password" required>
            <span id="valid_confirm_password_message" class="valid-tooltip"></span>
            <div class="valid-tooltip">
                Успешно!
            </div>
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip04" class="form-label">Город</label>
            <select class="form-select" id="validationTooltip04" required>
                <option selected disabled value="">City...</option>
                <option>Москва</option>
                <option>Домодедово</option>
                <option>... </option>

            </select>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip05" class="form-label">Адрес</label>
            <input type="text" class="form-control" id="validationTooltip05" value="Введите пожалуйста адрес доставки!" required>
            <div class="invalid-tooltip">
                Введите пожалуйста адрес доставки!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Отправить!</button>
        </div>

    </form>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>