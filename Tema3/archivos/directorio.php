<?php
$directorio = "../";
$descriptor = opendir($directorio);
while ($entrada = readdir($descriptor) ) {
if (is_dir($directorio.$entrada) ) {
echo "[Directorio] " . $entrada . "<br>";
} elseif ( is_file ($directorio. $entrada) ) {
echo " [Fichero] " . $entrada . "<br>";
}
}
closedir($descriptor);
?>
