<?php
include("conexion.php");
include('verificar.php');
include('permisos.php');

$id=$_GET['id'];

$sql= "DELETE FROM  PERSONAS where id=$id";
//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al eliminar datos: " . $con->error);
}
?>
<div>Se elimino con exito</div>
<meta http-equiv="refresh" content="5; url=read.php">