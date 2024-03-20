<?php
include("conexion.php");

$Nombres = $_POST["nombre"];
$Apellido = $_POST["apellidos"];
$Edad = $_POST["edad"];
$Sexo = $_POST["sexo"];
$Ocupacion = $_POST["ocupacion"];

$sql= "INSERT INTO PERSONAS (nombres, apellidos, sexo, edad, ocupacion ) values ('$Nombres', '$Apellido', '$Sexo', $Edad, '$Ocupacion')";
//echo $sql;
$result = $con->query($sql);  
?>