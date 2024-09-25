<?php
include 'temp/head.php';
include "temp/nav.php";
include 'temp/database.php';
?>
<h1 style="text-align:center; color:black;">Наш автопарк</h1>     
      </div>
    </div>
  </div>
</div>


<main>
  
<div class="row row-cols-1 row-cols-md-4 g-3">
  <?php
  $sql = "select * from truck";
  $result =  $mysqli->query("select * from truck");
  //var_dump($result);
  foreach($result as $row)
  {
    echo '<div class="col">
    <div class="card">
      <img src="'.$row["img"].'" class="card-img-top" alt="..." style="width:220px; height:200px; margin-left:30px;">
    <div class="card-body">
      <h5 class="card-text">'.$row["truck_model"].'</h5>
      <p class="card-price">'.$row["truck_registration"].'</p>
    </div>
   <div class="card-footer">

      <form method="post" action="index.php?id_tovar='.$row['id_truck'].'">
      <button>Выбрать</button>
      </form>
   </div>
   </div>
   </div>';

  }
  ?>
 
</div>
</div>


<?php


      
include 'temp/footer.php';
?>