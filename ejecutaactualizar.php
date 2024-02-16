<?php


extract($_POST);
	require("conexiones/conexion.php");
	$sentencia="update cliente set saldo='$saldo' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO DE LA TRASFERENCIA ")</script> ';
		echo "<script>location.href='midinero.php'</script>";
	}else {
		echo '<script>alert("TRASFERENCIA REALIZADA")</script> ';
		
		echo "<script>location.href='midinero.php'</script>";

		
	}
?>