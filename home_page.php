<?php 
//$_SESSION["newsession"] ="ok" ; 
 

if(isset( $_SESSION["information_user_id_sha1"])){
  require_once "on.php" ; 

}
else {
  require_once "off.php" ; 
}
?>
