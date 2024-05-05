<?php 
session_start() ; 
 
 if(isset($_SESSION["information_user_btn_info"])){
   echo  $_SESSION["information_user_btn_info"] ;
 }
 else {
    echo "Inscription reussi"; 
 }
?>