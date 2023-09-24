<?php 
    include("conexion.php");
    $con=conexion();

    $Id_Usuario=$_POST['Id_Usuario'];
    $nom = $_POST['nom'];
    $ap_paterno = $_POST['ap_paterno']; 
    $ap_materno= $_POST['ap_materno'] ;
    $Ci  = $_POST['Ci']; 
    $genero = $_POST['genero'];  
    $estado_civil= $_POST['estado_civil'];  
    $email= $_POST['email'];  
    $telefono= $_POST['telefono'];  
    $telefono_de_emergencia= $_POST['telefono_de_emergencia'];  
    $fecha_nac= $_POST['fecha_nac'];  
    $password= $_POST['password'];  
   
    $sql = "UPDATE usuario SET Id_Usuario='$Id_Usuario', nom='$nom', ap_paterno='$ap_paterno', ap_materno='$ap_materno',Ci='$Ci', genero='$genero', estado_civil='$estado_civil',email='$email',telefono='$telefono',telefono_de_emergencia='$telefono_de_emergencia',fecha_nac='$fecha_nac',password='$password'  WHERE Id_Usuario='$Id_Usuario'";
    $query=mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    }else{
    
    }

?>

