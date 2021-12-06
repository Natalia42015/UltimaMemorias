// Validacion de insercion difunto y de editar usuario
// Validacion de cuando has eliminado usuario correctamente
$( document ).ready(function() {
    validar();
});
function validar()
{
    if(getParameterByName("errorI") == "1")
    {
        alert("Has introducido datos incorrectos (Posiblemente el nombre del difunto este en blanco o sea duplicado..");
    }
    else if(getParameterByName("errorM") == "1")
    {
        alert("Has introducido los datos incorrectos (posiblemente el nombre del difunto sea duplicado o vacio)..");
    }
    else if(getParameterByName("errorP") == "1")
    {
        alert("Has eliminado con exito tu pedido!.");
    }
    else if(getParameterByName("errorU") == "1")
    {
        alert("Ya estan en uso ese correo o nombre por favor escriba otro.");
    }
}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
//Funcion del estilo de bootstraps datepicker

$(document).ready(function() {
    $('#datepicker').datepicker();
});
