<?php


$codioSeguridad = $_POST["codioSeguridad"];
$fechaExpiracion = $_POST["fechaExpiracion"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion debito</title>
</head>
<body>
    <h1>Informacion pago tarjeta de debito</h1>
    <p>Codigo de seguridad: <?php echo $codioSeguridad; ?> </p>
    <p>Fecha de expiracion: <?php echo $fechaExpiracion; ?></p>
</body>
</html>