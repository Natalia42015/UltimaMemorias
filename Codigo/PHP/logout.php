<?php
/*Cuando estamos inciados con nuestra cuenta estaremos en la pagina dashboard.php si damos en nuestro nombre y a cerrar sesión llamara este
archivo y saldra de la sesión iniciada de nuestra cuenta y volveremos a la página principal de index.html  es decir que destruira la sesion
inciada*/
    session_start();
    session_destroy();
    header('location:../index.html');
?>