<?php



session_start() ; 

require_once '../DatabaseHandler.php';
require_once '../config.php';
$liste_projet_admin_id_sha1 =   $_SESSION["liste_projet_admin_id_sha1"] ; 

 
 
$img ="https://rukminim2.flixcart.com/image/850/1000/xif0q/poster/g/h/y/medium-god-budhha-art-posters-gautam-buddha-hd-god-photo-original-imagp4btfeburhun.jpeg?q=90&crop=false";
 

 
 


$databaseHandler_0 = new DatabaseHandler($username, $password);
$databaseHandler_0->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$liste_projet_admin_id_sha1 ." ","liste_projet_admin_id_sha1");
$databaseHandler_1 = new DatabaseHandler($username, $password);
$databaseHandler_1->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name1");
$databaseHandler_2 = new DatabaseHandler($username, $password);
$databaseHandler_2->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name2");
$databaseHandler_3 = new DatabaseHandler($username, $password);
$databaseHandler_3->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name3");
$databaseHandler_4 = new DatabaseHandler($username, $password);
$databaseHandler_4->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name4");
$databaseHandler_5 = new DatabaseHandler($username, $password);
$databaseHandler_5->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name5");
$databaseHandler_6 = new DatabaseHandler($username, $password);
$databaseHandler_6->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_src3");





$databaseHandler_0_child = new DatabaseHandler($username, $password);
$databaseHandler_0_child->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_id_sha1 ." ","liste_projet_admin_id_sha1");
$databaseHandler_1_child = new DatabaseHandler($username, $password);
$databaseHandler_1_child->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name1");
$databaseHandler_2_child = new DatabaseHandler($username, $password);
$databaseHandler_2_child->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name2");
$databaseHandler_3_child = new DatabaseHandler($username, $password);
$databaseHandler_3_child->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name3");
$databaseHandler_4_child = new DatabaseHandler($username, $password);
$databaseHandler_4_child->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name4");
$databaseHandler_5_child = new DatabaseHandler($username, $password);
$databaseHandler_5_child->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_name5");
$databaseHandler_6_child = new DatabaseHandler($username, $password);
$databaseHandler_6_child->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`=".$liste_projet_admin_id_sha1." ","liste_projet_admin_src3");
 
 

 

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
<style>
      .div_img{
            width:100%;
            background-color:black ; 
            text-align: center;
           
      }
      .div_img img{
            width:50%;
      }
</style>



 
<?php 



 for($a = 0 ; $a <count($databaseHandler_0->tableList_info) ; $a ++) {
  ?>
  <div class="header">
  <h2> <input type="text" placeholder="Blog Name"    value="<?php echo $databaseHandler_1->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[$a]."_1" ?>"></h2>

</div>

<div class="row header_modif">
  <div class="leftcolumn">
     <div class="card">
     <h2> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_2->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[$a]."_2" ?>"></h2>

     <h5> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_3->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[$a]."_3" ?>"></h5>

     <div class="div_img cursor_pointer" onclick="change_img(this)" title="<?php echo $databaseHandler_0->tableList_info[$a] ?>">
        <img src="<?php echo "change_img/".$databaseHandler_6->tableList_info[$a] ?>" alt="" srcset="">
      </div>

      
 
 
 
      <p> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_4->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[$a]."_4" ?>"></p>
      <p> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_5->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0->tableList_info[$a]."_5" ?>"></p>

    </div>
  <?php
}




for($a = 0 ; $a <count($databaseHandler_0_child->tableList_info); $a ++) {
  ?>
  <a style="display: none;"> <input type="text" placeholder="Blog Name"    value="<?php echo $databaseHandler_1_child->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0_child->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0_child->tableList_info[$a]."_1" ?>"></a>

<div class="card">
<h2> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_2_child->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0_child->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0_child->tableList_info[$a]."_2" ?>"></h2>

<h5> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_3_child->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0_child->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0_child->tableList_info[$a]."_3" ?>"></h5>


<div class="div_img cursor_pointer" onclick="change_img(this)" title="<?php echo $databaseHandler_0_child->tableList_info[$a] ?>">
        <img src="<?php echo "change_img/".$databaseHandler_6_child->tableList_info[$a] ?>" alt="" srcset="">
      </div>
      <p> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_4_child->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0_child->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0_child->tableList_info[$a]."_4" ?>"></p>
      <p> <input type="text" placeholder="Blog Name"   value="<?php echo $databaseHandler_5_child->tableList_info[$a] ?>" title="<?php echo $databaseHandler_0_child->tableList_info[$a] ?>"  onkeyup="add_projet_1_key_up2(this)" id="<?php echo $databaseHandler_0_child->tableList_info[$a]."_5" ?>"></p>

    </div>
<?php 
}





?>

 
 
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

<img onclick="add_projet2()" width="100" height="100" src="https://img.icons8.com/ios/100/plus--v1.png" alt="plus--v1"class="cursor_pointer" />
ajouter un element 

<div class="footer">
  <h2>Footer</h2>
</div>
 

<style>
  input{
    width:100% ; 
    border:1px solid rgba(0,0,0,0) ; 
    border-bottom:5px dotted rgba(0,0,0,0.1) ; 

  }
  .header_modif{
    
    width:100%; 
    margin:auto ; 
  }
</style>
</body>
</html>
