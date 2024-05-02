<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


  <div class="container-fluid mt-3 text-center">

    <div class="row">
      <div id="4" class="col p-3">
        <a href="index.php">
          <img width="50" height="50" src="src/img/home--v1.png" alt="home--v1" />
        </a>
        <P>HOME</P>
      </div>
      <div onclick="action_row(this)" id="1" class="col p-3">
         
        <img width="50" class="cursor_pointer" height="50" src="src/img/new-job.png" alt="new-job"/>
      
        <P>MES PROJET</P>
      </div>
      <div onclick="action_row(this)" id="2" class="col p-3">
      <img class="cursor_pointer" width="50" height="50" src="src/img/plus--v1.png" alt="plus--v1" />
      <P>AJOUTER UN PROJET</P>

    </div>


      <div onclick="action_row(this)" id="3" class="col p-3">
        <img width="50" height="50" src="src/img/delete--v1.png" alt="delete--v1" />
        <P>VOIR PROJET EFFACE</P>
      </div>     
      <div onclick="action_row(this)" id="4" class="col p-3">
      <img width="50" height="50" src="src/img/settings--v1.png" alt="settings--v1" />
      <P>PARAMETRES</P>
    </div>
  
    <div id="4" class="col p-3">
        <a href="session_destroy.php">
          <img width="50" height="50" src="src/img/disconnected.png" alt="disconnected" />

        </a>
        <P>DECONNECTION</P>
      </div>
  </div>
  </div>








  <div id="01"></div>




  <script>
    function action_row(_this) {


      switch (_this.id) {

        case "1":
          var monAtribute = new Atribute("01");
          monAtribute.exe_atribute("class", "red");

          var ok = new Information("add/01.php"); // création de la classe 
          ok.add("login", "root"); // ajout de l'information pour lenvoi 
          ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
          console.log(ok.info()); // demande l'information dans le tableau
          ok.push(); // envoie l'information au code pkp 


          const myTimeout = setTimeout(myGreeting, 205);

          function myGreeting() {
           // Ajax("01", "select/01_data.php");


          }


          break;

        case "2":
      
 
 
 
 
            Ajax("01", "select/02_data.php");

 
          break;
        case "3":
          day = "Monday";
          console.log("3 ok");
          break;
        case "4":
          day = "Monday";
          console.log("4 ok");
          break;

      }
    }
  </script>


  <style>
    .red {
     
    }

    .cursor_pointer {
      cursor: pointer;
    }
    div p {
      padding:15px ; 
    }
  </style>
</body>

</html>

<?php 


//include('blog.php')  ; 

?>