<?php
    include('db.php');
    /*Aqui modifico en la tabla contratos y columna realizado  de pendiente lo cambia por hecho segun su identificacion o cable primaria 
    fecha  luego volvera a dashboard*/
    $sql = "UPDATE contratos SET Realizado = 'HECHO' WHERE Fecha = '".$_GET["idP"]."'";
    echo $sql;
    $resultado = mysqli_query($conexion, $sql);

    header('location:dashboard.php');
    
?>