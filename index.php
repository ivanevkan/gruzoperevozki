<?php
include 'temp/head.php';
include "temp/nav.php";

include 'temp/database.php';

?>

<br><br>
<div class="container-fluid">
<h1 style="text-align:center">Оставить заявку на грузоперевозку</h1>



        <form action="submit_request.php" method="POST">
        <div class="form-element"style="text-align:center">
            <label for="name">Ваше имя:</label><br>
            <input type="text" id="client_name" name="client_name" required><br><br>

            <label for="phone">Телефон:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="email">Электронная почта:</label><br>
            <input type="email" id="client_contact" name="client_contact" required><br><br>

            <label for="name">Название груза:</label><br>
            <input type="text" id="cargo_name" name="cargo_name" required><br><br>

            <label for="cargo">Тип груза:</label><br>
            

            <SELECT name="Tech">
<OPTION value="Выберите тип груза">Выберите тип груза </OPTION>
<OPTION value="Общий груз ">Общий груз</OPTION>
<OPTION value="Жидкости"> Жидкости</OPTION>
<OPTION value="Хрупкий груз">Хрупкий груз</OPTION>
<OPTION value="Тяжелый груз ">Тяжелый груз</OPTION>
<OPTION value="Опасный груз">Опасный груз </OPTION>
<OPTION value="Охлажденный груз">Охлажденный груз</OPTION>
</SELECT>
            <br><br>

            <label for="pickup">Место отправления:</label><br>
            <input type="text" id="cargo_departure" name="cargo_departure" required><br><br>

            <label for="destination">Место назначения:</label><br>
            <input type="text" id="cargo_destination" name="destination" required><br><br>

            <label for="date">Дата перевозки:</label><br>
            <input type="date" id="date" name="date" required><br><br>

            <button type="submit">Отправить заявку</button>
        </form>
    </main>
    <?php
include 'temp/footer.php';
?>
