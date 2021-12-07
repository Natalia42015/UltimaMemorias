<?php
/*En este archivo se activa cuando estamos iniciados y le damos nuestro nombre y configuración nos saldra un formulario que es cuando actua 
este archivo muestra nuestros datos de la cuenta en el que estamos y podemos modificarlo. Las variables de los campos de formulario de 
editar_usuario

*/
include('db.php');

$nombres = $_POST["nombres"];
$correo = $_POST["correo"];
$fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
$direccion = $_POST["direccion"];
$cp = $_POST["cp"];
$telefono = $_POST["telefono"];
$clave = $_POST["clave"];

/*Aqui es una condicion que pregunta si tiene los campos vacio si no esta actua*/
if($clave != "" & $nombres !="" & $direccion !="")
{
   
 /*Lo que pide es que tenemos que estar con la sesion inciada */
session_start();
$id = $_SESSION["id"];
$_SESSION["usuario"] = $nombres;
    
/*Aqui selecciona la tabla clientes de las columnas Nombre_completo y email la consulta en este caso es que si el nombre o gmail y 
lo devuelve de resultado de la consulta sql a la base de datos en count en forma de arrays */
$sql = "SELECT * FROM clientes WHERE Nombre_completo = '".$nombres."' OR email='".$correo."'";
$resultado = mysqli_query($conexion, $sql);
$count = mysqli_num_rows($resultado); 

echo "<br>";
echo $sql;


/*Con esto si el resultado es menor que cero es que los datos no exiten y podemos escribir ya que la condicion es que si hay un nombre o 
gmail igual no dejara escribir eso si devuelve el resultado mayor que cero signfica que concide que es igual uno de estos datos y saltara el
error*/
if($count <= 0)
    {
        $sql = "UPDATE `clientes` SET 
        `Nombre_completo` = '".$nombres."', `email` = '".$correo."', 
        `Nacimiento` = '".$fecha_de_nacimiento."', `Direccion` = '".$direccion."', 
        `CP` = '".$cp."', `Telefono` = '".$telefono."', 
        `clave` = '".$clave."' WHERE `clientes`.`id` = ".$id;
    
        $resultado = mysqli_query($conexion, $sql);
        header('location:pagina_PHP/dashboard.php');
    }
    else
    {
        header('location:pagina_PHP/dashboard.php?errorU=1');
    }
}

?>