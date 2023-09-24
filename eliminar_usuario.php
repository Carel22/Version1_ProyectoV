<?php

include("conexion.php");
$con = conexion();

$Id_Usuario=$_GET["Id_Usuario"];

$sql="DELETE FROM usuario WHERE Id_Usuario='$Id_Usuario'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
