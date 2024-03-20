<?php
include ('Cola.php');
session_start();
if (!isset($_SESSION['c'])) {
echo "error no hay elementos";
}
else
{
$valor=$_SESSION['c']->eliminar();
echo "el valor eliminado es ".$valor;
}
?>
<meta http-equiv="refresh" content="4;url=menu_cola.html">
