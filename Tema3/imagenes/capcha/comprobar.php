<?php 
session_start();
if(isset($_POST["palabra"])) {
if($_POST["palabra"] == $_SESSION["oculto"])
die("¡Felicidades! Ha leído correctamente la palabra.");
else
die("No has adivinado la palabra. Prueba otra vez");
} 
?>
