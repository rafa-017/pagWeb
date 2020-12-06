<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$contraseña = $_["contraseña"];
$confirmar_contraseña = $_POST["confirmar_contraseña"];
$telefono = $_POST["telefono"];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Datos de registro</h1>
    <form action="" >
        <p>Nombre: <?php echo $nombre; ?></p>
        <p>Apellido: <?php echo $apellido; ?></p>
        <p>Correo: <?php echo $correo; ?> </p>
        <p>Contraseña: <?php echo $contraseña; ?></p>
        <p>Confirmar contraseña: <?php echo confirmar_contraseña ?></p>
        <p>Telefono: <?php echo $telefono; ?> </p>
    </form>
</body>
</html>
