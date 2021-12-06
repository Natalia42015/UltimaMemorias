<?php
/*Cuando nos encontramos en index.html le damos inciar sesion y es cuando actua este archivo seleciona todo la tabla cientes y inciamos con 
los valores nombre del cliente y su contraseña*/
$usuario = $_POST["username"];
$contra = $_POST["password"];

/*Aqui Selecionamos de la tabla cliente el nombre o el gmail que se puede escribir para entrar en la cuenta y tambien la contraseña
aqui pide una consulta de si exiten los datos que se escribieron correctamente y devuelve el resultado de la consulta mediante count de 
forma de arrays */
$sql = "SELECT  * FROM `clientes` WHERE (`email` = '".$usuario."' OR `Nombre_completo` = '".$usuario."') AND (`clave` = '".$contra."')";
echo $sql;
session_start();
include('db.php');
$resultado = mysqli_query($conexion, $sql);
$count = mysqli_num_rows($resultado);  
/*claro si el contandor es uno significa que exite los datos y incia sesion y nos lleva a la pagina dashboard.php para hacer nuestras 
gestiones pero si no volvera a la pagina de login y dara un error que mi error se llama error1 */
if($count == 1){  
    $row = $resultado->fetch_row();
    $id = $row[0] ?? false;
    $_SESSION["usuario"] = $usuario;
    $_SESSION["id"] = $id;
    echo $usuario;
    echo $id;
   header('location:pagina_PHP/dashboard.php');
}
else 
{
   header('location:../HTML/login.html?error=2');
}


?>