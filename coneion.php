<?php
function conexion(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "ProyectoV";
/*METODO*/
    $connect=mysqli_connect($host, $user, $pass);
/*SELECCIONAMOS LA BD */
    mysqli_select_db($connect, $bd);

    return $connect;

}
?> 
