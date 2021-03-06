<?php
include '../scripts/db-connection.php';
include '../scripts/user.php';

session_start();
if((isset($_SESSION['id']) && !empty($_SESSION['id']))){
  $var = $_SESSION['tipo'];

  $java = array('tipo' => $var);
}else{
  header("Location: ../index.php");
}
$style="";
$twitter="";

$users = new USERS();

$info = $users -> UserInfo($_SESSION['id']);
$tabla = $users -> ShowPosts($_SESSION['id']);
$tablafav = $users -> ShowFavPosts($_SESSION['id']);

if($info['S_twitter']==null){
  $style="style='display:none;'";
}else{
  $twitter=$info['S_twitter'];
}

/*echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/

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
  <title>Mi Perfil</title>
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/apple-touch-icon.png">
  <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon.png">
  <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-76x76.png" sizes="76x76">
  <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-120x120.png" sizes="120x120">
  <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-152x152.png" sizes="152x152">
  <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-180x180.png" sizes="180x180">
  <link rel="icon" href="../imagenes/icon-hires.png" sizes="192x192">
  <link rel="icon" href="../imagenes/icon-normal.png" sizes="128x128">
  <link rel="alternate" type="application/rss+xml" href="rss.xml" title="IMPLAN Torreón">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../vendor/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="../vendor/datatables-plugins/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../vendor/morrisjs/morris.css">
  <link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/sb-admin-2.min.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/plataforma-de-conocimiento.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Noto+Sans|Roboto+Condensed:400,700">
  <link rel="stylesheet" type="text/css" href="http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/estilosvm.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/trcimplan.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/accounts.css">
  
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
      <a class="navbar-brand" href="../index.php"><img class="navbar-brand-img" src="../imagenes/implan-barra-logo-chico-gris.png" alt="IMPLAN Torreón"></a>
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
        <li>
          <li><a href="../index.php"><span class="navegacion-icono"><i class="fa fa-home"></i></span> Menu Principal</a></li>   
        </li>
        <li>
          <a href="#"><span class="navegacion-icono"><i class="fa fa-user"></i></span> Mi Perfil<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="profile.php"><span class="navegacion-icono"><i class="fa fa-eye"></i></span> Ver Perfil</a></li>
            <li><a href="edit-profile.php"><span class="navegacion-icono"><i class="fa fa-pencil"></i></span> Editar Perfil</a></li>
          </ul>
        </li>
        <li class="UsrAdmin UsrDir UsrEmp usrAccess">
          <a href="#"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Publicaciones<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="../blog/index.html"><span class="navegacion-icono"><i class="fa fa-eye"></i></span> Mis Publicaciones</a></li>
            <li><a href="../excolaboradores/index.html"><span class="navegacion-icono"><i class="fa fa-pencil-square-o"></i></span> Nueva Publicacion</a></li>
            <!--<li><a href="../blog/index.html"><span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span> Configurar Cuenta</a></li>-->
          </ul>
        </li>
        <li class="UsrAdmin usrAccess"><a href="view-users.php"><span class="navegacion-icono"><i class="fa fa-users"></i></span> Ver Usuarios</a></li>   
        <li><a href="../scripts/logout.php"><span class="navegacion-icono"><i class="fa fa-sign-out"></i></span> Cerrar Sesion</a></li>
      </ul>
    </div>
  </div>
  <!--TERMINA MENU LATERAL-->
  </nav>
  <div id="page-wrapper" style="min-height:1244px;">
    <!-- El contenido va aqui -->
    <div>
      <div class="main-container">
        <h2 class=title>Mi Perfil</h2>
        <div id="profile-info" class="row">
            <div class="photo col-md-4">
              <img class="usrPhoto" src="../imagenes/128/<?php echo $info['photo']; ?>">  
            </div>
            <div class="info col-md-8">
              <h1 class="info-h1"><b><?php echo $info['titulo'];?> <?php echo $info['Nombre'];?> <?php echo $info['Apellidos']; ?></b></h1>
              <br>
              <p style="margin-bottom:0px;"><b>IMPLAN Torreon</b></p>
              <h2 class="info-h2"><?php echo $info['puesto']; ?></h2>
              <p style="font-size:16px; margin-bottom:5px;"><?php echo $info['descripcion'];?></p>
              <div>
                <p style="margin-bottom:0px; margin-top:15px; font-size:16px;"><b>Contacto</b></p>
                <div class="col-md-2"><li class="fa fa-phone"></li><b> Telefono </b><?php echo $info['telefono'];?></div>
                <div class="col-md-4"><li class="fa fa-envelope"></li><b> Correo </b><?php echo $info['Correo'];?></div>
                <div class="col-md-3" <?php echo $style; ?>><li class="fa fa-plus"></li><b>Redes Sociales </b><li class="fa fa-twitter"><a href="https://twitter.com/<?php echo $info['S_twitter'];?>" target="_blank">@<?php echo $twitter;?></a></li></div>
              </div>
            </div>
        </div>
        <br>
        <div class="UsrAdmin UsrDir UsrEmp usrAccess">
          <h2 class="title">Publicaciones Recientes</h2>
          <div id="profile-table">
            <table id="tabla_acc" class="table table-sm table-bordered table-responsive-sm">
              <thead class="table-primary">
                <th scope="col"><li class="fa fa-calendar"></li> Fecha</th>
                <th scope="col"><li class="fa fa-file-text"></li> Titulo</th>
                <th scope="col"><li class="fa fa-align-justify"></li> Descripcion</th>
                <th scope="col"><li class="fa fa-folder-open-o"></li> Categorias</th>
                <th scope="col"><li class="fa fa-thumbs-o-up"></li> Cal. Positivas</th>
                <th scope="col"><li class="fa fa-chain"></li> Link</th>
              </thead>
              <tbody>
                <?php 
                $i=0;
                foreach($tabla as $fila): 
                $i++;
                if($i == 5){break;}?>
                  <tr>
                    <td class="col-md-1"> <?php echo $fila->fecha; ?></td>
                    <td class="col-md-3"> <b><?php echo $fila->Titulo; ?></b></td>
                    <td class="col-md-4"> <?php echo substr($fila->descripcion,0,120)."..."; ?></td>
                    <td> <?php echo $fila->Categorias; ?></td>
                    <td style="text-align:center; font-size:16px;"> <b><?php echo $fila->Calif; ?></b></td>
                    <td class="col-md-1" style="text-align:center;"><button onclick="location.href='../blog/<?php echo $fila->archivo;?>.php'" type="button" class="btn btn-table">Ver</button></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
          </div>
        </div>
        <!--Visitante-->
        <div class="UsrPriv usrAccess">
          <h2 class="title">Publicaciones Calificadas</h2>
          <div id="profile-table">
            <table id="tabla_acc" class="table table-sm table-bordered table-responsive-sm">
              <thead class="table-primary">
                <th scope="col"><li class="fa fa-file-text"></li> Titulo</th>
                <th scope="col"><li class="fa fa-align-justify"></li> Descripcion</th>
                <th scope="col"><li class="fa fa-folder-open-o"></li> Categorias</th>
                <th scope="col"><li class="fa fa-thumbs-o-up"></li> Calificacion</th>
                <th scope="col"><li class="fa fa-chain"></li> Link</th>
              </thead>
              <tbody>
                <?php
                foreach($tablafav as $fila): ?>
                  <tr>
                    <td class="col-md-3"> <b><?php echo $fila->Titulo; ?></b></td>
                    <td class="col-md-4"> <?php echo substr($fila->descripcion,0,120)."..."; ?></td>
                    <td> <?php echo $fila->Categorias; ?></td>
                    <td style="text-align:center; font-size:16px;"> <b><?php echo $fila->Calificacion; ?></b></td>
                    <td class="col-md-1" style="text-align:center;"><button onclick="location.href='../blog/<?php echo $fila->archivo;?>.php'" type="button" class="btn btn-table">Ver</button></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- Javascript global inicia -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../vendor/metisMenu/metisMenu.min.js"></script>
<script type="text/javascript" src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
<script type="text/javascript" src="../vendor/raphael/raphael.min.js"></script>
<script type="text/javascript" src="../vendor/morrisjs/morris.min.js"></script>
<script type="text/javascript" src="../dist/js/sb-admin-2.min.js"></script>
<script type="text/javascript" src="http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>var java = '<?php echo json_encode($java);?>';</script>
<script type="text/javascript" src="../scripts/CheckUsr.js"></script>


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
