<?php
include("conexion.php");
$con = conexion();

$Id_Usuario = null;
$nom = $_POST['nom'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$Ci = $_POST['Ci'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$telefono_de_emergencia = $_POST['telefono_de_emergencia'];
$fecha_nac = $_POST['fecha_nac'];
$password = $_POST['password'];

// Función para validar si una nom contiene solo letras
function validarnom($nom) {
    return preg_match('/^[A-Za-z]+$/', $nom);
}

/*CONSULTA PARA VERIFICAR QUE EL REGISTRO EXISTA */
$validar = "SELECT * FROM usuario WHERE email = '$email' || Ci = '$Ci' ";
$validando = $con->query($validar); // Utiliza la conexión $con que obtuviste con la función conexion()

if($validando->num_rows > 0){
    echo '<script>alert("El correo electrónico o el CI ya están registrados. Por favor, utilice una dirección de correo o CI diferente.");</script>';
}
else {
    // Validación de campos antes de insertar
    if (
        validarnom($nom) &&
        validarnom($ap_paterno) &&
        validarnom($ap_materno) &&
        validarnom($genero) &&
        validarnom($estado_civil) 
        
    ) {
        // Crear la sentencia SQL para insertar
        $sql = "INSERT INTO usuario (nom, ap_paterno, ap_materno, Ci, genero, estado_civil, email, telefono, telefono_de_emergencia, fecha_nac, password) VALUES ('$nom', '$ap_paterno', '$ap_materno', '$Ci', '$genero', '$estado_civil', '$email', '$telefono', '$telefono_de_emergencia', '$fecha_nac', '$password')";
        
        $query = mysqli_query($con, $sql);
        
        if ($query) {
            // Registro exitoso, muestra una ventana emergente
            echo '<script>alert("REGISTRO CON ÉXITO");</script>';
            // Redirecciona al usuario de vuelta a la página index.php
            echo '<script>window.location.href = "index.php";</script>';
        } else {
            // Manejar errores en caso de que la consulta no se ejecute correctamente
            echo '<script>alert("Error en el registro. Por favor, inténtelo nuevamente.");</script>';
            // Redirecciona al usuario de vuelta a la página index.php
            echo '<script>window.location.href = "index.php";</script>';
        }
    } else {
        // Mostrar un mensaje de error si los campos no cumplen con la validación
        echo '<script>alert("Error en tipo de dato. Los campos deben contener solo letras.");</script>';
        // Redirecciona al usuario de vuelta a la página index.php
        echo '<script>window.location.href = "index.php";</script>';
    }
}
?>
