<?php
$archivo = "miarchivo.txt";
$id = fopen($archivo, 'w+');
$cadena = "Aquí lo que queremos escribir".PHP_EOL;
fwrite($id, $cadena);
fwrite($id, "La segunda linea de lo que queremos escribir".PHP_EOL);
fwrite($id, "La tercera linea de lo que queremos escribir");
fclose($id); 
?>
