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

        function checkLogin($email, $pass)
        {
            try{

            $count= 0;

            $sql = "SELECT * 
            FROM datosusuarios 
            WHERE correo = '$email'";
            
            //HASHEAME ESTA MEN
            /*$hash = password_hash($pass, PASSWORD_DEFAULT);
            $cadena="UPDATE datosusuarios SET password='$hash' WHERE correo='$email'";
            $query2 = $this->PDOLocal->query($cadena);*/

            $query = $this->PDOLocal->query($sql);

            while($result = $query->fetch(PDO::FETCH_ASSOC)) {                
				if (password_verify($pass, $result['password']))
				{
					$count = 1;

                    $tipouser = $result['TipoUser'];
                    $usrid = $result['userID'];
                    $nombre = $result['Nombre'];
				}
            }
            if($count == 1) {
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["tipo"] = $tipouser;
                $_SESSION["id"] = $usrid;
                $_SESSION["nombre"] = $nombre;
                header("Location: ../index.php");
                return $error = "";
            }else {
                return $error = "Correo o Contraseña Incorrectos";
            }
            }catch(PDOException $error){
                
            }
        }

        function userHierarchy($tipoU)
        {
            
        }
    }
?>