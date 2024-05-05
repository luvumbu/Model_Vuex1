<?php 
 



$information_user_id_sha1 =  $_SESSION["information_user_id_sha1"]  ;
 
 
$databaseHandler_0 = new DatabaseHandler($username, $password);
$databaseHandler_0->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_add_projet_value`="0"   AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" ',"liste_projet_admin_id_sha1_user");
 

$databaseHandler_1 = new DatabaseHandler($username, $password);
$databaseHandler_1->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_add_projet_value`="0"   AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" ',"liste_projet_admin_name1");
 

$databaseHandler_2 = new DatabaseHandler($username, $password);
$databaseHandler_2->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_add_projet_value`="0"   AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" ',"liste_projet_admin_name2");
 

$databaseHandler_3 = new DatabaseHandler($username, $password);
$databaseHandler_3->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_add_projet_value`="0"   AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" ',"liste_projet_admin_name3");
 

$databaseHandler_4 = new DatabaseHandler($username, $password);
$databaseHandler_4->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_add_projet_value`="0"   AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" ',"liste_projet_admin_name4");
 

$databaseHandler_5 = new DatabaseHandler($username, $password);
$databaseHandler_5->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_add_projet_value`="0"   AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" ',"liste_projet_admin_name5");
 

$databaseHandler_6 = new DatabaseHandler($username, $password);
$databaseHandler_6->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_add_projet_value`="0"   AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'" ',"liste_projet_admin_src3");
 

$img ="https://rukminim2.flixcart.com/image/850/1000/xif0q/poster/g/h/y/medium-god-budhha-art-posters-gautam-buddha-hd-god-photo-original-imagp4btfeburhun.jpeg?q=90&crop=false";
 


 
 
 
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

<div class="header header_btn">
  <h2><input type="text"  value="<?php echo $databaseHandler_1->tableList_info[0] ?>" title="<?php echo $databaseHandler_0->tableList_info[0] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[0]."_1" ?>"></h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><input type="text"  value="<?php echo $databaseHandler_2->tableList_info[0] ?>" title="<?php echo $databaseHandler_0->tableList_info[0] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[0]."_2" ?>"></h2>
      <h5><input type="text"  value="<?php echo $databaseHandler_3->tableList_info[0] ?>" title="<?php echo $databaseHandler_0->tableList_info[0] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[0]."_3" ?>"></h5>
 

      <?php
if($databaseHandler_6->tableList_info[0]!=""){
?>

<div class="off cursor_pointer div_img" onclick="change_img(this)" title="<?php echo $databaseHandler_0->tableList_info[0] ?>">
        <img src="<?php echo "change_img/".$databaseHandler_6->tableList_info[0] ?>" alt="" srcset="">
      </div>
<?php
}
else {
  ?>

<div class="off cursor_pointer div_img" onclick="change_img(this)" title="<?php echo $databaseHandler_0->tableList_info[0] ?>">
        <img src="<?php  echo $img ?>" alt="" srcset="">
      </div>
<?php
}

?>






      <p> <input type="text"  value="<?php echo $databaseHandler_4->tableList_info[0] ?>" title="<?php echo $databaseHandler_0->tableList_info[0] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[0]."_4" ?>"></p>
      <p>
        
      <textarea type="text"  value="<?php echo $databaseHandler_4->tableList_info[0] ?>" title="<?php echo $databaseHandler_0->tableList_info[0] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[0]."_5" ?>" style="height:200px">

      <?php echo $databaseHandler_5->tableList_info[0] ?>
      </textarea>
      
    </div>
 
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>


<style>
    h2 input,h5 input,p input,textarea{
        border:1px solid rgba(0,0,0,0) ; 
        width:100%;
        border-bottom:1px solid rgba(0,0,0,0.1);
    }
.fakeimg{
    background-image: url("https://techcafe.fr/wp-content/uploads/sites/4/2022/09/tech-cafe-287-panoramic.jpg");
}


.header_btn{
  margin-bottom:15px; 
}
.header_btn:hover{
  background-color: black;
  cursor: pointer;
  color:white ; 
}
.div_img img{
  width:100% ; 
  margin: auto;
}
</style>
