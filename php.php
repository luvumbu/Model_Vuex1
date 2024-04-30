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


        $databaseHandler = new DatabaseHandler($dbname, $password);
 

        $databaseHandler->set_column_names("information_user");

        $databaseHandler->set_column_names("information_user_id");
        $databaseHandler->set_column_names("information_user_id_sha1");
        $databaseHandler->set_column_names("information_user_ip");
        $databaseHandler->set_column_names("information_user_login");
        $databaseHandler->set_column_names("information_user_name_1");
 
        $databaseHandler->set_column_names("information_user_name_2");
        $databaseHandler->set_column_names("information_user_name_3");
        $databaseHandler->set_column_names("information_user_name_4");
        $databaseHandler->set_column_names("information_user_adresse_1");
        $databaseHandler->set_column_names("information_user_adresse_2");

        $databaseHandler->set_column_names("information_user_adresse_3");
        $databaseHandler->set_column_names("information_user_adresse_4");
        $databaseHandler->set_column_names("information_user_password");
        $databaseHandler->set_column_names("information_user_img");
        $databaseHandler->set_column_names("information_user_born");

        $databaseHandler->set_column_names("information_user_number_1");
        $databaseHandler->set_column_names("information_user_number_2");
        $databaseHandler->set_column_names("information_user_number_3");
        $databaseHandler->set_column_names("information_user_number_4");
        $databaseHandler->set_column_names("information_user_activate");
 /**/
        $databaseHandler->set_column_names("information_user_reg_date");
 





 



        $databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

        $databaseHandler->set_column_types("TEXT  NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL"); 
        $databaseHandler->set_column_types("TEXT NOT NULL");

        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");

        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
       
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");
        $databaseHandler->set_column_types("TEXT NOT NULL");

  /*
    */
        $databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $databaseHandler->add_table("Tables");







        $databaseHandler2 = new DatabaseHandler($dbname, $password);
    
        $databaseHandler2->set_column_names("liste_projet_admin_id");
        $databaseHandler2->set_column_names("liste_projet_admin_id_sha1");
        $databaseHandler2->set_column_names("liste_projet_admin_id_parent");
        $databaseHandler2->set_column_names("liste_projet_admin_id_sha1_general");
        $databaseHandler2->set_column_names("liste_projet_admin_ip");

        $databaseHandler2->set_column_names("liste_projet_admin_img");
        $databaseHandler2->set_column_names("liste_projet_admin_name1");
        $databaseHandler2->set_column_names("liste_projet_admin_name2");
        $databaseHandler2->set_column_names("liste_projet_admin_name1_ascii");
        $databaseHandler2->set_column_names("liste_projet_admin_name2_ascii");

        $databaseHandler2->set_column_names("liste_projet_admin_name3");
        $databaseHandler2->set_column_names("liste_projet_admin_name4");
        $databaseHandler2->set_column_names("liste_projet_admin_name_tittle1");
        $databaseHandler2->set_column_names("liste_projet_admin_name_tittle2");
        $databaseHandler2->set_column_names("liste_projet_admin_name_tittle1_ascii");

        $databaseHandler2->set_column_names("liste_projet_admin_name_tittle2_ascii");
        $databaseHandler2->set_column_names("liste_projet_admin_name_tittle3");
        $databaseHandler2->set_column_names("liste_projet_admin_name_tittle4");
        $databaseHandler2->set_column_names("liste_projet_admin_description_tittle1");
        $databaseHandler2->set_column_names("liste_projet_admin_description_tittle2");

        $databaseHandler2->set_column_names("liste_projet_admin_description_tittle1_ascii");
        $databaseHandler2->set_column_names("liste_projet_admin_description_tittle2_ascii");
        $databaseHandler2->set_column_names("liste_projet_admin_description_tittle3");
        $databaseHandler2->set_column_names("liste_projet_admin_description_tittle4");
        $databaseHandler2->set_column_names("liste_projet_admin_description1");

        $databaseHandler2->set_column_names("liste_projet_admin_description2");
        $databaseHandler2->set_column_names("liste_projet_admin_description3");
        $databaseHandler2->set_column_names("liste_projet_admin_description4");
        $databaseHandler2->set_column_names("liste_projet_admin_visibilite1");
        $databaseHandler2->set_column_names("liste_projet_admin_visibilite2");

        $databaseHandler2->set_column_names("liste_projet_admin_visibilite3");
        $databaseHandler2->set_column_names("liste_projet_admin_visibilite4");
        $databaseHandler2->set_column_names("liste_projet_admin_visite_page");
        $databaseHandler2->set_column_names("liste_projet_admin_type");
        $databaseHandler2->set_column_names("information_user_id_sha1");

        $databaseHandler2->set_column_names("information_user_id_sha2");
        $databaseHandler2->set_column_names("liste_projet_admin_new_file");
        $databaseHandler2->set_column_names("liste_projet_admin_remove");
        $databaseHandler2->set_column_names("liste_projet_admin_display");
        $databaseHandler2->set_column_names("liste_projet_admin_information_user_1");

        $databaseHandler2->set_column_names("liste_projet_admin_information_user_2");
        $databaseHandler2->set_column_names("liste_projet_admin_information_user_3");
        $databaseHandler2->set_column_names("liste_projet_admin_information_user_4");
        $databaseHandler2->set_column_names("liste_projet_date");
        $databaseHandler2->set_column_names("liste_projet_last_update");

        $databaseHandler2->set_column_names("liste_projet_reg_date");
 


      
        $databaseHandler2->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");

        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TEXT  NOT NULL");
        $databaseHandler2->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");

        $databaseHandler2->add_table("liste_projet_admin");












 





























    } else {
        echo "Une erreur s'est produite lors de la création du fichier.";
    }
}
