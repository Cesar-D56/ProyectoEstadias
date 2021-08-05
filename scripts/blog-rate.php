<?php
     session_start();
     /*
      echo '<pre>';
      var_dump($_SESSION);
      echo '</pre>';
     */
       if((isset($_SESSION['id']) && !empty($_SESSION['id']))){
         header("Location: ../".$_SESSION[]);
       }
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
         
           $myemail = $_POST["usr_email"];
           $mypassword = $_POST["usr_password"];
           $error = $db->checkLogin("$myemail", "$mypassword");
           $db->DBdisconnect();
        }
     ?>

?>