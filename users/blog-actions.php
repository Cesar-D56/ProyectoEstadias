<?php
    class blog_action
    {
        private $db;
        public function __construct()
        {
            $this->db = new Database();
            $this->database = $this->db->PDOLocal;
            //$this->userID = $userID;
            $this->db->DBconnect();
        }

        function CheckUsrRating($usrID, $path)
        {
            try{
                $sql="SELECT bc.valor, bc.userID, p.ID
                FROM blog_calificado bc
                INNER JOIN published p ON p.ID=bc.blogID
                WHERE bc.userID='$usrID' AND p.archivo='$path'";

            $query = $this->db->PDOLocal->query($sql);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            return $result;
            
            }catch(Exception $e){
                echo $e = 'No se puedo ejecutar la accion'; 
            }
        } 
    }
?>