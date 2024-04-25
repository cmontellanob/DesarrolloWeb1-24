<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cadena = $_GET['cadena'];
    setcookie('cadena', $cadena, 0);
    ?>
    <li><a href="operacion.php?operacion=mayuscula">Mayuscula</a></li>
    <li><a href="operacion.php?operacion=minuscula">Minuscula</a></li>
    <li><a href="operacion.php?operacion=oracion">Oracion</a></li>




</body>

</html>