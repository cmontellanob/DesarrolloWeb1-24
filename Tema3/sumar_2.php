<?php
print_r($_POST);
$suma=0;
foreach ($_POST['valor'] as $valor)
  {
    $suma+=$valor;
}
echo"El valor de la suma es $suma";