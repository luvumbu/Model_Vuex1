<?php
session_start();
header("Access-Control-Allow-Origin: *"); 
require_once '../DatabaseHandler.php';
require_once '../config.php';
 
 

 


 $liste_projet_admin_id_sha1 =$_SESSION["name2"]  ; 
 
$databaseHandler = new DatabaseHandler($username, $password);

$liste_projet_admin_visibility_src2 = str_replace(".","",$_SESSION["total"]);

$liste_projet_admin_visibility_src1 ="change_img/".$_SESSION["file_path"]  ;
$liste_projet_admin_visibility_src3 = $_SESSION["name"]  ;


 
$databaseHandler->action_sql('UPDATE  `liste_projet_admin` SET `liste_projet_admin_visibility_src1` = "'.$liste_projet_admin_visibility_src1.'" ,`liste_projet_admin_visibility_src2` = "'.$liste_projet_admin_visibility_src2.'" ,`liste_projet_admin_visibility_src3` = "'.$liste_projet_admin_visibility_src3.'"WHERE  `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'";') ; 
 

 
?>


