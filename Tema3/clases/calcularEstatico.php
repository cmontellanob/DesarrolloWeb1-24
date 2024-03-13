<?php
include("OperacionesEstatico.php");

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacion = $_GET['operacion'];


switch ($operacion) {
    case "sumar":
        echo OperacionesEstatico::sumar($num1, $num2);
        break;
    case "restar":
        echo OperacionesEstatico::restar($num1, $num2);
        break;
    case "multiplicar":
        echo OperacionesEstatico::multiplicar($num1, $num2);
        break;
    case "dividir":
        echo OperacionesEstatico::dividir($num1, $num2);
        break;
}
