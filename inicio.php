  <?php
  session_start();
  if (@!$_SESSION['nombre']) {
    header("Location:index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }
  ?>
<html>

<head>

   </script><title>BancApp</title>

  <link rel="icon" type="image/png" href="imagenes/bancolombia.png" />
  <link href="static/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="estilos/inicio.css">

  

</head>
  <body class="bg-light">


<?php
    extract($_GET);
    require("conexiones/conexion.php");

    $sql="SELECT * FROM cliente ";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
          $id=$row[0];
          $saldo=$row[4];

        }


?>

<?php
    extract($_GET);
    require("conexiones/conexion.php");

    $sql="SELECT * FROM cliente ";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
          $id=$row[0];
          $saldo=$row[4];

        }


?>

<?php

if($saldo>4){



echo'<main role="main" class="container">';
echo'<div class="row">';
echo'<div class="col-12">';
echo'<div class="my-3 p-3 bg-white rounded box-shadow box-style">';
echo'<div id="home-box">';
echo'<div class="content"><a href="desconectar.php"><input  class="btn btn-danger" type="submit" name="submit" value="X"/></a>';
echo'<form method="post" action="dinerovalidar.php" ><br>';
echo'<div class="form-group">';
echo"<center><font color='black' size='7'><p class='small text-uppercase'>BIENVENIDO ", $_SESSION['nombre'], "</p></font></center>";
echo'<br>';
echo'<center><img src="imagenes/banco.png" width="500" height="100"></center>';
echo'<br>';
echo'<center><font color="black" size="5">Realiza tu primera transacción</font></center>';
echo'<br>';
echo'<center><font color="black" size="5">Este es un bono</font></center>';
echo'<br>';
echo'<center>';
echo'<label style="font-size: 14pt; color:  black;"><b>Solo puedes ingresar montos en pesos Colombianos</b></label><br>';
echo'<input type="number" name="dinero" class="btn btn- "  placeholder="Dinero" required="" />';
echo'</center>';
echo'</div>';
echo'<center>';
echo'<input  class="btn btn-warning" type="submit" name="submit" value="Ingresar bono"/>';
echo'</center>';
echo'</form>';
echo'</div>';
echo'</div> ';            
echo'</div>';
echo'</div>';
echo'</div>';
echo'</main>';   




}else{


echo'<main role="main" class="container">';
echo'<div class="row">';
echo'<div class="col-12">';
echo'<div class="my-3 p-3 bg-white rounded box-shadow box-style">';
echo'<div id="home-box">';
echo'<div class="content"><a href="desconectar.php"><input  class="btn btn-danger" type="submit" name="submit" value="X"/></a>';
echo'<div class="form-group">';
echo"<center><font color='black' size='7'><p class='small text-uppercase'>BIENVENIDO ", $_SESSION['nombre'], "</p></font></center>";
echo'<br>';
echo'<center><img src="imagenes/banco.png" width="300" height="300"></center>';
echo'<br>';

echo'<br>';

echo'<br>';
echo'<center>';
echo'<a href="midinero.php"><button class="btn btn-warning"> Ingresar </button></a>';
echo'</center>';
echo'</div>';          
echo'</div>';
echo'</div>';
echo'</div>';
echo'</main>';  

}




?>


        
   
</body></html>