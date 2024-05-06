<?php 

$information_user_id_sha1 =  $_SESSION["information_user_id_sha1"]  ;
 
 

$mes_projet_1 = new DatabaseHandler($username, $password);
$mes_projet_1->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" AND `liste_projet_admin_add_projet_value` !="0" ',"liste_projet_admin_name1");



$mes_projet_2 = new DatabaseHandler($username, $password);
$mes_projet_2->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" AND `liste_projet_admin_add_projet_value` !="0" ',"liste_projet_admin_id_sha1");

/*


$mes_projet_3 = new DatabaseHandler($username, $password);
$mes_projet_3->getDataFromTable('SELECT * FROM `information_user` WHERE      `information_user_id_sha1` ="'.$information_user_id_sha1.'" ',"information_user_name_2");
 
 
 
 */

 

 

?>

    <div class="card">
      <h3>Mes projet</h3>
  
<?php 


for($a = 0 ; $a <count($mes_projet_1->tableList_info) ; $a ++){
 
  ?>
 <div title="<?php echo $mes_projet_2->tableList_info[$a] ; ?>" class="fakeimg" onclick="fakeimg_mes_projet(this)">
  <?php echo $mes_projet_1->tableList_info[$a].'<br>' ?>
</div><br>
  <?php 
}
?>
 

    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div> 