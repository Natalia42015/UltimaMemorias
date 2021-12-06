<?php
/*Esto es lo que se encarga de cancelar el pedido es decir cuando le damos comprar algo nos lleva a la pagina pedidos.php hay un enlace que 
si queremos cancelar algo le demos click a darle se activara esto eliminara el contrado que hemos hecho a la hora de comprar y volvemos a la
 pagina de pedidos.php*/

include('db.php');
$id = $_GET["pedido"];
/*Aqui consulta a contratos y pide eliminar contratatos segun la id de fecha que sea */
$sql = "DELETE FROM contratos WHERE Fecha = '".$id."'";
echo $sql;
/*luego regresa a dashboard con el mensaje del que pedido se ha eliminado con exito   */
$resultado = mysqli_query($conexion, $sql);
header('location:pagina_PHP/dashboard.php?errorP=1');    

?>