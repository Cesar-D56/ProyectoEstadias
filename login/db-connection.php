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

        function checkLogin($email, $pass)
        {
            /*$this->DBconnect();*/
            $myemail = mysqli_real_escape_string($this->PDOLocal, $email);
            $mypassword = mysqli_real_escape_string($this->PDOLocal, $pass); 
            
            $sql = "SELECT * 
            FROM datosusuarios 
            WHERE correo = '$myemail' 
            and password = '$mypassword'";

            $query = $this->PDOLocal->query($sql);

            $row = mysqli_fetch_array($query,MYSQLI_ASSOC);

            $count = mysqli_num_rows($query);
      
            // If result matched $myemail and $mypassword, table row must be 1 row
		
            if($count == 1) {
                
            }else {
                return $error = "Correo o Contraseña Incorrectos";
            }
            
        }
    }
?>