<?php
include 'db-connection.php';

$id = $_POST['id'];

$target_dir = "../imagenes/128/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
  
//Check Image type
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if (file_exists($target_file)) {
  $uploadOk = 2;

  $db = new Database();

      $file = htmlspecialchars( basename( $_FILES["file"]["name"]));

      $db->DBconnect();

      $sql="UPDATE infouser 
      SET photo = '$file' 
      WHERE infouser.userID='$id'";
      $query = $db->PDOLocal->query($sql);

      $db->DBdisconnect();
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }elseif($uploadOk == 2){
    echo "Se ha actualizado la imagen";
  }else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $db = new Database();

        $file = htmlspecialchars( basename( $_FILES["file"]["name"]));

        $db->DBconnect();

        $sql="UPDATE infouser 
        SET photo = '$file' 
        WHERE infouser.userID='$id'";
        $query = $db->PDOLocal->query($sql);

        $db->DBdisconnect();
        
        echo "Se ha actualizado la imagen";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
?>