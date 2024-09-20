<?php
include 'temp/head.php';
include "temp/nav.php";
include 'temp/database.php';
?>

<main>
    <div class="container-sm">
        <h1 class="text-center mb-5 mt-5">Выберите заказ (отсортировано по дате)</h1>
        <div class="row">
            
            <div class="col mb-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Клиент</th>
                            <th scope="col">Контакты клиента</th>
                            <th scope="col">Груз</th>
                            <th scope="col">Пункт отправления</th>
                            <th scope="col">Пункт назначения</th>
                            <th scope="col">Длина пути</th>
                            <th scope="col">Заявка оставлена</th>
                            <th scope="col">Вес груза</th>
                            <th scope="col">Объём груза</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `request` WHERE `request_status` = 'Отправлен' ORDER BY `request`.`request_delivery_date` ASC";
                            $result=$mysqli->query($sql);
                            foreach ($result as $row) {
                                echo'
                                    <tr>
                                        <th scope="row">'.$row['request_id'].'</th>
                                        <td>'.$row['client_name'].'</td>
                                        <td>'.$row['client_contact'].'</td>
                                        <td>'.$row['cargo_name'].'</td>
                                        <td>'.$row['cargo_departure'].'</td>
                                        <td>'.$row['cargo_destination'].'</td>
                                        <td>'.$row['request_path_distance'].'</td>
                                        <td>'.$row['request_delivery_date'].'</td>
                                        <td>'.$row['cargo_weight'].'</td>
                                        <td>'.$row['cargo_dimensions'].'</td>

                                        <td>
                                            <form action="" method="POST">
                                                <button class="btn btn-secondary" type="submit" value="'.$row['request_id'].'" name="request_accept">Рассмотреть заявку</button>
                                            </form>
                                        </td>

                                        <td>
                                            <form action="" method="POST">
                                                <button class="btn btn-danger" type="submit" value="'.$row['request_id'].'" name="request_decline">Удалить заявку</button>
                                            </form>
                                        </td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>
</main>
<?php
include "temp/footer.php";
?>