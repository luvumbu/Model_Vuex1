<?php
session_start();
header("Access-Control-Allow-Origin: *"); 
require_once '../DatabaseHandler.php';
require_once '../config.php';
 
 

 


 $liste_projet_admin_id_sha1 =$_SESSION["liste_projet_admin_src1"] ; 
 
$databaseHandler = new DatabaseHandler($username, $password);

$liste_projet_admin_visibility_src2 = str_replace(".","",$_SESSION["liste_projet_admin_src2"]);

$liste_projet_admin_visibility_src1 ="change_img/".$_SESSION["liste_projet_admin_src3"]  ;
$liste_projet_admin_visibility_src3 = $_SESSION["liste_projet_admin_src4"];


 
$databaseHandler->action_sql('UPDATE  `liste_projet_admin` SET `liste_projet_admin_src1` = "'.$liste_projet_admin_visibility_src1.'" ,`liste_projet_admin_src2` = "'.$liste_projet_admin_visibility_src2.'" ,`liste_projet_admin_src3` = "'.$liste_projet_admin_visibility_src3.'"WHERE  `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'";') ; 
 


if($_SESSION["change_img_numer"]=="off cursor_pointer div_img"){
    unset($_SESSION["liste_projet_admin_src1"]);
}
 
?>




<meta http-equiv="refresh" content="0;URL=../index.php">