<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Enlaceres de estilo bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Datepicker es un estilo de calendario bootstrap -->
    <link href='../../dp/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href='css3/estilo3.php'>
    <title>Ultimas Memorias</title>
</head>

<body>
      <!-- Funcion para cuando me conecto por inciar sesion entro esta pagina claro si no inicio sesion no lo hara -->
    <?php
    session_start();
    $id = $_SESSION["id"];
    $usuario = $_SESSION["usuario"];
    if ($id == 0 or $usuario == "") {
        header('location:../../HTML/login.html');    }

    ?>
    <header>
          <!--Encabezado y navegacion -->	
        <nav class="navbar navbar-light navbar-expand-lg navbar-dark" style="background-color: black;">
            <img src="../../img/logo.jpeg" width="80%" class="img">

            <div class="dropdown" style="background-color: black;">
                <button class="btn btn botonMenu" style="background-color: black;" type="button"  >
                    <?php echo $usuario; ?>
                </button>
                <div class="dropdown-menu menuP" style="border-radius: 10px;">
                        <a class="dropdown-item" href="editar_usuario.php"><i class="fas fa-cog" style="margin-right:10px"></i>Configuración</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#difuntoModal" href="#"><i class="far fa-newspaper" style="margin-right:10px"></i>Registrar nuevo</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#serviciosModal" href="#"><i class="far fa-newspaper" style="margin-right:10px"></i>Finalizar servicios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="../logout.php"><i class="fas fa-power-off" style="margin-right:10px"></i>cerrar sesión</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="../eliminarUsuario.php"><i class="fas fa-trash-alt" style="margin-right:10px"></i>Dar de baja a mi cuenta..</a>
                    
                    </div>
            </div>
        </nav>
    </header>
    <!--Tabla con todas las funciones de botones que registran y administran a los datos de difunto -->	
        <div class="container">
            <h4 style="margin-top:20px;">Bienvenido <?php echo $usuario; ?></h4>
            <div class="row col-md-12 custyle">
                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Ubicacion</th>
                            <th class="text-center">Accion</th>
                        </tr>
                    </thead>
                    <?php
                    /* Seleciona todo lo de la tabla difunto con sus respectivas columnas, tambien la tabla cliente_tiene_difunto 
                    sobre iddifunto, otra tabla de clientes sobre idcliente donde esta cliente_tiene_difunto columna idcliente guiandose 
                    por id*/
                    $query = "SELECT difunto.Nombre_completo, difunto.ubicacion, difunto.id from difunto INNER JOIN cliente_tiene_difunto ON cliente_tiene_difunto.iddifunto = difunto.id INNER JOIN clientes ON clientes.id = cliente_tiene_difunto.idcliente WHERE cliente_tiene_difunto.idcliente =" . $id;
                    //echo $query;
                    include('../db.php');
                    /*devuelve la respuesta en forma de array para colocar la informacion que consulta en la base de datos en la tabla de 
                    dashboard en condiciones nombrarlo segun en la fila que este por ejemplo el cero es el nombre el uno la ubicacion todo
                    esto es del difunto lo pongo hasta los botones de los servcions en forma de arrays y bucle for para que por cada nuevo 
                    difunto se registre se ponga solo los datos los botones tine su propia funcion por el servicio o porque tiene que editar
                    o eliminar difunto.*/
                    $resultado = mysqli_query($conexion, $query);
                    $results = mysqli_num_rows($resultado);
                    for ($sloop = 0; $sloop < $results; $sloop++) {
                        $row = mysqli_fetch_array($resultado);
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo '<td class="text-center"><a class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#floresModal" onclick="flores(' . $row[2] . ', ' . $id . ')" href="#"><i class="fas fa-fan"></i> Enviar flores </a>';
                        echo '<td class="text-center"><a class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#RezosModal" onclick="rezos(' . $row[2] . ', ' . $id . ')" href="#"><i class="fas fa-cross"></i> Enviar rezos </a>';
                        echo '<td class="text-center"><a class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#limpiezaModal" onclick="limpiar(' . $row[2] . ', ' . $id . ')" href="#"><i class="fas fa-broom"></i>Servicio de limpieza </a>';
                        echo '<td class="text-center"><a class="btn btn-warning btn-xs" href="editar_difunto.php?id=' . $row[2].'"><i class="far fa-edit"></i>Editar</a>';
                        echo '<td class="text-center"><a class="btn btn-danger btn-xs" href="../eliminar.php?idDi=' . $row[2] . '&usr=' . $id . '"><i class="fas fa-broom"></i> Eliminar registro </a>';
                        echo "</tr>";
                    }
                    // Aqui seleciona la tabla cliente y id del usuario que el resultado lo devolvera en forma de 
                    //arrays pero si no exite nos mandara al index.html es decir pagina de inicio
                    $query = "SELECT * FROM clientes WHERE id = ".$id;                    
                    $resultado = mysqli_query($conexion, $query);
                    $results = mysqli_num_rows($resultado);
                    if($results == 0)
                    {
                        header('location:../../index.html');
                    }                   
                    ?>
                </table>
          
        </div>
    </div>
    <!-- serviciosModal -->
    <div id="serviciosModal" class="modal fade" tabindex="-1" role="dialog">
        <!--  modal fade -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Servicios</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Servicio</th>
                                <th class="text-center">Estado</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php    
                        /*Es parate seleciona tabla tabla cliente (columna Nombre_completo) y contratos(Columna Fecha y Realizado) sobre 
                        idcliente igual al contrado idcliente con esto queria probar ha dar por hecho mediante una contraseña 789 un pedido
                        que se encuentra pediente en finalizar un servicio en menu desplegable nuestro nombre*/
                            $query = "SELECT clientes.Nombre_completo, contratos.Realizado, contratos.Fecha FROM `contratos` INNER JOIN clientes ON clientes.id = contratos.Idcliente;";
                          /*Aqui devuelve el resultado de la conexion de esa consulta por array y coloco donde va cada fila para cuando
                          abra eso este en el orden correcto con sus respectivos nombres de columna */
                             $resultado = mysqli_query($conexion, $query);
                            $results = mysqli_num_rows($resultado);
                            for ($sloop = 0; $sloop < $results; $sloop++) {
                                $row = mysqli_fetch_array($resultado);
                                echo "<tr onclick='terminarservicio(".'"'.$row[2].'"'.")'>";
                                echo '<td class="col-sm-8 col-md-6">';
                                echo '<div class="media">';
                                echo '<div class="media-body">';
                                echo '<p>'.$row[0].'</p>';
                                echo '</div>';
                                echo '</div></td>';                                    
                                echo '<td class="col-sm-1 col-md-1 text-center"><strong>'.$row[1].'</strong></td>';
                                echo '</tr>';
                            }
                        ?>                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- flores -->
    <div id="floresModal" class="modal fade" tabindex="-1" role="dialog">
        <!--  modal fade -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Arreglos florales</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th class="text-center">Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!--Flores1 -->	
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/flores1.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>Ramo de flores</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 5.0</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('flores', 5, 1)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus">Comprar</span> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <!--Flores2 -->	
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/flores2.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>Corona de flores</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 6.0</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('flores', 6, 2)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus">Comprar</span> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <!--Flores3 -->	
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/flores3.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>Pareja de rammos de flores</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 7.0</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('flores', 7, 3)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Comprar
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Contratar limpieza -->
    <div id="limpiezaModal" class="modal fade" tabindex="-1" role="dialog">
        <!--  modal fade -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Limpieza</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th class="text-center">Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                 <!-- Limpiar lapida -->
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/limpieza1.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>Limpiar lapida</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 5.0</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('limpieza', 5, 4)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Pagar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                 <!--  Limpiar pantheon -->
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/limpieza2.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>Limpiar pantheon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 30</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('limpieza', 30, 5)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Pagar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                 <!-- Limpiar nicho -->
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/limpieza3.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>Nicho</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 10</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('limpieza', 10, 6)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Pagar
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Comprar Rezos -->
    <div id="RezosModal" class="modal fade" tabindex="-1" role="dialog">
        <!--  modal fade -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliga su libro sagrado</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th class="text-center">Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!--Este libro sagrado coran-->
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/rezos1_coran.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                        <p>Coran</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 5.0</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('rezos', 5, 7)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Pagar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <!--Este libro sagrado torah-->
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/rezos2_torah.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>Torah</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 5.0</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('rezos', 5, 8)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Pagar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <!--Este libro sagrado biblia-->
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../../img/productos/rezos3_biblia.jpeg" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <p>biblia</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>€ 5.0</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button onclick="enviar('rezos', 5, 9)" type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Pagar
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!--Registrar nuevo familiar -->
    <div id="difuntoModal" class="modal fade" tabindex="-1" role="dialog">
        <!--  modal fade -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registre un nuevo familiar</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Nombre de familiar -->
                    <form class="grabar" action="../grabar.php" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="height:100%;" ><i class="fas fa-user-tie"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Nombre de su familiar" required />
                        </div><br />
                        
                    <!-- Ubicacion -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="height:100%;" ><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" name="location" class="form-control" placeholder="Ubicacion: Lapida 222 (Ejemplo)"  />
                            </div><br />
                            
                        <!-- Tipo de enterramiento -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-tombstone"></i></span>
                            </div>
                         <!-- Seleciona la tabla de tipos de enterrmientos y devuelve el resultado del sql mediante arrays con eso pongo
                        echo $row[0] (se encuentra los datos de tipo de enterramiento  que hay) entre echo  '<option value="' en las filas
                        para seleccionar la opcion de que tipo de enterramiento esta -->
                            <select name="tipoenterramiento" id="tipoenterramiento">
                                <?php
                                $query = "SELECT * FROM tipos_de_enterramientos";
                                include('../db.php');
                                $resultado = mysqli_query($conexion, $query);
                                $results = mysqli_num_rows($resultado);
                                for ($sloop = 0; $sloop < $results; $sloop++) {
                                    $row = mysqli_fetch_array($resultado);
                                    echo  '<option value="';
                                    echo $row[0];
                                    echo '">';
                                    echo $row[1];
                                    echo "</option>";
                                }
                                ?>
                                
                            </select>
                        </div><br />

                        <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Separador utilice este metodo un poco vulgar porque no encontraba el modo de que obedeciera ya que es un estilo por bootstraps y normalmente no suelen hacer caso a los estilos -->
