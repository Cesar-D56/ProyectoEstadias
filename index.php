<?php
include 'scripts/db-connection.php';
session_start();

/*echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
  $var = $_SESSION['tipo'];

  $name_user = $_SESSION['nombre'];
  $titulo = $_SESSION['titulo'];
  //$class = new Database();
}else{
  $var = "Not set";
  $name_user = "";
  $titulo = "";
  //$class = new Database();  
}
$java = array('tipo' => $var);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
<!-- ===================================================================================================

        Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón.

        3er. generación de la Plataforma del Conocimiento
        Desarrollado por Ing. Guillermo Valdés Lozano <guivaloz en movimientolibre.com>

        El software que lo construye está bajo la licencia GPL versión 3. © 2014, 2015, 2016, 2017.
        Una copia está contenida en el archivo LICENCE al bajar desde GitHub.

        Al usar, estudiar y copiar está aceptando los términos de uso de la información y del sitio web:
          http://www.trcimplan.gob.mx/terminos/terminos-informacion.html
          http://www.trcimplan.gob.mx/terminos/terminos-sitio.html

        Descargue, estudie y colabore bajando todo este sitio web:
          IMPLAN Torreón     https://github.com/TRCIMPLAN/trcimplan.github.io

        Agradecemos y compartimos las tecnologías abiertas y gratuitas sobre las que se basa:
          PHP                http://php.net
          Twitter Bootstrap  http://getbootstrap.com
          StartBootStrap     http://startbootstrap.com
          Morris.js          https://morrisjs.github.io/morris.js/
          Font Awesome       http://fontawesome.io
          DataTables         https://www.datatables.net
          Carto              https://carto.com
          GitHub             https://github.com

     =================================================================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.">
  <meta name="author" content="IMPLAN Torreón">
  <meta name="keywords" content="IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="IMPLAN Torreón">
  <meta name="twitter:description" content="Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.">
  <meta name="twitter:image" content="http://www.trcimplan.gob.mx/imagenes/imagen-previa.jpg">
  <meta name="twitter:url" content="http://www.trcimplan.gob.mx/index.html">
  <meta name="og:title" content="IMPLAN Torreón">
  <meta name="og:description" content="Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.">
  <meta name="og:image" content="http://www.trcimplan.gob.mx/imagenes/imagen-previa.jpg">
  <meta name="og:url" content="http://www.trcimplan.gob.mx/index.html">
  <meta name="google-site-verification" content="Hz-cnyG17CBaAXopvSHn7J81Za2cmg4dvnRh1VJE7ks">
  <title>IMPLAN Torreón</title>
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/apple-touch-icon.png">
  <link rel="apple-touch-icon" href="imagenes/apple-touch-icon.png">
  <link rel="apple-touch-icon" href="imagenes/apple-touch-icon-76x76.png" sizes="76x76">
  <link rel="apple-touch-icon" href="imagenes/apple-touch-icon-120x120.png" sizes="120x120">
  <link rel="apple-touch-icon" href="imagenes/apple-touch-icon-152x152.png" sizes="152x152">
  <link rel="apple-touch-icon" href="imagenes/apple-touch-icon-180x180.png" sizes="180x180">
  <link rel="icon" href="imagenes/icon-hires.png" sizes="192x192">
  <link rel="icon" href="imagenes/icon-normal.png" sizes="128x128">
  <link rel="alternate" type="application/rss+xml" href="rss.xml" title="IMPLAN Torreón">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/datatables-plugins/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="vendor/morrisjs/morris.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="dist/css/sb-admin-2.min.css">
  <link rel="stylesheet" type="text/css" href="dist/css/plataforma-de-conocimiento.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Noto+Sans|Roboto+Condensed:400,700">
  <link rel="stylesheet" type="text/css" href="http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css">
  <link rel="stylesheet" type="text/css" href="dist/css/estilosvm.css">
  <link rel="stylesheet" type="text/css" href="dist/css/trcimplan.css">
  <link rel="stylesheet" type="text/css" href="dist/css/accounts.css">
  <!-- SOPORTE PARA IE -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!--EMPIEZA MENU LATERAL-->
<div id="wrapper">
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img class="navbar-brand-img" src="imagenes/implan-barra-logo-chico-gris.png" alt="IMPLAN Torreón"></a>
    </div>
<!--EMPIEZA MENU LATERAL-->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search">
          <form method="get" action="http://www.trcimplan.gob.mx/buscador-resultados.html">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Google buscar..." value="" name="q">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
        </li>
        <li class="UsrAdmin UsrDir UsrEmp UsrPriv usrAccess">
          <p class="nav-user">
            Bienvenido: <b><?php echo $titulo;?> <?php echo $name_user;?></b>
          </p>
          <li class="UsrAdmin UsrDir UsrEmp UsrPriv usrAccess"><a href="users/profile.php"><span class="navegacion-icono"><i class="fa fa-user"></i></span> Mi Cuenta</a></li>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-lightbulb-o"></i></span> Análisis Publicados<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="blog/index.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Últimos Análisis</a></li>
            <li><a href="excolaboradores/index.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Análisis por Autor</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-area-chart"></i></span> Indicadores<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="smi/introduccion.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Introducción al SMI</a></li>
            <li><a href="indicadores-categorias/index.html"><span class="navegacion-icono"><i class="fa fa-th-list"></i></span> Indicadores por Categoría</a></li>
            <li><a href="smi/por-region.html"><span class="navegacion-icono"><i class="fa fa-table"></i></span> Indicadores por Región</a></li>
            <li><a href="smi/datos-abiertos.html"><span class="navegacion-icono"><i class="fa fa-download"></i></span> Datos Abiertos</a></li>
            <li><a href="smi/niveles-socioeconomicos.html"><span class="navegacion-icono"><i class="fa fa-bar-chart"></i></span> Niveles Socioeconómicos</a></li>
            <li><a href="monitores/index.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Monitores</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-puzzle-piece"></i></span> Indicadores Básicos de Colonias<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="ibc/introduccion.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Introducción al IBC</a></li>
            <li><a href="ibc-colonias-torreon/index.html"><span class="navegacion-icono"><i class="fa fa-font"></i></span> Colonias de Torreón</a></li>
            <li><a href="https://implantorreon.carto.com/u/sigimplan/builder/907a6bc0-2c7e-451e-9668-b78d952e52ff/embed" target="_blank"><span class="navegacion-icono"><i class="fa fa-external-link"></i></span> Mapa Completo</a></li>
            <li><a href="ibc/torreon-urbano.html"><span class="navegacion-icono"><i class="fa fa-table"></i></span> Torreón Urbano</a></li>
            <li><a href="ibc/datos-abiertos.html"><span class="navegacion-icono"><i class="fa fa-download"></i></span> Datos Abiertos</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-map-marker"></i></span> Información Geográfica<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="sig/introduccion.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Introducción al SIG</a></li>
            <li><a href="sig-mapas-torreon/temas-sig.html"><span class="navegacion-icono"><i class="fa fa-map-o"></i></span> Mapas por Tema</a></li>
            <li><a href="sig-mapas-torreon/plan-director-desarrollo-urbano.html"><span class="navegacion-icono"><i class="fa fa-map-marker"></i></span> Usos de Suelo</a></li>
            <li><a href="sig/datos-abiertos.html"><span class="navegacion-icono"><i class="fa fa-download"></i></span> Datos Abiertos</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-book"></i></span> Plan Estratégico Torreón 2040<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="pet/indice.html"><span class="navegacion-icono"><i class="fa fa-list-ul"></i></span> Índice General</a></li>
            <li><a href="plan-estrategico-torreon-enfoque-metropolitano-2040/index.html"><span class="navegacion-icono"><i class="fa fa-download"></i></span> Descargar</a></li>
            <li><a href="plan-estrategico-metropolitano/descripcion-del-proceso.html"><span class="navegacion-icono"><i class="fa fa-calendar"></i></span> Descripción del proceso</a></li>
            <li><a href="proyectos/index.html"><span class="navegacion-icono"><i class="fa fa-check-square"></i></span> Proyectos</a></li>
            <li><a href="vision-de-ciudad/vision-de-ciudad.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Visión de Ciudad desde IMPLAN</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-briefcase"></i></span> Documentos<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="sig-planes/index.html"><span class="navegacion-icono"><i class="fa fa-book"></i></span> Planes y Programas</a></li>
            <li><a href="investigaciones/index.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Investigaciones</a></li>
            <li><a href="estudios/index.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Estudios</a></li>
          </ul>
        </li>
        <li><a href="consejo-directivo/integrantes.html"><span class="navegacion-icono"><i class="fa fa-users"></i></span> Consejo Directivo</a></li>
        <li><a href="sala-prensa/index.html"><span class="navegacion-icono"><i class="fa fa-newspaper-o"></i></span> Sala de Prensa</a></li>
        <li><a href="programas-radio/index.html"><span class="navegacion-icono"><i class="fa fa-microphone"></i></span> Programas de Radio</a></li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Consejo Visión Metrópoli<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="convocatorias/vision-metropoli.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Consejo Juvenil</a></li>
            <li><a href="vision-metropoli/integrantes.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Integrantes del Consejo</a></li>
            <li><a href="vision-metropoli/index.html"><span class="navegacion-icono"><i class="fa fa-newspaper-o"></i></span> Sala de Prensa</a></li>
            <li><a href="vision-metropoli/reglamento-vision-metropoli-2020.pdf"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Reglamento</a></li>
            <li><a href="https://issuu.com/consejovisionmetropoli/docs/informe_visi_n_metr_poli_2019_-_2021" target="_blank"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Informe 2019 - 2021</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-building-o"></i></span> Institucional<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="institucional/vision-mision.html"><span class="navegacion-icono"><i class="fa fa-trophy"></i></span> Misión / Visión</a></li>
            <li><a href="institucional/NuestrosProyectos.html"><span class="navegacion-icono"><i class="fa fa-pencil-square-o"></i></span> Nuestros Proyectos</a></li>
            <li><a href="institucional/mensaje-director.html"><span class="navegacion-icono"><i class="fa fa-comment"></i></span> Mensaje del Director</a></li>
            <li><a href="autores/index.html"><span class="navegacion-icono"><i class="fa fa-user"></i></span> Quienes Somos</a></li>
            <li><a href="institucional/estructura-organica.html"><span class="navegacion-icono"><i class="fa fa-sitemap"></i></span> Estructura Orgánica</a></li>
            <li><a href="institucional/modelo-operativo-universal.html"><span class="navegacion-icono"><i class="fa fa-slideshare"></i></span> Modelo Operativo Univ.</a></li>
            <li><a href="institucional/reglamentos.html"><span class="navegacion-icono"><i class="fa fa-gavel"></i></span> Reglamentos</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-external-link"></i></span> Transparencia<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://www2.icai.org.mx/ipo/dependencia.php?dep=178#pageload" target="_blank"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Transparencia Estatal (ICAI)</a></li>
            <li><a href="https://consultapublicamx.inai.org.mx/vut-web/faces/view/consultaPublica.xhtml#inicio" target="_blank"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Plataforma Nacional de Transparencia</a></li>
            <li><a href="transparencia/index.html"><span class="navegacion-icono"><i class="fa fa-briefcase"></i></span> Documentos</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-share-alt"></i></span> Términos de Uso<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="terminos/terminos-informacion.html"><span class="navegacion-icono"><i class="fa fa-cubes"></i></span> De la información</a></li>
            <li><a href="terminos/terminos-sitio.html"><span class="navegacion-icono"><i class="fa fa-globe"></i></span> Del sitio web</a></li>
            <li><a href="terminos/privacidad.html"><span class="navegacion-icono"><i class="fa fa-lock"></i></span> Aviso de Privacidad</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-phone"></i></span> Contacto<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="contacto/contacto.html"><span class="navegacion-icono"><i class="fa fa-phone"></i></span> Medios de contacto</a></li>
            <li><a href="preguntas-frecuentes/preguntas-frecuentes.html"><span class="navegacion-icono"><i class="fa fa-question"></i></span> Preguntas Frecuentes</a></li>
            <li><a href="http://goo.gl/forms/1rdX4X128PpMOif73" target="_blank"><span class="navegacion-icono"><i class="fa fa-external-link"></i></span> Comentarios y Sugerencias</a></li>
          </ul>
        </li>
        <li><a href="convocatorias/index.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Convocatorias</a></li>
        <li><a href="http://177.244.42.17/ovie-torreon/#!" target="_blank"><span class="navegacion-icono"><i class="fa fa-map-marker"></i></span> Oficina Virtual de Información Económica (OVIE)</a></li>
        <li><a href="https://arcg.is/0vySSr" target="_blank"><span class="navegacion-icono"><i class="fa fa-globe"></i></span> Atlas Municipal de Riesgos de Torreón</a></li>
        <li class="UsrAdmin UsrDir UsrEmp UsrPriv usrAccess">
          <li class="UsrAdmin UsrDir UsrEmp UsrPriv usrAccess"><a href="scripts/logout.php"><span class="navegacion-icono"><i class="fa fa-sign-out"></i></span> Cerrar Sesion</a></li>  
        </li>
      </ul>
      <div class="nav-login-div Public usrAccess">
        <p class="nav-p">¿Tienes una cuenta con nosotros?</p><button onclick="location.href='users/login-index.php'" type="button" class="btn btn-default">Inicia Sesion</button>
      </div>
    </div>
  </div>
  <!--TERMINA MENU LATERAL-->
  </nav>
  <div id="page-wrapper">
  <section id="organizacion">
    <img class="banner" src="imagenes/banner-implan-2018-01c.jpg" width="100" height="500" alt="IMPLAN Torreon">
<li></li>
<!--EMPIEZA SLIDER BUG-->

<!--Slider Original-->
<!--<div class="slider2">
<ul>
<a href="http://www.trcimplan.gob.mx/investigaciones/desigualdad-de-genero.html"><img src="imagenes\cdg\banner-cdg.jpg" alt="Desigualdad de Género"></a>
<a href="http://www.trcimplan.gob.mx/vision-de-ciudad/vision-de-ciudad.html"><img src="imagenes\vision-de-ciudad\banner-vision-de-ciudad2.jpg" alt="visión de ciudad"></a>
<a href="https://arcg.is/0vySSr"><img src="imagenes\atlas-de-riesgo2020\banner-atlas-21.jpg" alt="liga Atlas de Riesgo Torreón"></a>
<a href="http://www.trcimplan.gob.mx/investigaciones/desigualdad-de-genero.html"><img src="imagenes\cdg\banner-cdg.jpg" alt="Desigualdad de Género"></a>
<a href="http://177.244.42.17/ovie-torreon/#!"><img src="imagenes\ovie\ovie-logo-banda5.png" alt="liga ovie"></a>
</ul>
</div>-->
<!--TERMINA SLIDER BUG?-->
<!--SLIDER TEST1-->
<!--
<div class="auto-slider">
  <div id="sliderTest">
    <figure>
      <a href="http://www.trcimplan.gob.mx/investigaciones/desigualdad-de-genero.html"><img class="img1" src="imagenes\cdg\banner-cdg.jpg" alt="Desigualdad de Género"></a>
      <a href="http://www.trcimplan.gob.mx/vision-de-ciudad/vision-de-ciudad.html"><img class="img1" src="imagenes\vision-de-ciudad\banner-vision-de-ciudad2.jpg" alt="visión de ciudad"></a>
      <a href="http://www.trcimplan.gob.mx/investigaciones/desigualdad-de-genero.html"><img class="img1" src="imagenes\cdg\banner-cdg.jpg" alt="Desigualdad de Género"></a>
      <a href="https://arcg.is/0vySSr"><img class="img1" src="imagenes\atlas-de-riesgo2020\banner-atlas-21.jpg" alt="liga Atlas de Riesgo Torreón"></a>
      <a href="http://177.244.42.17/ovie-torreon/#!"><img class="img1" src="imagenes\ovie\ovie-logo-banda5.png" alt="liga ovie"></a>
    </figure>
  </div>
</div>
-->
<div id="sliderIndex">
  <figure>
    <a href="http://www.trcimplan.gob.mx/investigaciones/desigualdad-de-genero.html"><img class="img3" src="imagenes\cdg\banner-cdg.jpg" alt="Desigualdad de Género"></a>
    <a href="http://www.trcimplan.gob.mx/vision-de-ciudad/vision-de-ciudad.html"><img class="img3" src="imagenes\vision-de-ciudad\banner-vision-de-ciudad2.jpg" alt="visión de ciudad"></a>
    <a href="http://www.trcimplan.gob.mx/investigaciones/desigualdad-de-genero.html"><img class="img3" src="imagenes\atlas-de-riesgo2020\banner-atlas-21.jpg" alt="Desigualdad de Género"></a>
    <a href="https://arcg.is/0vySSr"><img class="img3" src="imagenes\cdg\banner-cdg.jpg" alt="liga Atlas de Riesgo Torreón"></a>
    <a href="http://177.244.42.17/ovie-torreon/#!"><img class="img3" src="imagenes\ovie\ovie-logo-banda5.png" alt="liga ovie"></a>
  </figure>
</div>
<p></p>
<!--END SLIDER TEST-->

<center><a href="http://177.244.42.17/ovie-torreon/#!"><img src="imagenes\ovie\ovie-logo-banda4.png"  width=95% height="70px" alt="liga ovie"></a></center>
</br>
</br>
 . 
  <div itemscope itemtype="http://schema.org/GovernmentOrganization">
    <img class="organizacion-logotipo" itemprop="image" alt="Instituto Municipal de Planeación y Competitividad de Torreón" src="imagenes/implan-logo.png">
    <h3 class="organizacion-titulo" itemprop="name">Instituto Municipal de Planeación y Competitividad de Torreón</h3>
    <div class="organizacion-descripcion" itemprop="description">Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón, Coahuila, México.</div>
  </div>
Traducir Página a tu Idioma
<div id="google_translate_element" class="google"></div> 
<script type="text/javascript">
                    function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: "es", includedLanguages: "ca,eu,gl,en,fr,it,pt,de,ch", layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, "google_translate_element");
                }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </section>
  <section id="destacado">
    <div class="row">
      <div class="col-sm-5 col-md-3">
        <div class="destacado-servicio" itemscope itemtype="http://schema.org/Product">
          <a id="servicio-smi" class="destacado-imagen" href="indicadores-categorias/index.html" title="Sistema Metropolitano de Indicadores"></a>
          <div class="destacado-texto">
            <a href="indicadores-categorias/index.html"><h3 class="destacado-titulo" itemprop="name">Sistema Metropolitano de Indicadores</h3></a>
            <div class="destacado-descripcion" itemprop="description">Mantenemos al día indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad para los municipios de la Laguna.</div>
            <p><a class="btn btn-default destacado-boton" href="indicadores-categorias/index.html" role="button"><i class="fa fa-th-list"></i> Por Categoría</a> <a class="btn btn-default destacado-boton" href="smi/por-region.html" role="button"><i class="fa fa-table"></i> Por Región</a> <a class="btn btn-default destacado-boton" href="smi-georreferenciados/index.html" role="button"><i class="fa fa-map-marker"></i> Georreferenciados</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-5 col-md-3">
        <div class="destacado-servicio" itemscope itemtype="http://schema.org/Product">
          <a id="servicio-sig" class="destacado-imagen" href="sig-mapas-torreon/index.html" title="Sistema de Información Geográfica"></a>
          <div class="destacado-texto">
            <a href="sig-mapas-torreon/index.html"><h3 class="destacado-titulo" itemprop="name">Sistema de Información Geográfica</h3></a>
            <div class="destacado-descripcion" itemprop="description">La representación de datos de diversas fuentes sobre mapas georreferenciados para su fácil análisis constituye una excelente herramienta para todos.</div>
            <p><a class="btn btn-default destacado-boton" href="sig-planes/index.html" role="button"><i class="fa fa-server"></i> Planes</a> <a class="btn btn-default destacado-boton" href="sig-mapas-torreon/index.html" role="button"><i class="fa fa-map-o"></i> S.I.G. de Torreón</a> <a class="btn btn-default destacado-boton" href="sig-mapas-torreon/zonificacion-secundaria.html" role="button"><i class="fa fa-map-marker"></i> Zonificación Secundaria</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-5 col-md-3">
        <div class="destacado-servicio" itemscope itemtype="http://schema.org/Product">
          <a id="servicio-pet" class="destacado-imagen" href="pet/introduccion.html" title="Plan Estratégico Torreón 2040"></a>
          <div class="destacado-texto">
            <a href="pet/introduccion.html"><h3 class="destacado-titulo" itemprop="name">Plan Estratégico Torreón 2040</h3></a>
            <div class="destacado-descripcion" itemprop="description">Súmate al esfuerzo de planeación participativa para atender la necesidad urgente de elevar el nivel de competitividad de La Laguna.</div>
            <p><a class="btn btn-default destacado-boton" href="pet/indice.html" role="button"><i class="fa fa-list-ul"></i> Índice General</a> <a class="btn btn-default destacado-boton" href="pet/index.html" role="button"><i class="fa fa fa-font"></i> Índice Alfabético</a> <a class="btn btn-default destacado-boton" href="plan-estrategico-torreon-enfoque-metropolitano-2040/index.html" role="button"><i class="fa fa-download"></i> Descargar</a> <a class="btn btn-default destacado-boton" href="plan-estrategico-metropolitano/descripcion-del-proceso.html" role="button"><i class="fa fa-calendar"></i> Descripción del Proceso</a> <a class="btn btn-default destacado-boton" href="proyectos/index.html" role="button"><i class="fa fa-check-square"></i> Proyectos</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-5 col-md-3">
        <div class="destacado-servicio" itemscope itemtype="http://schema.org/Product">
          <a id="servicio-ibc" class="destacado-imagen" href="ibc/introduccion.html" title="Indicadores Básicos de Colonias"></a>
          <div class="destacado-texto">
            <a href="ibc/introduccion.html"><h3 class="destacado-titulo" itemprop="name">Indicadores Básicos de Colonias</h3></a>
            <div class="destacado-descripcion" itemprop="description">Es la colonia la forma más común en que nos referimos a un lugar de nuestra ciudad.</div>
            <p><a class="btn btn-default destacado-boton" href="ibc/introduccion.html" role="button"><i class="fa fa-server"></i> Introducción</a> <a class="btn btn-default destacado-boton" href="ibc-colonias-torreon/index.html" role="button"><i class="fa fa fa-font"></i> Colonias de Torreón</a> <a class="btn btn-default destacado-boton" href="ibc/catalogo-conceptos.html" role="button"><i class="fa fa-server"></i> Catálogo de Conceptos</a></p>
          </div>
        </div>
      </div>
  </section>
  <section id="ultimas-publicaciones">
    <div class="row">
      <div class="col-md-8">
        <div class="ultimas">
          <h2>Últimas publicaciones</h2>
      <div class="media breve">
        <a class="pull-left" href="blog/salvavidas-para-las-organizaciones-jul-2021.html"><img class="media-object" src="blog/salvavidas-para-las-organizaciones-jul-2021/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="blog/salvavidas-para-las-organizaciones-jul-2021.html">Salvavidas para las organizaciones</a></h3>
          <p class="detallados-descripcion">La procuración de fondos se puede entender como el conjunto de herramientas que permiten financiar las actividades de una organización, generalmente, organizaciones no gubernamentales. Para construir una bolsa financiera diversificada es necesaria la participación de actores como personas físicas, personas morales, gobierno, agencias de cooperación internacional, fundaciones y empresas que compartan una causa en común.</p>
          <p class="detallados-autor-fecha">Por Lic. Miriam Janeth González Quintana, 12/07/2021 00:15</p>
        </div>
      </div>
      <div class="media breve">
        <a class="pull-left" href="blog/viviendas-deshabitadas-en-la-comarca-lagunera-jul-2021.html"><img class="media-object" src="blog/viviendas-deshabitadas-en-la-comarca-lagunera-jul-2021/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="blog/viviendas-deshabitadas-en-la-comarca-lagunera-jul-2021.html">Viviendas Deshabitadas en la Comarca Lagunera</a></h3>
          <p class="detallados-descripcion">Actualmente, el tema de las viviendas deshabitadas en la Comarca Lagunera es muy evidente. De acuerdo con las últimas estadísticas del Inventario Nacional de Viviendas 2016 del Instituto Nacional de Estadística y Geografía (INEGI), un promedio de 90,300 viviendas en La Laguna está deshabitada, de un total de aproximadamente 410,000 viviendas; contando los nuevos desarrollos inmobiliarios, dando como resultado aproximadamente un 20% del total. La situación se da tanto en las periferias de las ciudades, como en los centros consolidados.</p>
          <p class="detallados-autor-fecha">Por Gilberto Eduardo Ríos Buendía, 12/07/2021</p>
        </div>
      </div>
      <div class="media breve">
        <a class="pull-left" href="blog/el-manejo-del-agua-en-la-comarca-lagunera-jul-2021.html"><img class="media-object" src="blog/el-manejo-del-agua-en-la-comarca-lagunera-jul-2021/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="blog/el-manejo-del-agua-en-la-comarca-lagunera-jul-2021.html">El manejo del agua en la Comarca Lagunera</a></h3>
          <p class="detallados-descripcion">Nuestro planeta está conformado en un 70% de agua. Este recurso natural juega un papel esencial en el desarrollo de las ciudades. Históricamente los asentamientos humanos se han generado cerca de fuentes de este liquido vital, ya que de él depende no solo la vida, si no el desarrollo socio-económico.</p>
          <p class="detallados-autor-fecha">Por Arq. Carla Estefanía Tovar Triana, 05/07/2021 13:00</p>
        </div>
      </div>
      <div class="media breve">
        <a class="pull-left" href="blog/el-periodismo-a-pesar-de-la-covid19-jul-2021.html"><img class="media-object" src="blog/el-periodismo-a-pesar-de-la-covid19-jul-2021/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="blog/el-periodismo-a-pesar-de-la-covid19-jul-2021.html">El Periodismo a pesar de la COVID-19</a></h3>
          <p class="detallados-descripcion">Con la llegada de la enfermedad por el coronavirus del 2019 (COVID-19), se modificaron totalmente la forma de vida, laboral, familiar y profesional de todas las personas, incluyendo a los medios de comunicación, que, como todas las dependencias, instituciones, comercios y ciudadanía en general, tuvieron que adaptarse a la nueva normalidad.</p>
          <p class="detallados-autor-fecha">Por Lic. Maira Ivonne Flores Reyes, 05/07/2021</p>
        </div>
      </div>
      <div class="media breve">
        <a class="pull-left" href="blog/importancia-agricola-y-ganadera-de-la-laguna-jun-2021.html"><img class="media-object" src="blog/importancia-agricola-y-ganadera-de-la-laguna-jun-2021/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="blog/importancia-agricola-y-ganadera-de-la-laguna-jun-2021.html">Importancia Agrícola y Ganadera de La Laguna</a></h3>
          <p class="detallados-descripcion">El Distrito Laguna tuvo un promedio anual de 2011 al 2020 de 58,126.46 toneladas de ganado en pie; 115,274.42 toneladas de ave en pie; 124,440.25 toneladas de carne en canal y 1,361,472.53 (en miles de litros) de leche de ganado bovino y caprino. Ningún distrito en el resto de Coahuila alcanza a disputar la primacía del Distrito Laguna Coahuila en este ámbito (Servicio de Información Agroalimentaria y Pesquera, s.f.).</p>
          <p class="detallados-autor-fecha">Por Lic. Edgardo de la Cruz Torres, 28/06/2021 12:30</p>
        </div>
      </div>
      <div class="media breve">
        <a class="pull-left" href="blog/la-logistica-de-la-zml-en-el-cen-jun-2021.html"><img class="media-object" src="blog/la-logistica-de-la-zml-en-el-cen-jun-2021/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="blog/la-logistica-de-la-zml-en-el-cen-jun-2021.html">La Logística de la ZML en el Corredor Económico del Norte</a></h3>
          <p class="detallados-descripcion">Para atraer inversión empresarial a la Zona Metropolitana de La Laguna (ZML) y así potencializar el papel que juega económicamente en el Corredor Económico del Norte, la Zona cuenta con alrededor de 15 áreas industriales y 151 unidades económicas con más de 100 empleados ya ubicadas dentro de las mismas, pero con espacio disponible para que lleguen más a la zona.</p>
          <p class="detallados-autor-fecha">Por Lic. Jorge Fernando del Moral Fraire, 28/06/2021</p>
        </div>
      </div>
      <div class="media breve">
        <a class="pull-left" href="sala-prensa/2021-06-24-comunicado-vive-tu-acera.html"><img class="media-object" src="sala-prensa/2021-06-24-comunicado-vive-tu-acera/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="sala-prensa/2021-06-24-comunicado-vive-tu-acera.html">IMPLAN presenta el proyecto ciudadano “Vive Tu Acera”.</a></h3>
          <p class="detallados-descripcion">Con el respaldo del Alcalde de Torreón, Lic. Jorge Zermeño Infante, el Laboratorio de Gobernanza de la Universidad de Nueva York (GovLab), la Fundación Tinker, Consejo de Nuevo León, dependencias municipales, Asociaciones civiles y la ciudadanía, hoy el IMPLAN Torreón presentó uno de los dos proyectos ciudadanos ganadores de la convocatoria Multi-City Challenge México 2020 llamado “Vive Tu Acera”.</p>
          <p class="detallados-autor-fecha">Por Lic. Maira Ivonne Flores Reyes, 24/06/2021</p>
        </div>
      </div>
      <div class="media breve">
        <a class="pull-left" href="blog/formulacion-de-programas-y-proyectos-jun-2021.html"><img class="media-object" src="blog/formulacion-de-programas-y-proyectos-jun-2021/imagen-previa.jpg"></a>
        <div class="media-body">
          <h3 class="media-heading detallados-encabezado"><a href="blog/formulacion-de-programas-y-proyectos-jun-2021.html">La formulación de programas y proyectos, como principio para la planeación y la rendición de cuentas.</a></h3>
          <p class="detallados-descripcion">La cultura de la formulación de programas y proyectos es una práctica de gobierno municipal, estatal y federal, que el funcionariado tiene como obligación inherente a su cargo.</p>
          <p class="detallados-autor-fecha">Por Lic. Frida García Gutiérrez, 22/06/2021</p>
        </div>
      </div>
          <div class="text-center">
            <a href="blog/index.html" class="btn btn-default" role="button">Todos los Análisis Publicados</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="red-social-twitter">
          <a class="twitter-timeline" height="820px" href="https://twitter.com/trcimplan" data-chrome="nofooter transparent" data-theme="dark" data-widget-id="455819492145127424">Tweets por @trcimplan</a>
        </div>
      </div>
    </div>
  </section>
  <section id="categorias">
    <h2>Categorías</h2>
    <p>Explore por medio de las categorías que clasifican las 2,688 publicaciones en este sitio web.</p>
    <div class="row">
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/bienestar.html"><img class="media-object" src="imagenes/64/bienestar.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/bienestar.html">Bienestar</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/competitividad.html"><img class="media-object" src="imagenes/64/competitividad.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/competitividad.html">Competitividad</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/cultura.html"><img class="media-object" src="imagenes/64/cultura.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/cultura.html">Cultura</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/delincuencia.html"><img class="media-object" src="imagenes/64/delincuencia.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/delincuencia.html">Delincuencia</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/doing-business.html"><img class="media-object" src="imagenes/64/doing-business.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/doing-business.html">Doing Business</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/educacion.html"><img class="media-object" src="imagenes/64/educacion.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/educacion.html">Educación</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/empleo.html"><img class="media-object" src="imagenes/64/empleo.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/empleo.html">Empleo</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/empresas.html"><img class="media-object" src="imagenes/64/empresas.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/empresas.html">Empresas</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/finanzas-publicas.html"><img class="media-object" src="imagenes/64/finanzas-publicas.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/finanzas-publicas.html">Finanzas Públicas</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/gobierno.html"><img class="media-object" src="imagenes/64/gobierno.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/gobierno.html">Gobierno</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/gobierno-digital.html"><img class="media-object" src="imagenes/64/gobierno-digital.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/gobierno-digital.html">Gobierno Digital</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/grupos-vulnerables.html"><img class="media-object" src="imagenes/64/grupos-vulnerables.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/grupos-vulnerables.html">Grupos Vulnerables</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/genero.html"><img class="media-object" src="imagenes/64/genero.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/genero.html">Género</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/infraestructura.html"><img class="media-object" src="imagenes/64/infraestructura.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/infraestructura.html">Infraestructura</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/innovacion.html"><img class="media-object" src="imagenes/64/innovacion.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/innovacion.html">Innovación</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/macroeconomia.html"><img class="media-object" src="imagenes/64/macroeconomia.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/macroeconomia.html">Macroeconomía</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/medio-ambiente.html"><img class="media-object" src="imagenes/64/medio-ambiente.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/medio-ambiente.html">Medio Ambiente</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/mercados.html"><img class="media-object" src="imagenes/64/mercados.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/mercados.html">Mercados</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/movilidad.html"><img class="media-object" src="imagenes/64/movilidad.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/movilidad.html">Movilidad</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/objetivos-del-milenio.html"><img class="media-object" src="imagenes/64/objetivos-del-milenio.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/objetivos-del-milenio.html">Objetivos del Milenio</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/participacion-ciudadana.html"><img class="media-object" src="imagenes/64/participacion-ciudadana.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/participacion-ciudadana.html">Participación Ciudadana</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/poblacion.html"><img class="media-object" src="imagenes/64/poblacion.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/poblacion.html">Población</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/recursos-naturales.html"><img class="media-object" src="imagenes/64/recursos-naturales.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/recursos-naturales.html">Recursos Naturales</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/salud.html"><img class="media-object" src="imagenes/64/salud.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/salud.html">Salud</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/sector-automotriz.html"><img class="media-object" src="imagenes/64/sector-automotriz.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/sector-automotriz.html">Sector Automotriz</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/seguridad.html"><img class="media-object" src="imagenes/64/seguridad.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/seguridad.html">Seguridad</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/servicios-publicos.html"><img class="media-object" src="imagenes/64/servicios-publicos.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/servicios-publicos.html">Servicios Públicos</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/sistema-de-indicadores-de-desempeno-sindes.html"><img class="media-object" src="imagenes/64/sistema-de-indicadores-de-desempeno-sindes.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/sistema-de-indicadores-de-desempeno-sindes.html">Sistema de Indicadores de Desempeño (SINDES)</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/transparencia.html"><img class="media-object" src="imagenes/64/transparencia.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/transparencia.html">Transparencia</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/vialidad.html"><img class="media-object" src="imagenes/64/vialidad.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/vialidad.html">Vialidad</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/vivienda.html"><img class="media-object" src="imagenes/64/vivienda.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/vivienda.html">Vivienda</a></h4>
        </div>
      </div>
      </div>
      <div class="col-xs-6 col-md-4 col-lg-3">
      <div class="media compactos">
        <div class="media-left">
        <a href="categorias/indice-de-competitividad-urbana.html"><img class="media-object" src="imagenes/64/indice-de-competitividad-urbana.png"></a>
        </div>
        <div class="media-body compactos-cuerpo">
          <h4 class="media-heading"><a href="categorias/indice-de-competitividad-urbana.html">Índice de Competitividad Urbana</a></h4>
        </div>
      </div>
      </div>
    </div>
  </section>
  <section id="mapa">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <h4 class="mapa-encabezado">SERVICIOS</h4>
        <ul>
          <li><a href="blog/index.html">Análisis Publicados</a></li>
          <li><a href="indicadores-categorias/index.html">Indicadores</a></li>
          <li><a href="ibc/index.html">Indicadores Básicos de Colonias</a></li>
          <li><a href="sig-mapas-torreon/index.html">Información Geográfica</a></li>
          <li><a href="investigaciones/index.html">Investigaciones</a></li>
          <li><a href="pet/introduccion.html">Plan Estratégico Torreón 2040</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-3">
        <h4 class="mapa-encabezado">INSTITUCIONAL</h4>
        <ul>
          <li><a href="consejo-directivo/integrantes.html">Consejo Directivo</a></li>
          <li><a href="institucional/estructura-organica.html">Estructura Orgánica</a></li>
          <li><a href="institucional/mensaje-director.html">Mensaje del Director</a></li>
          <li><a href="institucional/modelo-operativo-universal.html">Modelo Operativo Universal</a></li>
          <li><a href="autores/index.html">Quienes Somos</a></li>
          <li><a href="institucional/reglamentos.html">Reglamentos</a></li>
          <li><a href="institucional/vision-mision.html">Visión / Misión</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-3">
        <h4 class="mapa-encabezado">INTERACCION</h4>
        <ul>
          <li><a href="contacto/contacto.html">Contacto</a></li>
          <li><a href="preguntas-frecuentes/preguntas-frecuentes.html">Preguntas Frecuentes</a></li>
          <li><a href="http://goo.gl/forms/1rdX4X128PpMOif73" target="_blank">Quejas y Sugerencias</a></li>
          <li><a href="sala-prensa/index.html">Sala de Prensa</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-3">
        <h4 class="mapa-encabezado">LEGAL</h4>
        <ul>
          <li><a href="terminos/privacidad.html">Aviso de Privacidad</a></li>
          <li><a href="terminos/terminos-informacion.html">Términos de Uso de la Información</a></li>
          <li><a href="terminos/terminos-sitio.html">Términos de Uso del Sitio Web</a></li>
          <li><a href="http://www.icai.org.mx:8282/ipo/dependencia.php?dep=178" target="_blank">Transparencia</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="mapa-chico">
        <h4 class="mapa-encabezado">SERVICIOS</h4>
    <p><a href="blog/index.html">Análisis Publicados</a>, <a href="indicadores-categorias/index.html">Indicadores</a>, <a href="ibc/index.html">Indicadores Básicos de Colonias</a>, <a href="sig-mapas-torreon/index.html">Información Geográfica</a>, <a href="investigaciones/index.html">Investigaciones</a>, <a href="pet/introduccion.html">Plan Estratégico Torreón 2040</a></p>
        <h4 class="mapa-encabezado">INSTITUCIONAL</h4>
    <p><a href="consejo-directivo/integrantes.html">Consejo Directivo</a>, <a href="institucional/estructura-organica.html">Estructura Orgánica</a>, <a href="institucional/mensaje-director.html">Mensaje del Director</a>, <a href="institucional/modelo-operativo-universal.html">Modelo Operativo Universal</a>, <a href="autores/index.html">Quienes Somos</a>, <a href="institucional/reglamentos.html">Reglamentos</a>, <a href="institucional/vision-mision.html">Visión / Misión</a></p>
        <h4 class="mapa-encabezado">INTERACCION</h4>
    <p><a href="contacto/contacto.html">Contacto</a>, <a href="preguntas-frecuentes/preguntas-frecuentes.html">Preguntas Frecuentes</a>, <a href="http://goo.gl/forms/1rdX4X128PpMOif73" target="_blank">Quejas y Sugerencias</a>, <a href="sala-prensa/index.html">Sala de Prensa</a></p>
        <h4 class="mapa-encabezado">LEGAL</h4>
    <p><a href="terminos/privacidad.html">Aviso de Privacidad</a>, <a href="terminos/terminos-informacion.html">Términos de Uso de la Información</a>, <a href="terminos/terminos-sitio.html">Términos de Uso del Sitio Web</a>, <a href="http://www.icai.org.mx:8282/ipo/dependencia.php?dep=178" target="_blank">Transparencia</a></p>
  </section>
  <section id="redes">
    <div class="row">
      <div class="col-md-4">
        <img class="img-responsive logotipo" src="imagenes/implan-transparente-gris.png" alt="IMPLAN Torreón">
      </div>
      <div class="col-md-4">
        <a href="http://177.244.42.17/ovie-torreon/#!" target="_blank"><img class="img-responsive logotipo"   src="imagenes/ovie-logo.jpg" alt="OVIE IMPLAN Torreón"></a>
      </div>
      <div class="col-md-2">
        <a href="http://www.editorialox.com" target="_blank"><img class="img-responsive logotipo" src="imagenes/PremioOx2.png" alt="Premio Ox 2019 IMPLAN Torreón"></a></br><b>Premio Internacional OX 2019</b>
      </div>
      <div class="col-md-2">
        <div class="pull-right redes-sociales">
          <a class="fa fa-twitter-square" href="http://www.twitter.com/trcimplan" target="_blank"></a>
          <a class="fa fa-facebook-square" href="https://facebook.com/trcimplan" target="_blank"></a>
          <a class="fa fa-google-plus-square" href="https://plus.google.com/106220426241750550649" target="_blank"></a>
          <a class="fa fa-github-square" href="https://github.com/TRCIMPLAN" target="_blank"></a>
          <a class="fa fa-rss-square" href="rss.xml"></a>
        </div>
      </div>
    </div>
  </section>
  </div>
</div>
<!-- Javascript global inicia -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/metisMenu/metisMenu.min.js"></script>
<script type="text/javascript" src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/datatables-responsive/dataTables.responsive.js"></script>
<script type="text/javascript" src="vendor/raphael/raphael.min.js"></script>
<script type="text/javascript" src="vendor/morrisjs/morris.min.js"></script>
<script type="text/javascript" src="dist/js/sb-admin-2.min.js"></script>
<script type="text/javascript" src="http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>var java = '<?php echo json_encode($java);?>';</script>
<script type="text/javascript" src="scripts/CheckUsr.js"></script>
<!-- Javascript global termina -->
<!-- Javascript inicia -->
<script>
  // Twitter timeline
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

<!-- Javascript termina -->
<!-- Javascript Google Analytics -->
<script>
  // Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-58290501-1', 'auto');ga('send', 'pageview');
</script>
</body>
</html>
>>>>>>> c3e33605123194fb079437d3419f844f91dda0c2
