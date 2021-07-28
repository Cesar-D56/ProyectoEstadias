<?php
  include 'db-connection.php';
  $db = new Database();
  $db->DBconnect();
 
  $error="";

 session_start();
/*
 echo '<pre>';
 var_dump($_SESSION);
 echo '</pre>';
*/
  if((isset($_SESSION['id']) && !empty($_SESSION['id']))){
    header("Location: ../index.php");
  }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      $myemail = $_POST["usr_email"];
      $mypassword = $_POST["usr_password"];
      $error = $db->checkLogin("$myemail", "$mypassword");
      $db->DBdisconnect();
   }
?>

<!DOCTYPE html>
<html class="login" lang="es">
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
     <title>Iniciar Sesion - IMPLAN Torreón</title>
     <link rel="shortcut icon" type="image/x-icon" href="../imagenes/apple-touch-icon.png">
     <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon.png">
     <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-76x76.png" sizes="76x76">
     <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-120x120.png" sizes="120x120">
     <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-152x152.png" sizes="152x152">
     <link rel="apple-touch-icon" href="../imagenes/apple-touch-icon-180x180.png" sizes="180x180">
     <link rel="icon" href="../imagenes/icon-hires.png" sizes="192x192">
     <link rel="icon" href="../imagenes/icon-normal.png" sizes="128x128">
     <link rel="alternate" type="application/rss+xml" href="../rss.xml" title="IMPLAN Torreón">
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
<body class="body-index login">
  <div class="bg"></div>
    <div class="content-login">
      <div class="dialog-bx img-rounded">
        <a href="../index.php" ><img class="img-logo" src="../imagenes/implan-logo.png" alt="IMPLAN - Torreon"></a>
        <p class="nav-p" style="font-size:30px; margin-bottom: 5%;">Iniciar Sesion</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <p class="login-tags">Correo Electronico</p>
            <input type="email" name="usr_email" class="form-control input-bx" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
          <p class="login-tags">Contraseña</p>
            <input type="password" name="usr_password" class="form-control input-bx" id="exampleFormControlInput1" placeholder="Contraseña">
          <input type="submit" name="submit" value="Iniciar Sesion" class="btn-login">
        </form>
        <p class="login-tags"><?php echo $error; ?></p>
      </div>
    </div>
  <!-- Javascript global inicia -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="dist/js/sb-admin-2.min.js"></script>
</body>
</html>