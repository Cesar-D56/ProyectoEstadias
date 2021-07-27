<?php
    /*$host = "localhost";
    $username = "root";
    $password = "";
    $database = "proyectoestadias-implan";
    $link = mysqli_connect($host, $username, $password, $database);
*/
    class Database
    {
        private $PDOLocal;
        private $user = "root";
        private $password = "";
        private $server = "mysql:host=localhost; dbname=proyectoestadias-implan";
    
        function DBconnect()
        {
            try{
                $this->PDOLocal = new PDO($this->server, $this->user, $this->password);
            }
            catch(PDOException $error)
            {
                echo $error->getMessage();
            }
        }

        function DBdisconnect()
        {
            try{$this->PDOLocal = null;}
            catch(PDOException $error){
                echo $error->getMessage();
            }
        }

        function Query1($sql)
        {
            try{
                $this->PDOLocal->query($sql);
                echo $status = mysqli_affected_rows($this->PDOLocal);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        function Query2($sql)
        {
            try{
                echo $this->PDOLocal->query($sql);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        function checkLogin($email, $pass)
        {
            try{

            $count= 0;
            //Busca si existe cuenta con el correo

            $sql = "SELECT datosusuarios.userID, datosusuarios.password, datosusuarios.Nombre, datosusuarios.TipoUser, infouser.titulo 
            FROM datosusuarios INNER JOIN infouser ON datosusuarios.userID = infouser.userID 
            WHERE datosusuarios.Correo = '$email'";
            
            //HASHEAME ESTA MEN
            /*$hash = password_hash($pass, PASSWORD_DEFAULT);
            $cadena="UPDATE datosusuarios SET password='$hash' WHERE correo='$email'";
            $query2 = $this->PDOLocal->query($cadena);*/

            $query = $this->PDOLocal->query($sql);
            //Comprueba la contraseña
            while($result = $query->fetch(PDO::FETCH_ASSOC)) {                
				if (password_verify($pass, $result['password']))
				{
					$count = 1;

                    $tipouser = $result['TipoUser'];
                    $usrid = $result['userID'];
                    $nombre = $result['Nombre'];
                    $titulo = $result['titulo'];
				}
            }
            //Reguresa los datos de la cuenta
            if($count == 1) {
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["tipo"] = $tipouser;
                $_SESSION["id"] = $usrid;
                $_SESSION["nombre"] = $nombre;
                $_SESSION["titulo"] = $titulo;
                header("Location: ../index.php");
                return $error = "";
            }else {
                return $error = "Correo o Contraseña Incorrectos";
            }
            }catch(PDOException $error){
                
            }
        }

    }
?>