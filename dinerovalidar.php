<?php

	$saldo=$_POST['saldo'];


	require("conexiones/bancoconexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM cliente ");
	$check_mail=mysqli_num_rows($checkemail);
		if($saldo<=100000){
			if($check_mail>0){
				echo ' <script language="javascript">alert("USTED YA RECLAMO EL BONO PERMITIDO HAY UN ERROR EN SU TRANSFERENCIA BANCARIA");</script> ';
				echo ' <script language="javascript">alert("SU DINERO ACTUAL ES");</script> ';
				echo "<script>location.href='midinero.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO cliente VALUES('','','','','$saldo','','','','','','')");

				echo ' <script language="javascript">alert("TRANSFERENCIA BANCARIA CORRECTAMENTE");</script> ';
				echo "<script>location.href='midinero.php'</script>";	
			}
			
		}else{
			echo ' <script language="javascript">alert("SU MONTO ES MAYOR A 100.000 HAY UN ERROR EN SU TRANSFERENCIA BANCARIA");</script> ';
			echo "<script>location.href='inicio.php'</script>";
		}

	
?>