<?php
    class USERS
    {
        private $db;
        public function __construct()
        {
            $this->db = new Database();
            $this->database = $this->db->PDOLocal;
            //$this->userID = $userID;
            $this->db->DBconnect();
        }
        
        function UserInfo($userid)
        {
            try{
                //Busca si el usuario esta registrado
                $sql = "SELECT datosusuarios.Nombre, datosusuarios.Apellidos, datosusuarios.Correo, infouser.titulo, infouser.puesto, infouser.telefono, infouser.descripcion, infouser.photo, infouser.S_twitter 
                FROM datosusuarios INNER JOIN infouser ON datosusuarios.userID = infouser.userID 
                WHERE datosusuarios.userID = '$userid';";

                $query = $this->db->PDOLocal->query($sql);
                $result = $query->fetch(PDO::FETCH_ASSOC);

                return $result;

            }catch(Exception $e){
                echo $e = 'No se puedo ejecutar la accion';
            }
        }

        function ShowPosts($userid)
        {
            try{
                
            }catch(Exception $e){
                echo $e = 'No se pudo ejecutar la accion';
            }
        }

        function __destruct()
        {
            $db = new Database();
            $db ->DBdisconnect();
        }
    }
?>