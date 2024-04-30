<?php 
$_SESSION["newsession"] ="ok" ; 
 

if(isset($_SESSION["newsession"])){
  require_once "on.php" ; 

}
else {
  require_once "off.php" ; 
}
?>
