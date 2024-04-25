<?php
$operacion=$_GET['operacion'];
$cadena=$_COOKIE['cadena'];

switch ($operacion){
case "mayuscula":
    $res=strtoupper($cadena);
    break;
case "minuscula":
    $res=strtolower($cadena);
            break;
        
case "oracion":
    $res=ucfirst($cadena);
    break;

}
echo "la ".$operacion. " es ".$res;                
    

?>