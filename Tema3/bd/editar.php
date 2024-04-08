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

if ($_FILES['fotografia']['name']!='')
{
$nombre=$_FILES['fotografia']['name'];  //obtenemos el nombre del archivo
$temp=$_FILES['fotografia']['tmp_name']; //obtenemos la ruta del archivo en el servidor
$arreglo=explode(".", $nombre);
$extension=$arreglo[1];// obtengo la extension del archivo
$nuevonombre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
copy ($temp,"images/".$nuevonombre);//copio el archivo a la carpeta de imagenes
} else
{
    $nuevonombre=$_POST['foto'];
}

$sql= "UPDATE PERSONAS set nombres='$Nombres', apellidos='$Apellido', 
sexo='$Sexo', edad=$Edad, ocupacion_id='$Ocupacion_id',fotografia='$nuevonombre' WHERE id=$id";
//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al editar datos: " . $con->error);
}
?>
<div>Se edito con exito</div>
<meta http-equiv="refresh" content="5; url=read.php">