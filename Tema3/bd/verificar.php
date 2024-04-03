<?php session_start();
if (!isset($_SESSION['correo'])) {
?>
    <meta http-equiv="refresh" content="3; url=form_login.html">
<?php
    die('Acceso Denegado');
}
?>