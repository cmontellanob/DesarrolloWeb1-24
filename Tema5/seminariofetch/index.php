<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IV Seminario Internacional de Derecho Agrario</title>
  <link rel="stylesheet" href="estilo.css" type="text/css" />

  <script src="apifetch.js" type="text/javascript"></script>
   </head>

<body>

  <div id="contenedor">
    <div id="marco" align="center">
      Seminario Internacional
    </div>
    <div id="navBar">
      <div id="sectionLinks" align="left">
        <ul>
          <li><a href='javascript:cargarContenido("Presentacion.html")'>Presentación</a></li>
          <li><a href='javascript:cargarContenido("objetivos.html")'>Objetivos e Importancia </a></li>
          <li><a href='javascript:cargarContenido("Paises.html")'>Paises participantes</a></li>
          <li><a href='javascript:cargarContenido("Ejes.html")'>Ejes Temáticos</a></li>
          <li><a href='javascript:cargarContenido("Programa.html")'>Programa</a></li>
          <li><a href='javascript:cargarContenido("Lugar.html")'>Lugar y Fecha del Evento </a></li>
          <li><a href='javascript:cargarContenido("Dirigido.html")'>Dirigido a</a></li>
          <li id="resaltar"><a href='javascript:cargarContenido("Inscripciones.html")' id="resaltar">Información de Inscripciones y Costos</a></li>
          <li><a href='javascript:cargarContenido("FormInscripciones.html")'>Formulario Pre-Inscripcion</a></li>
        </ul>
      </div>
      <div class="relatedLinks" align="left">
        <h3>Enlaces de Interes</h3>
        <ul>
          <li><a href="http://www.centroelcampo.com.bo/" target="_blank" a>Salon de Eventos el Campo </a></li>
          <li><a href="http://tan.poderjudicial.gov.bo" target="_blank">Tribunal Agrario Nacional </a></li>
          <li><a href="http://www.boliviacontact.com/Hoteles_Cochabambas.html" target="_blank">Hoteles Cochabamba </a></li>
          <li><a href="http://www.boliviaenlared.com/html/cochabamba-guia-turismo.html" target="_blank">Turismo Cochabamba </a></li>
        </ul>
      </div>
      <div align="left" id="ingreso" class="ingreso">
        <?php if ($_SESSION['nivel'] > 1) {
          include('menuadm.php');
        } else { ?>
          Ingreso Privado
          <div>
            <?php include('frmLogin.html'); ?>
          </div>
        <?php } ?>
      </div>
    </div>
    <div id="contador2"></div>
    <div id="contenido" align="justify">

      <h2 id="pageName">Presentaci&oacute;n</h2>
      <div class="feature"> <img id="centro" src="images/manitos.jpg" alt="" width="281" height="200" />
        <p> El Tribunal Agrario Nacional tiene el agrado de invitar a
          todos los profesionales abogados, universitarios, docentes, organizaciones sociales, empresarios y personas&nbsp; particulares a participar del IV Seminario Internacional organizado por el Tribunal Agrario Nacional bajo el tema rector &quot;El Derecho Agroambiental un Derecho Universal&quot; ,a Realizarse del 6 al 8 de mayo de 2009 en la ciudad de Cochabamba </p>
      </div>
      <div class="story">
        <div id="afiche"><a href='javascript:cargarContenido("Afiche.asp")'><img src="images/afiche.jpg" alt="Afiche" width="65" height="95" border="0"></a></div>
        <div id="cuerpoafiche"> &rdquo;POR UNA JUSTICIA AGROAMBIENTAL INTERCULTURAL CON EQUIDAD&rdquo;</div>
        <p align="left"> Con el gentil auspicio de:<a href='javascript:cargarContenido("Auspiciadores.asp")'><img src="images/ausp.jpg" alt="Auspiciadores" width="549" height="78" border="0"></a></a></p>
      </div>
      <!--end navbar -->
    </div>
    <div id="siteInfo"><a href="mailto:tan@poderjudicial.gov.bo">Escribanos aqui para cualquier consulta</a> | &copy;2009 Dpto Informatica Tribunal Agrario Nacional: tan@poderjudicial.gov.bo </div>

  </div>

</body>

</html>