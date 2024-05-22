<?php
include("conexion.php");

$sql = "SELECT id, departamento FROM departamentos ";

$result = $con->query($sql);
$datos = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
