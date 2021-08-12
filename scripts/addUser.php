<?php
include 'db-connection.php';
include 'admin.php';

$id = $_POST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$titulo= $_POST['titulo'];
$area= $_POST['area'];
$telefono= $_POST['telefono'];
$twitter= $_POST['twitter'];
$desc= $_POST['desc'];
$email= $_POST['email'];
$password= $_POST['password'];
$tipo= $_POST['tipo'];

$target_dir = "../imagenes/128/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    $status = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $status = "File is not an image.";
    $uploadOk = 0;
  }
}
  
//Check Image type
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $status = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if (file_exists($target_file)) {
  $uploadOk = 2;
}

if ($uploadOk == 0) {
    $status = "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }elseif($uploadOk == 2){
    $file = htmlspecialchars( basename( $_FILES["file"]["name"]));
  }else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {        
        $file = htmlspecialchars( basename( $_FILES["file"]["name"]));
    } else {
      $status = "Sorry, there was an error uploading your file.";
    }
  }

$admin = new ADMIN();

$status = $admin->AddUser($id, $nombre, $apellido, $titulo, $area, $telefono, $twitter, $desc, $email, $password, $tipo, $file);

echo $status;
?>