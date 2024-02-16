<?php


extract($_POST);
	require("conexiones/bancoconexion.php");
	$sentencia="update cliente set nombre='$nombre', estado='$estado', cedulaCliente='$cedulaCliente', telefono='$telefono', contraseña='$contraseña', correo='$correo', rol='$rol', pasadmin='$pasadmin' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR AL ACTUALIZADA LA CUENTA ")</script> ';
		echo "<script>location.href='midinero.php'</script>";
	}else {
		echo '<script>alert("CUENTA ACTUALIZADA")</script> ';
		
		echo "<script>location.href='midinero.php'</script>";

		
	}
?>