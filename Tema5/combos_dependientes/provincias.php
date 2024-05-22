<?php
include("conexion.php");
$iddepartamento=$_GET['id'];
$sql = "SELECT id, provincia FROM provincias where iddepartamento=".$iddepartamento;

$result = $con->query($sql);
$datos = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
