<?php
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
?>
