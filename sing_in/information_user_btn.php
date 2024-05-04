<?php

session_start();
header("Access-Control-Allow-Origin: *"); 
$information_user_login =  $_POST["information_user_login"];
$information_user_password = sha1($_POST["information_user_password"]);
$_SESSION["information_user_btn_info"] = "" ; 
require_once '../DatabaseHandler.php';
require_once '../config.php';
$databaseHandler = new DatabaseHandler($username, $password);
$databaseHandler->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login` ="'.$information_user_login.'"',"information_user_id_sha1");
$databaseHandler2 = new DatabaseHandler($username, $password);
if(count($databaseHandler->tableList_info)!=0){

    $databaseHandler2->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_id_sha1");
    if(count($databaseHandler2->tableList_info)!=0){

        $_SESSION["information_user_btn_info"] = "OK" ; 
      


        $databaseHandler3 = new DatabaseHandler($username, $password);

        $databaseHandler3->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_name_1");
        $databaseHandler4 = new DatabaseHandler($username, $password);

        $databaseHandler4->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_name_2");
        $databaseHandler5 = new DatabaseHandler($username, $password);

        $databaseHandler5->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_password");
        $databaseHandler6 = new DatabaseHandler($username, $password);

        $databaseHandler6->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_img");
        $databaseHandler7 = new DatabaseHandler($username, $password);

        $databaseHandler7->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_born");
        $databaseHandler8 = new DatabaseHandler($username, $password);

        $databaseHandler8->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_number_1");
 
        $databaseHandler9 = new DatabaseHandler($username, $password); 
        $databaseHandler9->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_id_sha1");
        
        $databaseHandler10 = new DatabaseHandler($username, $password); 

        $databaseHandler10->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ' ,"information_user_login");

       
        $_SESSION["information_user_name_1"] = $databaseHandler3->tableList_info[0] ;  
        $_SESSION["information_user_name_2"] = $databaseHandler4->tableList_info[0] ;  
        $_SESSION["information_user_password"] = $databaseHandler5->tableList_info[0] ;  
        $_SESSION["information_user_img"] = $databaseHandler6->tableList_info[0] ;  
        $_SESSION["information_user_born"] = $databaseHandler7->tableList_info[0] ;  
        $_SESSION["information_user_number_1"] = $databaseHandler8->tableList_info[0] ;  
        $_SESSION["information_user_id_sha1"] = $databaseHandler9->tableList_info[0] ; 
        $_SESSION["information_user_login"] = $databaseHandler10->tableList_info[0] ; 

        $information_user_id_sha1_ = $databaseHandler9->tableList_info[0] ; 
        
        $databaseHandler_ = new DatabaseHandler($username, $password);
 
        $liste_projet_admin_add_projet_value = $_POST["add_projet_value"] ; 
        
        $time= time() ; 







        $databaseHandler00 = new DatabaseHandler($username, $password);
        $databaseHandler00->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$information_user_id_sha1_." ","liste_projet_admin_id");
        $count_ =  count($databaseHandler00->tableList_info[0]) ; 


if( $count_==0){
    $databaseHandler_->action_sql("INSERT INTO `liste_projet_admin` (liste_projet_admin_id_sha1,liste_projet_admin_id_sha1_user,liste_projet_admin_add_projet_value) VALUES ('$information_user_id_sha1_','$information_user_id_sha1_','$count_')") ;

}




        
 

    }
    else {

        $_SESSION["information_user_btn_info"] = "ERROR 2"; 
    }
 
   
}
else {

    
    echo "ERROR" ; 

    $_SESSION["information_user_btn_info"] = "ERROR 1 " ; 

    $time=time() ;

    $databaseHandler->action_sql("INSERT INTO  `information_user` (information_user_id_sha1,information_user_login,information_user_password) VALUES ('$time','$information_user_login','$information_user_password');") ; 
 

    
    $_SESSION["information_user_login"] = $information_user_login;  
    $_SESSION["information_user_password"] =$information_user_password ;  
    $_SESSION["information_user_id_sha1"] = $time ;  
    $information_user_id_sha1_ =  $time  ; 





   
    $databaseHandler_ = new DatabaseHandler($username, $password);
 
$databaseHandler_->action_sql("INSERT INTO `liste_projet_admin` (liste_projet_admin_id_sha1,liste_projet_admin_id_sha1_user,liste_projet_admin_add_projet_value) VALUES ('$information_user_id_sha1_','$information_user_id_sha1_','0')") ;

 
    


 
}
?>