<?php
include 'temp/head.php';
include "temp/nav.php";
include 'temp/database.php';
?>

<br><br>
<main>
<div class="container-fluid">
    <h1 style="text-align:center">Грузоперевозки по всей стране</h1>
<div class="container">
    <marquee behavior="scroall" direction="right"style="font-size: 40px; font-weght:bolder; line-height: 150%; text-shadow: #00000 0px 1px;"><img src="img/gruzd1.png"></marquee>
</div>
</div>
</main><br>
    <h1 style="text-align:center">Оставить заявку на грузоперевозку</h1>
    <form action="submit_request.php" method="POST">
        <div class="form-element" style="text-align:center">
            <label for="client_name">Ваше имя:</label><br>
            <input type="text" id="client_name" name="client_name" required><br><br>

            <label for="client_contact">Телефон:</label><br>
            <input type="tel" id="client_contact" name="client_contact" required><br><br>

            <label for="cargo_name">Название груза:</label><br>
            <input type="text" id="cargo_name" name="cargo_name" required><br><br>

            <label for="cargo_departure">Место отправления:</label><br>
            <input type="text" id="cargo_departure" name="cargo_departure" required><br><br>

            <label for="cargo_destination">Место назначения:</label><br>
            <input type="text" id="cargo_destination" name="cargo_destination" required><br><br>

            <label for="request_delivery_date">Дата перевозки:</label><br>
            <input type="date" id="request_delivery_date" name="request_delivery_date" required><br><br>

            <label for="request_delivery_time">Время перевозки:</label><br>
            <input type="time" id="request_delivery_time" name="request_delivery_time" required><br><br>

            <label for="cargo_weight">Вес груза:</label><br>
            <input type="number" id="cargo_weight" name="cargo_weight" required><br><br>

            <label for="cargo_dimensions">Размеры груза:</label><br>
            <input type="text" id="cargo_dimensions" name="cargo_dimensions" placeholder="длина x ширина x высота" required><br><br>

            <label for="cargo_remains">Остатки груза:</label><br>
            <input type="number" id="cargo_remains" name="cargo_remains" required><br><br>

            <label for="cargo_delivered">Доставлено (1 - Да, 0 - Нет):</label><br>
            <select id="cargo_delivered" name="cargo_delivered">
                <option value="1">Да</option>
                <option value="0">Нет</option>
            </select><br><br>

            <label for="request_status">Статус заявки:</label><br>
            <select id="request_status" name="request_status">
                <option value="новая">Новая</option>
                <option value="в обработке">В обработке</option>
                <option value="завершена">Завершена</option>
            </select><br><br>

            <!-- <label for="cargo_type">Тип груза:</label><br>
            <select id="cargo_type" name="cargo_type" required>
                <option value="Выберите тип груза">Выберите тип груза</option>
                <option value="Общий груз">Общий груз</option>
                <option value="Жидкости">Жидкости</option>
                <option value="Хрупкий груз">Хрупкий груз</option>
                <option value="Тяжелый груз">Тяжелый груз</option>
                <option value="Опасный груз">Опасный груз</option>
                <option value="Охлажденный груз">Охлажденный груз</option>
            </select><br><br> -->

            <button type="submit">Отправить заявку</button>
        </div>
    </form>
</div>

<?php
include 'temp/footer.php';
?>
