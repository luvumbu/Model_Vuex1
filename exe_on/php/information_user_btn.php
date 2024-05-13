<?php 
session_start();
header("Access-Control-Allow-Origin: *"); 

require_once '../../class/DatabaseHandler.php';
require_once '../../class/config.php';





$information_user_login = $_POST["information_user_login"] ; 
$information_user_password = $_POST["information_user_password"] ; 

$databaseHandler00 = new DatabaseHandler($username ,$password);

$databaseHandler00->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password` ="'.$information_user_password.'"',"information_user");

 
 





 if(count($databaseHandler00->tableList_info)!=0){

$databaseHandler00 = new DatabaseHandler($username ,$password);
$databaseHandler00->action_sql("INSERT INTO `information_user` (information_user_login,information_user_password) VALUES ('$information_user_login','$information_user_password')") ;
$_SESSION["information_user_login"] = $information_user_login ; 
$_SESSION["information_user_password"] = $information_user_password ; 

 }
 else {
$_SESSION["information_user_login"] = $information_user_login ; 
$_SESSION["information_user_password"] = $information_user_password ; 
 }
 

 
 
 
?>