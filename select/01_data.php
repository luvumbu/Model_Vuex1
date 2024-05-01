<?php
session_start() ; 
require_once '../DatabaseHandler.php';
require_once '../config.php';

$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 
$databaseHandler = new DatabaseHandler($username, $password);

$databaseHandler->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$information_user_id_sha1." ","liste_projet_admin_id");



 var_dump($databaseHandler->tableList_info);





echo $_SESSION["information_user_name_1"]  ;
echo "<br/>" ; 
echo $_SESSION["information_user_name_2"] ;  
echo "<br/>" ; 
echo $_SESSION["information_user_password"]  ;  
echo "<br/>" ; 
echo $_SESSION["information_user_img"] ;  
echo "<br/>" ; 
echo $_SESSION["information_user_born"]   ;  
echo "<br/>" ; 
echo $_SESSION["information_user_number_1"]   ;  
echo "<br/>" ; 
echo $_SESSION["information_user_id_sha1"]   ; 
echo "<br/>" ; 
echo $_SESSION["information_user_login"]   ; 
echo "<br/>" ; 

?>