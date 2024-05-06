<?php

session_start();
header("Access-Control-Allow-Origin: *"); 


echo "test ok " ; 
 
$information_user_login =  $_POST["information_user_login"];
$information_user_password = $_POST["information_user_password"];
$information_user_password_sha1=sha1($_POST["information_user_password"]);
 
require_once '../../class/DatabaseHandler.php';
 

$fichier_connexion = "../../class/config.php" ;


if (file_exists($fichier_connexion)) {
  

}
else {
 
$username=  $_POST["information_user_login"]; 
$password=  $_POST["information_user_password"]; ; 
$username =$_POST["information_user_login"];

 $databaseHandler = new DatabaseHandler($information_user_login,$information_user_password); 
 
   
$databaseHandler->set_column_names("id_x");
$databaseHandler->set_column_names("nom");
$databaseHandler->set_column_names("prenom");
$databaseHandler->set_column_names("email");
$databaseHandler->set_column_names("date_inscription");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("VARCHAR(30) NOT NULL");
$databaseHandler->set_column_types("VARCHAR(30) NOT NULL");
$databaseHandler->set_column_types("VARCHAR(50)");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("r8x");




function creerFichier($nomFichier, $contenu) {
    // Écriture du contenu dans le fichier
    $resultat = file_put_contents($nomFichier, $contenu);

    if ($resultat !== false) {
        return true; // Le fichier a été créé avec succès
    } else {
        return false; // Une erreur s'est produite lors de la création du fichier
    }
}

 
$content = "Contenu du fichier."; // Contenu à écrire dans le fichier








$filename = '../../class/config.php'; // Nom du fichier à créer
$content = '<?php' . PHP_EOL;
$content .= '$servername = \'localhost\'; // Nom du serveur' . PHP_EOL;
$content .= '$username = \'' . $username . '\'; // Nom d\'utilisateur de la base de données' . PHP_EOL;
$content .= '$password = \'' . $password . '\'; // Mot de passe de la base de données' . PHP_EOL;
$content .= '$dbname = \'' . $username . '\'; // Nom de la base de données' . PHP_EOL;
$content .= '?>';






if (creerFichier($filename, $content)) {
    echo "Le fichier $filename a été créé avec succès.";
} else {
    echo "Une erreur s'est produite lors de la création du fichier $filename.";
}
 
}
/*

$databaseHandler->getDataFromTable("SELECT * FROM `information_user` WHERE 1 LIMIT 1","information_user_login");

var_dump($databaseHandler->tableList_info);
 */
 
?>