<?php
session_start();
header("Access-Control-Allow-Origin: *"); 
require_once '../DatabaseHandler.php';
require_once '../config.php';
$information_user_id_sha1 = $_POST["liste_projet_admin_id_sha1"] ; 
 
$liste_projet_admin_name1 = $_POST["liste_projet_admin_name1"] ; 
$liste_projet_admin_name2 = $_POST["liste_projet_admin_name2"] ; 
$liste_projet_admin_name3 = $_POST["liste_projet_admin_name3"] ; 
$liste_projet_admin_name4 = $_POST["liste_projet_admin_name4"] ; 
$liste_projet_admin_name5 = $_POST["liste_projet_admin_name5"] ; 

 
 
$databaseHandler = new DatabaseHandler($username, $password);

 
$databaseHandler->action_sql('UPDATE  `liste_projet_admin` SET `liste_projet_admin_name1` = "'.$liste_projet_admin_name1.'" ,`liste_projet_admin_name2` = "'.$liste_projet_admin_name2.'",`liste_projet_admin_name3` = "'.$liste_projet_admin_name3.'" ,`liste_projet_admin_name4` = "'.$liste_projet_admin_name4.'" ,`liste_projet_admin_name5` = "'.$liste_projet_admin_name5.'"  WHERE  `liste_projet_admin_id_sha1` = "'.$information_user_id_sha1.'";') ; 

?>