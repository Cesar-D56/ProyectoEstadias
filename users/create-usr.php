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

if (empty($_GET['usrID'])){
	$idSelectedUsr = ($_SESSION['id']);

  $users = new USERS();

  $info = $users -> UserInfo($_SESSION['id']);
}else
{
  $idSelectedUsr = $_GET['usrID'];

  $users = new USERS();

  $info = $users -> UserInfo($idSelectedUsr);
}

if(isset($_SESSION['status']))
{
  echo $_SESSION['status'];
  $_SESSION['status'] = null;
}

$style="";
$twitter="";

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
  <title>Editar Perfil</title>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <!-- SOPORTE PARA IE -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div id="page-wrapper" style="margin:0;">
    <!-- El contenido va aqui -->
      <div class="main-container">
        <h2 class=title>Crear Usuario</h2>
        <form id="upload" method="POST" enctype="multipart/form-data">
          <div id="profile-edit" class="row">
            <!--Ver como subir imagen-->
              <div class="photo col-md-4">
                <p class="small-title" style="font-size:16px;"><b>Foto de Perfil</b></p>
                <img id="preview" class="usrPhoto" src="#"> 
              </div>
              <div class="info col-md-8" style="height:280px;">
                <p class="medium-title" style="text-align:left;">Puedes agregar una foto despues.</p>
                <br><br><br><br>
                <p class="medium-title" style="margin-bottom:15px; text-align:left; vertical-align:middle">Puedes iniciar cambiando tu foto de perfil...</p>
                <input type="file" name="fileToUpload" id="fileToUpload" accept=".png,.jpg,.jpeg" onchange="readURL(this);">
                <br>
                <p class="small-title" style="text-align:left;"><b>Acepta formato .png y .jpg</b></p> 
              </div>
            
          </div>
          <div id="profile-edit" class="row">
            <p class="small-title" style="margin-bottom:15px"><b>Informacion del Perfil</b></p>
            <div style="text-align:center;">
                <div class="col-md-6" style="margin-bottom: 20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Nombre(s)</p>  
                <input id="nombres" type="text" name="nombres" class="input-edit" maxlength="25" value="" required>
                </div>
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <p class="medium-title" style="text-align:left; padding-left:15%">Apellidos(s)</p>  
                  <input id="apellidos" type="text" name="apellidos" class="input-edit" maxlength="25" value="">
                </div>
                <br>
                <div style="width:100%;">
                  <div class="col-md-3">
                    <p class="medium-title" style="text-align: left;">Titulo</p>
                    <input id="titulo" style="width:100%;" type="text" name="titulo" class="input-edit" maxlength="50" placeholder="ej. Arquitecto, Arq." value="">
                  </div>
                  <div class="col-md-4">
                    <p class="medium-title" style="text-align: left; padding-left:15%;">Area</p>
                    <input id="area" type="text" name="area" class="input-edit" maxlength="50" placeholder="ej. Analisis, Coordinacion" value="">
                  </div>
                  <div class="col-md-2">
                    <p class="medium-title" style="text-align: left;">Tel.</p>
                    <input id="telefono" style="width:100%;" name="telefono" type="tel" class="input-edit" maxlength="15" placeholder="ej. 123-456-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="">
                  </div>
                  <div class="col-md-3" style="margin-bottom: 20px;">
                    <p class="medium-title" style="text-align: left;">(Twitter)</p>
                    <input id="twitter" style="width:100%;" name="twitter" type="text" class="input-edit" maxlength="12" placeholder="nombre_de_usuario" value="">
                  </div>
                </div>
                <div style="width:100%; margin-bottom: 20px;" >
                  <p class="small-title" style="margin-bottom:15px"><b>Cuentanos un poco de lo que haces en la empresa o a lo que te dedicas.</b></p> 
                  <textarea id="desc" class="txt-area" name="descripcion" rows="5" cols="80" maxlength="255"></textarea>
                </div>
            </div>
          </div>
          <div id="profile-edit" class="row">
            <p class="small-title" style="margin-bottom:15px"><b>Configuracion Avanzada</b></p>
            <div style="text-align:center;">
              <div class="col-md-6" style="margin-bottom: 20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Cambiar Correo de Usuario</p>  
                <input id="email" type="email" name="correo" class="input-edit" maxlength="45" value="" required>
              </div>
              <div class="col-md-6" style="margin-bottom: 20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Cambiar Contraseña</p>  
                <input id="password" value="" type="password" name="password" class="input-edit" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
              </div>
              <div class="col-md-6 UsrAdmin usrAccess" style="margin-bottom: 20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Cambiar Privilegios</p>  
                <select id="tipo" class="input-edit" name="usrtype" value="" form="upload" required>
                  <option value="1">Administrador</option>
                  <option value="2">Director</option>
                  <option value="3">Visitante</option>
                  <option value="4">Empleado</option>
                </select>
              </div>
              <div class="col-md-6" style="height:60px; margin-top:20px;">
                <p class="medium-title" style="text-align:left; padding-left:15%">Asignar ID de usuario</p>    
                <input id="usrID" style="width:100%;" name="id" type="text" class="input-edit" value="" required>
                </div>
            <input id="up" style="width:60%" type="submit" class="btn btn-form" value="Guardar" name="saveAdv">
          </div>
        </form>
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
<script type="text/javascript" src="../dist/js/edit-user.js"></script>

<!-- Javascript global termina -->
<!-- Javascript inicia -->
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

              $('#up').on('click', function() {
              var file_data = $('#fileToUpload').prop('files')[0];   
              var form_data = new FormData();                  
              form_data.append('file', file_data);
              form_data.append('id', $('#usrID').val());
              form_data.append('nombre', $('#nombres').val());
              form_data.append('apellido', $('#apellidos').val());
              form_data.append('titulo', $('#titulo').val());
              form_data.append('area', $('#area').val());
              form_data.append('telefono', $('#telefono').val());
              form_data.append('twitter', $('#twitter').val());
              form_data.append('desc', $('#desc').val());
              form_data.append('email', $('#email').val());
              form_data.append('password', $('#password').val());
              form_data.append('tipo', $('#tipo').val())
                        
              $.ajax({
                  url: '../scripts/addUser.php', // <-- point to server-side PHP script 
                  dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,                         
                  type: 'post',
                  success: function(php_script_response){
                      swal.fire({
                      title: "Status",
                      text: php_script_response,
                    });
                  }
              });
          });
            </script>
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
