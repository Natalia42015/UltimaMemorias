<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Enlaceres de estilos de bootstraps -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- Mi archivo css local vinvulado con este enlace -->
<link rel='stylesheet' type='text/css' href='css3/estilo3.php'>
</head>

<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">
                <?php
                /* Esta pagina solo funciona con la sesion inciada del usuario que en nuestra base de datos es cliente*/
                  session_start();    
                  $usuario = $_SESSION["usuario"];
                  echo $usuario;
                ?>

              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../../img/avatar.jpg" class="img-circle img-responsive"> </div>
                <!-- titulo de los campos del formulario-->
             <div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>Nombres:</dt>
                    <dd>Correo:</dd>
                    <dt>Fecha de Nacimiento:</dt>
                    <dd>Direccion: </dd>
                    <dt>CP:</dt>
                    <dt>Telefono:</dt>
                    <dd>Clave:</dd>
                  </dl>
                </div>
                <?php    
                /*Esta funcion php seleciona todo de la tabla difunto guiandose de la modificacion por id es decir que no edite a todos si 
                no al que tiene al lado del boton editar (get se guia por url) y tenemos la conexión a la base de datos y que lo devuelva con 
                array */              
                  include('../db.php');
                  $id = $_SESSION["id"];
                  $sql = "SELECT  * FROM difunto where id = ".$_GET["id"];
                  $resultado = mysqli_query($conexion, $sql);
                  $row = mysqli_fetch_array($resultado);
                ?>
                <!-- Este formulario muestra los datos del difunto con el resultado de forma array -->
                <div class=" col-md-9 col-lg-9 ">
                  <form action="../Modificar_difunto.php" METHOD="POST"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombres:</td>
                        <td><input name="nombre" value="<?php echo $row[1]?>" /></td>
                      </tr>
                      <tr>
                        <td>Ubicacion:</td>
                        <td><input name="ubicacion" value="<?php echo $row[2] ?>" /></td>
                      </tr>
                      <tr>
                        <td>Tipo enterramiento:</td>
                        <td>
                        <select name="tipoenterramiento" id="tipoenterramiento">
                                <?php
                                /*Aqui selecionamos todo de la tabla tipos_enterramiento y mostramos el resultado en forma de array */
                                $query = "SELECT * FROM tipos_de_enterramientos";
                                include('../db.php');
                                $resultado = mysqli_query($conexion, $query);
                                $results = mysqli_num_rows($resultado);
                                for ($sloop = 0; $sloop < $results; $sloop++) {
                                    $rowTipoEnterramiento = mysqli_fetch_array($resultado);
                                    if($row[3] == $rowTipoEnterramiento[0])
                                    {
                                      echo  '<option selected="selected" value="';
                                    }
                                    else
                                    {
                                      echo  '<option value="';
                                    }
                                    echo $rowTipoEnterramiento[0];
                                    echo '">';
                                    echo $rowTipoEnterramiento[1];
                                    echo "</option>";
                                    echo $rowTipoEnterramiento[2];
                                    echo "</option>";
                                }
                                ?>
                                
                            </select>
                        </td>
                        </tr>
                      <tr><td><button  class="btn btn-primary">guardar los cambios</button></td></tr>    
                      <!-- Esta parte sirve para pedir los datos de action de form para insertar los datos correspondientes es decir que se vea los datos que deben ser de las tablas-->
                      <input type="text" name="id" value="<?php echo $_GET["id"] ?>" style="display:none"/>
                      <td><a class="btn btn-info" href="dashboard.php">Volver a la pagina principal</a></td></tr>   
                    </tbody>
                  </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Enlaceres de jquery y bootraps -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
