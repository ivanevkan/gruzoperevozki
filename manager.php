<?php
include 'temp/head.php';
session_start();
include 'temp/database.php';
include 'temp/nav.php';
?>

<?php

if (!empty($_POST)){
  $name_tovar = $_GET('name_tovar');
  $price = $_GET('price');
  $date_zakaza = $_GET('date_zakaza');
  $col = $_GET('col');
  $adres_dostavki = $_GET('adres_dostavki');
  $status = $_GET('status');
 

}


 
if (!empty($_SESSION)){

}


?>
          
   

  <main>
 
  
    <h1 style="color:green; text-align:center;">Страница менеджера</h1>
    <?php
    include 'temp/database.php';
   echo"
  <h3>  Заказы<h3></div>"

    ?>
 <div class="form-element">

</div> 
<div class="container">
<div class="row">
<table class="table">
<tr>
<th>Наименование товара</th>
<th>Цена</th>
<th>Дата заказа</th>
<th>Количество</th>
<th>Адрес доставки </th>
<th>Статус заказа</th>
</tr>

      
<?php
$sql = $sql = "SELECT * FROM `zakaz`,`tovar`WHERE zakaz.id_tovar= tovar.id_tovar";
  
  $result =  $mysqli->query($sql);
  foreach( $result as $row){   

    echo  '<tr><td>' . $row['name_tovar'] . '</td><td>' . $row['price'] . '</td><td>' . $row['date_zakaza'] . '</td><td>' . $row['col'] . '</td><td>' . $row['adres_dostavki'] . '</td><td>' . $row['status'] .  '</td>;
    <td>'. '<form action = "change.php" method ="post">
    <input type="hidden" name = "id_zakaz" value = ' . $row["id_zakaz"] 
    . ' ><input type = "submit" value = "Изменить"></form></td></tr>';
  }
      ?>





</table>
</div>  
</div>

  

        
<h2>Отчет о выручке</h2>
<form action="otchet1.php">
 <input type="submit"value= "Сделать отчет"> </form>
<?php

$total_price=0;

$total_sum=0;

  foreach( $result as $row){   

  $total_price = $row['price']*$row['col'];
  $total_sum +=$total_price;
  $result = $total_sum;
}
echo "<h2>Общая сумма выручки</h2>" .  $total_sum;
 include 'temp/footer.php';  
 ?>


 