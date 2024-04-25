<?php
include("conexion.php");
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ideditorial = $_POST["ideditorial"];
$anio = $_POST["anio"];

$nombre = $_FILES['imagen']['name'];  //obtenemos el nombre del archivo
$temp = $_FILES['imagen']['tmp_name']; //obtenemos la ruta del archivo en el servidor
$arreglo = explode(".", $nombre);
$extension = $arreglo[1]; // obtengo la extension del archivo
$nuevonombre = uniqid() . "." . $extension; //Le doy un nuevo nombre de archivo
copy($temp, "images/" . $nuevonombre); //copio el archivo a la carpeta de imagenes


$sql = "INSERT INTO libros (imagen,titulo, autor, ideditorial, anio ) 
values ('$nuevonombre','$titulo', '$autor', '$ideditorial', $anio)";
//echo $sql;
$result = $con->query($sql);

$titulo2 = $_POST["titulo2"];
$autor2 = $_POST["autor2"];
$ideditorial2 = $_POST["ideditorial2"];
$anio2 = $_POST["anio2"];

$nombre2 = $_FILES['imagen2']['name'];  //obtenemos el nombre del archivo
$temp2 = $_FILES['imagen2']['tmp_name']; //obtenemos la ruta del archivo en el servidor
$arreglo2 = explode(".", $nombre2);
$extension2 = $arreglo2[1]; // obtengo la extension del archivo
$nuevonombre2 = uniqid() . "." . $extension2; //Le doy un nuevo nombre de archivo
copy($temp2, "images/" . $nuevonombre2); //copio el archivo a la carpeta de imagenes


$sql = "INSERT INTO libros (imagen,titulo, autor, ideditorial, anio ) 
values ('$nuevonombre2','$titulo2', '$autor2', '$ideditorial2', $anio2)";
//echo $sql;
$result = $con->query($sql);


if (!$result) {
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se inserto con exito</div>
<ul>
    <?php
    $sql = "SELECT imagen,titulo FROM libros l";
    $result = $con->query($sql);
    $i = 1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['titulo'];
            echo '<img width="30px" src="images/'.$row['imagen'] . '">';
            echo "</li>";
        }
    }
    ?>
</ul>
