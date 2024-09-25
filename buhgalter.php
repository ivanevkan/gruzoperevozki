<?php
include 'temp/head.php';
session_start();
include 'temp/database.php';
include 'temp/navbuhgalter.php';
?>

<?php
if (!empty($_POST)) {
  $id_request = $_POST['id_request'];
  $cargo_name = $_POST['cargo_name'];
  $request_delivery_date = $_POST['request_delivery_date'];
  $cargo_destination = $_POST['cargo_destination'];
  $adres_dostavki = $_POST['adres_dostavki'];
  $request_status = $_POST['request_status'];
  $driver_name = $_POST['driver_name'];
}

if (!empty($_SESSION)) {
  // Действия для авторизованных пользователей
}
?>

<main>
  <div class="container">
    <h1 class="text-center text-black my-4">Страница бухгалтера</h1>
    
    <h3 class="mb-4">Заказы</h3>
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th>Количество перевозок</th>
            <th>Название груза</th>
            <th>Дата отправления</th>
            <th>Адрес доставки</th>
            <th>Статус доставки</th>
            <th>Фамилия водителя</th>
            <th>Действия</th> <!-- Добавлен заголовок для действий -->
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM `request`, `driver` WHERE request.driver_id = driver.driver_id";
          $result = $mysqli->query($sql);

          if ($result && $result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            
            // Отладочный вывод
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            
            foreach ($data as $row) {
                echo '<tr>
                        <td>' . $row['id_request'] . '</td>
                        <td>' . $row['cargo_name'] . '</td>
                        <td>' . $row['request_delivery_date'] . '</td>
                        <td>' . $row['cargo_destination'] . '</td>
                        <td>' . $row['request_status'] . '</td>
                        <td>' . $row['driver_name'] . '</td>
                        <td>
                            <form action="edit_request.php" method="post">
                                <input type="hidden" name="id_zakaz" value="' . $row["id_request"] . '">
                                <button type="submit" class="btn btn-danger btn-sm">Изменить</button>
                            </form>
                        </td>
                    </tr>';
            }
          } else {
              echo '<tr><td colspan="7" class="text-center">Нет доступных заказов</td></tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include 'temp/footer.php'; ?>
