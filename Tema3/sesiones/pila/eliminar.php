<?php
include ('pila.php');
session_start();
if (!isset($_SESSION['p'])) {
echo "error no hay elementos";
}
else
{
$valor=$_SESSION['p']->eliminar();
echo "el valor eliminado es ".$valor;
}
?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">
