<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaceres de los bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Encabezado de la pagina y navegacion -->
        <nav class="navbar navbar-light navbar-expand-lg navbar-dark" style="background-color: black;">
            <img src="../../img/logo.jpeg" width="77%" class="img">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="navbar-nav" style="text-align: right;">
                        <a style="color:white;" class="nav-link"  href="dashboard.php"> volver a mi pagina</a>
                        <a style="color:white;" class="nav-link" href="../logout.php">cerrar sesion</a>                        
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php
    /*aqui los valores adquiridos de haberle dado comprar (claro con la sesion inciada en dashboard)los inserto a la tabla contrado y valuo
    quien es el de la cuenta inciada por su id y que difunto se trata por id y que servicio pidio le doy porque esta pendiente en realizado*/
    $valor = $_GET["val"];
    $IdUsuario = $_GET["usr"];
    $idDifunto = $_GET["idDi"];
    $idServicio = $_GET["sid"];

    $sql = "INSERT INTO `contratos` (`Iddifunto`, `Idcliente`, `Idservicio`, `Id_MDP`, `Realizado`)";
    $sql = $sql . " VALUES (" . $idDifunto . ", " . $IdUsuario . ", " . $idServicio . " ,1, 'PENDIENTE')";
   
 /*Aqui se vincula a la base de datos bd.php y me duelve el resultado */

    include('../db.php');
    $resultado = mysqli_query($conexion, $sql);
    echo "<br>";    


/*Seleciona el campo fecha de la tabla contratos y ordena todo por el campo fecha y con desc limit devuelve el primer resulado 
de la  consulta selecionada por orden de fecha */
    $sql = "SELECT Fecha FROM contratos ORDER BY Fecha DESC LIMIT 1";
    $resultado = mysqli_query($conexion, $sql);
    $row = $resultado->fetch_row();

    $idP = $row[0];

    ?>
<!--contenido de la pagina-->
    <div class="notify successbox">
        <h1>Pedido realizado con exito!</h1>
        <span class="alerticon"><img src="../../img/scss.png" alt="checkmark" style="width: 18%;text-align: center;margin-left: 50%;" /></span>
        <p>Muchas gracias por solicitar nuestros servicios, apartir de este momento puede realizar el <a href="https://paypal.me/test">pago</a> equivalente a <?php echo $valor ?> euros.</p>
        <p> Recuerda enviar el comprobante de pago al <a href="mailto:administracionUltimamemorias@gmail.com"> correo electronico </a> una vez finalizado el proceso de pago </p>
        <p> para cancelar tu pedido da click <a href="../eliminarpedido.php?pedido=<?php echo $idP ?>">aqui</a></p>
        <p> Puedes hacer <a href="dashboard.php"> click aqui </a> para volver a la pagina principal </p>
    </div>
    <br><br><br><br><br>
    <!-- pie de pagina-->
    <footer id="piedepagina" class="footer navbar-fixed-bottom" style="background-color: black;">
        <div class="container" style="color:white;padding:2%">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img src="../../img/logo.png" style="width:50%;">
                </div>
                <div class="col-xs-12 col-md-3">
                    <h6>CONTACTO:</h6>
                    <h6>
                        Carrera 8h No. 166-71 Local 2<br>
                        Melilla.<br>
                        Teléfonos: 912458673 – 912458123.<br>
                        Gmail: ultimamemorias@gmail.com<br>
                    </h6>
               <!-- contactas con el empresario pero en esta fucnion llamda mailto debe añadir una funcion maildo en el navegador porque si no funciona  -->
              <a  href="mailto:ultimamemorias@gmail.com">Enviar mensaje (requiere que tengas la extesion mailto para enviar mensaje directamente)</a>
                </div>
                <div class="col-xs-12 col-md-3">
                    <p class="text-muted small text-right">Natalia Otero, diseñadora de la página @2021.<br>Todos los derechos reservados.</p>
                    <a class="" style="color:white;" href="acerca.html">Informacion acerca de la empresa</a>
                    <br>
                    <a class="" style="color:white;" href="privacidad.html">Informacion de privacidad</a>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="pull-right">
                        <h6>ENCUENTRANOS EN LAS REDES</h6>
                        <div class="redes-footer">
                            <a href="https://www.facebook.com/"><img class="img" width="50px" height="50px" src="../../img/fb.png"></a>
                            <a href="https://twitter.com/"><img class="img" width="50px" height="50px" src="../../img/tt.jpg"></a>
                            <a href="https://www.youtube.com/"><img class="img" width="50px" height="50px" src="../../img/yt.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Enlaceres de jquery y bootstrap-->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>