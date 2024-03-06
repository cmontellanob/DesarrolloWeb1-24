<?php
$cadena=$_POST['cadena'];
$arreglo=explode(" ",$cadena);
$ps=0;
$mayor=0;
foreach ($arreglo as $indice=>$valor)
{
 if (strlen($valor)>$mayor)
 {
    $ps=$indice;
    $mayor=strlen($valor);

 }

}
echo  "la palabra mas larga es" .$arreglo[$ps];

?>