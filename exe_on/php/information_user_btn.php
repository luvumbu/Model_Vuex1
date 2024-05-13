<?php 
session_start();
header("Access-Control-Allow-Origin: *"); 

require_once '../../class/DatabaseHandler.php';
require_once '../../class/config.php';

$time = time() ; 
$information_user_login = $_POST["information_user_login"] ; 
$information_user_password = $_POST["information_user_password"] ; 
$information_user_password_sha1 = sha1($information_user_password) ; 

$databaseHandler00 = new DatabaseHandler($username ,$password);
$databaseHandler00->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password` ="'.$information_user_password_sha1.'"',"information_user_id_sha1");

if(count($databaseHandler00->tableList_info)==0){

$databaseHandler01 = new DatabaseHandler($username ,$password);
$databaseHandler01->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" ',"information_user");

if(count($databaseHandler01->tableList_info)==0){

    $databaseHandler00 = new DatabaseHandler($username ,$password);
    $databaseHandler00->action_sql("INSERT INTO `information_user` (information_user_login,information_user_password,information_user_id_sha1) VALUES ('$information_user_login','$information_user_password_sha1','$time')") ;
    $_SESSION["information_user_login"] = $information_user_login ; 
    $_SESSION["information_user_password"] = $information_user_password ; 
    $_SESSION["information_user_id_sha1"] = $time;



    
    $databaseHandler00->action_sql("INSERT INTO `liste_projet_admin` (liste_projet_admin_information_user_login,liste_projet_admin_id_sha1,liste_projet_admin_id_sha1_user) VALUES ('$time','$time','$information_user_login')") ;

}
else {
    unset($_SESSION["information_user_id_sha1"]);
}

 }
 else {

$_SESSION["information_user_login"] = $information_user_login ; 
$_SESSION["information_user_password"] = $information_user_password ; 
$_SESSION["information_user_id_sha1"] = $databaseHandler00->tableList_info[0];
}
 
?>