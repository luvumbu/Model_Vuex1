<?php 
//echo $_SESSION["information_user_name_1"] ; 
require_once 'style1.php';
//require_once 'blog.php';



 


?>

<script>
    function add_projet(){

       
        var add_projet  = document.getElementById("add_projet"); 

  
 
    
  var ok = new Information("add/add_projet_value.php"); // création de la classe 
  ok.add("add_projet_value", add_projet.value); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

 

  const myTimeout = setTimeout(myGreeting, 250);

 

function myGreeting() {
    Ajax("01", "select/add_projet_"+add_projet.value+".php"); 
}



    }

    function add_projet2(){
 
      
      var ok = new Information("add/add_projet_value2.php"); // création de la classe 
 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

 
const myTimeout2 = setTimeout(myGreeting2, 100);
 

 

function myGreeting2() {
          Ajax("01", "select/add_projet_1.php");
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

 
//$_SESSION["add_picturex"]
var ok = new Information("change_img/name.php"); // création de la classe 
ok.add("liste_projet_admin_src1", _this.title); // ajout de l'information pour lenvoi 

ok.add("change_img_numer", _this.className); // ajout de l'information pour lenvoi 

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
window.location.href = "change_img/index.php";
 }




 

function terminer(){

  Ajax("add_projet_1_child", "terminer.php");



  const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  location.reload();
}
}
 



 

function fakeimg_mes_projet(_this){



  var ok = new Information("info/fakeimg_mes_projet.php"); // création de la classe 
ok.add("liste_projet_admin_id_sha1", _this.title); // ajout de l'information pour lenvoi 

 

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 



const myTimeout = setTimeout(myGreeting, 50);

function myGreeting() {
  location.reload(); 
}
}




</script>
<?php 

 
 
if(isset($_SESSION["liste_projet_admin_id_sha1"])){
  ?>
<script>
    const xx = setTimeout(x, 320);

function x() {
 
  Ajax("01", "select/add_projet_1.php");

}
</script>

<?php 
}
else{
  
  require_once "blog.php" ; 
}
 


  ?>


 
<style>
    h2 input,h5 input,p input,textarea{
        border:1px solid rgba(0,0,0,0) ; 
        width:100%;
        border-bottom:1px solid rgba(0,0,0,0.1);
    }
.fakeimg{
    background-image: url("https://techcafe.fr/wp-content/uploads/sites/4/2022/09/tech-cafe-287-panoramic.jpg");
    color:white;
  cursor: pointer;

    text-align: center;
    padding-top:90px;
    padding-bottom: 90px;
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
.grande_img img{
  width: 100%;
  margin-bottom: 25px;
  margin-top: 25px;
}

.grande_img {
  border-bottom:1px solid rgba(0,50,0,0.5) ;
  margin-top:20px;
  margin-bottom:20px;
}
.grande_img h5 {
  margin-top:60px;
  margin-bottom:60px;
}
</style>
