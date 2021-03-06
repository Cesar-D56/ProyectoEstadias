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
                $sql = "SELECT datosusuarios.Nombre, datosusuarios.Apellidos, datosusuarios.Correo, infouser.titulo, infouser.puesto, infouser.telefono, infouser.descripcion, infouser.photo, infouser.S_twitter, tipos_usuario.Nombre AS 'usrType'
                FROM datosusuarios 
                INNER JOIN infouser ON datosusuarios.userID = infouser.userID 
                INNER JOIN tipos_usuario ON tipos_usuario.ID=datosusuarios.TipoUser
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
                $sql = "SELECT p.ID, p.UsrId, p.nombre AS 'Titulo', p.descripcion, DATE(p.fecha) AS 'fecha', p.archivo,
                GROUP_CONCAT(DISTINCT c.nombre) AS 'Categorias', SUM(DISTINCT blog_calificado.valor) AS 'Calif'
                FROM published p
                JOIN categorias_blog cb ON p.ID=cb.blogId
                LEFT JOIN blog_calificado ON p.ID=blog_calificado.blogID
                INNER JOIN categorias c ON cb.catId=c.ID
                WHERE p.UsrId = '$userid'
                GROUP BY p.ID
                ORDER BY p.fecha DESC;";

                $query = $this->db->PDOLocal->query($sql);
                $result = $query->fetchAll(PDO::FETCH_OBJ);          

                return $result;

            }catch(Exception $e){
                echo $e = 'No se pudo ejecutar la accion';
            }
        }

        function ShowFavPosts($userid)
        {
            try{
                $sql = "SELECT p.ID, p.nombre AS 'Titulo', p.descripcion, p.archivo,
                GROUP_CONCAT(DISTINCT c.nombre) AS 'Categorias', bc.valor AS 'Calificacion'
                FROM published p
                JOIN categorias_blog cb ON p.ID=cb.blogId
                LEFT JOIN blog_calificado bc ON p.ID=bc.blogID
                INNER JOIN categorias c ON cb.catId=c.ID
                WHERE bc.userID='$userid'
                GROUP BY p.ID;";

                $query = $this->db->PDOLocal->query($sql);
                $result = $query->fetchAll(PDO::FETCH_OBJ);

                return $result;

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