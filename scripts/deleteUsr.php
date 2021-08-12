<?php 
include 'db-connection.php';
$db = new Database();

if(isset($_POST['id'])){
	$usrID = $_POST['id'];

    $sql="DELETE FROM infouser WHERE infouser.userID ='$userID';";
    $sql2="DELETE FROM "

}else{
    echo "xd";
}
?>