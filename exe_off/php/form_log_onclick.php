<?php
session_start();
header("Access-Control-Allow-Origin: *"); 

 
 
require_once '../../class/DatabaseHandler.php';
 









$information_user_login =  $_POST["information_user_login"];
$information_user_password = $_POST["information_user_password"];
$information_user_password_sha1=sha1($_POST["information_user_password"]); 

$fichier_connexion = "../../class/config.php" ;
if (file_exists($fichier_connexion)) {
}
else { 
$username=  $_POST["information_user_login"]; 
$password=  $_POST["information_user_password"]; ; 
$dbname =   $_POST["information_user_login"];
include("add_table.php");
function creerFichier($nomFichier, $contenu) {
    // Écriture du contenu dans le fichier
    $resultat = file_put_contents($nomFichier, $contenu);

    if ($resultat !== false) {
        return true; // Le fichier a été créé avec succès
    } else {
        return false; // Une erreur s'est produite lors de la création du fichier
    }
} 
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
$password_sha1 = sha1($password) ; 
$time = time() ; 
$databaseHandler00 = new DatabaseHandler($username ,$password);


$databaseHandler00->action_sql("INSERT INTO `information_user` (information_user_id_sha1,information_user_login,information_user_password) VALUES ('$time','$username','$password_sha1')") ;

} 
 
?>