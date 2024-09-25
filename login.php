<?php
include 'temp/head.php';
session_start();
include 'temp/database.php';
include 'temp/nav.php';

?>

  <?php
if (!empty($_POST)) {

//if (!empty($_POST['password'])  and !empty($_POST['email'])){

    $password=$_POST['password'];
    $login=$_POST['login'];
    //$role=$_POST['role'];
    $_SESSION['password']=$password;
    
$sql="SELECT * FROM `user` WHERE `password`='$password' AND `login`='$login'";
$result=$mysqli->query($sql);
//var_dump($sql);
if($result->num_rows === 0) {
    $message = "Пользователь неверно ввел логин или пароль";
    echo $message;
    exit(); 
}

foreach($result as $row)
//if (!empty($user[0]))
{ 
  /*var_dump($row);
die();*/
    session_start();
 $_SESSION["id_user"]=$row["id_user"];

 $_SESSION["password"]=$row["password"]; 
 $_SESSION["login"]=$row["login"]; 
echo "Пользователь прошел авторизацию";



}


if (!empty($_SESSION)){

    if   ($_SESSION['password']=="dispetcher"){
     // var_dump($_SESSION);
       header ('location:.php'); 
    }
    
    elseif($_SESSION['password']=="manager"){
       header ('location:manager.php'); 
   }
  
   elseif($_SESSION['password']=="buhgalter"){
   header ('location:buhgalter.php');  
}
}

}


?>
  
  
      
     

<div class="container-fluid">
<h1 style="text-align:center">Авторизация</h1>
<h2 style="text-align:center"> <p>Войдите в свой аккаунт</p>



 

<br><br>
<form method="post" action="login.php">

<div class="form-element">
<label>Логин</label>
<input type="login" name="login" required />
</div> <br><br>
<div class="form-element">
<label>Пароль</label>
<input type="password" name="password" required />
</div> <br><br>
<div class="form-element">
<input type="submit" value="Войти">
</div>
</div>
<p>
<?php
        echo $message;
        ?>
        </p>

</form>
</div>
</div>
</main>  

</header>


</div>
        </div>
      </div>

      <?php
        echo $message;
        ?>
        </p>

</form>
</div>
</div>
</main>  



</header>



      <div class="container"style="width:500px; border:2px;" >




</div>
</div>
</div>




      <?php
include 'temp/footer.php';
?>
