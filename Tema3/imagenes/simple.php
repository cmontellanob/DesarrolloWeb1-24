<?php
$imagenes=[
"andina.png",
"salesianos.png",
];

$imagen = imagecreatefrompng("images/".$imagenes[rand(0,1)]);

header("Content-Type: image/png");
imagepng($imagen);
?>
