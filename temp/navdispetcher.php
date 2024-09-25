<?php
session_start(); 
include 'temp/database.php'; 


$user_name = !empty($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$user_id = !empty($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$role_id = !empty($_SESSION['role_id']) ? $_SESSION['role_id'] : '';


$sql = "SELECT user_name FROM `user` WHERE user_id = 1";
$result = $mysqli->query($sql);
$data = ($result && $result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : [];
?>

<header>
    <div class="container" style="width: 1200px; background-color: black;">
        <div class="row">
            <div class="col-lg-6">
                <div class="head-item logo">
                    <img src="img/car.png" class="img-fluid" style="width: 50px; height: 60px; padding-top: 15px; padding-right: 7px; padding-bottom: 9px;">
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                        <?php foreach ($data as $row): ?>
                            <span style="color: white; margin-right: 10px;"><?php echo htmlspecialchars($row['user_name']); ?></span>
                        <?php endforeach; ?>
                <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">ГЛАВНАЯ</a>
                <a class="nav-link" href="logout.php" style="color: white;">Выйти</a>
            </div>
        </div>
    </div>
</header>
