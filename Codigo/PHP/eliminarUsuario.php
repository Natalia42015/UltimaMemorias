<?php
/*Si queremos darnos de baja a nuestra cuenta mientras estemos inciadosa nuestra cuenta le damos a nuestro nombre y le damos dar de baja a
mi cuenta llamara a este archivo que preguntara la linea a partir del cinco que segun la id del que inicio sesion se eliminar 
de la tabla contratos id_cliente segun su id que este iniciado lo eliminara.*/
session_start();
$id = $_SESSION["id"];
$sql = "DELETE FROM contratos WHERE id_cliente = ".$id;

/*Aqui se conecta a la base de datos */
include('db.php');
$resultado = mysqli_query($conexion, $sql);

/*Aqui seleccion la columna id difunto de la tabla difunto y seleciono también la tabla cliente_tiene_difunto el id difunto y 
el idcliente de las misma tabla guiandose de la id */
$sql = "SELECT difunto.id FROM difunto
INNER JOIN cliente_tiene_difunto
ON cliente_tiene_difunto.iddifunto = difunto.id
where cliente_tiene_difunto.idcliente = ".$id;
echo $sql;

/*Aqui devuelve el resultado de la conexion de la base y la consulta */
$resultado = mysqli_query($conexion, $sql);
/*Aqui devuelve resultado anterior en forma de array */
$results = mysqli_num_rows($resultado);
for ($sloop = 0; $sloop < $results; $sloop++) {
    $row = mysqli_fetch_array($resultado);
/*Aqui elimina de la tabla contrato id_difunto guiado por fecha es la mejor forma para nombrarlo sin mucha dificulatad */
    $sql = "DELETE FROM contratos WHERE id_difunto = ".$row[0];
    echo $sql;
    $resultado = mysqli_query($conexion, $sql);
/*Aqui elimina de la tabla cliente_tiene_difunto de iddifunto guiandose de la columna fecha que esta contratos es decir que el cero es 
la fecha */
    $sql = "delete from cliente_tiene_difunto WHERE cliente_tiene_difunto.iddifunto = ".$row[0];
    echo $sql;
    $resultado = mysqli_query($conexion, $sql);
/*Aqui elimina de la tabla difunto el id guiandose de la fecha */
    $sql = "delete from difunto WHERE id = ".$row[0];
    echo $sql;
    $resultado = mysqli_query($conexion, $sql);

}
/*Aqui elimina de los datos del servicio  segun id del mismo y seleciona lo que quiere elimiar de esos servicios que se encuentra en la 
tabla contratos (idservicio) y de (idcliente) que pertenece eliminalos y da el mensaje que fue eliminado.

*/
$sql = "DELETE FROM servicios WHERE id IN (SELECT contratos.id_servicio from contratos WHERE contratos.id_cliente = ".$id.")";
echo $sql;
$resultado = mysqli_query($conexion, $sql);

$sql = "delete from contratos WHERE id_cliente = ".$id;
echo $sql;
$resultado = mysqli_query($conexion, $sql);

$sql = "delete from clientes WHERE id = ".$id;
echo $sql;
$resultado = mysqli_query($conexion, $sql);


header('location:Mensaje_eliminar_Usuario.php');    
?>