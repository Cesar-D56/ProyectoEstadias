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
                    $titulo = $result['titulo'];
				}
            }
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

        function MenuUserHierarchy($tipoU)
        {
            switch($tipoU)
            {
                case 0:{
                    echo '';
                    break;
                }
                case 1:{
                    echo 
                    '<a href="#"><span class="navegacion-icono"><i class="fa fa-navicon"></i></span> Mi Cuenta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-user"></i></span> Mi Perfil</a></li>
                            <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-files-o"></i></span> Mis Analisis/Blogs</a></li>
                            <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-users"></i></span> Ver Usuarios</a></li>
                            <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-sign-out"></i></span> Cerrar Sesion</a></li> 
                        </ul>';
                    break;
                }
                case 2:{
                    echo 
                    '<a href="#"><span class="navegacion-icono"><i class="fa fa-navicon"></i></span> Mi Cuenta<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-user"></i></span> Mi Perfil</a></li>
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-files-o"></i></span> Mis Analisis/Blogs</a></li>
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-sign-out"></i></span> Cerrar Sesion</a></li> 
                    </ul>';
                    break;
                }
                case 3:{
                    echo 
                    '<a href="#"><span class="navegacion-icono"><i class="fa fa-navicon"></i></span> Mi Cuenta<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-user"></i></span> Mi Perfil</a></li>
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-sign-out"></i></span> Cerrar Sesion</a></li> 
                    </ul>';
                    break;
                }
                case 4:{
                    echo                     
                    '<a href="#"><span class="navegacion-icono"><i class="fa fa-navicon"></i></span> Mi Cuenta<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-user"></i></span> Mi Perfil</a></li>
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-files-o"></i></span> Mis Analisis/Blogs</a></li>
                        <li><a href="users/logout.php"><span class="navegacion-icono"><i class="fa fa-sign-out"></i></span> Cerrar Sesion</a></li> 
                    </ul>';
                    break;
                }
            }
        }
    }
?>