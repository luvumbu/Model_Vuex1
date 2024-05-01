<?php
session_start();
header("Access-Control-Allow-Origin: *"); 
require_once '../config.php';

require_once '../DatabaseHandler.php';
 $information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 
 

 $liste_projet_admin_add_projet_value =$_SESSION["liste_projet_admin_add_projet_value"] ; 
 

$liste_projet_admin_sha1_parent = $_SESSION["liste_projet_admin_sha1_parent"] ; 
$databaseHandler = new DatabaseHandler($username, $password);
 


$time= time() ; 
$databaseHandler->action_sql("INSERT INTO `liste_projet_admin` (liste_projet_admin_id_sha1,liste_projet_admin_add_projet_value,liste_projet_admin_sha1_parent) VALUES ('$time','$liste_projet_admin_add_projet_value','$liste_projet_admin_sha1_parent')") ; 
 
 


?>