<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
 $name = htmlspecialchars(trim($_POST['name']));
 $phone = htmlspecialchars(trim($_POST['phone']));
 $email = htmlspecialchars(trim($_POST['email']));
 $cargo = htmlspecialchars(trim($_POST['cargo']));
 $pickup = htmlspecialchars(trim($_POST['pickup']));
 $destination = htmlspecialchars(trim($_POST['destination']));
 $date = htmlspecialchars(trim($_POST['date']));

    // Проверка заполненности полей
 if (!empty($name) && !empty($phone) && !empty($email) && !empty($cargo) && !empty($pickup) && !empty($destination) && !empty($date)) {
        // Например, здесь можно добавить отправку данных на email
 $to = "admin@transportcompany.com"; // Email администратора
 $subject = "Новая заявка на грузоперевозку";
 $message = "
 Имя: $name\n
 Телефон: $phone\n
 Email: $email\n
 Тип груза: $cargo\n
 Место отправления: $pickup\n
 Место назначения: $destination\n
 Дата перевозки: $date
 ";
 $headers = "From: $email";
 if (mail($to, $subject, $message, $headers)) {
 echo "Ваша заявка успешно отправлена!";
 } else {
 echo "Произошла ошибка при отправке заявки.";
 }
 } else {
 echo "Все поля формы должны быть заполнены!";
 }
} else {
echo "Неверный метод отправки данных!";
}
?>
