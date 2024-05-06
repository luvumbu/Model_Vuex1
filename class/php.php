<?php
session_start();
header("Access-Control-Allow-Origin: *");

require_once "DatabaseHandler.php";
$dbname = $_POST["dbname"];
$password =  $_POST["password"];
$username =  $_POST["username"];



$filename = 'config.php'; // Nom du fichier à créer
$content = '<?php' . PHP_EOL;
$content .= '$servername = \'localhost\'; // Nom du serveur' . PHP_EOL;
$content .= '$username = \'' . $username . '\'; // Nom d\'utilisateur de la base de données' . PHP_EOL;
$content .= '$password = \'' . $password . '\'; // Mot de passe de la base de données' . PHP_EOL;
$content .= '$dbname = \'' . $username . '\'; // Nom de la base de données' . PHP_EOL;
$content .= '?>';



$databaseHandler = new DatabaseHandler($dbname, $password);
if ($databaseHandler->existe_table($username)) {
    // Écriture du contenu dans le fichier
    $result = file_put_contents($filename, $content);

    if ($result !== false) {


require_once 'config.php' ; 



    } else {
        echo "Une erreur s'est produite lors de la création du fichier.";
    }
}
