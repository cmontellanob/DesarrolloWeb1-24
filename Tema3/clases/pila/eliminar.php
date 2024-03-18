<?php
include ('pila.php');
$p=new Pila();
$valor=$p->eliminar();
echo "el valor eliminado es ".$valor;
?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">
