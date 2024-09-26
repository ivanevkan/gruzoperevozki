<?php
    include 'temp/head.php';
    include "temp/nav.php";
    include 'temp/database.php';

    if (!empty($_POST['send'])) {
        $driver = $_POST['select_driver'];
        $truck = $_POST['select_truck'];
        $selected_req = $_POST['selected_req'];

        $sql2 = "UPDATE `request` SET `driver_id`=$driver,`truck_id`=$truck,`cargo_delivered`=0,`request_status`='Выполняется' WHERE `request_id`=$selected_req";
        $mysqli->query($sql2);
        var_dump($sql2);
        header("Location: select_request.php");
    }
?>

<main>
    <div class="container-sm">
        <h1 class="text-center mb-5 mt-5">
            <?php
                $selected_req = $_POST['request_accept'];
                echo '(Заказ #'.$selected_req.') - Выберите водителя и машину из списков'
            ?>
        </h1>
        <div class="row">
            <div class="col mb-9">

                <?php
                    $sql = "SELECT * FROM `driver` WHERE `driver_status` = 'Свободен'";
                    $driver_result=$mysqli->query($sql);

                    $sql1 = "SELECT * FROM `truck` WHERE `truck_status` = 'Свободен'";
                    $truck_result=$mysqli->query($sql1);
                ?>

                <form action="" method="post">
                    <?php
                        if (!empty($_POST['request_accept'])){

                        $selected_req = $_POST['request_accept'];
                        echo '<input type="number" value="'.$selected_req.'" name="selected_req" hidden="hidden">';
                        }
                    ?>
                    <div class="row">
                        <div class="col-auto">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg пример" required name="select_driver">
                                <option selected value="">Выберите водителя</option>
                                <?php
                                    foreach ($driver_result as $row) {
                                        echo '<option value="'.$row['driver_id'].'">'.$row['driver_id'].' - '.$row['driver_name'].'; '.$row['driver_status'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-auto">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg пример" required name="select_truck">
                                <option selected value="">Выберите машину</option>
                                <?php
                                    foreach ($truck_result as $row) {
                                        echo '<option value="'.$row['truck_id'].'">'.$row['truck_registration_number'].'; '.$row['truck_make'].' '.$row['truck_model'].'; Грузоподъёмность:'.$row['truck_load_capacity'].'; '.$row['truck_status'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" name="send" value="2" class="btn-lg btn-primary">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
</main>
<?php
    include "temp/footer.php";
?>