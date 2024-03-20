<?php
include('Cola.php');
session_start();
if (!isset($_SESSION['c'])) {
    $_SESSION['c'] = new Cola();
}
$valor = $_GET['valor'];
$_SESSION['c']->insertar($valor);
?>
<meta http-equiv="refresh" content="4;url=menu_cola.html">