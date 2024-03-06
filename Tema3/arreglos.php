<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Definicion arreglo</h1>
    <?php
    $A[0]=5;
    $A[1]="Juan";
    $B[0]=$A;
    echo $B[0][0]; 
    ?>
    <h2>Recorrido de vocale</h2>

    <?php
    $vocales=array("a","e","i","o","u");

    foreach ($vocales as $v){
        echo $v;
    }
    ?>
    <h2>Recorrido de vocale</h2>

<?php

foreach ($vocales as $indice=>$v){
    echo "vocal[".$indice."]". $v."<br>";
}
?>
<h3>arreglos cualificados </h3>
<?php
$alumno=array("nombre"=>"Juan","edad"=>15);

foreach ($alumno as $indice=>$v){
    echo "alumno[".$indice."]=". $v."<br>";
}
echo "<hr>";
$alumno2['nombre']='Ramiro';
$alumno2['edad']=20;
print_r($alumno2);
//imprimir el contenido del array   
echo "<hr>";
echo $alumno['nombre'];
echo "<hr>";
echo $alumno['edad'];
///Lista de alumnos
$alumnos[]=$alumno;
$alumnos[]=$alumno2;
// recorrer alumnos
foreach ($alumnos as $alumno){
    echo $alumno['nombre']."<br>";
    echo $alumno['edad']."<br>";
    echo "<hr>";


}
print_r($alumnos);
?>


</body>
</html>