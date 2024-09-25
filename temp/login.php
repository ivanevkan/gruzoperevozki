<?php
include 'temp/head.php';
include 'temp/database.php';
$message = '';
if(!empty($_POST['login']) and !empty($_POST['password'])){
$login = $_POST['login'];
$password = $_POST['password'];
$sql = "select * from users where login = '$login' and password = '$password'";
$result = $mysqli->query($sql);
$user = mysqli_fetch_assoc(result: $result);
if(!empty($user)){
 session_start();
 $_SESSION['id_user'] = $user['id_user'];
 $_SESSION['login'] = $user['login'];
 $_SESSION['role'] = $user['role'];
 head(head:"Location: index.php");
 exit;
}
else{
    $message ='Неверный логин или пароль';
}

}
?>
<div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center">Авторизация</h1>
                </div>
              </div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <from class="from" action="login.php" method="POST">
            <label for="login" class="from-label" name="login" id="login"><b>Логин<span style="color: black;">*</span></b></label>
            <input type="text" class="form-control"