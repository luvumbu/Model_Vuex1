<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bokonzi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<?php
$path_DatabaseHandler ="class/DatabaseHandler.php" ;  
$form_log_dbd        ="view/off/form_log_dbd.php" ;
$form_log_dbd_user_on="view/on/form_log_dbd_user_on.php";
$fichier_connexion = "class/config.php" ;
require_once $path_DatabaseHandler; 
if (file_exists($fichier_connexion)) {
require_once $fichier_connexion;   
$databaseHandler = new DatabaseHandler($username, $password); 
if(!$databaseHandler->verif) {   
    unlink($fichier_connexion) ;     
   echo '<meta http-equiv="refresh" content="0;URL=">' ;
} 
if( $databaseHandler->existance_table("information_user")==0){
  unlink($fichier_connexion) ;     
  echo '<meta http-equiv="refresh" content="0;URL=">' ;
}
 require_once $form_log_dbd_user_on;   
} 
else {   
    require_once $form_log_dbd; 
} 
?>
<script src="exe_off/js/const_all.js"></script>
<script src="exe_off/js/class.js"></script>
</body>
</html>