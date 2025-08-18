<?php

// variables
$nombre = "Mundo";

$numero = 25;

// Doubles y flotantes
$numero_decimal = 10.9;

// booleanos
$veradero = true;

$edad;

define("PI", 3.14159);

// Eco nos sirve para mostrar información en pantalla
//echo "Hola mundo";
// También podemos incluir archivos PHP para organizar mejor nuestro código

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación PHP</title>
</head>
<body>
 <h1>Bienvenido a mi aplicación PHP</h1>
    <p>Hola, <?php echo $nombre; ?>!</p>
    <p>El número es: <?php echo $numero; ?></p>
</body>
</html>

