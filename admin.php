<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}
?>
<html>

<head>

   </script><title>BancApp</title>

  <link rel="icon" type="image/png" href="imagenes/bancolombia.png" />
  <link href="static/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="estilos/admin.css">

</head>
<body class="bg-light">
<main role="main" class="container">
<div class="row">
<div class="col-12">
<div class="my-3 p-3 bg-white rounded box-shadow box-style">
<div id="home-box">
<div class="content">


<center>

      <?php

        require("conexiones/bancoconexion.php");
        $sql=("SELECT * FROM cliente");
  
        $query=mysqli_query($mysqli,$sql);

        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead class='thead-dark'>";
                      echo "<tr>";

            echo "<th>Numero de cuenta</th>";
            echo "<th>Fecha de apertura</th>";
            echo "<th>nombre</th>";
            echo "<th>Saldo</th>";
            echo "<th>Estado de la cuenta</th>";
            echo "<th>Cedual Ciudadania</th>";
            echo "<th>telefono</th>";
            echo "<th>correo</th>";
            echo "<th>rol</th>";
            echo "<th>Editar</th>";
            echo "<th>Borrar</th>";
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody class='table-warning text-dark'>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[8]</td>";
              echo "<td>$arreglo[9]</td>";
              echo "<td>$arreglo[10]</td>";


echo "<td><a href='actualizarcuenta.php?id=$arreglo[0]'><img src='imagenes/modificar.png' width='60' class='img-rounded'></td>";
echo "<td><a href='banvirtualadmin.php?id=$arreglo[0]&idborrar=2'><img src='imagenes/tarjetaborrar.png' width='60' class='img-rounded'/></a></td>";
            
          echo "</tr>";
        }

        echo "</table>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM cuentas WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("BancApp A ELIMINADO A ESTE USUARIO")</script> ';
            echo "<script>location.href='banvirtualadmin.php'</script>";
          }

      ?>
    </center>


</div>
</div>
</div>
</div>
</div>
</main>

<br>
<br>
<br>



<main role="main" class="container">
<div class="row">
<div class="col-12">
<div class="my-3 p-3 bg-white rounded box-shadow box-style">
<div id="home-box">
<div class="content">


<center>

      <?php

        require("conexiones/bancoconexion.php");
        $sql=("SELECT * FROM cliente");
  
        $query=mysqli_query($mysqli,$sql);

        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead class='thead-dark'>";
                      echo "<tr>";

            echo "<th>Numero de cuenta</th>";
            echo "<th>Saldo</th>";
            echo "<th>Editar</th>";
            echo "<th>Borrar</th>";
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody class='table-warning text-dark'>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[4]</td>";


echo "<td><a href='actualizardinero.php?id=$arreglo[0]'><img src='imagenes/modificar.png' width='60' class='img-rounded'></td>";
echo "<td><a href='banvirtualadmin.php?id=$arreglo[0]&idborrar=2'><img src='imagenes/tarjetaborrar.png' width='60' class='img-rounded'/></a></td>";
//echo "<td><a href='banvirtualadmin.php?id=$arreglo[0]&idborrar=2'><img src='imagenes/dinero.png' width='60' class='img-rounded'/></a></td>";
            

            
          echo "</tr>";
        }

        echo "</table>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM dinero WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("BANVIRTUAL A ELIMINADO A ESTE USUARIO")</script> ';
            echo "<script>location.href='banvirtualadmin.php'</script>";
          }

      ?>
    </center>


</div>
</div>
</div>
</div>
</div>
</main>


<center><a href="desconectar.php"><button class="btn btn-danger">Salir</button></a></center>
        
   
</body></html>