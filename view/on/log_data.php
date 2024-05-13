<?php 


$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ;
$databaseHandler00 = new DatabaseHandler($username ,$password);



$databaseHandler00->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_id_sha1");
$databaseHandler00->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_name_1");
$databaseHandler00->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_name_2");
$databaseHandler00->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_img");
 


$array_information_user_id_sha1 = $databaseHandler00->tableList_info[0] ; 
$array_information_user_name_1 = $databaseHandler00->tableList_info[1] ; 
$array_information_user_name_2 = $databaseHandler00->tableList_info[2] ; 
$array_information_user_img = $databaseHandler00->tableList_info[3] ; 



var_dump($array_information_user_id_sha1) ; 


?>