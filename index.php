<?php 

 session_start() ; 
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
  <title id="title">Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
 <body>
 
<script src="js.js"></script>

 <?php
require_once "DatabaseHandler.php" ;  
$filename = 'config.php'; // Chemin du fichier à vérifier
if (file_exists($filename)) {
      require_once 'config.php' ;    
        $databaseHandler = new DatabaseHandler($username, $password);
     if(!$databaseHandler->verif){
      unlink( $filename);
      ?>
    <meta http-equiv="refresh" content="1;URL=">
      <?php 
     }
     else {
      require_once 'home_page.php' ; 
     }

    } else {
      require_once "form.php"; 
    } 
?>

 
 </body>
 </html>
