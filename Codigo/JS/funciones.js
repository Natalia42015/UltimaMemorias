/*Esta funcion cambia entre las imagenes como si fueran diapositivas de un power point con su intervalo de tiempo que cambia entre ellas
 */
jQuery(document).ready(function() {
    setTimeout(main(), 2000);
});
function main(){
$('#myCarousel').carousel({interval: 5000});
}   
