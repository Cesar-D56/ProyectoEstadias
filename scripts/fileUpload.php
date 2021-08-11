<?php
include 'db-connection.php';

$id = $_POST['id'];

$target_dir = "../imagenes/128/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

//Check if image exist
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;

    $db = new Database();

        $file = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

        $db->DBconnect();

        $sql="UPDATE infouser 
        SET photo = '$file' 
        WHERE infouser.userID='$id'";
        $query = $db->PDOLocal->query($sql);

        $db->DBdisconnect();
  }
  
//Check Image type
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $db = new Database();

        $file = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

        $db->DBconnect();

        $sql="UPDATE infouser 
        SET photo = '$file' 
        WHERE infouser.userID='$id'";
        $query = $db->PDOLocal->query($sql);

        $db->DBdisconnect();

        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
?>