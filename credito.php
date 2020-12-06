<?php


$datosTarjeta = $_POST["datosTarjeta"];
$fechaExpiracion = $_POST["fechaExpiracion"];
$digitosSeuridad = $_POST["digitosSeuridad"];

?>´
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion Credito</title>
</head>
<body>
    <h1>Informacion pago tarjeta de credito</h1>
    <p>Datos de tarjeta: <?php echo datosTarjeta; ?> </p>
    <p>Fecha de expiracion: <?php echo fechaExpiracion ?></p>
    <p>Digitos de seguridad: <?php echo digitosSeuridad?> </p>
</body>
</html>