<?php 
//echo $_SESSION["information_user_name_1"] ; 
require_once 'style1.php';


 


?>

<script>
    function add_projet(){
        var add_projet  = document.getElementById("add_projet"); 

  
 
    
  var ok = new Information("add/add_projet_value.php"); // création de la classe 
  ok.add("add_projet_value", add_projet.value); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

 

  const myTimeout = setTimeout(myGreeting, 250);

  const myTimeout2 = setTimeout(myGreeting2, 500);

function myGreeting() {
  

    Ajax("01", "select/add_projet_"+add_projet.value+".php");


 
    // code block
 
}

function myGreeting2() {
  
 
 


  //document.getElementById("add_projet_1_child").innerHTML="" ; 
 
  // code block

}

    }


    function add_projet_1_key_up(_this){
        
        const liste_projet_admin_name1 = document.getElementById(_this.title+'_1').value ; 
        const liste_projet_admin_name2 = document.getElementById(_this.title+'_2').value ; 
        const liste_projet_admin_name3 = document.getElementById(_this.title+'_3').value ; 
        const liste_projet_admin_name4 = document.getElementById(_this.title+'_4').value ; 
        const liste_projet_admin_name5 = document.getElementById(_this.title+'_5').value ; 
        
 


 



  var ok = new Information("update/add_projet_1_key_up.php"); // création de la classe 

  ok.add("liste_projet_admin_name1", liste_projet_admin_name1); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name2", liste_projet_admin_name2); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name3", liste_projet_admin_name3); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name4", liste_projet_admin_name4); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name5", liste_projet_admin_name5); // ajout de l'information pour lenvoi  

  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 





    }


    function add_projet_1_key_up2(_this){
 
     
        
        const liste_projet_admin_name1 = document.getElementById(_this.title+'_1').value ; 
        const liste_projet_admin_name2 = document.getElementById(_this.title+'_2').value ; 
        const liste_projet_admin_name3 = document.getElementById(_this.title+'_3').value ; 
        const liste_projet_admin_name4 = document.getElementById(_this.title+'_4').value ; 
        const liste_projet_admin_name5 = document.getElementById(_this.title+'_5').value ; 
 


 


  var ok = new Information("update/add_projet_1_key_up2.php"); // création de la classe 

  ok.add("liste_projet_admin_id_sha1", _this.title); // ajout de l'information pour lenvoi 

  ok.add("liste_projet_admin_name1", liste_projet_admin_name1); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name2", liste_projet_admin_name2); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name3", liste_projet_admin_name3); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name4", liste_projet_admin_name4); // ajout de l'information pour lenvoi  
  ok.add("liste_projet_admin_name5", liste_projet_admin_name5); // ajout de l'information pour lenvoi  

  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 



 

    }
    


    function add_projet_1_plus(_this) {

      _this.style.display="none" ; 
    Ajax("add_projet_1_child", "add/add_projet_1_child.php");



    const myTimeout = setTimeout(myGreeting, 320);

function myGreeting() {
  _this.style.display="block" ; 
  Ajax("add_projet_1_child", "select/add_projet_1_child.php");

}

    }

    function change_img(_this){
console.log(_this.title) ; 












//$_SESSION["add_picturex"]





var ok = new Information("change_img/name.php"); // création de la classe 

ok.add("liste_projet_admin_id_sha1", _this.title); // ajout de l'information pour lenvoi 

 
 

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 



window.location.href = "change_img/index.php";
    }



 





  const xx = setTimeout(x, 320);

function x() {
 
  Ajax("01", "select/add_projet_1.php");

}

</script>


 