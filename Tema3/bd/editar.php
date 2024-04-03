<?php
include("conexion.php");
include('verificar.php');
include('permisos.php');
$id=$_POST['id'];
$Nombres = $_POST["nombre"];
$Apellido = $_POST["apellidos"];
$Edad = $_POST["edad"];
$Sexo = $_POST["sexo"];
$Ocupacion_id = $_POST["ocupacion_id"];

$sql= "UPDATE PERSONAS set nombres='$Nombres', apellidos='$Apellido', 
sexo='$Sexo', edad=$Edad, ocupacion_id='$Ocupacion_id' WHERE id=$id";
//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al editar datos: " . $con->error);
}
?>
<div>Se edito con exito</div>
<meta http-equiv="refresh" content="5; url=read.php">