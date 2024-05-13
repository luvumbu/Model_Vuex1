<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bokonzi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBKPobqhRJiwU_oWCatudWL5RM0UVfTWgfku9DwDKLutYO90g3M3SHqo4OVuGQWqqFSsU&usqp=CAU">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>  
<?php 
$path_DatabaseHandler ='class/DatabaseHandler.php' ;  
$form_log_dbd         ='view/off/form_log_dbd.php' ;
$form_log_dbd_user_on ='view/on/form_log_dbd_user_on.php';
$fichier_connexion    ='class/config.php' ;
$reload_page          ='<meta http-equiv="refresh" content="0;URL=">';
 
require_once $path_DatabaseHandler; 
require_once 'class/give_url.php'; 


if (file_exists($fichier_connexion)) {
require_once $fichier_connexion;   
$databaseHandler = new DatabaseHandler($username, $password); 
if(!$databaseHandler->verif) {   
    unlink($fichier_connexion) ;     
    echo $reload_page  ;
} 

if( $databaseHandler->existance_table("information_user")==0){
  // verification de l'existance de la table information_user
  // si la table n'existe pas on efface le fichier configuration et on recharge la page
  unlink($fichier_connexion) ;     
  echo $reload_page  ;
}
 require_once $form_log_dbd_user_on;   
} 

else {   
    require_once $form_log_dbd; 
} 

 

  //echo give_url() ;
  if(give_url()=="index.php"){
    ?>
        <script src="exe_off/js/const_all.js"></script>
        <script src="exe_off/js/class.js"></script>
    <?php
  }
  else {
  require_once 'exe_off/js/const_all.php' ; 
  require_once 'exe_off/js/class.php' ; 

  }

?>


<style>
  body{
    margin: 0;
    padding: 0;
  }
  .cursor_pointer:hover{
    cursor: pointer;
  }
</style>

<script></script>

</body>
</html>