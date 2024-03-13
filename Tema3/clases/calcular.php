<?php 
include ("Operaciones.php");

$num1=$_GET['num1'];
$num2=$_GET['num2'];
$operacion=$_GET['operacion'];

$o= new Operaciones($num1, $num2);

switch ($operacion){
    case "sumar": echo $o->sumar();
        break;
    case "restar": echo $o->restar();
        break;
    case "multiplicar": echo $o->multiplicar();
        break;
    case "dividir": echo $o->dividir();
        break;
}


?>