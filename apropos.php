<?php 

$information_user_id_sha1 =  $_SESSION["information_user_id_sha1"]  ;
 
 
$mes_projet_0 = new DatabaseHandler($username, $password);
$mes_projet_0->getDataFromTable('SELECT * FROM `information_user` WHERE      `information_user_id_sha1` ="'.$information_user_id_sha1.'" ',"information_user_id_sha1");

$mes_projet_1 = new DatabaseHandler($username, $password);
$mes_projet_1->getDataFromTable('SELECT * FROM `information_user` WHERE      `information_user_id_sha1` ="'.$information_user_id_sha1.'" ',"information_user_name_1");

$mes_projet_2 = new DatabaseHandler($username, $password);
$mes_projet_2->getDataFromTable('SELECT * FROM `information_user` WHERE      `information_user_id_sha1` ="'.$information_user_id_sha1.'" ',"information_user_img");

$mes_projet_3 = new DatabaseHandler($username, $password);
$mes_projet_3->getDataFromTable('SELECT * FROM `information_user` WHERE      `information_user_id_sha1` ="'.$information_user_id_sha1.'" ',"information_user_name_2");
 
 
 
 

 

$information_user_name_1 =  $mes_projet_1->tableList_info[0] ; 
$information_user_img =  $mes_projet_2->tableList_info[0] ; 
$information_user_name_2 =  $mes_projet_3->tableList_info[0] ; 


?>

<div class="rightcolumn">
    <div class="card">
      <h2><input type="text" value="<?php echo $information_user_name_1?>"></h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <textarea ><?php echo $information_user_name_2 ?></textarea>
    
    </div>