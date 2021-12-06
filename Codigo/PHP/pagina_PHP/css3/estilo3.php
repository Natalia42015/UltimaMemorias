<?php
//Traductor formato php a css 
 header("Content-Type: text/css; charset: UTF-8 ");

?>

/*Estilo de la pagina dashboard.php*/


.botonMenu
{
    width: 85%;
    font-size: 55%;
    padding: 0;
}

.menuP
{
    margin-left:23%!important;
}
.dropdown
{
    width:100%;
}
}

.table
{
    margin: 3%;
}

td a {
    font-size: 12px!important;
}

th{
    font-weight: bold!important;
    font-size: 15px!important;
}

td {
    font-size: 15px!important;
    font-family: Arial;
   }

fooder{
    margin-top:20%;
}
/*Fin de estilo de la pagina dashboard.php*/

/*Estilo de la pagina dashboard.php parte de menu modal de registro de nuevo familiar*/
.grabar{
 padding:4%;
}

/*Estilo de la pagina dashboard.php parte de menu desplegable del encabezado*/
.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
}

.dropdown:hover {
    background-color: #fff;
}

.dropdown:hover .links {
    color: #000;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
}

/*Fin de estilo de la pagina dashboard.php parte del menu del encabezado*/

/*Estilo de editar_usuario.php y de editar_difunto.php */
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

.row{
    padding-top: 10px;
    padding-right: 20px;
}

.row {
    padding-bottom: 20px;
}

/*Fin de estilo editar_usuario.php y de editar_*/