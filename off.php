
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</html>
<div class="index_class_1">
  <div>
    <p class="index_class_2">
      <b id="titre_page1">
        Bokonzi         
      </b>
    </p>
    <p>
      Avec <b id="titre_page2">Bokonzi</b>, partagez et restez en
      contact avec votre entourage. <a id="listt_projet" href="blog.php">Voir tous les projet</a>
      <div id="cookie_info_id"></div>
    </p>
  </div>
  <div class="index_class_3">
    <div>
      <input type="text" class="color_btn_1" id="information_user_login" placeholder="Adresse e-mail ou numéro de tél.">
      <a id="div_cross" class="display_none" onclick="information_user_btn(this)" title="cansel">
        <img width="25" height="25" src="https://img.icons8.com/ios/25/delete-sign--v1.png" alt="delete-sign--v1"
          style="position: relative;right:0;" />
      </a>
      <input type="password" class="color_btn_1" id="information_user_password" placeholder="Mot de passe">

      <br />
      <input type="button" value="Connexion" title="Connexion" id="btn_connexion" class="index_class_4 cursor_pointer"
        onclick="information_user_btn(this)">
      <input type="button" value="Inscription" title="Inscription" id="btn_inscription"
        class="index_class_5 cursor_pointer" onclick="information_user_btn2(this)">
<a href="">Mot de passe oublié</a>

    </div>
    
  </div>
  
</div> 

</div>
<div id="login_user_information" style="margin-bottom:150px"></div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
 <script src="home_page.js"></script>
<link rel="stylesheet" href="home_page.css">
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
  


  function change_url(){
    var element = 0 ; 
var result  = "" ; 
const paragraph = window.location.href;
for(var x = 0 ; x<window.location.href.length ; x++ ) {

if(element>2){
  break ; 
}


if(window.location.href[x]=="/"){
element ++ ; 
}
else {
if(element>1){
 

  result = result+window.location.href[x] ;
}



}

}
return result ; 
  }


  document.getElementById("titre_page1").innerHTML = change_url() ; 
  document.getElementById("titre_page2").innerHTML = change_url() ; 

  document.getElementById("title").innerHTML=change_url() ;

 
 

</script>

<style>
     
  :root {
    --color_1: black;
    --black:black; 
    /*--color_1: #1877f2;*/
    --white: #ffffff;
  }

  .index_class_2 b {
    color: var(--black);
    font-size: 2.3em;
  }

  .display_none {
    display: none;
  }

  .index_class_1 {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    width: 80%;
    margin: auto;
    margin-top: 200px;

  }

  .index_class_1 div {
    padding: 20px;
  }

  .index_class_3 {
    position: relative;
    border-radius: 5px;
    background-color: white;
    box-shadow: 1px 4px 4px 3px rgba(0, 0, 0, 0.2);
  }

  .index_class_3 input {
    width: 100%;
    margin-bottom: 20px;
    padding: 7px;
    border-radius: 5px;
    border: 1px solid #dddfe2;

  }

  .index_class_4 {
    background-color: var(--black);
    color: var(--white);
  }

  .index_class_4 {
    padding: 5px;
    text-align: center;
    border-radius: 5px;
  }

  .index_class_5 {
    background-color: #42b72a;
    color: white;
  }

  .div_cross {}

  .div_cross {

    padding: 0;
    margin: 0;
    position: absolute;
    right: 0px;
    top: 0;
  }

  .div_cross:hover {
    background-color: grey;
    padding: 0;
    margin: 0;
    cursor: pointer;
  }
  .div_info{
    width: 50%; 
    margin: auto;
  }
  .none_1 { 
    display: none;
  }
  input,textarea{
 
    color:white;
    font-size:2em ;
  }
</style>
</body>
<?php 


//include("blog2.php") ; 
?>
 