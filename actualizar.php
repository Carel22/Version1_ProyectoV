 <?php 
    include("conexion.php");
    $con=conexion();
    $Id_Usuario=$_GET['Id_Usuario'];
    $sql="SELECT * FROM usuario WHERE Id_Usuario='$Id_Usuario'";
    $query=mysqli_query($con, $sql);
/*DEFINIMOS UN row=fila; obteniendo l usuario especifio */
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilos.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="editar_usuario.php" method="POST">
                <h1>Editar Usuarios</h1>
                <input type="hidden" name="Id_Usuario" value="<?= $row['Id_Usuario']?>">
                <input type="text" name="nom" placeholder="Nombre" value="<?= $row['nom']?>">
                <input type="text" name="ap_paterno" placeholder="Apellido Paterno" value="<?= $row['ap_paterno']?>">
                <input type="text" name="ap_materno" placeholder="Apellido Materno" value="<?= $row['ap_materno']?>">
                <input type="text" name="Ci" placeholder="CI" value="<?= $row['Ci']?>">
                <input type="text" name="genero" placeholder="Género" value="<?= $row['genero']?>">
                <input type="text" name="estado_civil" placeholder="Estado Civil" value="<?= $row['estado_civil']?>">
                <input type="email" name="email" placeholder="Email" value="<?= $row['email']?>">
                <input type="text" name="telefono" placeholder="Teléfono" value="<?= $row['telefono']?>">
                <input type="text" name="telefono_de_emergencia" placeholder="Teléfono" value="<?= $row['telefono_de_emergencia']?>">
                <input type="text" name="fecha_nac" placeholder="Fecha de Nacimiento" value="<?= $row['fecha_nac']?>">
                <input type="password" name="password" placeholder="Contraseña" value="<?= $row['password']?>">


                <input type="submit" value="Actualizar Informacion">  
            </form>
        </div>
    </body>
</html>
