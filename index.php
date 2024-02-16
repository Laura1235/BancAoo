<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   </script><title>BancApp</title>

  <link rel="icon" type="image/png" href="imagenes/bancolombia.png" />
    <!-- Importaciones de los estilos -->
    <link href="static/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos/index_css.css">
</head>
  <body class="bg-light">


  <?php
  date_default_timezone_set('America/Mexico_City') ;
  $fecha_actual=date("Y-m-d");
  ?>

<!----LOGIN ---->
           
<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="bancovalida.php" method="POST">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="imagenes/bancolombia.png" width="200" alt="LikeFans" class="LikeFans">
      <h1 style="text-align:center">BancApp</h1>
    </div>

    <div class="container">
   <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text "><img src="imagenes/user.png" width="20"></div>
        </div>
        <input type="text" name="correo" class="form-control"  placeholder="Email"  required="">
      </div>
    </div>
     <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
        </div>
        <input type="password" name="contraseña" class="form-control"  placeholder="Contraseña" required="">
      </div>
    </div>

       <input type="checkbox"  required="" style="margin:15px 15px;">Recordarme     
      <button type="submit" class="btn btn-warning" >Login</button>
       
    </div>
    
  </form>

</div>

<!---- FIN LOGIN ---->






<!----REGISTRO ---->

<div id="modal2-wrapper" class="modal">
  
  <form class="modal-content animate" action="bancoregistro.php" method="POST">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal2-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="imagenes/bancolombia.png" width="200" alt="LikeFans" class="LikeFans">
            <h1 style="text-align:center">BancApp</h1>
    </div>

    <div class="container">

<!-- Fecha de apertura -->
    <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text "><img src="imagenes/user.png" width="20"></div>
        </div>
        <input type="datetime" name="fechaApertura" class="form-control"  placeholder="" required="" value="<?=$fecha_actual?>">
      </div>
    </div>
<!-- Fin Fecha de apertura -->

<!-- Nombres -->
   <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text "><img src="imagenes/user.png" width="20"></div>
        </div>
        <input type="text" name="nombre" class="form-control"  placeholder="Nombres" required="">
      </div>
    </div>
<!-- Fin Nombres -->

<!-- Estado de cuenta -->
     <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="imagenes/email.png" width="20"></div>
        </div>
        <input type="text" name="estado" class="form-control"  placeholder="Estado de cuenta" required="">
      </div>
    </div>
<!-- Fin estado de cuenta -->

<!-- Cedula de ciudadania -->
    <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text "><img src="imagenes/identidad.png" width="20"></div>
        </div>
        <input type="text" name="cedulaCliente" class="form-control"  placeholder="Cedula de Ciudadania" required="">
      </div>
    </div>
<!-- Fin cedula de ciudadania -->

<!-- Numero de celular -->
    <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
        </div>
        <input type="number" name="telefono" class="form-control"  placeholder="Numero Celular" required="">
      </div>
    </div>
<!-- Fin numero de celular -->

<!-- Contraseñas -->
    <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
        </div>
        <input type="password" name="contraseña" class="form-control"  placeholder="Contraseña" required="">
      </div>
    </div>

    <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
        </div>
        <input type="password" name="rcontraseña" class="form-control"  placeholder="Repetir contraseña" required="">
      </div>
    </div>
<!-- Fin de contraseñas -->

<!-- Correo electronico -->
    <div class="col-sm-12 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
        </div>
        <input type="email" name="correo" class="form-control"  placeholder="Email" required="">
      </div>
    </div>

<!-- Fin de correo electronico -->

       <input type="checkbox" style="margin:15px 15px;">Recordarme     
      <button type="submit" class="btn btn-warning" >Registrar</button>
       
    </div>
    
  </form>

</div>

<!----FIN REGISTRO ---->


    <main role="main" class="container">
      <div class="row">
        <div class="col-12">
            <div class="my-3 p-3 bg-white rounded box-shadow box-style">
                <div id="home-box">
                    <div class="content">
                        <h1 style="font-size:x-large; color:black; ">BancApp</h1>
                        <p class="mt-3 text-left"><img src="imagenes/bancolombia.png" width="500" class="img-fluid float-left" alt="LikeFans" > <h5 style="color:black; ">
                        Somos el Banco líder en ofrecer soluciones financieras a nuestro mercado objetivo, brindando calidad de servicio, eficiencia y oportunidad.</h5></p>

<!-- Botones de redirecciones -->
<div class="row">
<div class="col">
<a class="nav-link" onclick="document.getElementById('modal-wrapper').style.display='block'"><button class="btn btn-warning">INGRESAR BANVIRTUAL</button></a>
</div>
<div class="col">
<a class="nav-link" onclick="document.getElementById('modal2-wrapper').style.display='block'"><button class="btn btn-warning">CREAR NUEVA CUENTA</button></a>
</div>
</div>
<!-- Fin de botones -->


                        <div class="clearfix"></div>
                    </div>
                </div>

              
                
               
            </div>
        </div>
      </div>
    </main>   


        
   
</body></html>