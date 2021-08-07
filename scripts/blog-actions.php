<?php
    class blog_action
    {
        private $db;
        public function __construct()
        {
            try{
                $this->db = new Database();
                $this->database = $this->db->PDOLocal;
                //$this->userID = $userID;
                $this->db->DBconnect();
            }
            catch(Exception $e){
                echo $e="No se pudo conectar con el servidor";
            }                
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

                if (isset($result['valor'])){
                    return $result;
                }else{
                    $sql="SELECT p.ID
                    FROM published p
                    WHERE p.archivo='$path'";

                    $query = $this->db->PDOLocal->query($sql);
                    $result = $query->fetch(PDO::FETCH_ASSOC);

                    $rating['valor'] = "not set";
                    $rating['userID'] = $usrID;
                    $rating['ID'] = $result['ID'];
                    return $rating;
                }
                
            }catch(Exception $e){
                echo $e = 'No se pudo ejecutar la accion'; 
            }
        }
        
        function SubmitRating($usrID, $value, $path)
        {
            try{
                $sql="SELECT bc.valor, bc.userID, p.ID
                FROM blog_calificado bc
                INNER JOIN published p ON p.ID=bc.blogID
                WHERE bc.userID='$usrID' AND p.archivo='$path'";

                $query = $this->db->PDOLocal->query($sql);
                $result = $query->fetch(PDO::FETCH_ASSOC);
                
                if (isset($result['valor'])){
                    $valor=$result['valor'];
                    $pId=$result['ID'];
                }else{
                    $valor="not set";
                }

                if($valor == $value){
                    $sql="DELETE FROM 'blog_calificado' WHERE blog_calificado.userID='$usrID' AND blog_calificado.blogID='$pId'";
                    $query = $this->db->PDOLocal->query($sql);

                    header("Location: ../blog/".$path.".php");

                    echo '<script>alert("Cambiado")</script>';

                }elseif($valor == "not set"){
                    $sql="INSERT INTO 'blog_calificado'(`userID`, `blogID`, `valor`) VALUES ('$usrID','$pId','$value')";
                    $query = $this->db->PDOLocal->query($sql);

                    header("Location: ../blog/".$path.".php");

                    echo '<script>alert("Agregado")</script>';
                }else{
                    echo '<script>alert("zorra")</script>';
                }

            }catch(Exception $e){
                echo $e = 'No se pudo ejecutar la accion';
            }
        }
    }
?>