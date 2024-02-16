<!-- Esta es la validación para el inicio de sesion -->

<?php

session_start();
	require("conexiones/bancoconexion.php");
	$usuario=$_POST['correo'];
	$contraseña=$_POST['contraseña'];


	$sql2=mysqli_query($mysqli,"SELECT * FROM cliente WHERE correo='$usuario'");
	
	if($f2=mysqli_fetch_assoc($sql2)){
		if($contraseña==$f2['pasadmin']){
			$_SESSION['numeroCta']=$f2['numeroCta'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO A BancApp ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM cliente WHERE correo='$usuario'");

	if($f=mysqli_fetch_assoc($sql)){
		if($contraseña==$f['contraseña']){
			$_SESSION['numeroCta']=$f['numeroCta'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['rol']=$f['rol'];

			echo '<script>alert("BIENVENIDO A BANVIRTUAL")</script> ';
			echo "<script>location.href='inicio.php'</script>";
		}else{
			echo 'CONTRASEÑA INCORRECTA';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>