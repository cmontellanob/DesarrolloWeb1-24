<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    setcookie('num1', $num1, 0);
    setcookie('num2', $num2, 0);
    ?>
    <li><a href="operacion.php?operacion=sumar">Sumar</a></li>
    <li><a href="operacion.php?operacion=restar">Restar</a></li>
    <li><a href="operacion.php?operacion=multiplicar">Multiplicar</a></li>




</body>

</html>