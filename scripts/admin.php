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
            $this->db -> DBconnect();
        }
        
        function ShowUsers()
        {
            try{
                $sql = "SELECT d.userID, d.Nombre, d.Apellidos, d.Correo, info.fecha_cuenta AS 'Date', tu.Nombre AS 'Tipo'
                FROM datosusuarios d
                INNER JOIN infouser info ON info.userID = d.userID
                LEFT JOIN tipos_usuario tu ON tu.ID = d.TipoUser
                ORDER BY d.ID;";

                $query = $this->db->PDOLocal->query($sql);
                $result = $query->fetchAll(PDO::FETCH_OBJ);          

                return $result;

            }catch(Exception $e){
                echo $e = 'No se pudo ejecutar la accion';
            }
        }
        function ShowLastUser()
        {
            try{
                $sql = "SELECT d.userID, d.Nombre, d.Apellidos, info.fecha_cuenta AS 'Date'
                FROM datosusuarios d
                INNER JOIN infouser info ON info.userID = d.userID
                WHERE info.fecha_cuenta = (SELECT MAX(fecha_cuenta) 
                FROM infouser);";

                $query = $this->db->PDOLocal->query($sql);
                $result = $query->fetchAll(PDO::FETCH_OBJ);          

                return $result;

            }catch(Exception $e){
                echo $e = 'No se pudo ejecutar la accion';
            }
        }

        function AddUser($id, $nombre, $apellido, $titulo, $area, $telefono, $twitter, $desc, $email, $password, $tipo, $photo)
        {
            try{
                //Busca si el usuario esta registrado
                $sql = "SELECT COUNT(d.userID) AS 'Count' FROM datosusuarios d WHERE d.userID = '$id';";
                $query1 = $this->db->PDOLocal->query($sql);
                $result = $query1->fetch(PDO::FETCH_ASSOC);
		
                if($result['Count'] != 1 && $result['Count'] >= 1) 
                {
                    $sql = "SELECT COUNT(d.Correo) AS 'Count' FROM datosusuarios d WHERE d.Correo = '$email';";
                    $query1 = $this->db->PDOLocal->query($sql);
                    $result = $query1->fetch(PDO::FETCH_ASSOC);
                    if($result = ['Count'] != 1 && $result['Count'] >= 1){
                        $password = password_hash($password, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO datosususuarios 
                        (userID, Nombre, Apellidos, Correo, password, TipoUser)
                        VALUES('$id', '$nombre', '$apellido', '$email', '$password', '$tipo')";
                        //Ejecuta el comando
                        $result = $this->db->Query1($sql);

                        $sql = "INSERT INTO infouser 
                        (userID, titulo, puesto, telefono, descripcion, fecha_cuenta, photo, S_twitter)
                        VALUES('$id', '$titulo', '$area', '$telefono', '$desc', date(t_stamp), '$photo')";
                        //Ejecuta el comando
                        $result = $this->db->Query1($sql);
                    }else{
                        $status="El ID de usuario no esta disponible";
                    }
                    //Checa si se realizo la consulta
                    if($result > 0)
                    {
                        $status = "Usuario Registrado Exitosamente";
                    }else{
                        $status = "No se pudo efectuar la accion";
                    }

                }else {
                    //El Usuario ya se encuentra registrado
                    $status = "Este Correo ya se Encuentra Registrado";
                } 
            }catch(Exception $status){
                $status = 'No se puedo ejecutar la accion';
            }
            return $status;
        }
        function __destruct()
        {
            
            $db = new Database();
            $db ->DBdisconnect();
        }
    }
?>