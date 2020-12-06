<?php 


$nombreDueño = $_POST["nombreDueño"];
$apellidoDueño = $_POST["apellidoDueño"];
$tipoMascota = $_POST["tipoMascota"];
$razaMascota = $_POST["razaMascota"];
$sexo = $_POST["sexo"];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion medico</title>
</head>
<body>
    <h1>Informacion datos hora medica</h1>
    <p>Nombre del dueño: <?php echo $nommbreDueño; ?></p>
    <p>Apellido del dueño: <?php echo $$apellidoDueño; ?></p>
    <p>Tipo de mascota: <?php echo $tipoMascota; ?></p>
    <p>Raza de mascota: <?php echo $razaMascota ?></p>
    <p>Sexo: <?php echo $sexo; ?></p>
</body>
</html>