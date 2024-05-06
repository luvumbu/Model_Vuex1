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


<div class="container-fluid mt-3 text-center">

<div class="row">
  <div id="4" class="col p-3">
    <img width="50" class="cursor_pointer" height="50" src="src/img/external-blog-graphic-design-justicon-lineal-justicon.png" alt="external-blog-graphic-design-justicon-lineal-justicon"/>
  <a href="" class="red_on">17</a>
    <p>
  BLOG


</p>
  </div>
  <div id="4" class="col p-3">
   
    <img width="50" class="cursor_pointer" height="50" src="src/img/parse-from-clipboard.png" alt="parse-from-clipboard"/>
<a href="" class="red_on">0</a>
  <p>CV </p>
  </div>
  <div id="4" class="col p-3">
   
  <img width="50"   class="cursor_pointer" height="50" src="src/img/stack-of-photos--v1.png" alt="stack-of-photos--v1"/>       <a href="" class="red_on">0</a>
  <p>
    IMAGES

  </p>  
 </div>




<div id="4" class="col p-3">
<img width="50" height="50" class="cursor_pointer"  src="src/img/barbershop.png" alt="barbershop"/>
<a href="" class="red_on">0</a>

<p>
COIFFURE

</p>
</div>
</div>
</div>

<style>
  .red_on{
    background-color: red;
    padding:12px; 
    border-radius: 100%;
    color:white ; 
    font-size:8px ; 
    text-decoration: none;
  
 

  }
 
</style>

