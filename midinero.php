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
  <link rel="stylesheet" href="estilos/miDinero.css">

</head>
  <body class="bg-light">
    <main role="main" class="container">
      <div class="row">
        <div class="col-12">
            <div class="my-3 p-3 bg-white rounded box-shadow box-style">
                <div id="home-box">
                    <div class="content"><a href="desconectar.php"><input  class="btn btn-danger" type="submit" name="submit" value="X"/></a>
                      <br>
                      <br>

<?php
require("conexiones/bancoconexion.php");
$sql=("SELECT * FROM cliente");
$query=mysqli_query($mysqli,$sql);
echo " <table class='table table-striped table-sm table-responsive-sm'>";
echo "<thead class='thead-dark'>";

echo "<tr>";
echo "<th>No. de Cuenta</td>";
echo "<th>Saldo de Cuenta</td>";
echo "<th>Retirar</td>";

echo "</tr>";
  echo "</tr>";
?>
			  
<?php 
while($arreglo=mysqli_fetch_array($query)){

echo "<tbody class='table-warning text-dark'>";
echo "<td>$arreglo[1]</td>";
echo "<td>$arreglo[4]</td>";
echo "<td><a href='sacardinero.php?id=$arreglo[0]'>sacar dinero</td>";


}


?>

<?php
    extract($_GET);
    require("conexiones/bancoconexion.php");

    $sql="SELECT * FROM cliente ";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
          $id=$row[0];
          $saldo=$row[4];

        }
?>

<?php


if($saldo<0)
{
echo "<center><font color='D10404' size='5'>Usted debe dinero, debe pagar lo que debe o su cuenta se cancelara en las proximas 24 horas</center>";

}
else
{

echo "<center><font color='068408' size='5'>La cuenta esta muy bien</font></center>";

}


?>








<br>
<br>


                    </div>
                </div>           
            </div>
        </div>
      </div>
    </main>   
   
</body></html>