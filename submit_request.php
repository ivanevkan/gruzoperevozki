<?php
<<<<<<< Updated upstream
    include 'temp/database.php';
    if(!empty($_POST)){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $name_g = $_POST["name_g"];
        $otprav = $_POST["otprav"];
        $naznach = $_POST["naznach"];
        $data = $_POST["data"];
        $rast = mt_rand(15, 250);
        $box = explode(".", $_POST["box"]);
        $razmer = $box[0];
        $size = 'x: '.$box[1].' y: '.$box[2].' z: '.$box[3];
        $sql = "INSERT INTO `request`(`client_name`, `client_contact`, `cargo_name`, `cargo_departure`, `cargo_destination`, `request_path_distance`, `request_delivery_date`, `cargo_weight`, `cargo_dimensions`, `request_status`) VALUES ('$name','$email','$name_g','$otprav','$naznach','$rast','$data','$razmer','$size','создана')";
        $res = $mysqli->query($sql);
        if($res =! null){
            var_dump($sql);
            echo "Спасибо за то, что воспользовались нашей компанией. Совсем скоро к вам приедет машина, чтобы отправить вашу посылку";
        }
        else{
            echo "Упс, какая-то неполадка";

        }
    }
=======
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $cargo = htmlspecialchars(trim($_POST['cargo']));
    $pickup = htmlspecialchars(trim($_POST['pickup']));
    $destination = htmlspecialchars(trim($_POST['destination']));
    $date = htmlspecialchars(trim($_POST['date']));

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($cargo) && !empty($pickup) && !empty($destination) && !empty($date)) {
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
        }
        else {
            echo "Произошла ошибка при отправке заявки.";
        }
    }
    else {
        echo "Все поля формы должны быть заполнены!";
    }
}
else {
    echo "Неверный метод отправки данных!";
}
>>>>>>> Stashed changes
?>
