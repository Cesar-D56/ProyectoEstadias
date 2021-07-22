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
    }
?>