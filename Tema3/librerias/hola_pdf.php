<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->WriteHTML('<p>¡Hola mundo!</p>');
$mpdf->WriteHTML('<table border="1">');
$mpdf->WriteHTML('<tr><td>1</td><td>2</td></tr>');
$mpdf->WriteHTML('<tr><td>3</td><td>4</td></tr>');
$mpdf->WriteHTML('</table>');
$mpdf->Output();

?>