<div style="margin-bottom: 18%;"></div>

    <!-- Pie de pagina -->
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
    <!-- Fin de la pagina -->

     <!-- Enlaceres de JavaScript -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src='../../dp/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <!-- Enlaceres de JavaScript de forma local -->
    <script src="js3/funciones3.js"></script>
     <!-- Este javacript esta pidiendo datos de la base de datos por eso lo creado aqui porque fuera no funcionaria esta pidiendo dichos datos mencionados que sirve que 
    cuando hago una compra o un pago de un servicio envia los datos de que usuario es, de que difunto y que tipo de servio se trata (Y una cosas el codigo nombra estos producto, idproducto valor ya que lo he cogido como una especie de grupo con este valor de los articulos para no tener que escribir más) -->
    <script>
        var idDifunto = 0;
        var usrId = 0;

        function flores(idDif, idUsuario) {
            idDifunto = idDif;
            usrId = idUsuario;
        }

        function rezos(idDif, idUsuario) {
            idDifunto = idDif;
            usrId = idUsuario;
        }

        function limpiar(idDif, idUsuario) {
            idDifunto = idDif;
            usrId = idUsuario;
        }

        function enviar(producto, valor, idProducto) {
            location.href = (location.origin + location.pathname).replace('dashboard.php', 'pedidos.php?idDi=' + idDifunto + "&usr=" + usrId + "&val=" + valor + "&sid=" + idProducto);
        }
        /*Esta funcion sirve para accede con contraseña al los datos del cliente para poder cambiar si el servicio esta pediente cambiarlo a 
        hecho que esta funcion se encuentra en cpedidos.php*/
        function terminarservicio(idServicio)
        {
            let pw = prompt("por favor ingrese su contraseña:", "123456");
            if(pw == "789")
            {
                location.href = (location.origin + location.pathname).replace('dashboard.php', '../cpedidos.php?idP=' + idServicio);
            }
            else
            {
                alert("Contraseña incorrecta");
            }
        }
      
        </script>
</body>

</html>