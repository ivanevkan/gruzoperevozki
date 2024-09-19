<?php
session_start();

if(!empty($_SESSION['id_user'])){
    if($_SESSION['role']=="manager"){
        include "temp/nav.php";
    }
    elseif($_SESSION['role'] == "buhgalter"){

        include "temp/buhgalter.php";
    }
}
else {

    include "temp/nav.php";
    
}
?>
<header>

    <div class="container"style="width: 1200px;background-color:black;">
        <div class="row">
         <div class="col-lg-6">
            <div class="head-item logo">
              <img src="img/car.png" class="img-fluid"style="width: 50px;height: 60px;padding-top: 15px; padding-right: 7px; padding-bottom:9px;">
           
             
</div>
</div>
<div class="col-lg-6" style="display:flex; flex-direction:row; ">
        

        
        <a class="nav-link active" aria-current="page" href="index.php"style="color:white">ГЛАВНАЯ</a>
      </li>
    

        <a class="nav-link" href ="login.php"style="color:white">Войти</a>
      </li>
      
      </div>   
</div>
</div>     
      
     </header>
  
        </nav>

    <main>


<header>
        <h1>Грузоперевозки по всей стране</h1>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="logout.php">Выйти</a></li>
            </ul>
        </nav>
    </header>

    <main>