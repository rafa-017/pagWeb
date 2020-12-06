<?php 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tipo = $_POST["tipo"];
$raza = $_POST["raza"];
$sexo = $_POST["sexo"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos peluqueria </title>
</head>
<body>
    <h1>Informacion de datos de peluqueria</h1>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Apellido: <?php echo $apellido ?></p>
    <p>Tipo de mascota: <?php echo $tipo; ?></p>
    <p>Sexo: <?php echo $sexo ?></p>
</body>
</html>
