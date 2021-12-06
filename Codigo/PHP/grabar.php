<?php
/*Este archivo.php es llamado cuando quiere registrar un nuevo familiar que eso esta cuando inicias le das a tu nombre que esta en el cabezado 
de arriba a la derecha saldra un menu ofreciendo varias opciones en este caso es registro nuevo ya que llamara este php que hara que se 
comunique con la base de datos insertando dichos datos nombrados aqui y en dashboard.php que hay un apartado modal que pone el estilo del menu y 
lo que pide rellenar para  enviar los datos a la base de datos a sus respectivas tablas*/

/*Con la sesion inciada del usuario segun su id se pedira en los campos que tienen estos nombres */
session_start();
include('db.php');
$id = $_SESSION["id"];
$name = $_POST["name"];
$location = $_POST["location"];
$tipoenterramiento = $_POST["tipoenterramiento"];

/*Aqui es para poner una condicion que detecte si seleciona entre nombre y ubicacion de la tabla difunto 
que esto hara que el nombre puede ser el mismo pero la ubicacion ya que puede exitir el difunto con el mismo nombre pero nombre
en la misma ubicacion  */
$sql = "SELECT * FROM difunto WHERE Nombre_completo = '".$name."' AND Ubicacion='".$location."'";
$resultado = mysqli_query($conexion, $sql);
$count = mysqli_num_rows($resultado); 

/*Si el resultado anterior devuelve cero podemos insertar los datos y selecionarlos*/
if($count == 0)
{
    /*Aqui insertara los datos de la base de datos de la tabla difunto y lo valuara segun los que esta escrito los campos del formulario
    y devuele resultado de la conexion de la base de la peticion de la consulta
    */
    $sql = "INSERT INTO `difunto` (`Nombre_completo`, `Ubicacion`, `tipo_enterramiento`) VALUES ('".$name."', '".$location."', '".$tipoenterramiento."')";
    echo $sql;

    $resultado = mysqli_query($conexion, $sql);
    $iddifunto = mysqli_insert_id($conexion);

    /*Aqui insertara los datos de la base de datos  de la tabla cliente_tiene_difunto y lo valuara segun los que esta escrito los campos del 
    formulario y devuele resultado de la conexion de la base de la peticion de consulta*/
    $sql = "INSERT INTO `cliente_tiene_difunto` (`Idcliente`, `Iddifunto`) VALUES (".$id.", ".$iddifunto.")";
    echo $sql;
    $resultado = mysqli_query($conexion, $sql);    
    
    /*Aqui seleciona la tabla cliente_tiene_difunto de la columna idcliente segun su id inciada sesion del cliente de los 
    paso anterirores y lo que esta insertando automaticamente al crear un difunto se añade la informacion en la tabla nombrada antes iddifunto
    y devuelve el resultado */
    $sql = "SELECT * FROM cliente_tiene_difunto WHERE Idcliente = ".$id." AND Iddifunto=".$iddifunto;
    $resultado = mysqli_query($conexion, $sql);

     /*Aqui seleciona la tabla difunto de la columna Nombre_completo y ubicacion de la base de datos de la informacion que se esta deseando 
     insertar en la base de datos a traves  de los campos name y location que son los nombres de los campos de formualarios se devuelve 
     resultado por la conexion que hizo la consulta del sql a count en forma de array */
    $sql = "SELECT * FROM difunto WHERE Nombre_completo = '".$name."' AND Ubicacion='".$location."'";
    $resultado = mysqli_query($conexion, $sql);
    $count = mysqli_num_rows($resultado); 

    echo $count;
  /*Claro ese resultado si es mayor que cero eso significa que exiten los datos y no ira de primeras bien a dashboard ira ha dar mensaje de
  error segun lo que note */
    if($count > 0)
    {
        header('location:pagina_PHP/dashboard.php');
        }
     
        }
        else
        {
            header('location:pagina_PHP/dashboard.php?errorI=1');
        }
?>