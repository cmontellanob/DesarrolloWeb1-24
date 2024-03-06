<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_GET['cadena'])) {
        $cadena = $_GET['cadena'];
        $arreglo = explode(" ", $cadena);
        $ps = 0;
        $mayor = 0;
        foreach ($arreglo as $indice => $valor) {
            if (strlen($valor) > $mayor) {
                $ps = $indice;
                $mayor = strlen($valor);
            }
        }
        echo  "la palabra mas larga es" . $arreglo[$ps];
    } else {
    

    echo '<form action="maslargo2.php" method="get">';
    echo '<label for="cadena">cadena</label>';
    echo '<div>';
    echo '<input type="text" name="cadena">';
    echo ' </div>';
    echo '<input type="submit" value="Enviar">';
    echo ' </form>';
    } ?>
</body>

</html>