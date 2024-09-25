<?php
include 'temp/database.php'; // подключение к базе данных

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($mysqli === null) {
        die("Ошибка: соединение с базой данных не установлено.");
    }

    // Получаем данные из формы
    $client_name = $_POST['client_name'];
    $client_contact = $_POST['client_contact'];
    $cargo_name = $_POST['cargo_name'];
    $cargo_departure = $_POST['cargo_departure'];
    $cargo_destination = $_POST['cargo_destination'];
    $request_delivery_date = $_POST['date']; // Убедитесь, что имя поля соответствует вашему HTML
    $request_delivery_time = $_POST['request_delivery_time']; // Добавьте это поле в форму
    $cargo_weight = $_POST['cargo_weight']; // Добавьте это поле в форму
    $cargo_dimensions = $_POST['cargo_dimensions']; // Добавьте это поле в форму
    $cargo_remains = $_POST['cargo_remains']; // Добавьте это поле в форму
    $cargo_delivered = $_POST['cargo_delivered']; // Добавьте это поле в форму
    $request_status = $_POST['request_status']; // Добавьте это поле в форму

    // Подготовка SQL-запроса
    $sql = "INSERT INTO request (client_name, client_contact, cargo_name, cargo_departure, cargo_destination, request_delivery_date, request_delivery_time, cargo_weight, cargo_dimensions, cargo_remains, cargo_delivered, request_status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $mysqli->prepare($sql)) {
        // Привязываем параметры
        $stmt->bind_param("ssssssssssss", 
            $client_name, 
            $client_contact, 
            $cargo_name, 
            $cargo_departure, 
            $cargo_destination, 
            $request_delivery_date, 
            $request_delivery_time, 
            $cargo_weight, 
            $cargo_dimensions, 
            $cargo_remains, 
            $cargo_delivered, 
            $request_status
        );

        // Выполняем запрос
        if ($stmt->execute()) {
            echo "Заявка успешно отправлена!";
        } else {
            echo "Ошибка: " . $stmt->error;
        }

        // Закрываем подготовленный запрос
        $stmt->close();
    } else {
        echo "Ошибка: " . $mysqli->error;
    }

    // Закрываем соединение
    $mysqli->close();
}
?>
