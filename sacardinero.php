<html>

<head>

   </script><title>BancApp</title>

  <link rel="icon" type="image/png" href="imagenes/bancolombia.png" />


    <link href="static/css/style.css" rel="stylesheet">
            
    <style>



#home-box {
	display: block;
	background: #D2D2D2;
	color: #fff;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px;
	-moz-border-radius-topleft: 3px;
	-moz-border-radius-topright: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
}

#home-box .content {
	padding: 25px 30px;
	line-height: 22px;
}

#home-box .content h1 {
	font-size: 26px;
	font-weight: normal;
	line-height: 32px;
	text-align: center;
	margin-top: 0px;
	margin-bottom: 5px;
}



    </style>
  

  

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
		require("conexiones/conexion.php");

		$sql="SELECT * FROM cliente WHERE id=$id";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
				$numeroCta=$row[1];
		    	$saldo=$row[4];
		    	$dineros=0;

		    }

		    if($saldo>0){

echo"<script>alert('Usted si tiene dinero en su cuenta bancaria ')</script>";
echo"<font color='black' size='5'>Retiro de dinero</font>";
echo "<br>";
echo "<br>";

echo '<form action="ejecutaactualizar.php" method="post">';

echo "<font color='black' size='4'>Numero de Cuenta</font><br><input type='text' class='form-control' name='numeroCta' value= ", $numeroCta," readonly='readonly'";
echo "<br>";
echo "<br>";
echo "<font color='black' size='4'>Dinero actual</font><br><input type='text' class='form-control' name='saldo' value= ", $saldo," readonly='readonly'";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "</form>";

echo"<a href='retiro.php'><input type='submit' value='Retirar dinero' class='btn btn-primary'></a>";



		    }else{

		    	echo"<script>alert(Usted no tiene dinero en su cuenta bancaria ')</script>";
	echo"(Usted no tiene dinero en su cuenta bancaria )";
echo "<br>";
echo "<br>";
echo "Dinero actual<br><input type='text' class='form-control' name='id' value= ", $saldo ," readonly='readonly'";
echo "<br>";
echo "<br>";
	echo'<a href="midinero.php"><button>Volver</button></a>';

		    }


		?>

</center>



                    </div>
                </div>

              
                
               
            </div>
        </div>
      </div>
    </main>   


        
   
</body></html>