<?php
$operacion=$_GET['operacion'];
$num1=$_COOKIE['num1'];
$num2=$_COOKIE['num2'];

switch ($operacion){
case "sumar":
    $res=$num1+$num2;
    break;
case "restar":
        $res=$num1-$num2;
        break;
        case "multiplicar":
            $res=$num1*$num2;
            break;
        }
echo "la ".$operacion. " es ".$res;                
    

?>