<?php
/*Este archivo actua cuando nosotros estamos en index.html y le damos registrarnos es la pagina llamada register.html que es un formulario que 
al rellenar y dar el boton enviar se mandara los datos a este archivo php y este se encargara insertar los datos a la base de datos 
ultimamemorias en la tabla clientes ya que este registar la cuenta del cliente y cuando se regitra le enviara a dashboard.php es la pagina que 
registra a difuntos*/

/*Son las variables de los campos de editar_usuario */
$email = $_POST["email"];
$usuario = $_POST["username"];
$contra = $_POST["password"];
$celu = $_POST["celular"];
$fechanacimiento = $_POST["fechanacimiento"];
$direccion = $_POST["direccion"];
$cp = $_POST["cp"];


include('db.php');
/*Aqui seleciona  la tabla cliente el Nombre_completo o el email que consulta con las base de datos lo que escribo el usuario en usuario y 
email devuelve el resultado de la conexion de la consulta sql en count forma de arrays*/
$sql = "SELECT * FROM clientes WHERE (Nombre_completo = '".$usuario."' OR email = '".$email."')";
echo $sql;

$resultado = mysqli_query($conexion, $sql);
$count = mysqli_num_rows($resultado); 

/*Si el resultado es mayor que cero es porque exite esos datos duplicados y yo quiero validar con esa consulta que el nombre o el gmail no se
pueda repetir y si es asin que devolvio ese resultado saltara error y si devuelve menor que cero entonces se podra insertar los datos*/
if($count > 0)
{
  header('location:../HTML/register.html?error=1'); 
}
else
{
  /*Aqui inserta los datos en la tabla cliente para ello dice donde quiere insertar los datos de cada campo del formulario de register (que 
  rellena el usuario) en cada columna de la base de datos y devuelve el resultado inciando sesion si*/
  $sql = "INSERT INTO `clientes` (`Nombre_completo`, `email`, `telefono`, `clave`, `direccion`, `Nacimiento`, `cp`) VALUES ('".$usuario."','".$email."','".$celu."', '".$contra."','".$direccion."','".$fechanacimiento."','".$cp."')";
 // echo $sql;
  session_start();
  $resultado = mysqli_query($conexion, $sql);
  $_SESSION["usuario"] = $usuario;
  
  $id = mysqli_insert_id($conexion);
  echo $id;
  $_SESSION["id"] = $id;  
  
   /* *Si el resultado es mayor que cero entrara en la pagina ya que se creo ese nuevo usuario y entrara en la pagina principal pero si ya exitia y devuelve 
   uno y uno nos dara error
   */
  if($id > 0)
  {
      header('location:pagina_PHP/dashboard.php');
  }
  else
  {
      header('location:../HTML/register.html?error=1');
  }
}
?>