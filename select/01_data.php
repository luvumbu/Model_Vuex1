<?php

require_once '../DatabaseHandler.php';
require_once '../config.php';


$databaseHandler = new DatabaseHandler($username, $password);

$databaseHandler->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE 1","liste_projet_admin_id");



var_dump($databaseHandler->tableList_info);


?>