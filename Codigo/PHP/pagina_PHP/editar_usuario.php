<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Enlaceres de estilos bootstraps -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- Mi archivo css local vinvulado con este enlace -->
<link rel='stylesheet' type='text/css' href='css3/estilo3.php'>
</head>

<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">
                <?php
                /*Esta pagina solo actua con la sesion inciada del usuario */
                  session_start();    
                  $usuario = $_SESSION["usuario"];
                  echo $usuario;
                ?>

              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../../img/avatar.jpg" class="img-circle img-responsive"> </div>
                <!-- Nombre de los campos del formulario-->
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
                /*Aqui cogo seleccion la identificacion del usuario del que esta iniciado y muestra el resultado de ese usuario que estoy 
                inciada luego coge ese resultado y  devuelve en forma de array */                 
                  include('../db.php');
                  $id = $_SESSION["id"];
                  $sql = "SELECT  * FROM clientes where id = ".$id;
                  $resultado = mysqli_query($conexion, $sql);
                  $row = mysqli_fetch_array($resultado);
                ?>
                <!--formulario que muestra los datos del usuario como resultado de nuestro  $row = mysqli_fetch_array($resultado);-->
                <div class=" col-md-9 col-lg-9 ">
                  <form action="../Modificar_usuario.php" METHOD="POST"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombres:</td>
                        <td><input name="nombres" value="<?php echo $row[1]?>" /></td>
                      </tr>
                      <tr>
                        <td>Correo:</td>
                        <td><input name="correo" value="<?php echo $row[2] ?>" /></td>
                      </tr>
                      <tr>
                        <td>Fecha de Nacimiento:</td>
                        <td><input name="fecha_de_nacimiento" value="<?php echo $row[3] ?>" /></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Direccion:</td>
                        <td><input name="direccion" value="<?php echo $row[4] ?>" /></td>
                      </tr>
                        <tr>
                        <td>Telefono:</td>
                        <td><input name="telefono" value="<?php echo $row[5] ?>" /></td>
                      </tr>
                      <tr>
                        <td>CP:</td>
                        <td><input name="cp" value="<?php echo $row[6] ?>" /></td>
                      </tr>
                        <td>Clave:</td>
                        <td><input name="clave" value="<?php echo $row[7] ?>" />
                        </td>
                           
                      </tr>
                      <!-- guarda los cambios llama a action que es Modificicar_usuario.php el se encagar de modificar los datos del usuario -->
                      <tr><td><button class="btn btn-primary">guardar los cambios</button></td>
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