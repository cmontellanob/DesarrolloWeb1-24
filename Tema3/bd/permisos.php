<?php 
if ($_SESSION['nivel']==0) {
?>
    <meta http-equiv="refresh" content="3; url=read.php">
<?php
    die('No esta Autorizado para realizar esta accion');
}
?>