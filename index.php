<?php
include 'temp/head.php';
include "temp/nav.php";
include 'temp/database.php';
?>

<div class="container">
<h1 style="text-align:center">Оставить заявку на грузоперевозку</h1>

<form class="row g-3" action="" method="post">

  <div class="col-md-4">
    <label for="name" class="form-label">Ваше имя:</label>
    <input type="text" class="form-control" id="name" required name="name">
  </div>

  <div class="col-md-4">
    <label for="phone" class="form-label">Телефон:</label>
    <input type="phone" class="form-control" id="phone" required name="phone">
  </div>

  <div class="col-4">
    <label for="email" class="form-label">Электронная почта:</label>
    <input type="email" class="form-control" id="email" required name="email">
  </div>

  <div class="col-12">
    <label for="name_g" class="form-label">Название груза:</label>
    <input type="text" class="form-control" id="name_g" required name="name_g">
  </div>

  <div class="col-md-6">
    <label for="otprav" class="form-label">Место отправления:</label>
    <input type="text" class="form-control" id="otprav" required placeholder="Брянск ул.Ленина 145" name="otprav">
  </div>

  <div class="col-md-6">
    <label for="naznach" class="form-label">Место назначения:</label>
    <input type="text" class="form-control" id="naznach" required placeholder="Брянск ул.Кирова 14" name="naznach">
  </div>

  <div class="col-md-12">
    <label for="inputState" class="form-label">Тара</label>
    <select id="inputState" required class="form-select">
      <option selected>Выберите...</option>
      <option>Коробка S до 2кг размеры(15 ширина, 25 длина, 10 высота)</option>
      <option>Коробка M до 5кг размеры(25 ширина, 35 длина, 15 высота)</option>
      <option>Коробка L до 12кг размеры(30 ширина, 45 длина, 20 высота)</option>
    </select>
  </div>

  <div class="col-md-3">
    <label for="data" class="form-label">Дата перевозки:</label>
    <input type="date" class="form-control" required id="data" name="data">
  </div>

  <div class="col-6"><br>
    <button type="submit" class="btn btn-primary">Отправить заявку</button>
  </div>
</form>

    </main>
    <?php
include 'temp/footer.php';
?>
