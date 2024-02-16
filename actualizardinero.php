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
	<link rel="stylesheet" href="estilos/actualizarDinero.css">

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
		    	$saldo=$row[4];
		    }



		?>

		<form action="ejecutadinero.php" method="post">
				Numero de Cuenta<br> <input type="text" class="form-control" name="numeroCta" value="<?php echo $numeroCta?>" readonly="readonly"><br>
				Saldo<br> <input type="number" class="form-control"  name="saldo" value="<?php echo $saldo?>"><br>
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


