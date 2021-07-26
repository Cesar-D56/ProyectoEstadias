<?php
    class ADMIN
    {
        private $userID;
        private $database;
        private $db;
        function __construct()
        {
            $this->db = new Database();
            $this->database = $this->db->PDOLocal;
            //$this->userID = $userID;
        }
        
        function AddUser($titulo, $nombre, $apellido, $puesto, $correo, $password, $telefono, $tipou)
        {
            try{
                //Busca si el usuario esta registrado
                $sql = "SELECT Correo FROM datosusuarios WHERE Correo = '$correo'";

                $result = mysqli_query($this->database,$sql);
           
                $count = mysqli_num_rows($result);
		
                if($count == 1) 
                {
                    //El Usuario aun no esta registrado
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO datosususuarios 
                    (titulo, Nombre, Apellidos, puesto, Correo, password, Telefono, TipoUser)
                    VALUES('$titulo', '$nombre', '$apellido', '$puesto', '$correo', '$password', '$telefono','$tipou')";
                    //Ejecuta el comando
                    $result = $this->db->Query1($sql);
                    //Checa si se realizo la consulta
                    if($result > 0)
                    {
                        header("Refresh: 1");
                        echo $status = "Usuario Registrado Exitosamente";
                    }else{
                        echo $status = "No se pudo efectuar la accion";
                    }

                }else {
                    //El Usuario ya se encuentra registrado
                    echo $status = "Este Correo ya se Encuentra Registrado";
                } 
            }catch(Exception $e){
                echo $e = 'No se puedo ejecutar la accion';
            }
        }
        function __destruct()
        {
            
            $db = new Database();
            $db ->DBdisconnect();
        }
    }
?>