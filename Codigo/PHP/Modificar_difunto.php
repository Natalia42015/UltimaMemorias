<?php
/*Aqui incluimos las varibles o nombres de los campos de editar_difunto y la conexion de la base de datos */
include('db.php');

$nombre = $_POST["nombre"];
$ubicacion = $_POST["ubicacion"];

$tipo_enterramiento = $_POST["tipoenterramiento"];
$id = $_POST["id"];

/*La condicion esta es que comprueba si los campos estan vacio si no lo estan pasara a hacer su funcion*/
if($id!="" & $nombre !="" & $ubicacion!="")
{
/*Aqui seleciona  de la tabla difunto las columnas Nombre_completo y Ubicacion se diferencia segun su id esta consulta  que 
 si hay dos o mas nombres y ubicacion diferente y lo devolvera como resultado de la conexion de la base de datos sobre la consulta que se hizo 
 a count de forma arrays (se pidio en esta en concreto que se difenreciara con id ya que no devolvia nada porque no diferenciaba a nada eso
 hacia que no devolviera nada)*/
    $sql = "SELECT * FROM difunto WHERE Nombre_completo = '".$nombre."' AND Ubicacion='".$ubicacion."' AND id <>".$id;
    $resultado = mysqli_query($conexion, $sql);
    $count = mysqli_num_rows($resultado); 

/*Si el contandor del resultado de la consulta es cero significa que podra modifciar los datos y enviarlos a la base de datos lo que haya 
escrito en los campos y nos volvera a dashboard */
    if($count == 0)
    {
        $sql = "UPDATE `difunto` SET 
        `Nombre_completo` = '".$nombre."', `ubicacion` = '".$ubicacion."', `tipo_enterramiento` = '".$tipo_enterramiento."'
        WHERE `difunto`.`id` = ".$id;
    
        $resultado = mysqli_query($conexion, $sql);
        header('location:pagina_PHP/dashboard.php');
    }
    else
    {
/*si no sucede asin saltara un error que se recuperar el parametro de funciones3.js que esta en la carpeta js3 se encunetra en pagina_php */
        header('location:pagina_PHP/dashboard.php?errorM=1');
    }
}
?>