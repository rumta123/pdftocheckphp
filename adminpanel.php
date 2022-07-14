<?php
include('db.php');

 session_start() ;
 if (! $_SESSION['admin'])

header('Location: adminavt.php');

$query1 = mysqli_query($link, "SELECT * FROM clientes");

// $myrow = mysqli_fetch_array($query1);
  $query2 = mysqli_query($link, "SELECT * FROM customers");

// $myrow2 = mysqli_fetch_array($query2);



?>
<!DOCTYPE html>
<html>
<head>
<title>Админка</title>
<meta charset="utf-8">
</head>
<body>

<div>

<style>
    .opis{
        display: grid;
    grid-template-columns: 0.2fr 1fr 1fr 1fr 1fr 1fr;
    padding: 5px
    }
</style>
    <div><a href="#client">Clientes</a>
    <a href="#susdatos">Sus datos</a>
  </div>
    
     <div id ="client">   <h1><b> Clientes </b></h1> </div>

        <div class="opis">
        <div><b>id</b></div>
        <div><b>Nombre</b></div>
   <div><b>Teléfono</b></div>
   <div><b>*E-mail</b></div>
   <div><b>Fecha</b></div>
</div>
<hr>
   
  <?php

  
  while($row=mysqli_fetch_array($query1, MYSQLI_ASSOC))
  {
    // echo "<form action ='#''<div class='opis'><div>".$row['id']."</div> <div>".$row['Nombre']."</div> <div>".$row['E-mail']."</div> <div>". $row['Telefono']."</div> <div>". $row['Fecha']."</div> <div> <input type='submit' value='удалить'></div>  </div></form>";
    echo "<form action ='#''<div class='opis'><div>".$row['id']."</div> <div>".$row['Nombre']."</div> <div>".$row['E-mail']."</div> <div>". $row['Telefono']."</div> <div>". $row['Fecha']."</div>   </div></form>";
  }
  ?>
  <?php


  $name1 = mysqli_real_escape_string($link, $_POST["fnombre"]);
	$calendar1 =mysqli_real_escape_string($link, $_POST["calendar"]);
	$email1 = mysqli_real_escape_string($link, $_POST["femail"]);
	$tel1 = mysqli_real_escape_string($link, $_POST["ftel"]);
	
	$name2 = mysqli_real_escape_string($link, $_POST["cnombre"]);

	$email2 = mysqli_real_escape_string($link, $_POST["cemail"]);
	$tel2 = mysqli_real_escape_string($link, $_POST["ctel"]);


  $query4 = "DELETE FROM clientes WHERE email = $email2";
  $query5 = "DELETE FROM clientes WHERE email = $email1";
  ?>

<div>
        <h1>   Sus datos </h1>
</div>
<div class="opis" id="susdatos">
<div><b>id</b></div>
   <div><b>Nombre</b></div>
   <div><b>Teléfono</b></div>
   <div><b>*E-mail</b></div>
   <div><b>Fecha</b></div>
</div>
<hr>
   <?php

  
while($row=mysqli_fetch_array($query2, MYSQLI_ASSOC))
{
// echo "<form action ='#'><div class='opis'><div>".$row['id']."</div> <div>".$row['Nombre']."</div> <div>".$row['E-mail']."</div> <div>". $row['Telefono']."</div> <div>". $row['Fecha']."</div> <div> <input type='submit' value='удалить'></div>  </div></form>";
echo "<form action ='#'><div class='opis'><div>".$row['id']."</div> <div>".$row['Nombre']."</div> <div>".$row['E-mail']."</div> <div>". $row['Telefono']."</div> <div>". $row['Fecha']."</div>  </div></form>";
}
?>


</body>
</html>