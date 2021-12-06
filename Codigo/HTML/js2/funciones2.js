
/*Esta funcion hace que mande el mensaje de error a login.html cuando incia sesion y no es correcto el usuarrio o contraseña */
/*Esta funcion hace que mande el mensaje de error a register.html cuando registras y es el mismo gmail o nombre de un mensaje de que ya estan en uso */
$( document ).ready(function() {
    validar();
});
function validar()
{
    if(getParameterByName("error") == "1")
    {
        alert("Has introducido un correo o nombre de usuario que ya esta en uso, por favor intenta con otro.");
    }
    
    if(getParameterByName("error") == "2")
    {
        alert("Has introducido una combinacion de correo o nombre de usuario, clave erroneo.");
    }
}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
/*Fin de la funcion del mensaje register */
/*Fin de la funcion del mensaje login */