<?php
include("conexion.php");

$Nombres = $_POST["nombre"];
$Apellido = $_POST["apellidos"];
$Edad = $_POST["edad"];
$Sexo = $_POST["sexo"];
$Ocupacion_id = $_POST["ocupacion_id"];

// $nombre=$_FILES['fotografia']['name'];  //obtenemos el nombre del archivo
// $temp=$_FILES['fotografia']['tmp_name']; //obtenemos la ruta del archivo en el servidor
// $arreglo=explode(".", $nombre);
// $extension=$arreglo[1];// obtengo la extension del archivo
// $nuevonobre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
// copy ($temp,"images/".$nuevonobre);//copio el archivo a la carpeta de imagenes

$sql= "INSERT INTO PERSONAS (nombres, apellidos, sexo, edad, ocupacion_id) 
values ('$Nombres', '$Apellido', '$Sexo', $Edad, $Ocupacion_id)";
//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se inserto con exito</div>
