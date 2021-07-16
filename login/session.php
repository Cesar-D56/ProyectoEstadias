<?php
   include('db-connection.php');
   session_start();
   
   $user_check = $_SESSION['login_email'];
   
   $ses_sql = mysqli_query($link,"select nombre from datosusuarios where correo = '$user_check' ");
   /*$ses_sql2 = mysqli_query($link,"select tipouser from datosusuarios where  = '$user_check' ");*/
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nombre'];
   
   if(!isset($_SESSION['login_email'])){
      header("location: ../../index.php");
      die();
   }
?>