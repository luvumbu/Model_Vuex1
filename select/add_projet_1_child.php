<?php
session_start() ; 

require_once '../DatabaseHandler.php';
require_once '../config.php';

$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 

$liste_projet_admin_add_projet_value =$_SESSION["liste_projet_admin_add_projet_value"] ; 

 

 
$liste_projet_admin_sha1_parent = $_SESSION["liste_projet_admin_sha1_parent"] ; 

$databaseHandler = new DatabaseHandler($username, $password);

$databaseHandler->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_sha1_parent." ","liste_projet_admin_id_sha1");


$databaseHandler_1 = new DatabaseHandler($username, $password);

$databaseHandler_1->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_sha1_parent." ","liste_projet_admin_name1");


$databaseHandler_2 = new DatabaseHandler($username, $password);

$databaseHandler_2->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_sha1_parent." ","liste_projet_admin_name2");


$databaseHandler_3 = new DatabaseHandler($username, $password);

$databaseHandler_3->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_sha1_parent." ","liste_projet_admin_name3");


$databaseHandler_4 = new DatabaseHandler($username, $password);

$databaseHandler_4->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_sha1_parent." ","liste_projet_admin_name4");


$databaseHandler_5 = new DatabaseHandler($username, $password);

$databaseHandler_5->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_sha1_parent." ","liste_projet_admin_name5");



 

 



 


 for($a = 0 ; $a <count($databaseHandler->tableList_info) ; $a ++) {
      ?>

<div class="header">
  <h2> <input type="text"  value="<?php echo $databaseHandler_1->tableList_info[$a] ?>" title="<?php echo $databaseHandler->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler->tableList_info[$a]."_1" ?>"></h2>
</div>

<h2><input type="text"  value="<?php echo $databaseHandler_2->tableList_info[$a] ?>" title="<?php echo $databaseHandler->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler->tableList_info[$a]."_2" ?>"></h2>
      <h5><input type="text"  value="<?php echo $databaseHandler_3->tableList_info[$a] ?>" title="<?php echo $databaseHandler->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler->tableList_info[$a]."_3" ?>"></h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p><input type="text"  value="<?php echo $databaseHandler_4->tableList_info[$a] ?>" title="<?php echo $databaseHandler->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler->tableList_info[$a]."_4" ?>"></p>
      <p><input type="text"  value="<?php echo $databaseHandler_5->tableList_info[$a] ?>" title="<?php echo $databaseHandler->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler->tableList_info[$a]."_5" ?>">

      <?php
 }
/*


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
 





<!---------------------------------------------------- 
<h2>TITLE HEADING ok</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>



      <h2>TITLE HEADING ok</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>



      <h2>TITLE HEADING ok</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>



      <h2>TITLE HEADING ok</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>-->