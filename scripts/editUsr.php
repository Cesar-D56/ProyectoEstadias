<?php
  include 'db-connection.php';
  session_start();

  //$_SESSION['status'] = "";

  if($_POST['valor'] == 1){
  
    if(isset($_POST['usrID'])){
        try{
            $db = new Database();
            $id = $_POST['usrID'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $titulo = $_POST['titulo'];
            $area = $_POST['area'];
            $telefono = $_POST['telefono'];
            $twitter = $_POST['twitter'];
            $descripcion = $_POST['desc'];
        
            $db->DBconnect();
            $sql="UPDATE datosusuarios 
            SET Nombre ='$nombres',Apellidos='$apellidos' 
            WHERE datosusuarios.userID='$id'";
            $query = $db->PDOLocal->query($sql);
    
            $sql2="UPDATE infouser 
            SET titulo ='$titulo', puesto='$area', telefono='$telefono', descripcion='$descripcion', S_twitter='$twitter' 
            WHERE infouser.userID='$id'";
            $query2 = $db->PDOLocal->query($sql2);
    
            $db->DBdisconnect();

            echo $e = 1;
            //echo $e=$_POST['valor'];
          
        }catch(PDOException $e){
            echo $e = 'No se pudo ejecutar la accion'.$e->getMessage();
        }
    }
  }elseif($_POST['valor'] == 2){
    if(isset($_POST['usrID'])){
        try{
            $db = new Database();
            $id = $_POST['usrID'];
            $correo = $_POST['email'];
            $password = $_POST['password'];
            $tipo= $_POST['tipo'];
            $db->DBconnect();

            $sql = "SELECT COUNT(d.Correo) AS 'Count' FROM datosusuarios d WHERE d.Correo = '$correo';";
            $query1 = $db ->PDOLocal->query($sql);
            $result = $query1->fetch(PDO::FETCH_ASSOC);

            if($result['Count'] >= 1){
                $email = null;
                $e = 2;
            }else{
                $email = "Correo = '".$correo."', ";
                $e = 1;
            }

            if($password != ""){
                $e = 1;
                $password = password_hash($password, PASSWORD_DEFAULT);
                $sql="UPDATE datosusuarios 
                SET $email password='$password', TipoUser='$tipo'
                WHERE datosusuarios.userID='$id'";

                $query = $db->PDOLocal->query($sql);
            }else{
                $sql="UPDATE datosusuarios 
                    SET $email TipoUser='$tipo' 
                    WHERE datosusuarios.userID='$id'";
                    $query = $db->PDOLocal->query($sql);
            }
            
            $db->DBdisconnect();
            
            //echo $e=$_POST['valor'];
            echo $e;
            /*header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
            */
        }catch(PDOException $e){
            echo $e = 'No se pudo ejecutar la accion'.$e->getMessage();
        }
    }
    }
?>