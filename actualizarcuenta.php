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
	<link rel="stylesheet" href="estilos/actualizarCuenta.css">
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
		extract($_GET);
		require("conexiones/bancoconexion.php");

		$sql="SELECT * FROM cliente WHERE id=$id";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$numeroCta=$row[1];
		    	$nombre=$row[3];
		    	$saldo=$row[4];
		    	$estado=$row[5];
		    	$cedulaCliente=$row[6];
		    	$telefono=$row[7];
				$contraseña=$row[8];
				$correo=$row[9];
				$rol=$row[10];
				$pasadmin=$row[11];
		    }

		?>

		<form action="ejecutacuenta.php" method="post">
				Id<br><input type="text" class="form-control" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Numero de Cuenta<br> <input type="text" class="form-control" name="numeroCta" value="<?php echo $numeroCta?>" readonly="readonly"><br>
				<!-- Fecha de apertura<br> <input type="text" class="form-control" name="fechaApertura" value="<?php echo $fechaApertura?>"><br> -->
				Nombre<br> <input type="text"class="form-control"  name="nombre" value="<?php echo $nombre?>"><br>
				Estado de la cuenta<br> <input type="text"class="form-control"  name="estado" value="<?php echo $estado?>"><br>
				Cedula del cliente<br> <input type="text"class="form-control"  name="cedulaCliente" value="<?php echo $cedulaCliente?>"><br>
				Telefono<br> <input type="number"class="form-control"  name="telefono" value="<?php echo $telefono?>"><br>
				Contraseña usuario<br> <input type="text"class="form-control"  name="contraseña" value="<?php echo $contraseña?>"><br>
				Correo<br> <input type="email" class="form-control" name="correo" value="<?php echo $correo?>"><br>
				Rol<br> <input type="number" class="form-control" name="documento" value="<?php echo $rol?>"><br>
				Contraseña admin<br> <input type="text"class="form-control"  name="pasadmin" value="<?php echo $pasadmin?>"><br>
				
				<br>
				<input type="submit" value="Modificar" class="btn btn-warning">
			</form>



</center>
</div>
</div>
</div>
</div>
</div>
</main>



        
   
</body></html>


