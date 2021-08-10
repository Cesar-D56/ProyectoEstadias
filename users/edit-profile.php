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

if($info['S_twitter']==null){
  $style="style='display:none;'";
}else{
  $twitter=$info['S_twitter'];
}
/*echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/

/*
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $style = "style='display:initial;'";
    $tipouser = $_SESSION['tipo'];
    $name_user = $_SESSION['nombre'];
    $titulo = $_SESSION['titulo'];
    $class = new Database();
    $style2 = "style='display:none;'";  
}else{
    $style = "style='display:none;'";
    $tipouser = 0;
    $name_user = "";
    $titulo = "";
    $class = new Database();
    $style2 = "style='display:initial;'";    
}
*/
//$usrtype = "class= 'usr".$var."'";

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
            <li><a href="../blog/index.html"><span class="navegacion-icono"><i class="fa fa-cog"></i></span> Configurar Cuenta</a></li>
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
        <li class="UsrAdmin usrAccess"><a href="../excolaboradores/index.html"><span class="navegacion-icono"><i class="fa fa-users"></i></span> Ver Usuarios</a></li>   
        <li><a href="../scripts/logout.php"><span class="navegacion-icono"><i class="fa fa-sign-out"></i></span> Cerrar Sesion</a></li>
      </ul>
    </div>
  </div>
  <!--TERMINA MENU LATERAL-->
  </nav>
  <div id="page-wrapper">
    <!-- El contenido va aqui -->
      <div class="main-container">
        <h2 class=title>Editar Perfil</h2>
          <div id="profile-edit" class="row">
            <!--Ver como subir imagen-->
            <form>
              <div class="photo col-md-4">
                <p class="small-title" style="font-size:16px;"><b>Foto de Perfil</b></p>
                <img class="usrPhoto" src="<?php echo $info['photo']; ?>"> 
              </div>
              <div class="info col-md-8" style="height:280px;">
                <p class="medium-title" style="text-align:left;">Puedes personalizar tu perfil para mostrar lo mas importante de nosotros a nuestros visitantes.</p>
                <br><br><br><br>
                <p class="medium-title" style="margin-bottom:15px; text-align:left; vertical-align:middle">Puedes iniciar cambiando tu foto de perfil...</p>
                <button style="text-align:left; vertical-align:bottom; width:150px;" class="btn btn-form">Cambiar Foto</button>
                <br>
                <p class="small-title" style="text-align:left;"><b>Acepta formato .png y .jpg</b></p> 
              </div>
            </form> 
          </div>
          <div id="profile-edit" class="row">
            <p class="small-title" style="margin-bottom:15px"><b>Informacion del Perfil</b></p>
            <form style="text-align:center;">
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <p class="medium-title" style="text-align:left; padding-left:15%">Nombre(s)</p>  
                  <input type="text" name="nombres" class="input-edit" maxlength="25">
                </div>
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <p class="medium-title" style="text-align:left; padding-left:15%">Apellidos(s)</p>  
                  <input type="text" name="apellidos" class="input-edit" maxlength="25">
                </div>
                <br>
                <div style="width:100%;">
                  <div class="col-md-3">
                    <p class="medium-title" style="text-align: left;">Titulo</p>
                    <input style="width:100%;" type="text" name="titulo" class="input-edit" maxlength="50" placeholder="ej. Arquitecto, Arq.">
                  </div>
                  <div class="col-md-4">
                    <p class="medium-title" style="text-align: left; padding-left:15%;">Area</p>
                    <input type="text" name="area" class="input-edit" maxlength="50" placeholder="ej. Analisis, Coordinacion">
                  </div>
                  <div class="col-md-2">
                    <p class="medium-title" style="text-align: left;">Tel.</p>
                    <input style="width:100%;" name="telefono" type="tel" class="input-edit" maxlength="15" placeholder="ej. 123-456-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                  </div>
                  <div class="col-md-3" style="margin-bottom: 20px;">
                    <p class="medium-title" style="text-align: left;">(Twitter)</p>
                    <input style="width:100%;" name="twitter" type="text" class="input-edit" maxlength="12" placeholder="@nombre_de_usuario">
                  </div>
                </div>
                <div style="width:100%; margin-bottom: 20px;" >
                  <p class="small-title" style="margin-bottom:15px"><b>Cuentanos un poco de lo que haces en la empresa o a lo que te dedicas.</b></p> 
                  <textarea class="txt-area" name="descripcion" rows="4" cols="50" maxlength="255"></textarea>
                </div>
                <input type="submit" class="btn btn-form" value="Guardar">
            </form>
          </div>
          <div id="profile-edit" class="row UsrAdmin usrAccess">
            <p class="small-title" style="margin-bottom:15px"><b>Configuracion Avanzada</b></p>
            <form style="text-align:center;">
              <div class="col-md-6" style="margin-bottom: 20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Cambiar Correo de Usuario</p>  
                <input type="email" name="correo" class="input-edit" maxlength="45">
              </div>
              <div class="col-md-6" style="margin-bottom: 20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Cambiar Contraseña</p>  
                <input type="text" name="password" class="input-edit" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
              </div>
              <div class="col-md-6" style="margin-bottom: 20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Cambiar Privilegios</p>  
                <select class="input-edit" name="usrtype" value="3">
                  <option value="" selected disabled hidden>Valor Inicial</option>
                  <option value="1">Administrador</option>
                  <option value="2">Director</option>
                  <option value="3">Visitante</option>
                  <option value="4">Empleado</option>
                </select>
              </div>
              <div class="col-md-6" style="height:60px; margin-top:20px;">
                <input style="width:60%" type="submit" class="btn btn-form" value="Guardar">
              </div>
            </form>
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
