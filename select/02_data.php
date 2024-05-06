<?php
session_start() ; 

require_once '../DatabaseHandler.php';
require_once '../config.php';

$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 

 
/*
$databaseHandler = new DatabaseHandler($username, $password);

$databaseHandler->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$information_user_id_sha1." ","liste_projet_admin_id");



 var_dump($databaseHandler->tableList_info);





echo $_SESSION["information_user_name_1"]  ;
echo "<br/>" ; 
echo $_SESSION["information_user_name_2"] ;  
echo "<br/>" ; 
echo $_SESSION["information_user_password"]  ;  
echo "<br/>" ; 
echo $_SESSION["information_user_img"] ;  
echo "<br/>" ; 
echo $_SESSION["information_user_born"]   ;  
echo "<br/>" ; 
echo $_SESSION["information_user_number_1"]   ;  
echo "<br/>" ; 
echo $_SESSION["information_user_id_sha1"]   ; 
echo "<br/>" ; 
echo $_SESSION["information_user_login"]   ; 
echo "<br/>" ; 
*/
?>

 

<select id="add_projet" class="form-select form_style1"  aria-label="Default select example">
 
  <option value="1">Blog</option>
  <option value="2">CV</option>
  <option value="3">Images</option>
  <option value="3">Projet</option>

</select>

<div type="button" class="form_style2" onclick="add_projet()">VALIDER</div>

<style>
  .red_on{
    background-color: red;
    padding:12px; 
    border-radius: 100%;
    color:white ; 
    font-size:8px ; 
    text-decoration: none;
  
 

  }
  .form_style1,  .form_style2{
    width:50%;
    margin:auto ; 
    margin-top: 50px; 
  }
  .form_style2{
    background-color: #1d1e4d;
    color:white ; 
    padding: 5px; 
    text-align: center;
    border-radius: 7px;
  }
 
</style>


 