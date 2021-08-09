<?php
  include 'db-connection.php';

  $db = new Database();

  if(isset($_POST['valor'])){
    try{
      $valor = $_POST['valor'];
      $usrID = $_POST['usrId'];
      $pId = $_POST['blogId'];
      $usrValor = $_POST['usrValue'];
      if($valor == $usrValor){

          $db->DBconnect();

          $sql="DELETE FROM blog_calificado WHERE blog_calificado.userID='$usrID' AND blog_calificado.blogID='$pId'";
          $query = $db->PDOLocal->query($sql);

          $db->DBdisconnect();

          echo $valor="Not set";

      }elseif(isset($usrValor)){

           $db->DBconnect();

          $sql="INSERT INTO blog_calificado (userID, blogID, valor) VALUES ('$usrID','$pId','$valor')";

          $query = $db->PDOLocal->query($sql);

          $db->DBdisconnect();


          echo $valor;
      }else{
          echo "Error";
      }

    }catch(PDOException $e){
        echo $e = 'No se pudo ejecutar la accion'.$e->getMessage();
    }
  }
?>