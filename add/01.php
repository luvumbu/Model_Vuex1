<?php
session_start();
header("Access-Control-Allow-Origin: *"); 
require_once '../DatabaseHandler.php';
require_once '../config.php';


$databaseHandler = new DatabaseHandler($username, $password);
$databaseHandler->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE 1","liste_projet_admin_id");
$databaseHandler->action_sql("INSERT INTO  `liste_projet_admin` (`liste_projet_admin_id`, `liste_projet_admin_id_sha1`, `liste_projet_admin_id_parent`, `liste_projet_admin_id_sha1_general`, `liste_projet_admin_ip`, `liste_projet_admin_img`, `liste_projet_admin_name1`, `liste_projet_admin_name2`, `liste_projet_admin_name1_ascii`, `liste_projet_admin_name2_ascii`, `liste_projet_admin_name3`, `liste_projet_admin_name4`, `liste_projet_admin_name_tittle1`, `liste_projet_admin_name_tittle2`, `liste_projet_admin_name_tittle1_ascii`, `liste_projet_admin_name_tittle2_ascii`, `liste_projet_admin_name_tittle3`, `liste_projet_admin_name_tittle4`, `liste_projet_admin_description_tittle1`, `liste_projet_admin_description_tittle2`, `liste_projet_admin_description_tittle1_ascii`, `liste_projet_admin_description_tittle2_ascii`, `liste_projet_admin_description_tittle3`, `liste_projet_admin_description_tittle4`, `liste_projet_admin_description1`, `liste_projet_admin_description2`, `liste_projet_admin_description3`, `liste_projet_admin_description4`, `liste_projet_admin_visibilite1`, `liste_projet_admin_visibilite2`, `liste_projet_admin_visibilite3`, `liste_projet_admin_visibilite4`, `liste_projet_admin_visite_page`, `liste_projet_admin_type`, `information_user_id_sha1`, `information_user_id_sha2`, `liste_projet_admin_new_file`, `liste_projet_admin_remove`, `liste_projet_admin_display`, `liste_projet_admin_information_user_1`, `liste_projet_admin_information_user_2`, `liste_projet_admin_information_user_3`, `liste_projet_admin_information_user_4`, `liste_projet_date`, `liste_projet_last_update`, `liste_projet_reg_date`) VALUES (NULL, 'cccc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', CURRENT_TIMESTAMP);") ; 
 


?>