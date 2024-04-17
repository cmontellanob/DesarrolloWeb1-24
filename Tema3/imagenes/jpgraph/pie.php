<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include ("jpgraph/jpgraph_pie3d.php");

$datos = array(40,60,21,33);

$grafico = new PieGraph(400,400);
$grafico->SetShadow();

$grafico->title->Set("Grafico de quesito");
$grafico->title->SetFont(FF_FONT1,FS_BOLD);

$p1 = new PiePlot3D($datos);
$p1->SetAngle(20);
$p1->SetSize(0.5);
$p1->SetCenter(0.45);
$p1->SetLegends(array('Enero','Febrero','Marzo','Abril'));

$grafico->Add($p1);
$grafico->Stroke();
?>
