<!-- //carts -->
<div class="modal fade" id="cart">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оформление заказа</h5>
                <!-- //Close - error -->
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="buy" method="post">
                    <div class="form-group">
                        <label for="surname">Ваша фамилия</label>
                        <input type="name" name="surname" class="form-control" id="surname" placeholder="Ваша фамилия" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
                    </div>
                    <div class="form-group">
                        <label for="patronymic">Ваше отчество</label>
                        <input type="name" name="patronymic" class="form-control" id="patronymic" placeholder="Ваше отчество" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Ваш номер телефона</label>
                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Ваш номер телефона" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Ваш Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ваш Email" required>
                    </div>

                    <div class="form-group">
                        <label for="product">Выбранный рацион питания </label>
                        <input type="text" name="product" class="form-control" id="product" readonly>
                    </div>

                    <!-- <div class="form-group">
                            <label for="date"> Выберие период доставки</label>
                            <input type="date" name="wihtdate" class="form-control" id="date(DATE_RFC822)">
                            <input type="date" name="ondate" class="form-control" id="date(DATE_RFC822)">
                        </div> -->
                    <!-- дни недели питания (с пн по вскр, можно выбрать любое сочетание дней) -->
                    <!-- <div class="form-group">
                            <label for="date"> Выберие дни недели питания</label>
                            <input type="date" name="dateweek" class="form-control" id="date(DATE_RFC822)">
                        </div> -->
                    <!-- комментарий -->
                    <div class="form-group">
                        <label for="text"> Введите комментарий</label>
                        <input type="text" name="text" class="form-control" id="Введите комментарий!">
                    </div>
                    <div class="form-group">
                        <label for="price">Цена выбранного товара </label>
                        <input type="price" name="price" class="form-control" id="price" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Заказать</button>
                </form>
            </div>
        </div>
    </div>
</div>