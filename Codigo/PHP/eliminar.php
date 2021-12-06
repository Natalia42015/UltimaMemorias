<?php
/*Este es el archivo que llama el boton eliminar de la página dashboard.php se encarga de eliminarla
informacion de un difunto que este al lado de ese boton, elimina  contratos (iddifunto), registro cliente
tiene difunto (idifunto) y  ya que esta relaccionado  se pasa la inforamcion por ello hay que eliminar de 
los 3 sitios lo puse en este orden ya que si no lo elimina correctamente ya que se le quedaría la infromacion 
de ello y daría error por prioridad de claves primarias.
*/

/*Cuando termina va a la pagina dashboard.php es decir donde esta todos los difuntos registrados por el 
usuario.*/
session_start();
include('db.php');
/* Aqui consulta la tabla contratos pide la información iddifunto y elimina esa información*/
$sql = "DELETE FROM contratos WHERE iddifunto = ".$_GET["idDi"];
$resultado = mysqli_query($conexion, $sql);
echo $sql;
echo "<br>";

/* Aqui consulta la tabla cliente_tiene_difunto pide la información iddifunto y del usuario que es ese 
difunto y elimina esa información*/
$sql = "DELETE FROM cliente_tiene_difunto WHERE `idcliente` = ".$_GET["usr"]."  AND `iddifunto` = ".$_GET["idDi"];
$resultado = mysqli_query($conexion, $sql);
echo $sql;
echo "<br>";

/*Aqui consulta la tabla difunto pide la información de la iddifunto y elimina*/
$sql = "DELETE FROM difunto WHERE id = ".$_GET["idDi"];
$resultado = mysqli_query($conexion, $sql);

echo $sql;
echo "<br>";
/*Cuando elimina todo por el orden que se pidio nos envia a la paginal principal(dashboard.php) */
header('location:pagina_PHP/dashboard.php');


?>