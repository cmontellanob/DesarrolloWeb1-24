<?php
include("conexion.php");
include('verificar.php');
$Nombres = $_POST["nombre"];
$Apellido = $_POST["apellidos"];
$Edad = $_POST["edad"];
$Sexo = $_POST["sexo"];
$Ocupacion_id = $_POST["ocupacion_id"];

$sql= "INSERT INTO PERSONAS (nombres, apellidos, sexo, edad, ocupacion_id ) values ('$Nombres', '$Apellido', '$Sexo', $Edad, $Ocupacion_id)";
//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se inserto con exito</div>
<meta http-equiv="refresh" content="5; url=read.php">