<?php
   include('session.php');
   print_r($_SESSION['login_email']);
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>