<?php
session_start() ; 

require_once '../DatabaseHandler.php';
require_once '../config.php';

$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 

 
$_SESSION["liste_projet_admin_sha1_parent"] =$_SESSION["liste_projet_admin_id_sha1"];

 

 if(isset($_SESSION["name2"])){
 
  echo $_SESSION["name2"] ; 

$name2 = $_SESSION["name2"] ; 
$databaseHandler_ = new DatabaseHandler($username, $password);

$databaseHandler_->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$name2." ","liste_projet_admin_sha1_parent");


var_dump($databaseHandler_->tableList_info) ; 


 }
 else {
  echo "NOT" ; 
 }
 
$databaseHandler = new DatabaseHandler($username, $password);

$databaseHandler->getDataFromTable("SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`=".$information_user_id_sha1." ","liste_projet_admin_id");



 


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
<style>
    h2 input,h5 input,p input,textarea{
        border:1px solid rgba(0,0,0,0) ; 
        width:100%;
        border-bottom:7px solid rgba(0,0,0,0.1);
        
    }
.fakeimg{
    background-image: url("https://techcafe.fr/wp-content/uploads/sites/4/2022/09/tech-cafe-287-panoramic.jpg");
}


.header_btn{
  margin-bottom:15px; 
}
.header_btn:hover{
 
  cursor: pointer;
  color:white ; 
}
</style>
</head>
<body>

<div class="header">
  <h2> <input placeholder="Blog Name" type="text"  title="<?php echo $liste_projet_admin_add_projet_value ?>"  onkeyup="add_projet_1_key_up(this)" id="<?php echo $liste_projet_admin_add_projet_value."_1" ?>"></h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2> <input placeholder="TITLE HEADING" type="text"  title="<?php echo $liste_projet_admin_add_projet_value ?>"  onkeyup="add_projet_1_key_up(this)"    id="<?php echo $liste_projet_admin_add_projet_value."_2" ?>"></h2>
      <h5><input  placeholder="Title description, Dec 7, 2017" type="text"    title="<?php echo $liste_projet_admin_add_projet_value ?>"  onkeyup="add_projet_1_key_up(this)" id="<?php echo $liste_projet_admin_add_projet_value."_3" ?>"></h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p> <input placeholder="Some text.." type="text"    title="<?php echo $liste_projet_admin_add_projet_value ?>"  onkeyup="add_projet_1_key_up(this)" id="<?php echo $liste_projet_admin_add_projet_value."_4" ?>"></p>
      <p>      <textarea     style="height:200px"  title="<?php echo $liste_projet_admin_add_projet_value ?>"  onkeyup="add_projet_1_key_up(this)" id="<?php echo $liste_projet_admin_add_projet_value."_5" ?>">
      </textarea>  
    </div>

    <div class="card" id="add_projet_1_child">
      <h2>TITLE HEADING ok</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="div_img cursor_pointer" onclick="change_img(this)" title="<?php echo $databaseHandler->tableList_info[$a] ?>">
        <img src="<?php echo $img ?>" alt="" srcset="">
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div onclick="add_projet_1_plus(this)">
    <img width="50" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1" class="cursor_pointer" />
    add elment
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
      .div_img{
            width:100%;
            background-color:black ; 
            text-align: center;
           
      }
      .div_img img{
            width:80%;
      }
</style>